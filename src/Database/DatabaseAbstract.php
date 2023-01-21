<?php

namespace Ocricci\LaravelOutbox\Database;

abstract class DatabaseAbstract
{
    public static function tableAccessor()
    {
       return \DB::table('outbox');
    }
}
