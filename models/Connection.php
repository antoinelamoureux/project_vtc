<?php
class Connection {
public static function getConnection() {
        try {
			$bdd = new PDO('mysql:host=localhost:3308;dbname=vtc', "admin", "admin");
		}
		catch ( PDOException $e){
			print "Erreur";
		}

		return $bdd;
    }

}