<?php
	if (!empty($_POST)) {	 //Punem condiţie.In cazul cînd ferestra introducerii textului nu o sa fie goală(cu text), codul de mai jos o sa se execute
		$text = $_POST['text'];//Introducem variabila si atribuim  valoare .Prin metoda "Post" variabila noastră e valoare  formei.
		$search = $_POST['search'];
		$regex = "/(([A-Z][^\\.;])|(^))*($search)[^\\.;]*/i";	// regex (regular expression) -asta este macetul nostru,care face filtrare textului.
		$result = '';
		preg_match_all($regex, $text, $matches);	//Funcţia care returnează cantitatea şirurilor corespunzatoare

		if (!empty($matches)) {
			$result .= '<ol>';	//facem ca rezultatul să se afişeze frumos alineat.
			foreach ($matches[0] as $match) { 	//valoare $matches[0] din massiv se salveaza in variabila $matches
				$result .= '<li>' . preg_replace("/$search/", "<strong>$search</strong>", $match) . '</li>';
			}
			$result .= '</ol>';
		}
	}
?>