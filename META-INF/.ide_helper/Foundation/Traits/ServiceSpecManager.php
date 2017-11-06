<?php

namespace Kdt\Iron\Nova\Foundation\Traits;

use Thrift\Type\TType;
use ZanPHP\NovaFoundation\NullResult\NovaEmptyListResult;
use ZanPHP\NovaFoundation\NullResult\NovaNullResult;

trait ServiceSpecManager
{
    protected $inputStructSpec = [];

    protected $outputStructSpec = [];

    protected $exceptionStructSpec = [];

    public function getInputStructSpec($method)
    {

    }

    public function getOutputStructSpec($method)
    {

    }


    public function getExceptionStructSpec($method, $withNullExceptions=false )
    {

    }

    protected function addNullResultException($specs)
    {

    }

    protected function getNullResultException()
    {

    }
}