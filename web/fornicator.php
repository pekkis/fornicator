<?php

use Fornicator\Fornicator;

require_once __DIR__ . '/../vendor/autoload.php';

$fornicator = new Fornicator();
$fornicateds = $fornicator->fornicate();

echo "<html><head><title>Fornicator</title></head><body><h1>Fornicator</h1><ul>";

foreach ($fornicateds as $fornicated) {
    echo sprintf("<li>Ran fornicator of class '%s'</li>", $fornicated);
}

echo "</body></html>";
