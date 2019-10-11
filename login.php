<?php
$email = "";
$password = "";
if($_POST){
  $email = $_POST["email"];
  $password = $_POST["pass"];
}
if($_POST && isset($_POST["email"]) == true && isset($_POST["pass"]) == true){
  if (strlen($_POST["email"]) == 0) {
    $noEmail = true;
  }elseif (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
    $errorEmail = true;
  }
  if (strlen($_POST["pass"]) == 0) {
    $noPassword = true;
  }
}
session_start();
  $baseDatos = file_get_contents("usuarios.json");
  $arrayDatos = json_decode($baseDatos, true);
  if(isset($_POST["pass"]) && isset($_POST["email"]) && isset($noEmail) == false && isset($noPassword) == false){
      foreach ($arrayDatos as $usuario) {
          if($usuario["email"] == $_POST["email"]){
            if(password_verify($_POST["pass"], $usuario["password"])){
              $_SESSION["email"] = $_POST["email"];
              $_SESSION["logeado"] = true;
              $_SESSION["name"] = $usuario["nombre"];
            }else{
              $_SESSION["logeado"] = false;
              $passNoCoinciden = true;
            }
          }
      }
    }
  if(isset($_SESSION["logeado"])){
    if($_SESSION["logeado"] == true){
      if(isset($_POST["logout"])){
        $_SESSION["logeado"] = false;
      }
    }
  }

    if(isset($_POST["olvido"])){
      setcookie("olvidoPass", true, time()+15);
    }

    if(isset($_POST["pass2"])){
      foreach ($arrayDatos as $usuario){
        if($usuario["email"] == $_POST["email2"]){
          $usuario["password"] = $_POST["pass2"];
          $baseDatos = json_encode($arrayDatos);
          echo $baseDatos;
          file_put_contents("usuarios.json", $baseDatos);
        }
      }
    }




 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login2.css">
    <link rel="stylesheet" href="css/login3.css">
  </head>
  <?php include 'header.php'; ?>
  <?php include 'header2.php'; ?>
  <body>
    <?php
     if(isset($_SESSION["logeado"]) == false){ ?>
       <div class="contenedor">
         <div class="info">
           <h2>Inicia secion</h2>
           <p class="coment">si tienes una cuenta registrada,</p>
           <p class="coment2">ingresa tus datos:</p>
         </div>
         <?php if(isset($_COOKIE["olvidoPass"])){
           ?>

           <div class="cuerpo">
             <div class="logo">
               <img src="img/logo_copy.jpg" alt="logo">
             </div>
             <form class="" action="login.php" method="post">
               <label for="email2">ingrese su email</label> <br>
               <input type="email" name="email2" value="" id="email2"> <br>
               <input type="submit" name="" value="enviar"> <br>
               <?php if(isset($_POST["email2"])){
                 foreach ($arrayDatos as $usuario){
                   if($usuario["email"] == $_POST["email2"]){
                     ?>
                       <form class="" action="login.php" method="post">
                         <label for="pass2">Cabiar contrasena: </label> <br>
                         <input type="password" name="pass2" value="" id="pass2"> <br>
                         <input type="submit" name="" value="cambiar">
                       </form>
                     <?php
                   }
                 }
               } ?>
             </form>
           </div>

           <?php
         }else{ ?>
         <div class="cuerpo">
           <div class="logo">
             <img src="img/logo_copy.jpg" alt="logo">
           </div>
           <form class="" action="login.php" method="post">
             <p class="email">
               <label for="email">
                 <b>*</b>Direccion de email
               </label>
               <br>
               <input id="email" type="email" name="email" value="<?php echo $email ?>" >
             </p>
             <?php if($_POST){
               if(isset($noEmail)){
                 ?> <p class="error">debe completar su email</p> <?php
               }elseif (isset($errorEmail)) {
                 ?> <p class="error">email no valido</p> <?php
               }
             } ?>
             <p class="password">
               <label for="password">
                 <b>*</b>Contrasena
               </label>
               <br>
               <input id="password" type="password" name="pass" value="<?php echo $password ?>">
             </p>
             <?php if($_POST){
               if(isset($noPassword)){
                 ?> <p class="error">debe completar su contrasena</p> <?php
               }elseif (isset($passNoCoinciden)) {
                 ?> <p class="error">contrasena incorrecta</p> <?php
               }
             } ?>
             <p>
               <input type="submit" name="" value="login" class="boton">
             </p>
           </form>
           <form class="" action="login.php" method="post">
             <p>
               <label for="olvido">olvido su Contrasena? </label>
               <input type="checkbox" id="olvido" name="olvido" value="olvido">
               <input type="submit" name="" value="enviar">
             </p>
           </form>
         </div> <?php } ?>
       </div>
<?php }elseif ($_SESSION["logeado"] == true) {
      ?>
       <div class="contenedor">
      <div class="info">
        <h2>ya iniciaste secion</h2>
        <p class="coment"></p>
        <p class="coment2"></p>
      </div>
      <div class="cuerpo">
        <form class="" action="login.php" method="post">
          <p>
            <input type="submit" name="logout" value="logout" class="boton">
          </p>
        </form>
      </div>
    </div>
      <?php
    }elseif ($_SESSION["logeado"] == false) {
      ?>       <div class="contenedor">
               <div class="info">
                 <h2>Inicia secion</h2>
                 <p class="coment">si tienes una cuenta registrada,</p>
                 <p class="coment2">ingresa tus datos:</p>
               </div>
               <?php if(isset($_COOKIE["olvidoPass"])){
                 ?>

                 <div class="cuerpo">
                   <div class="logo">
                     <img src="img/logo_copy.jpg" alt="logo">
                   </div>
                   <form class="" action="login.php" method="post">
                     <label for="email2">ingrese su email</label> <br>
                     <input type="email" name="email2" value="" id="email2"> <br>
                     <input type="submit" name="" value="enviar"> <br>
                     <?php if(isset($_POST["email2"])){
                       foreach ($arrayDatos as $usuario){
                         if($usuario["email"] == $_POST["email2"]){
                           ?>
                             <form class="" action="login.php" method="post">
                               <label for="pass2">Cabiar contrasena: </label> <br>
                               <input type="password" name="pass2" value="" id="pass2"> <br>
                               <input type="submit" name="" value="cambiar">
                             </form>
                           <?php
                         }
                       }
                     } ?>
                   </form>
                 </div>

                 <?php
               }else{ ?>
                 <div class="cuerpo">
                   <div class="logo">
                     <img src="img/logo_copy.jpg" alt="logo">
                   </div>
                   <form class="" action="login.php" method="post">
                     <p class="email">
                       <label for="email">
                         <b>*</b>Direccion de email
                       </label>
                       <br>
                       <input id="email" type="email" name="email" value="<?php echo $email ?>" >
                     </p>
                     <?php if($_POST){
                       if(isset($noEmail)){
                         ?> <p class="error">debe completar su email</p> <?php
                       }elseif (isset($errorEmail)) {
                         ?> <p class="error">email no valido</p> <?php
                       }
                     } ?>
                     <p class="password">
                       <label for="password">
                         <b>*</b>Contrasena
                       </label>
                       <br>
                       <input id="password" type="password" name="pass" value="<?php echo $password ?>" >
                     </p>
                     <?php if($_POST){
                       if(isset($noPassword)){
                         ?> <p class="error">debe completar su contrasena</p> <?php
                       }elseif (isset($passNoCoinciden)) {
                         ?> <p class="error">contrasena incorrecta</p> <?php
                       }
                     } ?>
                     <p>
                       <input type="submit" name="" value="login" class="boton">
                     </p>
                   </form>
                   <form class="" action="login.php" method="post">
                     <p>
                       <label for="olvido">olvido su Contrasena? </label>
                       <input type="checkbox" id="olvido" name="olvido" value="olvido">
                       <input type="submit" name="" value="enviar">
                     </p>
                   </form>
                 </div> <?php } ?>
             </div><?php
    }

       ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
<?php include 'footer.php'; ?>
</html>
