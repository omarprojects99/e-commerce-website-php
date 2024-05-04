<?php

function connect(){
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
// function AjouterUtilisateur($user) {
//   $conn = connect();
//   $username = $user['nom'];
//   $email = $user['email'];
//   $password = $user['mp'];
  

//   // Prepare the SQL statement
//   $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
//   // Bind parameters
//   $stmt->bindParam(':username', $username);
//   $stmt->bindParam(':email', $email);
//   $stmt->bindParam(':password', $password);

//   // Execute the statement
//   if ($stmt->execute()) {
//       echo "User added successfully.";
//   } else {
//       echo "Error: " . $stmt->errorInfo()[2];
//   }
// }
 function connectUser($data){
  $conn=connect();
  $email=$data['email'];
  $password=$data['password'];
  $requette="SELECT * FROM users WHERE email='$email' AND password='$password' ";
  $resultat=$conn -> query($requette);
  $usr=$resultat->fetchAll();
  return $usr;
 }
 function CarExists($car_id) {
  $conn = connect();

  
  $stmt = $conn->prepare("SELECT COUNT(*) FROM cars WHERE car_id = :car_id");
  $stmt->bindParam(':car_id', $email);
  $stmt->execute();
  $count = $stmt->fetchColumn();
  return $count > 0;
}
 
  


?>