<?php

require_once './models/Driver.php';

class DriverController {
    public function createDriver()
    {
        $driver = new Driver();

        if (isset($_POST['submit'])) {
            $prenom = $driver->setPrenom($_POST['prenom']);
            $nom = $driver->setNom($_POST['nom']);

           $driver->createDriver($prenom, $nom);
    }
    }

    public function readDriver()
    {
        $driver = new Driver();
        $results = $driver->readDriver();
        require_once './views/readDriver.php';
    }

    public function modifyDriver()
    {

    }

    public function deleteDriver()
    {

    }
}