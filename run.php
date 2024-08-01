<?php

use DesignPatterns\Settings;
use DesignPatterns\Vehicles\VehicleFactory;
use DesignPatterns\Minigame\Engine;

include './vendor/autoload.php';


// $settings = Settings::getInstance();

// $settings->setWebsiteName('guilhermeMelo');

// echo $settings->getWebsiteName();
// echo PHP_EOL;

// $settings->setUrl('guilhermeMelo.com.br');

// echo $settings->getUrl();

// $vehicle = new VehicleFactory;

$play = new Engine();
$play->choose();
