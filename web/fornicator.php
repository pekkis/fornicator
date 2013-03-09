<?php

if (isset($_GET['apc'])) {
    apc_clear_cache();
    apc_clear_cache("user");
    echo "cleared apc cache...";
}

if (isset($_GET['stat'])) {
    clearstatcache();
    clearstatcache(true);
    echo "cleared realpath cache...";
}

if (isset($_GET['optimizer'])) {
    accelerator_reset();
    echo "cleared optimizer cache...";
}