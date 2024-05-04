<?php
 include "inc/function.php";
 include "User.php";

 if(!empty($_POST)){
     if(AjouterUtilisateur($_POST)){
      $showmodal=1;
     }else{
        $showmodal=2;

     }
     
 }
// include 'User.php';
// include 'UserManager.php';
// include "inc/function.php";
//     if (empty($_POST['nom']) ||  empty($_POST['email'])  || empty($_POST['mp'])) {
//         echo'<script>
//         Swal.fire("SweetAlert2 is working!");
//         </script>;';
//     } else {
//         $user = new User([
//             'name' => $_POST['nom'],
//             'email' => $_POST['email'],
//             'password' => $_POST['mp'],
//             ]);
        
//         addUser($user);
//     }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.css" integrity="sha512-n1PBkhxQLVIma0hnm731gu/40gByOeBjlm5Z/PgwNxhJnyW1wYG8v7gPJDT6jpk0cMHfL8vUGUVjz3t4gXyZYQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>signin-signup</title>
</head>
<body style="display: flex;">
<?php
if($showmodal==1){
    echo'<script>Swal.fire({
        position: "top-end",
        icon: "success",
        title: "utilisateur ajouter",
        showConfirmButton: false,
        timer: 1500
      })</script>;';
}else{
    echo'<script>Swal.fire({
        position: "top-end",
        icon: "success",
        title: "failed",
        showConfirmButton: false,
        timer: 1500
      })</script>;';
}
?>
    <div class="container">
        <div class="signin-signup">
            <form action="" class="sign-in-form"  >
                <h2 class="title">Connectez vous </h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Nom">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Mot de passe">
                </div>
                <input type="submit" value="Connecte" class="btn">
                <p class="social-text">ou Connectez vous avec compte social</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">vous navez pas de compte? <a href="#" id="sign-up-btn2">enregistrez-vous</a></p>
            </form>
            <form action="" class="sign-up-form" method="post">
                <h2 class="title">enregistrez-vous</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nom" placeholder="Nom">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="mp" placeholder="Mot de passe">
                </div>
                <input type="submit" value="inscrivez" class="btn">
                <p class="social-text">Ou enregistrez-vous avec compte social</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Déjà un compte? <a href="#" id="sign-in-btn2">Connectez vous </a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Déjà un compte??</h3>
                   
                    <button class="btn" id="sign-in-btn">Connectez vous </button>
                </div>
                <img src="img/toyoota (2).svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>vous navez pas de compte?</h3>
                    
                    <button class="btn" id="sign-up-btn">enregistrez-vous</button>
                </div>
                <img src="img/toyoota (1).svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.all.js" integrity="sha512-mDHahYvyhRtp6zBGslYxaLlAiINPDDEoHDD7nDsHoLtua4To71lDTHjDL1bCoAE/Wq/I+7ONeFMpgr62i5yUzw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>