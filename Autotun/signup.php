<?php
 include "inc/function.php";
 include "User.php";
 $showmodal=0;
 if(!empty($_POST)){
     if(AjouterUtilisateur($_POST)){
        $showmodal=1;
     

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
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>signuo</title>
  <link rel="stylesheet" href="stylelogin.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.css" integrity="sha512-n1PBkhxQLVIma0hnm731gu/40gByOeBjlm5Z/PgwNxhJnyW1wYG8v7gPJDT6jpk0cMHfL8vUGUVjz3t4gXyZYQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body >
<!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title>signup</title> 

  <link rel="stylesheet" href="./style.css"> 

 </head> 

 <body > 

  <section>  <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

   <div class="signin"> 

    <div class="content"> 

     <h2>registre</h2> 

     <form action="signup.php" method="post" class="form">
          <div class="form">
            <div class="inputBox">
              <input type="text" name="nom" required>
              <i>Votre nom</i>
            </div>
            <div class="inputBox">
              <input type="text" name="email" required>
              <i>Email</i>
            </div>
            <div class="inputBox">
              <input type="text" name="telephone" required>
              <i>Téléphone</i>
            </div>
            <div class="inputBox">
              <input type="password" name="mp" required>
              <i>Mot de passe</i>
            </div>
            <div class="links">
              <a href="#">Already have an account</a>
              <a href="login.php">Login</a>
            </div>
            <div class="inputBox">
              <input type="submit" value="Register">
            </div>
          </div>
        </form>
     
  

      </div> 

      

     </div> 

    </div> 

   </div> 

  </section> 

 </body>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.all.js" integrity="sha512-mDHahYvyhRtp6zBGslYxaLlAiINPDDEoHDD7nDsHoLtua4To71lDTHjDL1bCoAE/Wq/I+7ONeFMpgr62i5yUzw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
    if($showmodal==1){
        echo'<script>
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "compte créé",
            showConfirmButton: false,
            timer: 5000
          })
          </script>';
    }else{
        echo'<script>
        Swal.fire({
            position: "top-end",
            icon: "error",
            title: "deja existe",
            showConfirmButton: false,
            timer: 5000
          })
          </script>';
          if(empty($_POST)){
            echo'<script>
        Swal.fire({
            position: "top-end",
            icon: "info",
            title: "remplir",
            showConfirmButton: false,
            timer: 5000
          })
          </script>';

          }
    }
      ?>
</body>
</html>
