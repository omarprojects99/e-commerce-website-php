<?php

class Car {
    private int $car_id;
    private string $marque;
    private string $model;
    private int $annee;
    public string $couleur;
    private float $prix;
    private string $photo;
    public int $user_id;
    public $created_at;
    public $type_chassis;
    public $sieges;
    public $portes;
    private $kilometrage;
    public $car_type;
    public $description;
    private string  $carburant;
    private string $boite_vitesse;
    
    public function __construct(array $donnees)
    {
        foreach ($donnees as $key => $value)
            $this->__set($key, $value);
    }

    public function getMarque() {
        return $this->marque;
    }
    public function getModel() {
        return $this->model;
    }
    public function getPrix() {
        return $this->prix;
    }
    public function getAnnee() {
        return $this->annee;
    }
    public function getPhoto() {
        return $this->photo;
    }
    public function getKilometrage() {
        return $this->kilometrage;
    }
    public function getCarburant() {
        return $this->carburant;
    }
    public function getBoite_vitesse() {
        return $this->boite_vitesse;
    }
    public function __GET($attr)
    {
        if (isset($attr))
            return $this->$attr;
        else
            echo "Erreur : attribut inexistant";
    }
    public function __set($attr, $value)
    {
        $tabAtt = get_class_vars(get_class($this));
        if (array_key_exists($attr, $tabAtt)) {
            $this->$attr = $value;
        } else
            echo "Erreur : attribut inexistant ";
    }


    
  
    
    public static function getNewCars(){
        $conn=dbCnx();
      $requette="SELECT * FROM cars WHERE car_type LIKE 'neuve'";
      $resultat=$conn->query($requette);
      $cars=$resultat->fetchAll();
       return $cars;
      }
     public static function getOldCars(){
        $conn=dbCnx();
      $requette="SELECT * FROM cars WHERE car_type LIKE 'occasion'";
      $resultat=$conn->query($requette);
      $cars=$resultat->fetchAll();
      return $cars;
      }

}

// function getOldCars(){
//     $conn=dbCnx();
//   $requette="SELECT * FROM cars WHERE car_type LIKE 'occasion'";
//   $resultat=$conn->query($requette);
//   $cars=$resultat->fetchAll();
//   return $cars;
//   }
//   function getNewCars(){
//     $conn=dbCnx();
//   $requette="SELECT * FROM cars WHERE car_type LIKE 'neuve'";
//   $resultat=$conn->query($requette);
//   $cars=$resultat->fetchAll();
//    return $cars;
//   }
  function searchCars($marka,$model){
    $conn=dbCnx();
      $requette = "SELECT * FROM cars WHERE marque LIKE '%$marka%' AND model LIKE '%$model%'";
      $resultat=$conn->query($requette);
      $cars=$resultat->fetchAll();
      return $cars;
  
  }
  function searchCarsMark($marka){
    $conn=dbCnx();
      $requette = "SELECT * FROM cars WHERE marque LIKE '%$marka%'";
      $resultat=$conn->query($requette);
      $cars=$resultat->fetchAll();
      return $cars;
  
  }
  function searchCarsModel($marka){
    $conn=dbCnx();
      $requette = "SELECT * FROM cars WHERE model LIKE '%$marka%'";
      $resultat=$conn->query($requette);
      $cars=$resultat->fetchAll();
      return $cars;
  
  }
  function getCarById($id){
    $conn=dbCnx();
    $requette="SELECT * FROM cars WHERE car_id =$id";
    $resultat=$conn->query($requette);
      $car=$resultat->fetch();
      return $car;
  }
  function dbCnx(){
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname="autotun";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
return $conn;

  }
  

?>
