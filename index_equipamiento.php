<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <!--<script src="https://kit.fontawesome.com/348ef26ed0.js" crossorigin="anonymous"></script>-->
    <title>Personajes</title>
</head>
<body>
    <?php require_once "header_equipamiento.php" ?>
<center>
    <h3 id='titu'>Equipamiento</h3>
    <div class="main">
 
        
        <?php
            require_once "equipo.php"; 
            require_once "json_equipamiento.php";
            $personajes=json_decode($json_equipo);
            //var_dump( $personajes);
            foreach($personajes as $pe) {
                if ($pe->tipo == "Espada"){
                    $espada = new Espada($pe->id, $pe->tipo, $pe->nombre, $pe->antiguedad, $pe->dimension_largo, $pe->dimension_ancho, $pe->imagen, $pe->icono, $pe->descripcion, $pe->metal, $pe->empunadura);
                    //var_dump($orco);
                    echo"<div class='orco'>";
                    echo "<div class='texto'>";
                    echo"<p class='orco_p'> $pe->tipo  $pe->nombre</p>";
                    echo"<p class='orco_p'>$pe->antiguedad</p><p class='orco_p''>$pe->metal</p>";
                    echo"<p class='orco_p'>$pe->dimension_largo</p><p class='orco_p''>$pe->dimension_ancho</p>";
                    echo"<p class='orco_p'>$pe->empunadura</p><p class='orco_p'>$pe->metal</p>";
                    echo"<p class='orco_p'>$pe->descripcion</p></div>";
                    echo "<img src='$pe->imagen' class='top'></div>";                                             
                }
                if ($pe->tipo == "Arco"){
                    $arco = new Arco($pe->id, $pe->tipo, $pe->nombre, $pe->antiguedad, $pe->dimension_largo, $pe->dimension_ancho, $pe->imagen, $pe->icono, $pe->descripcion, $pe->cuerda, $pe->madera);
                    echo"<div class='elfo'>";
                    echo "<div class='texto'>";
                    echo"<p class='elfo_p'> $pe->tipo  $pe->nombre</p>";
                    echo"<p class='elfo_p'>$pe->antiguedad</p><p class='elfo_p''>Elfo</p>";
                    echo"<p class='elfo_p'>$pe->dimension_largo</p><p class='elfo_p''>$pe->dimension_ancho</p>";
                    echo"<p class='elfo_p'>$pe->cuerda</p><p class='elfo_p'>$pe->madera</p>";
                    echo"<p class='elfo_p'>$pe->descripcion</p></div>";   
                    echo "<img src='$pe->imagen' class='top'></div>";                                             
                    //echo "<div class='imagen>'<p id='imagen'><img src='$pe->imagen'></p></div></div>";                             
                }
                if ($pe->tipo == "Casco"){
                    $casco = new Casco($pe->id, $pe->tipo, $pe->nombre, $pe->antiguedad, $pe->dimension_largo, $pe->dimension_ancho, $pe->imagen, $pe->icono, $pe->descripcion, $pe->forma, $pe->vision);
                    echo"<div class='humano'>";
                    echo "<div class='texto'>";
                    echo"<p class='huma_p'> $pe->tipo  $pe->nombre</p>";
                    echo"<p class='huma_p'>$pe->antiguedad</p><p class='huma_p''>$pe->metal</p>";
                    echo"<p class='huma_p'>$pe->dimension_largo</p><p class='huma_p''>$pe->dimension_ancho</p>";
                    echo"<p class='huma_p'>$pe->forma</p><p class='huma_p'>$pe->vision</p>";
                    echo"<p class='huma_p'>$pe->descripcion</p></div>"; 
                    echo "<img src='$pe->imagen' class='top'></div>";                                             
                }
                if ($pe->tipo == "Hacha"){
                    $hacha = new Hacha($pe->id, $pe->tipo, $pe->nombre, $pe->antiguedad, $pe->dimension_largo, $pe->dimension_ancho, $pe->imagen, $pe->icono, $pe->descripcion, $pe->empunadura, $pe->metal);
                    echo"<div class='enano'>";
                    echo "<div class='texto'>";
                    echo"<p class='enano_p'> $pe->tipo  $pe->nombre</p>";
                    echo"<p class='enano_p'>$pe->antiguedad</p><p class='enano_p''>$pe->metal</p>";
                    echo"<p class='enano_p'>$pe->dimension_largo</p><p class='enano_p''>$pe->dimension_ancho</p>";
                    echo"<p class='enano_p'>$pe->empunadura</p><p class='enano_p'>$pe->metal</p>";
                    echo"<p class='enano_p'>$pe->descripcion</p></div>";   
                    echo "<img src='$pe->imagen' class='top'></div>";                                             
                }            
            
            }

?>
</div>
</center>

        </body>
        </html>