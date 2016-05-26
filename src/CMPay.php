<?php

namespace KingsDevelopment\CMPay;


class CMPay
{
    /**
     * @var Singleton
     */
    private static $instance;

    public function __construct() {}

    public static function init()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
