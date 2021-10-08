<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class TestFormFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'helpers';
    }
}
