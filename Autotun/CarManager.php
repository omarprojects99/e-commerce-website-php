<?php 
class CarManager
{
    public $db;

    public function setDb(PDO $db)
    {
        $this->db = $db;
    }

    public function __construct($db)
    {
        $this->db = $db;
    }

    // public function add(Car $prd)
    // {
    //     $q = $this->db->prepare('INSERT INTO produits (code, intitule, prix) VALUES (:code, :intitule, :prix)');
    //     $q->bindValue(':code', $prd->code);
    //     $q->bindValue(':intitule', $prd->intitule);
    //     $q->bindValue(':prix', $prd->prix);
	// 	//$q->bindValue(':photo', $prd->photo);
    //     $R = $q->execute();
    //     echo $this->db->lastInsertId();
    //     if (!$R) {
    //         echo "Echec insertion";
    //     } else {
    //         echo "Insertion réussie";
    //     }
    // }

    public function get($model)
    {
        $q = $this->db->query('SELECT * FROM cars WHERE model LIKE '.$this->db->quote($model));
        if ($q->rowCount()) {
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            $cr = new Car($donnees);
            return $cr;
        }
        return null;
    }

    public function getCar()
    {
        $car = array();
        $q = $this->db->query('SELECT * FROM cars');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $cr = new Car($donnees);
            $car[] = $cr;
        }
        return $car;
    }
	// public function delete(Produit $prd)
    // {
    //     $q = $this->db->prepare('DELETE FROM produits  WHERE code = :code');
    //     $q->bindValue(':code', $prd->getCode()); // Utilisez la méthode getCode() pour obtenir le code du produit
    //     $q->execute();
        
    //     // Vérifiez si la suppression a réussi
    //     if ($q->rowCount() > 0) {
    //         echo "La suppression a été effectuée avec succès.";
    //     } else {
    //         echo "Échec de la suppression.";
    //     }
    // }
}
?>
