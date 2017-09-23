<?php

require_once 'functions.php';

echo '<tr><td>Polski czasownik</td><td>Infinitiv</td>'.
	 '<td>Präteritum</td><td>Partizip II</td></tr>';

$verbsArray = getVerbsArray();
foreach ($verbsArray as $verb) {
	echo '<tr>';
	echo '<tr><td>'.$verb['polish'].'</td><td>'.$verb['infinitiv'].'</td><td>'.$verb['prateritum'].'</td><td>'.$verb['partizip'].'</td></tr>';
	echo '</tr>';
}

