<?php

namespace Ocricci\LaravelOutbox\Facades;

use Illuminate\Support\Facades\Facade;

class Outbox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'outbox';
    }
}
