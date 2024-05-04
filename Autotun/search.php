<?php

include 'ClassCar.php';
$cars = Car::getNewCars();
if(!empty($_POST['search'])&& !empty($_POST['search1'])){
    $cars=searchCars($_POST['search'],$_POST['search1']);
}else{
    
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <i class="fab fa-facebook-f"></i>
    <i class="fab fa-twitter"></i>
    <i class="fab fa-instagram"></i>
            </div>
        </nav>
    </header>
    <div class="container-fluid" style="background-color: #dddddd;">
        <div class="row">
        <div class="col-md-3 offset-md-1" style="border: black;">
                <!-- Formulaire de recherche -->
                <form action="neuf.php" method="POST" style="background-color: white;margin-left:120px;margin-top:20px;">
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
            <div class="col-md-7">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php 
                    // Vérifier si $cars n'est pas vide avant de l'itérer
                    // Vérifier si $cars n'est pas vide avant de l'itérer
                    if ($cars) {
                        foreach($cars as $car) {
                            echo '<a href="car.php?id='.$car['car_id'].'" style="text-decoration: none; color: black;"><div class="col-4 mb-3 " style="margin-bottom: 1px;">
                                <div class="card" style="width: 280px; height:414px; margin-top: 20px; margin-bottom: 0px;margin: right 60px;">
                                    <img src="'.$car['photo'].'" class="card-img-top" style=" width: 100%; height: 190px;">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$car['marque'].' '.$car['model'].'</h5>
                                        <p class="card-text"  ><i class="fa fa-road"></i>'.' '.$car['kilometrage'].'</p>
                                        <p class="card-text"><i class="fa fa-cog"></i>'.' boite '.$car['boite_vitesse'].'</p>
                                        <p class="card-text" ><i class="fa fa-calendar"></i>'.' '.$car['annee'].'</p>
                                        <p class="card-text" ><i  class="fa fa-gas-pump"></i>'.' '.$car['carburant'].'</p>
                                        <p class="card-text" style="position: absolute; bottom: 10px; right: 10px;">'.$car['prix'].' DT'.'</p>
                                    </div>
                                </div>
                            </div></a>';
                        }
                    } else {
                        echo "Aucune voiture trouvée.";
                    }
                    ?>
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