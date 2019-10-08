<?php
session_start();
  $baseDatos = file_get_contents("usuarios.json");
  $arrayDatos = json_decode($baseDatos, true);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="perfil.css">
  </head>

  <?php include 'header.php'; ?>
  <?php include 'header2.php'; ?>

  <body>
  <?php if (isset($_SESSION["logeado"]) == false) {
    ?>    <div class="contenedor">
          <div class="info">
            <h2>Tu Perfil</h2>
            <p class="coment2"></p>
          </div>
          <div class="cuerpo">
            <p>No iniciaste Secion</p>
          </div>
        </div><?php

}elseif($_SESSION["logeado"] == true){ ?>
    <div class="contenedor">
      <div class="info">
        <h2>Tu Perfil</h2>
        <p class="coment2"></p>
      </div>
      <div class="cuerpo">
        <div class="logo">
          <?php
          foreach ($arrayDatos as $usuario) {
            if($usuario["email"] == $_SESSION["email"]){
              ?><img src="img/<?php echo $usuario["email"];?>.jpg" alt="foto perfil" width="100px" height="100px"><?php
            }
          }
           ?>
        </div>
        <div class="usuario">
          <?php
          foreach ($arrayDatos as $usuario) {
            if($usuario["email"] == $_SESSION["email"]){
              ?>
              <label for="nombre">nombre:</label>
              <h5><?php echo $usuario["nombre"]."<br>"; ?></h5>
              <?php
              ?>
              <label for="nombre">email:</label>
              <h5><?php echo $usuario["email"]."<br>"; ?></h5>
              <?php

            }
          } ?>
        </div>
      </div>
    </div>
  <?php
 }elseif ($_SESSION["logeado"] == false) {
  ?>
    <div class="contenedor">
      <div class="info">
        <h2>Tu Perfil</h2>
        <p class="coment2"></p>
      </div>
      <div class="cuerpo">
        <p>No iniciaste Secion</p>
      </div>
    </div>
    <?php
  }
  ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
<?php include 'footer.php'; ?>
  </footer>
</html>
