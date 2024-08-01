<?php

namespace DesignPatterns;

class Config
{
    // Armazena a instância única da classe e é o acesso global
    private static ?self $instance = null;

    // Construtor privado para evitar criação externa
    private function __construct(
        private string $database = 'root',
        private string $password = 'password',
    
    ) 
    {
        $this->password = uniqid();
    }

    // Método estático para obter a instância única
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
