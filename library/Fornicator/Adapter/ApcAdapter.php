<?php

namespace Fornicator\Adapter;

class ApcAdapter implements Adapter

{
    public function canFornicate()
    {
        return extension_loaded('apc');
    }

    public function fornicate()
    {
        apc_clear_cache();
        apc_clear_cache("user");
    }
}
