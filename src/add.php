<?php

require 'functions.php';

if ($_POST) {
	$_POST = array_filter($_POST, function ($element) {
		return !empty($element);
	});

	if (count($_POST) === 4) {
		$polishVerb = $_POST['polish'];
		$infinitiv = $_POST['infinitiv'];
		$prateritum = $_POST['prateritum'];
		$partizip = $_POST['partizip'];
		
		if (saveNewVerb($polishVerb, $infinitiv, $prateritum, $partizip)) {
			echo 'Pomyślnie dodano nowy czasownik: '.$polishVerb;
		} else {
			echo 'Nie udało się dodać czasownika. Sprawdź uprawnienia do plików na serwerze.';
		}
	} else {
		echo 'Nie udało się dodać słówka. Wypełnij wszystkie pola formularza.';
	}
}
