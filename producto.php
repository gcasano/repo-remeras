<?php
$baseDatosProducto = file_get_contents("producto.json");
$arrayProductos = json_decode($baseDatosProducto, true);


class Producto{
  private $nombre;
  private $foto;
  private $detalle;
  private $precio;
  private $color;
  private $talle;

  public function __construct($nombre, $foto, $detalle, $precio, $color, $talle){
    $this->nombre = $nombre;
    $this->foto = $foto;
    $this->detalle = $detalle;
    $this->precio = $precio;
    $this->color = $color;
    $this->talle = $talle;

  }

  public function mostrarProducto(){
    $baseDatosProducto = file_get_contents("producto.json");
    $arrayProductos = json_decode($baseDatosProducto, true);


  }

  public function guardarProducto($array){

    $producto = ["$this->nombre" => $this->nombre =
    ["nombre" => $this->nombre,
    "foto" => $this->foto,
    "detalle" => $this->detalle,
    "precio" => $this->precio,
    "color" => $this->color,
    "talle" => $this->talle]
    ];


    $array[] = $producto;
    $baseDatosProducto = json_encode($array);
    file_put_contents("producto.json", $baseDatosProducto);
    echo "se guardo un producto";
    echo "<br>";
  }

  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function getFoto(){
    return $this->foto;
  }
  public function setFoto($foto){
    $this->foto = $foto;
  }

  public function getDetalle(){
    return $this->detalle;
  }
  public function setDetalle($detalle){
    $this->detalle = $detalle;
  }

  public function getPrecio(){
    return $this->precio;
  }
  public function setPrecio($precio){
    $this->precio = $precio;
  }

  public function getColor(){
    return $this->color;
  }
  public function setColor($color){
    $this->color = $color;
  }

  public function getTalle(){
    return $this->talle;
  }
  public function setTalle($talle){
    $this->talle = $talle;
  }


};










?>
