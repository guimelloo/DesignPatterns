<?php

use DesignPatterns\Settings;

include './vendor/autoload.php';


$settings = Settings::getInstance();

$settings->setWebsiteName('guilhermeMelo');

echo $settings->getWebsiteName();
echo PHP_EOL;

$settings->setUrl('guilhermeMelo.com.br');

echo $settings->getUrl();