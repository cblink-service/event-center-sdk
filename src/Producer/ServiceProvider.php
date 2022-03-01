<?php

namespace Cblink\Service\EventCenter\Producer;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{

    public function register(Container $pimple)
    {
        $pimple['producer'] = function ($pimple) {
            return new Client($pimple);
        };
    }
}