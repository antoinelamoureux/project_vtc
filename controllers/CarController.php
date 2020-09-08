<?php

require_once './models/Car.php';

class CarController {
    public function createCar()
    {
        $car = new Car();

        if (isset($_POST['submit'])) {
            $marque = $car->setMarque($_POST['marque']);
            $modele = $car->setModele($_POST['modele']);
            $couleur = $car->setCouleur($_POST['couleur']);
            $immatriculation = $car->setImmatriculation($_POST['immatriculation']);
            
           $car->createCar($marque, $modele, $couleur, $immatriculation );
    }
    }

    public function readCar()
    {
        $car = new Car();
        $results = $car->readCar();
        require_once './views/readCar.php';
    }

    public function modifyCar()
    {

    }

    public function deleteCar()
    {

    }
}