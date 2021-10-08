<?php
class Personaje {
    public $id;
    public $tipo;
    public $nombre;
    public $dni;
    public $altura;
    public $peso;
    public $imagen;
    public $icono;
    public $descripcion;

    function __construct($id, $tipo, $nombre,  $dni, $altura, $peso, $imagen, $icono, $descripcion){
        $this->id = $id;
        $this->tipo = $tipo;
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->imagen = $imagen;
        $this->icono = $icono;
        $this->descripcion = $descripcion;
    }


    function comprobar_dni($dni){
        $letra = substr($dni, -1);
        $numeros = substr($dni, 0, -1);
        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
          $valido=true;
        }else{
          $valido=false;
        }  
        return $valido;
    }
}

class  Orco extends Personaje{
    public $raza;
    public $temperamento;
    function __construct($id, $tipo, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion, $raza, $temperamento){
        parent::__construct($id, $tipo, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion);
        $this->raza = $raza;
        $this->temperamento = $temperamento;
    }
    


}
class Elfo extends Personaje{
    public $orejas;
    public $pelo;
    function __construct($id, $tipo, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion, $orejas, $pelo){
        parent::__construct($id, $tipo, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion);
        $this->orejas = $orejas;
        $this->pelo = $pelo;
 }
 }
    


class Humano extends Personaje{
    public $reino;
    public $codicia;
    function __construct($id, $tipo, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion, $reino, $codicia){
        parent::__construct($id, $tipo, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion);
        $this->reino = $reino;
        $this->codicia = $codicia;
 }
    

}
class Enano extends Personaje{
    public $debilidad;
    public $hobbie;
    function __construct($id, $tipo, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion, $debilidad, $hobbie){
        parent::__construct($id, $tipo, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion);
        $this->debilidad = $debilidad;
        $this->hobbie = $hobbie;
    } 

}

?>