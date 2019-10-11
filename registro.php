<?php
$nombre = "";
$email = "";
$password = "";
$passwordConfirm = "";

if($_POST){
  $nombre = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $passwordConfirm = $_POST["passwordConfirm"];
}

if($_POST){
  if (strlen($_POST["name"]) == 0) {
    $noNombre = true;
  }
  if (strlen($_POST["email"]) == 0) {
    $noEmail = true;
  }
  if (strlen($_POST["password"]) == 0) {
    $noPassword = true;
  }elseif (strlen($_POST["password"]) < 6) {
    $errorPass = true;
  }
  if (strlen($_POST["passwordConfirm"]) == 0) {
    $noPassConfirm = true;
  }
}

session_start();

  $baseDatos = file_get_contents("usuarios.json");
  $arrayDatos = json_decode($baseDatos, true);
if($_POST && isset($noNombre) == false && isset($noEmail) == false && isset($noPassword) == false && isset($noPassConfirm) == false && isset($errorPass) == false && isset($noCoincide) == false){
  if($_POST["password"] == $_POST["passwordConfirm"]){
    $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
  }else{
    $noCoincide = true;
  }
  $usuario = [
          "nombre" => $_POST["name"],
          "email" => $_POST['email'],
          "password" => $hash,
          "imagen" => $_FILES["imagen"]["tmp_name"]
        ];
  $arrayDatos[] = $usuario;
  $baseDatos = json_encode($arrayDatos);
  file_put_contents("usuarios.json", $baseDatos);

  if($_FILES){
    move_uploaded_file($usuario["imagen"], "img/".$usuario["email"].".jpg");
  }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login2.css">
    <link rel="stylesheet" href="css/login3.css">
  </head>
    <?php include 'header.php'; ?>
    <?php include 'header2.php'; ?>
  <body>
    <div class="contenedor">
      <div class="info">
        <h2>Registrate</h2>
        <p class="coment">no tienes cuenta?</p>
        <p class="coment2">ingresa tus datos:</p>
      </div>
      <div class="cuerpo">
        <div class="logo">
          <img src="img/logo_copy.jpg" alt="logo">
        </div>
        <form class="" action="registro.php" method="post" enctype="multipart/form-data">
          <p class="email">
            <label for="nombre">
              <b>*</b>Nombre
            </label>
            <br>
            <input id="nombre" type="text" name="name" value="<?php echo $nombre ?>" >
          </p>
          <?php if($_POST){
            if(isset($noNombre)){
              ?> <p class="error">debe completar su nombre</p> <?php
            }
          } ?>
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
            }
          } ?>
          <p class="password">
            <label for="password">
              <b>*</b>Contrasena
            </label>
            <br>
            <input id="password" type="password" name="password" value="<?php echo $password ?>" >
          </p>
          <?php if($_POST){
            if(isset($noPassword)){
              ?> <p class="error">debe completar su contrasena</p> <?php
            }elseif (isset($errorPass)) {
              ?> <p class="error">la contrasena debe ser mayor o igual a 6</p> <?php
            }
          } ?>
          <p class="password">
            <label for="passwordConfirm">
              <b>*</b>Confirme su contrasena
            </label>
            <br>
            <input id="passwordConfirm" type="password" name="passwordConfirm" value="<?php echo $passwordConfirm ?>" >
          </p>
          <?php
          if($_POST){
            if(isset($noCoincide)){
              ?> <p class="error">las contrasenas no coinciden</p> <?php
            }
          } ?>
          <p>
            <label for="perfil" >Agrega tu foto de perfil</label><br/>
            <input type="file" name="imagen" id="perfil" value='' maxlength="50" />
          </p>
          <p>
            <input type="submit" name="" value="registrar" class="boton">
          </p>
        </form>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
<?php include 'footer.php'; ?>
</html>
