<?php

namespace Fornicator\Adapter;

class ZendOptimizerPlusAdapter implements Adapter
{
    public function canFornicate()
    {
        return extension_loaded("ZendOptimizerPlus");
    }

    public function fornicate()
    {
        accelerator_reset();
    }
}
