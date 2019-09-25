
<?php


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

<div class="container-fluid">
  <main class="contenedor">

<?php include("header.php"); ?>

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

<div class="row no-gutters bg-light position-relative">
  <div class="col-md-6 mb-md-0 p-md-4">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $_GET["value"];?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo $_GET["value"];?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo $_GET["value"];?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
  <div class="col-md-6 position-static p-4 pl-md-0">
    <h5 class="mt-0">Descripción</h5>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <a class="btn btn-dark" href="home.php" role="button">Volver</a>
  </div>
</div>

</div>
</main>

<footer>


</footer>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
