<?php

namespace Ocricci\LaravelOutbox\Database;

class Reader extends DatabaseAbstract
{
    public static function read()
    {
        return (self::tableAccessor())->get()->first();
    }
}
