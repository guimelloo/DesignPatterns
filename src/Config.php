<?php

namespace DesignPatterns;

class Config
{
    private static ?self $instance = null;

    private function __construct(
        private string $database = 'root',
        private string $password = 'password',
    
    ) {
        $this->password = uniqid();
    }

    public static function getInstance(): Config
    {
        if (isset(self::$instance)) {
            return self::$instance;
        }

        self::$instance = new self;

        return self::$instance;
    }

    public function setDatabase(string $database)
    {
        $this->database = $database;
    }

    public function getDatabase()
    {
        return $this->database;
    }

    public function getPassword()
    {
        return $this->password;
    }
}
