<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST AFFICHAGE OO</title>
</head>
<body style="background-image: url(arriere_plan.jpg)">
    <h1>LISTE DES VOITURES</h1>
    <?php
    include 'ClassCar.php';
    include 'CarManager.php';

    $db = dbCnx();
    $manager = new CarManager($db);
    $cars = $manager->getCar();

    echo "<ul>";
    foreach ($cars as $car) {
        echo "<li>Code: " . $car->getPrix() . " 
		- Intitulé: " . $car->getMarque() . " 
		  ";
    }
    echo "</ul>";
    ?>
</body>
</html>
