<?php
$phar = new Phar('fornicator.phar');

$phar->setStub($phar->createDefaultStub(__DIR__ . '/library/bootstrap.php'));

$diterator = new \RecursiveDirectoryIterator(__DIR__ . '/library');
$riterator = new \RecursiveIteratorIterator($diterator);

foreach ($riterator as $file) {

    if ($file->isFile() && preg_match("/php$/", $file)) {
        $phar->addFile($file);
    }

}

$diterator = new \RecursiveDirectoryIterator(__DIR__ . '/vendor');
$riterator = new \RecursiveIteratorIterator($diterator);

foreach ($riterator as $file) {

    if ($file->isFile() && preg_match("/php$/", $file)) {
        $phar->addFile($file);
    }

}


