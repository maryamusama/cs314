<?php

class DatabaseConnection extends mysqli
{
    private static $instance;

    private function __construct()
    {
        parent::__construct('localhost', 'root', '', 'oose');
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }
}