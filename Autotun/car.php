<?php

function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="autotun";

    try {
        $conn = new PDO("mysql:host=$servername;$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

include 'ClassCar.php';

if (isset($_GET['id'])){
    $car = getCarById($_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIX DU NEUF</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: white;">
    <header style="background-color: black;">
        <nav>
        <a href="index.php">
            <img src="img/omarLgo-removebg-preview.png" class="logo" alt="">
            <div class="menu">
                <a href="neuf.php" style="text-decoration: none;">PRIX DU NEUF</a>
                <a href="occasion.php" style="text-decoration: none;">OCCASION</a>
                <a href="signin.php" style="text-decoration: none;">Se connecter</a>
                <a href="#" style="text-decoration: none;">Vendre ma voiture</a>
            </div>
            <div class="social">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </nav>
    </header>
    
    <div class="container-fluid" style="background-color: #dddddd;">
        <div class="row">
        <div class="col-md-3 offset-md-1" style="border: black;">
                <!-- Formulaire de recherche -->
                <form action="occasion.php" method="POST" style="background-color: white;margin-left:120px;margin-top:20px;">
                    <div class="mb-3">
                        <label for="search" class="form-label">Marque</label>
                        <input type="text" class="form-control" id="search" name="search" placeholder="Entrer la marque">
                    </div>
                    <div class="mb-3">
                        <label for="search1" class="form-label">Modèle</label>
                        <input type="text" class="form-control" id="search1" name="search1" placeholder="Entrer le modèle">
                    </div>
                    <div class="mb-3">
                        <label for="search" class="form-label">Année</label>
                        <input type="text" class="form-control" id="search" name="search" placeholder="Entrer la marque">
                    </div>
                    <div class="mb-3">
                        <label for="search" class="form-label">Prix</label>
                        <input type="text" class="form-control" id="search" name="search" placeholder="Entrer la marque">
                    </div>
                    <div class="mb-3">
                        <label for="search" class="form-label">Type_chassis</label>
                        <input type="text" class="form-control" id="search" name="search" placeholder="Entrer la marque">
                    </div>
                    <div class="mb-3">
                        <label for="search" class="form-label">sieges</label>
                        <input type="text" class="form-control" id="search" name="search" placeholder="Entrer la marque">
                    </div>
                    <div class="mb-3">
                        <label for="search" class="form-label">portes</label>
                        <input type="text" class="form-control" id="search" name="search" placeholder="Entrer la marque">
                    </div>
                    <div class="mb-3">
                        <label for="search" class="form-label">kilometrage</label>
                        <input type="text" class="form-control" id="search" name="search" placeholder="Entrer la marque">
                    </div>

                    <button type="submit" class="btn btn-primary">Rechercher</button>
                </form>
            </div>
            
            <div class="card" style="width: 780px; margin-top: 20px;">
  <img   src="<?php echo $car['photo']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $car['prix'],' DT'    ?></h5>
    <p class="card-text"><?php echo $car['marque'],' ',$car['model']  ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
        </div>
    </div>
    <footer class="bg-dark text-center p-5 mt-4">
        <p class="text-white">Droit réservé</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
