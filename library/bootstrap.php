<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Fornicator\Fornicator;
use Fornicator\Command\FornicateCommand;
use Symfony\Component\Console\Helper\HelperSet;

$fornicator = new Fornicator('Fornicator', '0.1.0');
$helperSet = new HelperSet();
$fornicator->setHelperSet($helperSet);

$fornicator->add(new FornicateCommand());
$fornicator->run();
