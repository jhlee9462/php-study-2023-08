<?php

$phrase = "Giraffe Academy";
echo strtolower($phrase);
echo strtoupper($phrase);
echo strlen($phrase);
echo $phrase[0];
$phrase[0] = "F";

echo str_replace("Firaffe", "Panda", $phrase);

echo substr($phrase, 8);
echo substr($phrase, 0, 3);