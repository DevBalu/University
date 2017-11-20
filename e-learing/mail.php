<?php
if(isset($_POST['email'])) {

    $email_to = "cristina.haruta95.com";
    $email_subject = "Propuneri";
 //verificarea la erori
    function died($error) {
        echo "Ne pare foarte rău, însă au fost găsite erori la formularul pe care l-ați trimis. ";
        echo "Aceste erori apar mai jos.<br /><br />";
        echo $error."<br /><br />";
        echo "Reveniți și remediați aceste erori.<br /><br />";
        die();
    }


    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['varsta']) ||
        !isset($_POST['comments'])) {
        die('Ne pare rău, dar se pare că există o problemă cu formularul pe care l-ați trimis.');
    }

    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $varsta = $_POST['varsta']; // not required
    $comments = $_POST['comments']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Adresa de e-mail pe care ați introdus-o nu pare să fie validă.<br />';
  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Nume introdus nu pare să fie valabil.<br />';
  }

  if(!preg_match($string_exp,$last_name)) {
    $error_message .='Prenumele introdus nu pare să fie valabil.<br />';
  }

  if(strlen($comments) < 2) {
    $error_message .= 'Mesajul pe care le-ați introdus nu par a fi valide.<br />';
  }

  if(strlen($error_message) > 0) {
    die($error_message);
  }

    $email_message = "Detaliile formularului de mai jos.\n\n";


// creare subsolul emailului
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
header('Location: user.php');
?>
<?php
}
?>