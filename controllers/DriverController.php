<?php

require_once './models/Driver.php';

class DriverController {
    public function readDriver()
    {
        $driver = new Driver();
        $results = $driver->readDriver();
        require_once './views/readDriver.php';
    }

    public function createDriver()
    {
        $driver = new Driver();
        require_once './views/createDriver.php';

        if (isset($_POST['submit'])) {
            $prenom = $driver->setPrenom($_POST['prenom']);
            $nom = $driver->setNom($_POST['nom']);

           $driver->createDriver($prenom, $nom);
    }
    }


    public function modifyDriver()
    {

    }

    public function deleteDriver()
    {
        $driver = new Driver();

        if (isset($_GET['id'])) {
        $idConducteur = $_GET['id'];
        $driver->deleteDriver($idConducteur);

        $result = $driver->getId_conducteur();
    }
    }

    public function updateDriver()
    {
        $driver = new Driver();
        require_once './views/createDriver.php';

        if (isset($_POST['submit'])) {
            $prenom = $driver->setPrenom($_POST['prenom']);
            $nom = $driver->setNom($_POST['nom']);

           $driver->updateDriver($prenom, $nom);
    }
    }
}