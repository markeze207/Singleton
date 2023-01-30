<?php

namespace Singleton;

class Singleton
{
    private static ?string $date = null;

    private static ?string $message = null;

    private static ?Singleton $instance = null;


    private function __construct() {}

    private function __clone() {}

    public function __sleep() {}

    public function __wakeup() {}

    public static function getInstance(): self // Singleton
    {
        if(!self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function setDate(string $string): void
    {
        self::$date = $string;
    }

    public static function getDate(): ?string
    {
        if(!self::$date)
        {
            return 'date null';
        }
        return self::$date;
    }

    public static function setMessage(string $string): void
    {
        self::$message = $string;
    }

    public static function getMessage(): string
    {
        if(!self::$message)
        {
            return 'message null';
        }
        return self::$message;
    }
}
