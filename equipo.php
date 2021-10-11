<?php
class Equipo {
    public $id;
    public $tipo;
    public $nombre;
    public $largo;
    public $ancho;
    public $peso;
    public $imagen;
    public $icono;
    public $descripcion;

    function __construct($id, $tipo, $nombre,  $largo, $ancho, $peso, $imagen, $icono, $descripcion){
        $this->id = $id;
        $this->tipo = $tipo;
        $this->nombre = $nombre;
        $this->largo = $largo;
        $this->ancho = $ancho;
        $this->peso = $peso;
        $this->imagen = $imagen;
        $this->icono = $icono;
        $this->descripcion = $descripcion;
    }
}

class  Espada extends Equipo{
    public $metal;
    public $empunadura;
    function __construct($id, $tipo, $nombre, $largo, $ancho, $peso, $imagen, $icono, $descripcion, $metal, $empunadura){
        parent::__construct($id, $tipo, $nombre, $largo, $ancho, $peso, $imagen, $icono, $descripcion);
        $this->metal = $metal;
        $this->empunadura = $empunadura;
    }
    


}
class Arco extends Equipo{
    public $cuerda;
    public $madera;
    function __construct($id, $tipo, $nombre, $largo, $ancho, $peso, $imagen, $icono, $descripcion, $cuerda, $madera){
        parent::__construct($id, $tipo, $nombre, $largo, $ancho, $peso, $imagen, $icono, $descripcion);
        $this->cuerda = $cuerda;
        $this->madera = $madera;
 }
 }
    


class Casco extends Equipo{
    public $forma;
    public $vision;
    function __construct($id, $tipo, $nombre, $largo, $ancho, $peso, $imagen, $icono, $descripcion, $forma, $vision){
        parent::__construct($id, $tipo, $nombre, $largo, $ancho, $peso, $imagen, $icono, $descripcion);
        $this->forma = $forma;
        $this->vision = $vision;
 }
    

}
class Hacha extends Equipo{
    public $hoja;
    public $mango;
    function __construct($id, $tipo, $nombre, $largo, $ancho, $peso, $imagen, $icono, $descripcion, $hoja, $mango){
        parent::__construct($id, $tipo, $nombre, $largo, $ancho, $peso, $imagen, $icono, $descripcion);
        $this->hoja = $hoja;
        $this->mango = $mango;
    } 

}

?>