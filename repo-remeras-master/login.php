<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login2.css">
  </head>
  <?php include 'header.php'; ?>
  <?php include 'header2.php'; ?>
  <body>
    <div class="contenedor">
      <div class="info">
        <h2>Inicia secion</h2>
        <p class="coment">si tienes una cuenta registrada,</p>
        <p class="coment2">ingresa tus datos:</p>
      </div>
      <div class="cuerpo">
        <div class="logo">
          <img src="img/logo_copy.jpg" alt="logo">
        </div>
        <form class="" action="index.html" method="post">
          <p class="email">
            <label for="email">
              <b>*</b>Direccion de email
            </label>
            <br>
            <input id="email" type="email" name="" value="">
          </p>
          <p class="password">
            <label for="password">
              <b>*</b>Contrasena
            </label>
            <br>
            <input id="password" type="password" name="" value="" required>
          </p>
          <p>
            <input type="submit" name="" value="login" class="boton">
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
