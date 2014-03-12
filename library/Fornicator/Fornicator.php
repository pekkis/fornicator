<?php

namespace Fornicator;

use Fornicator\Adapter\Adapter;
use Fornicator\Adapter\ApcAdapter;
use Fornicator\Adapter\OpCacheAdapter;
use Fornicator\Adapter\RealPathAdapter;
use Fornicator\Adapter\XcacheAdapter;
use Fornicator\Adapter\ZendOptimizerPlusAdapter;

class Fornicator
{
    /**
     * @var Adapter[]
     */
    private $adapters = array();

    public function __construct()
    {
        $this
            ->addAdapter(new RealPathAdapter())
            ->addAdapter(new ApcAdapter())
            ->addAdapter(new OpCacheAdapter())
            ->addAdapter(new ZendOptimizerPlusAdapter())
            ->addAdapter(new XcacheAdapter())
            ;
    }

    /**
     * @param Adapter $adapter
     * @return Fornicator
     */
    public function addAdapter(Adapter $adapter)
    {
        $this->adapters[] = $adapter;
        return $this;
    }


    public function fornicate()
    {
        $fornicated = array();

        foreach ($this->adapters as $adapter) {
            if ($adapter->canFornicate()) {
                $adapter->fornicate();
                $fornicated[] = get_class($adapter);
            }
        }

        return $fornicated;
    }

}
