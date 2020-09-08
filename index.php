<?php
require_once('controllers/DriverController.php');
require_once('controllers/CarController.php');
require_once('views/header.html');

$driver = new DriverController();
$car = new CarController();

if (isset($_GET['action']) && $_GET['action'] === 'readDriver') {
    $driver->readDriver();
    $driver->createDriver();
}

if (isset($_GET['action']) && $_GET['action'] === 'readCar') {
    $car->readCar();
    $car->createCar();
}

if (isset($_GET['action']) && $_GET['action'] === 'deleteDriver') {
    $driver->deleteDriver();
}

