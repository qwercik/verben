<?php

define('FILENAME', 'verbs.json');

function getVerbsArray(): array
{
	if (file_exists(FILENAME)) {
		$rawData = file_get_contents(FILENAME);
	} else {
		$rawData = "";
	}

	if (!$rawData) {
		return [];
	}

	return json_decode($rawData, true);
}

function saveNewVerbsArray(array $verbsArray)
{
	$rawData = json_encode($verbsArray);
	return file_put_contents(FILENAME, $rawData);
}

function saveNewVerb(string $polishVerb, string $infinitiv, string $prateritum, string $partizip): bool
{
	$verbsArray = getVerbsArray();
	$verbsArray[] = [
		'polish' => $polishVerb,
		'infinitiv' => $infinitiv,
		'prateritum' => $prateritum,
		'partizip' => $partizip
	];
	
	return saveNewVerbsArray($verbsArray);
}
