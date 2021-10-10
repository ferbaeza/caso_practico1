<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/348ef26ed0.js" crossorigin="anonymous"></script>
    <title>Personajes</title>
</head>
<body>
    <?php require_once "header_equipamiento.php" ?>
<center>
    <h1>Equipamiento</h1>
    <div class="main">
 
        
        <?php
            require_once "class_equipamiento.php"; 
            require_once "json_equipamiento.php";
            $equipamiento=json_decode($json_equipo);
            foreach($equipamiento as $e) {
                if ($e->tipo == "Espada"){
                    $espada = new Espada($e->id, $e->tipo, $e->nombre, $e->dni, $e->altura, $e->peso, $e->imagen, $e->icono, $e->descripcion, $e->raza, $e->temperamento);
                    var_dump($espada);
                    echo"<div class='orco'>";
                    echo "<div class='texto'>";
                    echo"<p class='orco_p'> $e->tipo  $e->nombre</p>";
                    echo"<p class='orco_p'>$e->dni</p><p class='orco_p''>$e->raza</p>";
                    echo"<p class='orco_p'>$e->altura</p><p class='orco_p''>$e->peso</p>";
                    echo"<p class='orco_p'>$e->temperamento</p><p class='orco_p'>$e->raza</p>";
                    echo"<p class='orco_p'>$e->descripcion</p></div>";
                    echo "<img src='$e->imagen' class='top'></div>";                                             
                }
                if ($e->tipo == "Elfo"){
                    $elfo = new Elfo($e->id, $e->tipo, $e->nombre, $e->dni, $e->altura, $e->peso, $e->imagen, $e->icono, $e->descripcion, $e->orejas, $e->pelo);
                    echo"<div class='elfo'>";
                    echo "<div class='texto'>";
                    echo"<p class='elfo_p'> $e->tipo  $e->nombre</p>";
                    echo"<p class='elfo_p'>$e->dni</p><p class='elfo_p''>$e->raza</p>";
                    echo"<p class='elfo_p'>$e->altura</p><p class='elfo_p''>$e->peso</p>";
                    echo"<p class='elfo_p'>$e->orejas</p><p class='elfo_p'>$e->pelo</p>";
                    echo"<p class='elfo_p'>$e->descripcion</p></div>";   
                    echo "<img src='$e->imagen' class='top'></div>";                                             
                    //echo "<div class='imagen>'<p id='imagen'><img src='$e->imagen'></p></div></div>";                             
                }
                if ($e->tipo == "Humano"){
                    $humano = new Humano($e->id, $e->tipo, $e->nombre, $e->dni, $e->altura, $e->peso, $e->imagen, $e->icono, $e->descripcion, $e->reino, $e->codicia);
                    echo"<div class='humano'>";
                    echo "<div class='texto'>";
                    echo"<p class='huma_p'> $e->tipo  $e->nombre</p>";
                    echo"<p class='huma_p'>$e->dni</p><p class='huma_p''>$e->raza</p>";
                    echo"<p class='huma_p'>$e->altura</p><p class='huma_p''>$e->peso</p>";
                    echo"<p class='huma_p'>$e->reino</p><p class='huma_p'>$e->codicia</p>";
                    echo"<p class='huma_p'>$e->descripcion</p></div>"; 
                    echo "<img src='$e->imagen' class='top'></div>";                                             
                }
                if ($e->tipo == "Enano"){
                    $enano = new Enano($e->id, $e->tipo, $e->nombre, $e->dni, $e->altura, $e->peso, $e->imagen, $e->icono, $e->descripcion, $e->debilidad, $e->hobbie);
                    echo"<div class='enano'>";
                    echo "<div class='texto'>";
                    echo"<p class='enano_p'> $e->tipo  $e->nombre</p>";
                    echo"<p class='enano_p'>$e->dni</p><p class='enano_p''>$e->raza</p>";
                    echo"<p class='enano_p'>$e->altura</p><p class='enano_p''>$e->peso</p>";
                    echo"<p class='enano_p'>$e->debilidad</p><p class='enano_p'>$e->hobbie</p>";
                    echo"<p class='enano_p'>$e->descripcion</p></div>";   
                    echo "<img src='$e->imagen' class='top'></div>";                                             
                }            
            
            }

?>
</div>
</center>

        </body>
        </html>