<?php

namespace Fornicator\Adapter;

class XcacheAdapter implements Adapter
{
    public function canFornicate()
    {
        if (!extension_loaded('XCache Cacher')) {
            return false;
        }

        if (ini_get('xcache.admin.enable_auth') == 1) {
            return false;
        }

        return true;
    }

    public function fornicate()
    {
        xcache_clear_cache(XC_TYPE_PHP);
        xcache_clear_cache(XC_TYPE_VAR);
    }
}
