<?php 
require_once('controllers/DriverController.php');
require_once('controllers/CarController.php');
require_once('views/header.html');

$driver = new DriverController();
$car = new CarController();

if (!isset($_GET['action'])) {
    require_once('views/home.html');
}

if (isset($_GET['action']) && $_GET['action'] === 'readCar') {
    $car->readCar();
} 

if (isset($_GET['action']) && $_GET['action'] === 'readDriver') {
    $driver->readDriver();
} 