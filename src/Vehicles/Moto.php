<?php
namespace DesignPatterns\Vehicles;

use DesignPatterns\Vehicles\Vehicle;

class Moto implements Vehicle
{
    public function build(): string
    {
        return "moto has been build";
    }
}