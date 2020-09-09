<?php

class Driver
{
    private $id_conducteur;
    private $prenom;
    private $nom;
    private $modification;
    private $suppression;

    /**
     * Get the value of id_conducteur
     */ 
    public function getId_conducteur()
    {
        return $this->id_conducteur;
    }

   

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
       return $this->prenom = $prenom;

    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
       return $this->nom = $nom;

    }

    /**
     * Get the value of modification
     */ 
    public function getModification()
    {
        return $this->modification;
    }

    /**
     * Set the value of modification
     *
     * @return  self
     */ 
    public function setModification($modification)
    {
        return $this->modification = $modification;
    }

    /**
     * Get the value of suppression
     */ 
    public function getSuppression()
    {
        return $this->suppression;
    }

    /**
     * Set the value of suppression
     *
     * @return  self
     */ 
    public function setSuppression($suppression)
    {
        return $this->suppression = $suppression;

    }

    public function createDriver($prenom, $nom)
    {
        $bdd = Connection::getConnection();

        $sql = $bdd->prepare("INSERT INTO Drivers(prenom, nom) VALUES ('$prenom', '$nom')");

		
		if (!$sql->execute()){
			die("Oups, il y'a une erreur dans la requete");
        }
    }

    public function readDriver()
    {
        $bdd = Connection::getConnection();
    
            $sql = $bdd->prepare("SELECT * FROM drivers");
            
            $sql->execute();
    
            $results = $sql->fetchAll(PDO::FETCH_CLASS, 'driver');
            return $results;
    }

    public function updateDriver($prenom, $nom)
    {
        # code...
    }  

    public function deleteDriver($id_conducteur)
    {
        try {
        $bdd = Connection::getConnection();

        $sql = $bdd->exec("DELETE FROM drivers WHERE id_conducteur=$id_conducteur");
        echo "Supression réussie";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
    }  
}
