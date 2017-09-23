<?php

require 'src/functions.php';

if ($_POST) {
	$verbsArray = getVerbsArray();
	$verbToRemove = $_POST['verb'];

	$element = array_search($verbToRemove, array_column($verbsArray, 'polish'));
	if ($element !== false) {
		unset($verbsArray[$element]);
		var_dump($verbsArray);
		if (saveNewVerbsArray($verbsArray)) {
			echo "Pomyślnie usunięto czasownik $verbToRemove z listy";
		} else {
			echo "Nie udało się usunąć czasownka $verbToRemove z listy. Sprawdź uprawnienia do plików na serwerze.";
		}
	} else {
		echo "Czasownik $verbToRemove nie istnieje!";
	}
}

