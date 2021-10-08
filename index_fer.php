<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/348ef26ed0.js" crossorigin="anonymous"></script>
</head>
<body>
<center>
    <?php include "header_equipamiento.php" ?>
    <h1>Personajes</h1>
    <h1 id='_404'>Aqui iran los equipamientos</h1>
    <h1>Por construir</h1>

    <div class="tabla_personajes">
 
        
        <?php
            include "class_personajes.php"; 
            include "json_personajes.php";
            $personajes=json_decode($json_personaje);
            //var_dump( $personajes);
            foreach($personajes as $pe) {
                if ($pe->tipo == "Orco"){
                    $orco = new Orco($pe->id, $pe->tipo, $pe->nombre, $pe->dni, $pe->altura, $pe->peso, $pe->imagen, $pe->icono, $pe->descripcion, $pe->raza, $pe->temperamento);
                    //var_dump($orco);
                    echo"<div class='orco'>";
                    echo"<p class='orco_p'> $pe->tipo Nombre $pe->nombre</p>";
                    echo"<p class='orco_p'>$pe->dni</p><p class='orco_p''>$pe->raza</p>";
                    echo"<p class='orco_p'>$pe->altura</p><p class='orco_p''>$pe->peso</p>";
                    echo"<p class='orco_p'>$pe->descripcion</p><p class='orco_p'>$pe->raza</p>";
                    echo"<p class='orco_p'>$pe->temperamento</p></div>";
                
                
                }
            }

?>
</div>
</center>

        </body>
        </html>