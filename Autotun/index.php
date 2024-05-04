<?php

include "inc/function.php";




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autotun</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav >
        <a href="index.php">
            <img src="img/omarLgo-removebg-preview.png" class="logo" alt="">
            <div class="menu" >
                <a href="neuf.php">PRIX DU NEUF</a>
                <a href="occasion.php">OCCASION</a>
                <a href="login.php">Se connecter</a>
                <a href="vendre.php">Vendre ma voiture</a>
            </div>

            <div class="social">
            <i class="fab fa-facebook-f"></i>
    <i class="fab fa-twitter"></i>
    <i class="fab fa-instagram"></i>
            </div>

        </nav>
        <div class="hero">
        <div class="text">
            <h4>trouver</h4>
            <h1>votre<br> <span>voiture</span></h1>
            
            <!-- <button class="button-59" role="button" style="margin-right: 0px;">neuf</button><button class="button-59" role="button" style="margin-left: 0px;">occasion</button> -->
           
            <div class="s01">
      <form action="neuf.php" method="POST" >
       
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input id="search" type="search" placeholder="marque" name="search"/>
          </div>
          <div class="input-field second-wrap">
            <input id="search1" type="search" placeholder="model" name="search1" />
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit">Search</button>
          </div>
          </div> <fieldset>
          <legend>trouver le prix du neuf</legend>
        </fieldset>
      </form>
    </div>
            
        </div>
        </div>
    </header>
    <section style="background-color: white;">
   

    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            form.addEventListener('submit', function(event) {
                const search = document.getElementById('search').value.trim();
                const search1 = document.getElementById('search1').value.trim();

                if (search === '' && search1 === '') {
                    event.preventDefault(); 
                    alert('slvp enter une seule champ au minimum.');
                }
            });
        });
    </script>
   
    <script>
        let heroBg = document.querySelector('.hero');

        setInterval(() => {
            heroBg.style.backgroundImage = "url(img/bg-light.jpg)"
            
            setTimeout(() => {
                heroBg.style.backgroundImage = "url(img/bg.jpg)"
            }, 1000);
        }, 2200);
    </script>
</body>
</html>
