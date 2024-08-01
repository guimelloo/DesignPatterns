<?php
namespace DesignPatterns\Vehicles;

use DesignPatterns\Vehicles\Vehicle;

class Car implements Vehicle
{
    public function build(): string
    {
        return "car has been build";
    }
}