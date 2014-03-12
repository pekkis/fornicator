<?php

namespace Fornicator\Adapter;

class OpCacheAdapter implements Adapter
{
    public function canFornicate()
    {
        return extension_loaded("Zend OpCache");
    }

    public function fornicate()
    {
        opcache_reset();
    }
}
