<?php

if (isset($_GET['stat'])) {
    clearstatcache();
    clearstatcache(true);
    echo "Cleared realpath cache...";
}

// APC fornicator
if (isset($_GET['apc'])) {

    if (extension_loaded('apc')) {
        apc_clear_cache();
        apc_clear_cache("user");
        echo "cleared apc cache...";
    }
}


if (isset($_GET['optimizer'])) {

    if (extension_loaded('ZendOpCache') || extension_loaded('Zend OPcache')) {
        opcache_reset();
        echo "cleared optimizer cache (ZendOpCache)...";
    }

    if (extension_loaded('ZendOptimizerPlus') || extension_loaded('Zend Optimizer+')) {
        accelerator_reset();
        echo "cleared optimizer cache (ZendOptimizerPlus)...";
    }
}
