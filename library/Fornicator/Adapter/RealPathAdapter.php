<?php

namespace Fornicator\Adapter;

class RealPathAdapter implements Adapter
{
    public function canFornicate()
    {
        return true;
    }

    public function fornicate()
    {
        clearstatcache();
        clearstatcache(true);
    }
}
