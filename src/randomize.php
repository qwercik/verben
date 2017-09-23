<?php

require_once 'src/functions.php';

$verbsArray = getVerbsArray();
$drawnVerb = $verbsArray[array_rand($verbsArray)];

$_SESSION['drawn-verb'] = $drawnVerb;
echo $drawnVerb['polish'];
