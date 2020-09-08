<?php
require_once 'Connection.php';
class Car
{
    private $id_vehicule;
    private $marque;
    private $modele;
    private $couleur;
    private $immatriculation;

    /**
     * Get the value of id_vehicule
     */
    public function getId_vehicule()
    {
        return $this->id_vehicule;
    }


    /**
     * Get the value of marque
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */
    public function setMarque($marque)
    {
        return $this->marque = $marque;
    }

    /**
     * Get the value of modele
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */
    public function setModele($modele)
    {
        return $this->modele = $modele;
    }

    /**
     * Get the value of couleur
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */
    public function setCouleur($couleur)
    {
        return $this->couleur = $couleur;
    }

    /**
     * Get the value of immatriculation
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set the value of immatriculation
     *
     * @return  self
     */
    public function setImmatriculation($immatriculation)
    {
        return $this->immatriculation = $immatriculation;
    }

    // Connexion BD

    
    // CRUD

    public function createCar($marque, $modele, $couleur, $immatriculation)
    {
        # code...
    }

    public function readCar()
    {
            $bdd = Connection::getConnection();
    
            $sql = $bdd->prepare("SELECT * FROM cars");
            
            $sql->execute();
    
            $results = $sql->fetchAll(PDO::FETCH_CLASS, 'car');

            return $results;
        }

    public function updateCar($marque, $modele, $couleur, $immatriculation)
    {
        # code...
    }  

    public function deleteCar($id_vehicule)
    {
        # code...
    }  
}
