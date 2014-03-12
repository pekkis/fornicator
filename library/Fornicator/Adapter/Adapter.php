<?php

namespace Fornicator\Adapter;

interface Adapter
{
    /**
     * @return bool
     */
    public function canFornicate();

    public function fornicate();
}
