<?php

namespace Imagify\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class Imagify extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'imagify';
    }
}
