
<?php
session_start();

$page = $_SERVER['PHP_SELF'];
$sec = "0.01";

include_once "producto.php";
if(isset($_POST["eliminar"])){
  $baseDatosProducto = file_get_contents("producto.json");
  $arrayProductos = json_decode($baseDatosProducto, true);
    foreach ($arrayProductos as &$producto){
      foreach ($producto as $valor){
        if($valor["nombre"] == $_POST["eliminar"]){
          unset($producto[$_POST["eliminar"]]);
          $baseDatosProducto = json_encode($arrayProductos);
          file_put_contents("producto.json", $baseDatosProducto);
          echo "se elimino un producto";
          echo "<br>";
        }
      }
    }
  }

if(isset($_POST["incrementar"])){
  $baseDatosProducto = file_get_contents("producto.json");
  $arrayProductos = json_decode($baseDatosProducto, true);
  foreach ($arrayProductos as &$producto){
    foreach ($producto as $valor){
      if($valor["nombre"] == $_POST["incrementar"]){

        $_SESSION["arrayCarrito"][] = $producto;

      }
    }
  }
}


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
    $_SESSION["arrayCarrito"] = [];

  }
}

enviado($_SESSION["contador"]);
reiniciar();

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php   if(isset($_POST["eliminar"])){
  ?><meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'"><?php
}   ?>
<?php   if(isset($_POST["incrementar"])){
  ?><meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'"><?php
}   ?>
<script src="https://kit.fontawesome.com/11b69fdd61.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/style.css">


  <title>Ropa</title>
</head>


<body>

<header class="cabeza">
    <img src="img/portada.JPG"  width="100%" height="200px;">
        <nav class="navbar navbar-dark bg-dark">
          <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active"  href="FQP.php">Preguntas Frecuentes</a>
          </li>
          <li class="nav-item">
            <?php if (isset($_SESSION["logeado"]) && $_SESSION["logeado"] == true) {

            }else{ ?>
            <a class="nav-link active"  href="registro.php">Registro</a>
          <?php } ?>
          </li>
          <li class="nav-item">
            <?php if (isset($_SESSION["logeado"]) && $_SESSION["logeado"] == true) {

            }else{ ?>
            <a class="nav-link active"  href="login.php">Login</a>
          <?php } ?>
          </li>
          <li class="nav-item">
            <a class="nav-link active"  href="contacto.php">Contactos</a>
          </li>
          <li class="nav-item">
            <?php if (isset($_SESSION["logeado"])){
                    if ($_SESSION["logeado"] == true){ ?>
                      <a class="nav-link active" href="perfil.php">hola <?php echo $_SESSION["name"]; ?></a>
              <?php }else {

                    }
                  }else{

                  }?>
          </li>
          <li class="nav-item"> <a class="nav-link active" href="carrito.php"><?php if(isset($_SESSION["contador"])){ echo "tu carrito tiene ".$_SESSION["contador"]." productos";}else {
            echo "tu carrito esta vacio";
          } ?></a> </li>
          <li><form class="" action="home.php" method="post">
            <input type="submit" name="reiniciar" value="reiniciar"class="btn btn-primary" >
          </form>  </li>
        </ul>



<form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<!-- Navbar content -->
      </nav>


</header>
<?php include 'header2.php'; ?>

<div>
<main class="contenedor">

<nav class="botones">

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Remeras
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" type="button">Action</button>
        <button class="dropdown-item" type="button">Another action</button>
        <button class="dropdown-item" type="button">Something else here</button>
      </div>
    </div>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Camperas
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" type="button">Action</button>
        <button class="dropdown-item" type="button">Another action</button>
        <button class="dropdown-item" type="button">Something else here</button>
      </div>
    </div>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Camisas
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" type="button">Action</button>
        <button class="dropdown-item" type="button">Another action</button>
        <button class="dropdown-item" type="button">Something else here</button>
      </div>
    </div>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Accesorios
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" type="button">Action</button>
        <button class="dropdown-item" type="button">Another action</button>
        <button class="dropdown-item" type="button">Something else here</button>
      </div>
    </div>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Trajes
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" type="button">Action</button>
        <button class="dropdown-item" type="button">Another action</button>
        <button class="dropdown-item" type="button">Something else here</button>
      </div>
    </div>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Indumentaria
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" type="button">Action</button>
        <button class="dropdown-item" type="button">Another action</button>
        <button class="dropdown-item" type="button">Something else here</button>
      </div>
    </div>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Cinturones
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" type="button">Action</button>
        <button class="dropdown-item" type="button">Another action</button>
        <button class="dropdown-item" type="button">Something else here</button>
      </div>
    </div>


    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Ofertas
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" type="button">Action</button>
        <button class="dropdown-item" type="button">Another action</button>
        <button class="dropdown-item" type="button">Something else here</button>
      </div>
    </div>





</nav>

<section class="foto">

  <?php

    foreach ($arrayProductos as $producto){
      foreach ($producto as $valor){
        ?>
        <div class="card" >
        <img src="img/productos/<?php echo $valor["nombre"];?>.jpg" class="card-img-top" alt="" width="242px" height="185px;" data-remera="remeraa1">
        <img class="special" src="img/img-nuevo.png" alt="plato nuevo">
        <div class="card-body">
          <h5 class="card-title"><?php echo $valor["nombre"]; ?></h5>
          <h6 class="card-text"><?php echo $valor["precio"]; ?></h6>
          <form class="" action="funciones.php" method="post">
              <button type="submit" name="incrementar" value="<?php echo $valor["nombre"]; ?>" class="btn btn-primary">ver mas</button>
          </form>
          <form action="home.php" class="carro" method="post" onSubmit="return enviado()">
            <button type="submit" name="incrementar" value="<?php echo $valor["nombre"]; ?>" class="btn btn-primary fas fa-cart-plus"></button>
          </form>
          <form action="home.php" class="eliminar" method="post">
            <button type="submit" name="eliminar" value="<?php echo $valor["nombre"]; ?>" class="btn">eliminar</button>
          </form>
        </div>
        </div>
        <?php
      }
    } ?>




</section>
</div>
</main>

<?php include 'footer.php'; ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
