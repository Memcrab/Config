<?php

declare(strict_types=1);

namespace Libs;

class Config
{
    private static $instance;
    private static $configuration;
    function __construct()
    {
    }

    public static function obj()
    {
        if (!(self::$instance instanceof \stdClass)) {
            self::$instance = (object) self::$configuration;
        }
        return self::$instance;
    }

    public static function loadConfiguration(array $configuration)
    {
        self::$configuration = $configuration;
    }
}
