<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<body>
    <h1>bienvenu  dans votre compte</h1>
    <?php 
    echo $_SESSION['nom'].' '.$_SESSION['email'];
    ?>
</body>
</html>
