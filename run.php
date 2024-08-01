<?php

use DesignPatterns\Settings;
use DesignPatterns\Vehicles\VehicleFactory;
use DesignPatterns\Minigame\Engine;

include './vendor/autoload.php';

$play = new Engine();
$play->choose();
