<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Personajes</title>
</head>
<body>
    <?php include "header_personajes.php" ?>
<center>
    <h1>Personajes</h1>
    <div class="main">
 
        
        <?php
            include "class_personajes.php"; 
            include "json_personajes.php";
            $personajes=json_decode($json_personaje);
            //var_dump( $personajes);
            foreach($personajes as $pe) {
                if ($pe->tipo == "Orco"){
                    $orco = new Orco($pe->id, $pe->tipo, $pe->nombre, $pe->dni, $pe->altura, $pe->peso, $pe->imagen, $pe->icono, $pe->descripcion, $pe->raza, $pe->temperamento);
                    //var_dump($orco);
                    echo"<div class='perso'>";
                    echo"<p class='orco_p'> $pe->tipo  $pe->nombre</p>";
                    echo"<p class='orco_p'>$pe->dni</p><p class='orco_p''>$pe->raza</p>";
                    echo"<p class='orco_p'>$pe->altura</p><p class='orco_p''>$pe->peso</p>";
                    echo"<p class='orco_p'>$pe->temperamento</p><p class='orco_p'>$pe->raza</p>";
                    echo"<p class='orco_p'>$pe->descripcion</p></div>";                
                }
                if ($pe->tipo == "Elfo"){
                    $elfo = new Elfo($pe->id, $pe->tipo, $pe->nombre, $pe->dni, $pe->altura, $pe->peso, $pe->imagen, $pe->icono, $pe->descripcion, $pe->orejas, $pe->pelo);
                    //var_dump($orco);
                    echo"<div class='perso'>";
                    echo"<p class='elfo_p'> $pe->tipo  $pe->nombre</p>";
                    echo"<p class='elfo_p'>$pe->dni</p><p class='elfo_p''>$pe->raza</p>";
                    echo"<p class='elfo_p'>$pe->altura</p><p class='elfo_p''>$pe->peso</p>";
                    echo"<p class='elfo_p'>$pe->orejas</p><p class='elfo_p'>$pe->pelo</p>";
                    echo"<p class='elfo_p'>$pe->descripcion</p></div>";                
                }
                if ($pe->tipo == "Humano"){
                    $humano = new Humano($pe->id, $pe->tipo, $pe->nombre, $pe->dni, $pe->altura, $pe->peso, $pe->imagen, $pe->icono, $pe->descripcion, $pe->reino, $pe->codicia);
                    //var_dump($orco);
                    echo"<div class='perso'>";
                    echo"<p class='huma_p'> $pe->tipo  $pe->nombre</p>";
                    echo"<p class='huma_p'>$pe->dni</p><p class='huma_p''>$pe->raza</p>";
                    echo"<p class='huma_p'>$pe->altura</p><p class='huma_p''>$pe->peso</p>";
                    echo"<p class='huma_p'>$pe->reino</p><p class='huma_p'>$pe->codicia</p>";
                    echo"<p class='huma_p'>$pe->descripcion</p></div>";                
                }
                if ($pe->tipo == "Enano"){
                    $enano = new Enano($pe->id, $pe->tipo, $pe->nombre, $pe->dni, $pe->altura, $pe->peso, $pe->imagen, $pe->icono, $pe->descripcion, $pe->debilidad, $pe->hobbie);
                    //var_dump($orco);
                    echo"<div class='perso'>";
                    echo"<p class='enano_p'> $pe->tipo  $pe->nombre</p>";
                    echo"<p class='enano_p'>$pe->dni</p><p class='enano_p''>$pe->raza</p>";
                    echo"<p class='enano_p'>$pe->altura</p><p class='enano_p''>$pe->peso</p>";
                    echo"<p class='enano_p'>$pe->debilidad</p><p class='enano_p'>$pe->hobbie</p>";
                    echo"<p class='enano_p'>$pe->temperamento</p></div>";                
                }

            
            
            
            
            
            }

?>
</div>
</center>

        </body>
        </html>