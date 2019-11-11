<?php session_start();
include_once "producto.php";
if(isset($_POST["crearP"]) && isset($_FILES)){
if($_POST["nombreP"] != "" && $_FILES["fotoP"]["tmp_name"] != "" && $_POST["detalleP"] != "" && $_POST["precioP"] != "" && $_POST["colorP"] != "" && $_POST["talleP"] != ""){
  $producto = new Producto($_POST["nombreP"], $_FILES["fotoP"]["tmp_name"], $_POST["detalleP"], $_POST["precioP"], $_POST["colorP"], $_POST["talleP"]);
  move_uploaded_file($producto->getFoto(), "img/productos/".$producto->getNombre().".jpg");
  echo "se creo un producto";
  echo "<br>";
  $producto->guardarProducto($arrayProductos);
}else {
  echo "debe completar todos los campos";
}
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vender</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="vender.css">
  </head>
  <?php include 'header.php'; ?>
  <?php include 'header2.php'; ?>
  <body>
      <div class="info">
        <h2>vender</h2>
        <p class="coment">Crea tu venta</p>
        <p class="coment2">aqui:</p>
      </div>
      <div class="cuerpo">
        <form class="" action="vender.php" method="post" enctype="multipart/form-data">
          <p>
            <label for="nombre">nombre</label><br>
            <input type="text" name="nombreP" id="nombre" value="">
          </p>
          <p>
            <label for="foto">foto</label><br>
            <input type="file" name="fotoP" id="foto" value="">
          </p>
          <p>
            <label for="detalle">detalle</label><br>
            <textarea name="detalleP" rows="4" cols="40" id="detalle"></textarea>
          </p>
          <p>
            <label for="precio">precio</label><br>
            <input type="number" name="precioP" id="precio" value="">
          </p>
          <p>
            <label for="color">color</label><br>
            <select class="" name="colorP" id="color">
              <option value="negro">negro</option>
              <option value="blanco">blanco</option>
              <option value="rojo">rojo</option>
              <option value="azul">azul</option>
            </select>
          </p>
          <p>
            <label for="talle">talle</label><br>
            <select class="" name="talleP" id="talle">
              <option value="l">large</option>
              <option value="m">medium</option>
              <option value="s">small</option>
            </select>
          </p>

          <h5>
            <input type="submit" name="crearP" value="crear">
          </h5>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
<?php include 'footer.php'; ?>
</html>
