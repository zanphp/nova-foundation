<?php

namespace Kdt\Iron\Nova\Foundation;

use ZanPHP\Contracts\ConnectionPool\Connection;
use ZanPHP\Exception\ZanException;
use ZanPHP\NovaClient\NovaClient;
use ZanPHP\NovaConnectionPool\Exception\NoFreeConnectionException;
use ZanPHP\NovaConnectionPool\NovaClientConnectionManager;
use ZanPHP\NovaFoundation\Foundation\Traits\InstanceManager;

abstract class TService
{

    use InstanceManager;

    abstract protected function specificationProvider();

    final public function getInputStructSpec($method, $args = [])
    {

    }

    final public function getOutputStructSpec($method)
    {

    }

    final public function getExceptionStructSpec($method)
    {

    }

    final protected function apiCall($method, $arguments)
    {

    }
    
    final public static function getNovaServiceName($specServiceName)
    {

    }

}