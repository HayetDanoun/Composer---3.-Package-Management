<?php

//ne marche pas si index est dans un fichier public
require 'vendor/autoload.php';
use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie->say();
echo $bessie;


$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie;

echo $output;


?>