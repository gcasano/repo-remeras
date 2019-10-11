
<?php
session_start();
//
// if(isset ($_POST["reiniciar"])){
// $_SESSION["contador"]=0;
//
// }else
//
//
// if ($_POST["incrementar"]){
// $_SESSION["contador"]++;
// }
$_contar=0;
if($_GET["suma"]="1"){
$numero=1;
}
function suma($numero){
return $_contar=$numero+$_contar ;
}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/11b69fdd61.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/style.css">


  <title>Ropa</title>
</head>


<body>

<header class="cabeza">
    <img src="img/descarga.png" class="img-fluid" alt="Responsive image">
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
                      ?><a class="nav-link active"  href="perfil.php">Mi Perfil</a><?php
                    }
                  }else{
                    ?><a class="nav-link active"  href="perfil.php">Mi Perfil</a><?php
                  }?>
          </li>
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

          <div class="card" >
          <img src="img/remeraa1.jpg" class="card-img-top" alt="..." data-remera="remeraa1">
          <img class="special" src="img/img-nuevo.png" alt="plato nuevo">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href= "funciones.php?value=img/remeraa1.jpg" class="btn btn-primary">ver más</a>

            <form action="" class="carro" method="post">
              <button type="submit" name="incrementar" value="Incrementar" class="btn btn-primary fas fa-cart-plus"></button>
            </form>



          </div>
          </div>

        <div class="card" >
        <img src="img/remerab1.jpg" class="card-img-top" alt="...">
        <img class="special" src="img/img-nuevo.png" alt="plato nuevo">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="funciones.php?value=img/remerab1.jpg" class="btn btn-primary">ver más</a>
          <form action="" class="carro" method="post">
            <button type="submit" name="incrementar" value="Incrementar" class="btn btn-primary fas fa-cart-plus"></button>
          </form>


        </div>
        </div>

        <div class="card" >
        <img src="img/remerac1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="funciones.php?value=img/remerac1.jpg" class="btn btn-primary">ver más</a>
          <form action="" class="carro" method="post">
            <button type="submit" name="incrementar" value="Incrementar" class="btn btn-primary fas fa-cart-plus"></button>
          </form>
        </div>
        </div>

        <div class="card" >
        <img src="img/remerad1.jpg" class="card-img-top" alt="...">
        <img class="special" src="img/img-nuevo.png" alt="plato nuevo">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="funciones.php?value=img/remerad1.jpg" class="btn btn-primary">ver más</a>
          <form action="" class="carro" method="post">
            <button type="submit" name="incrementar" value="Incrementar" class="btn btn-primary fas fa-cart-plus"></button>
          </form>
        </div>
        </div>

        <div class="card" >
        <img src="img/remerae1.jpg" class="card-img-top" alt="...">
        <img class="special" src="img/img-descuento.png" alt="descuento efectivo">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="funciones.php?value=img/remerae1.jpg" class="btn btn-primary">ver más</a>
          <form action="" class="carro" method="post">
            <button type="submit" name="incrementar" value="Incrementar" class="btn btn-primary fas fa-cart-plus"></button>
          </form>
        </div>
        </div>

        <div class="card" >
        <img src="img/remeraf1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="funciones.php?value=img/remeraf1.jpg" class="btn btn-primary">ver más</a>
          <form action="" class="carro" method="post">
            <button type="submit" name="incrementar" value="Incrementar" class="btn btn-primary fas fa-cart-plus"></button>
          </form>
        </div>
        </div>

        <div class="card" >
        <img src="img/remerag1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="funciones.php?value=img/remerag1.jpg" class="btn btn-primary">ver más</a>
          <form action="" class="carro" method="post">
            <button type="submit" name="incrementar" value="Incrementar" class="btn btn-primary fas fa-cart-plus"></button>
          </form>
        </div>
        </div>

        <div class="card" >
        <img src="img/remerah1.jpg" class="card-img-top" alt="...">
        <img class="special" src="img/img-descuento.png" alt="descuento efectivo">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="funciones.php?value=img/remerah1.jpg" class="btn btn-primary">ver más</a>
          <form action="" class="carro" method="post">
            <button type="submit" name="incrementar" value="Incrementar" class="btn btn-primary fas fa-cart-plus"></button>
          </form>
        </div>
        </div>
</section>
</div>
</main>

<?php include 'footer.php'; ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
