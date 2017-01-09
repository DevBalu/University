<?php
	session_start();
	$mes = $_POST['message'];
	$message = strtolower($mes);
	$chey = $_POST['key'];
	$oper = $_POST['operatie'];

	$alph = array(
	    0 => 'a',
	    1 => 'b',
	    2 => 'c',
	    3 => 'd',
	    4 => 'e',
	    5 => 'f',
	    6 => 'g',
	    7 => 'h',
	    8 => 'i',
	    9 => 'j',
	    10 => 'k',
	    11 => 'l',
	    12 => 'm',
	    13 => 'n',
	    14 => 'o',
	    15 => 'p',
	    16 => 'q',
	    17 => 'r',
	    18 => 's',
	    19 => 't',
	    20 => 'u',
	    21 => 'v',
	    22 => 'w',
	    23 => 'x',
	    24 => 'y',
	    25 => 'z'
	);
/*---------------------------*/
/*Crypt*/
/*---------------------------*/
	function crypting($mess, $k, $al){
		$crypt_result = '';
		for($i = 0; $i < strlen($mess); $i++){
			foreach($al as $key => $value) {
				if($mess[$i] == $value){
					$pos = $key + $k;
					$newpos = 26 - $pos;
					
					if($newpos > 0){
						$crypt_result .= $al[$pos];
					}else{
						$crypt_result .= $al[-$newpos];
					}
				}
			}
		}
		return $crypt_result;
	}
/*---------------------------*/
/*Decrypt*/
/*---------------------------*/
	function decrypting($mess, $k, $al){
		$decrypt_result = '';
		for($i = 0; $i < strlen($mess); $i++){
			foreach($al as $key => $value) {
				if($mess[$i] == $value){
					$pos = $key - $k;
					
					if($pos >= 0){
						$decrypt_result .= $al[$pos];
					}else{
						$newpos = 26 + $pos;
						$decrypt_result .= $al[$newpos];
					}
				}
			}
		}
		return $decrypt_result;
	}

	if(!empty($_POST['message']) && !empty($_POST['key']) && !empty($_POST['operatie'])) {
		if ($oper == "cryptare") {
			$_SESSION['result'] = crypting($message, $chey, $alph);
		}
		if ($oper == "decryptare") {
			$_SESSION['result'] = decrypting($message, $chey, $alph);
		}
	} else {
		$_SESSION['result'] = $_POST['message'];
	}
	header('Location: /crypt/index.php');


?>