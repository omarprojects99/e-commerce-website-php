<?php
include 'inc/function.php';


if (!empty($_POST)) {
    
    
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendre une voiture</title>
  <style>
    body {
      background-image: url(https://img.freepik.com/free-vector/realistic-car-headlights-ad-composition-headlights-with-green-purple-illumination_1284-56577.jpg); 
      background-size: cover;
      font-family: Arial, sans-serif;
      color: white;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      max-width: 400px;
      width: 100%;
    }
    h1 {
      text-align: center;
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"],
    select,
    input[type="file"],
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: none;
      border-radius: 5px;
      background-color: #333;
      color: white;
    }
    input[type="submit"] {
      background-color: #FF5733; /* Changer la couleur du bouton en rouge */
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #D14800; /* Changer la couleur au survol en rouge plus foncé */
    }
    input[type="file"] {
      cursor: pointer;
    }
    .description {
      color: red;
    }
  </style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.css" integrity="sha512-n1PBkhxQLVIma0hnm731gu/40gByOeBjlm5Z/PgwNxhJnyW1wYG8v7gPJDT6jpk0cMHfL8vUGUVjz3t4gXyZYQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<h1>Vendre votre voiture</h1>

<form action="vendre.php" method="post" >


  <input type="text" id="mqrque" name="marque" placeholder="marque" required>
  
  <input type="text" id="model" name="model" placeholder="model" required>
 
  <input type="text" id="prix" name="prix" placeholder="Prix en euros" required>
  
  
  <input type="text" id="annee" name="annee" placeholder="Année de fabrication" required>
  
  
  <input type="text" id="kilometrage" name="kilometrage" placeholder="Kilométrage de la voiture" required>
  
  
  <select id="carburant" name="carburant" required>
    <option value="" disabled selected>Sélectionnez le type de carburant</option>
    <option value="essence">Essence</option>
    <option value="diesel">Diesel</option>
 
    
  </select>
  
  <label for="boite_vitesse">Boîte de vitesse:</label>
  <select id="boite_vitesse" name="boite_vitesse" required>
    <option value="" disabled selected>Sélectionnez le type de boîte de vitesse</option>
    <option value="manuel">Manuelle</option>
    <option value="automatique">Automatique</option>
    

  </select>
  
  
  <input type="submit" value="Vendre">
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.all.js" integrity="sha512-mDHahYvyhRtp6zBGslYxaLlAiINPDDEoHDD7nDsHoLtua4To71lDTHjDL1bCoAE/Wq/I+7ONeFMpgr62i5yUzw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>
</html>
