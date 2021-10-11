<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <!--<script src="https://kit.fontawesome.com/348ef26ed0.js" crossorigin="anonymous"></script>-->
    <title>Personajes</title>
</head>
<body>
    <?php require_once "header_personajes.php" ?>
<center>
    <h3 id='titu'>Personajes</h3>
    <div class="main">
 
        
        <?php
            require_once "class_personajes.php"; 
            require_once "json_personajes.php";
            $personajes=json_decode($json_personaje);
            //var_dump( $personajes);
            foreach($personajes as $pe) {
                if ($pe->tipo == "Orco"){
                    $orco = new Orco($pe->id, $pe->tipo, $pe->nombre, $pe->dni, $pe->altura, $pe->peso, $pe->imagen, $pe->icono, $pe->descripcion, $pe->raza, $pe->temperamento);
                    $dni_valido=$orco->validar();
                    echo"<div class='orco'>";
                    echo "<div class='texto'>";
                    echo"<p class='orco_p'><h3 id='titu2'> $pe->tipo  $pe->nombre</h3></p>";
                    echo"<p class='orco_p'>$pe->dni $dni_valido</p><p class='orco_p''>$pe->raza</p>";
                    echo"<p class='orco_p'>$pe->altura</p><p class='orco_p''>$pe->peso</p>";
                    echo"<p class='orco_p'>$pe->temperamento</p><p class='orco_p'>$pe->raza</p>";
                    echo"<p class='orco_p'>$pe->descripcion</p></div>";
                    echo "<img src='$pe->imagen' class='top'></div>";                                             
                }
                if ($pe->tipo == "Elfo"){
                    $elfo = new Elfo($pe->id, $pe->tipo, $pe->nombre, $pe->dni, $pe->altura, $pe->peso, $pe->imagen, $pe->icono, $pe->descripcion, $pe->orejas, $pe->pelo);
                    $dni_valido=$elfo->validar();
                    echo"<div class='elfo'>";
                    echo "<div class='texto'>";
                    echo"<p class='elfo_p'><h3 id='titu2'> $pe->tipo  $pe->nombre</h3></p>";
                    echo"<p class='elfo_p'>$pe->dni $dni_valido</p><p class='elfo_p''>Elfo</p>";
                    echo"<p class='elfo_p'>$pe->altura</p><p class='elfo_p''>$pe->peso</p>";
                    echo"<p class='elfo_p'>$pe->orejas</p><p class='elfo_p'>$pe->pelo</p>";
                    echo"<p class='elfo_p'>$pe->descripcion</p></div>";   
                    echo "<img src='$pe->imagen' class='top'></div>";                                             
                    //echo "<div class='imagen>'<p id='imagen'><img src='$pe->imagen'></p></div></div>";                             
                }
                if ($pe->tipo == "Humano"){
                    $humano = new Humano($pe->id, $pe->tipo, $pe->nombre, $pe->dni, $pe->altura, $pe->peso, $pe->imagen, $pe->icono, $pe->descripcion, $pe->reino, $pe->codicia);
                    $dni_valido=$humano->validar();
                    echo"<div class='humano'>";
                    echo "<div class='texto'>";
                    echo"<p class='huma_p'><h3 id='titu2'> $pe->tipo  $pe->nombre</h3></p>";
                    echo"<p class='huma_p'>$pe->dni $dni_valido</p><p class='huma_p''>$pe->raza</p>";
                    echo"<p class='huma_p'>$pe->altura</p><p class='huma_p''>$pe->peso</p>";
                    echo"<p class='huma_p'>$pe->reino</p><p class='huma_p'>$pe->codicia</p>";
                    echo"<p class='huma_p'>$pe->descripcion</p></div>"; 
                    echo "<img src='$pe->imagen' class='top'></div>";                                             
                }
                if ($pe->tipo == "Enano"){
                    $enano = new Enano($pe->id, $pe->tipo, $pe->nombre, $pe->dni, $pe->altura, $pe->peso, $pe->imagen, $pe->icono, $pe->descripcion, $pe->debilidad, $pe->hobbie);
                    $dni_valido=$enano->validar();
                    echo"<div class='enano'>";
                    echo "<div class='texto'>";
                    echo"<p class='enano_p'><h3 id='titu2'> $pe->tipo  $pe->nombre</h3></p>";
                    echo"<p class='enano_p'>$pe->dni $dni_valido</p><p class='enano_p''>$pe->raza</p>";
                    echo"<p class='enano_p'>$pe->altura</p><p class='enano_p''>$pe->peso</p>";
                    echo"<p class='enano_p'>$pe->debilidad</p><p class='enano_p'>$pe->hobbie</p>";
                    echo"<p class='enano_p'>$pe->descripcion</p></div>";   
                    echo "<img src='$pe->imagen' class='top'></div>";                                             
                }            
            
            }

?>
</div>
</center>

        </body>
        </html>