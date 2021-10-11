<?php
class Equipamiento {
    public $id;
    public $tipo;
    public $nombre;
    public $antiguedad;
    public $dimension_largo;
    public $dimension_ancho;
    public $peso;
    public $imagen;
    public $icono;
    public $descripcion;

    function __construct($id, $tipo, $nombre, $antiguedad, $dimension_largo, $dimension_ancho, $peso, $imagen, $icono, $descripcion){
        $this->id = $id;
        $this->tipo = $tipo;
        $this->nombre = $nombre;
        $this->antiguedad = $antiguedad;
        $this->dimension_largo = $dimension_largo;
        $this->dimension_ancho = $dimension_ancho;
        $this->peso = $peso;
        $this->imagen = $imagen;
        $this->icono = $icono;
        $this->descripcion = $descripcion;
    }/*
    function CalcularAntiguedad (){//REVISAR ESTA FUNCION 
        $fecha_nacimiento = new DateTime();
        $actual = new DateTime();
        $antiguedad = $actual->diff($fecha_nacimiento);  
        echo $antiguedad->y;
    }*/
}

class Espada extends Equipamiento{
    public $metal;
    public $empunadura;
    function __construct($id, $tipo, $nombre, $antiguedad, $dimension_largo, $dimension_ancho, $peso, $imagen, $icono, $descripcion, $metal, $empunadura){
       parent::__construct($id, $tipo, $nombre, $antiguedad, $dimension_largo, $dimension_ancho, $peso, $imagen, $icono, $descripcion);
        $this->metal = $metal;
        $this->empunadura = $empunadura;
    }
}
class Arco extends Equipamiento{
    public $cuerda;
    public $madera;
    function __construct($id, $tipo, $nombre, $antiguedad, $dimension_largo, $dimension_ancho, $peso, $imagen, $icono, $descripcion, $cuerda, $madera){
       parent::__construct($id, $tipo, $nombre, $antiguedad, $dimension_largo, $dimension_ancho, $peso, $imagen, $icono, $descripcion);
        $this->cuerda = $cuerda;
        $this->madera = $madera;
    }
}
class Casco extends Equipamiento{
    public $forma;
    public $vision;
    function __construct($id, $tipo, $nombre, $antiguedad, $dimension_largo, $dimension_ancho, $peso, $imagen, $icono, $descripcion, $forma, $vision){
       parent::__construct($id, $tipo, $nombre, $antiguedad, $dimension_largo, $dimension_ancho, $peso, $imagen, $icono, $descripcion);
        $this->forma = $forma;
        $this->vision = $vision;
    }
}  
class Hacha extends Equipamiento{
    public $hoja ;
    public $mango;
    function __construct($id, $tipo, $nombre, $antiguedad, $dimension_largo, $dimension_ancho, $peso, $imagen, $icono, $descripcion, $hoja, $mango){
       parent::__construct($id, $tipo, $nombre,$antiguedad, $dimension_largo, $dimension_ancho, $peso, $imagen, $icono, $descripcion);
        $this->hoja = $hoja;
        $this->mango = $mango;
    }
}

?>