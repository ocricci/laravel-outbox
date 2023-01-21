<?php

namespace Ocricci\LaravelOutbox\Database;

class Writer extends DatabaseAbstract
{
    public static function write($message)
    {
        (self::tableAccessor())->insert([
            'message' => $message,
        ]);
    }

    public static function delete($message)
    {
        (self::tableAccessor())->where('id', $message->id)->delete();
    }
}
