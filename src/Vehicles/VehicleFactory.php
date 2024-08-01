<?php declare(strict_types=1);

namespace DesignPatterns\Vehicles;

use DesignPatterns\Vehicles\Vehicle;

use DesignPatterns\Vehicles\Car;

use DesignPatterns\Vehicles\Moto;

class VehicleFactory
{
    public static function CreateVehicle($vehicle): Vehicle
    {
        if ($vehicle !== 'car' || $vehicle !== 'car') {
            throw new \Exception("unknown vehicle");
        }

        $vehicle = match ($vehicle) {
            "car" => new Car(),
            "moto" => new Moto(),
        };

        return $vehicle;
    }
}
