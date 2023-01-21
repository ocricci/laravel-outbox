<?php

namespace Ocricci\LaravelOutbox;

class Config
{
    public static function get(string $key, $default = null)
    {
        return config('outbox.' . $key, $default);
    }
}
