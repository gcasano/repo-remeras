<?php session_start();

if(isset($_POST["incrementar"])){
  $_SESSION["contador"];
}
function enviado(&$contador){
  $sumar = false;

  if(isset($_POST["incrementar"])){
    $sumar = true;
    if($sumar == true){
      $contador = $contador + 1;
      $sumar = false;
    }
  }

}
function reiniciar(){
  if(isset($_POST["reiniciar"])){
    $_SESSION["contador"] = 0;
  }
}

enviado($_SESSION["contador"]);
reiniciar();


$baseDatos = file_get_contents("usuarios.json");
$arrayDatos = json_decode($baseDatos, true); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="css/carrit.css">
    <script src="https://kit.fontawesome.com/11b69fdd61.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Carro</title>
  </head>


  <body class="carro">
    <?php include "header.php"; ?>
    <main>
      <div class="cuerpo">
      <div class="compras">
<?php if(isset($_SESSION["contador"]) == false || $_SESSION["contador"] == 0){
        ?> <div class="compra">
          no tiene nada en su carrito
        </div> <?php
      }else{
        for ($i=0; $i < $_SESSION["contador"]; $i++) {
          ?>        <div class="compra">
                    <div class="texto">
                      <h5>nombre del prodycto</h5>
                      <p>descripcion del producto</p>
                    </div>
                      <div class="imagen">
                        <img src="img/2.jpg" alt="imagen del producto" width="100px" height="100px">
                      </div>
                    </div><?php
        }
      }
         ?>
      </div>
      <div class="perfil">
        <?php if(isset($_SESSION["logeado"]) == false || $_SESSION["logeado"] == false){
          ?> <p>debe iniciar sesion</p> <?php
          ?><a class="btn btn-dark" href="home.php" role="button">Volver</a><?php
          ?><a class="btn btn-dark" href="login.php" role="button">Login</a><?php
        }else{ ?>
        <div class="logo">
          <?php
          foreach ($arrayDatos as $usuario) {
            if($usuario["email"] == $_SESSION["email"]){
              ?><img src="img/<?php echo $usuario["id"];?>.jpg" alt="foto perfil" width="320px" height="320px"><?php
            }
          }
           ?>
        </div>
        <p>perfil de</p>
        <h5><?php  echo $_SESSION["name"]; ?></h5>
        <a class="btn btn-dark" href="home.php" role="button">Volver</a>
        <button class="btn btn-dark" type="button" name="comprar" value="comprar" >comprar</button>
      <?php } ?>

      </div>

      </div>
    </main>
    <?php include "footer.php"; ?>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
