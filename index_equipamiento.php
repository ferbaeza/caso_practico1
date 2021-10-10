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
    <h1>Personajes</h1>
    <div class="main">
 
        
        <?php
            require_once "class_equipamiento.php"; 
            require_once "json_equipamiento.php";
            $equipo=json_decode($json_equipo);
            //var_dump( $eqrsonajes);
            foreach($equipo as $eq) {
                if ($eq->tipo == "Espada"){
                    $espada = new Espada($eq->id, $eq->tipo, $eq->nombre, $eq->antiguedad, $eq->dimension_largo, $eq->dimension_ancho, $eq->imagen, $eq->icono, $eq->descripcion, $eq->metal, $eq->empunadura);
                    echo"<div class='espada'>";
                    echo "<div class='texto'>";
                    echo"<p class='espada_p'> $eq->tipo  $eq->nombre</p>";
                    echo"<p class='espada_p'>$eq->antiguedad</p><p class='espada_p''>$eq->metal</p>";
                    echo"<p class='espada_p'>$eq->dimension_largo</p><p class='espada_p''>$eq->dimension_ancho</p>";
                    echo"<p class='espada_p'>$eq->empunadura</p><p class='espada_p'>$eq->metal</p>";
                    echo"<p class='espada_p'>$eq->descripcion</p></div>";
                    echo "<img src='$eq->imagen' class='top'></div>";                                             
                }
                if ($eq->tipo == "Arco"){
                    $arco = new Arco($eq->id, $eq->tipo, $eq->nombre, $eq->antiguedad, $eq->dimension_largo, $eq->dimension_ancho, $eq->imagen, $eq->icono, $eq->descripcion, $eq->orejas, $eq->pelo);
                    echo"<div class='arco'>";
                    echo "<div class='texto'>";
                    echo"<p class='arco_p'> $eq->tipo  $eq->nombre</p>";
                    echo"<p class='arco_p'>$eq->antiguedad</p><p class='arco_p''>$eq->metal</p>";
                    echo"<p class='arco_p'>$eq->dimension_largo</p><p class='arco_p''>$eq->dimension_ancho</p>";
                    echo"<p class='arco_p'>$eq->orejas</p><p class='arco_p'>$eq->pelo</p>";
                    echo"<p class='arco_p'>$eq->descripcion</p></div>";   
                    echo "<img src='$eq->imagen' class='top'></div>";                                             
                    //echo "<div class='imagen>'<p id='imagen'><img src='$eq->imagen'></p></div></div>";                             
                }
                if ($eq->tipo == "Casco"){
                    $casco = new Casco($eq->id, $eq->tipo, $eq->nombre, $eq->antiguedad, $eq->dimension_largo, $eq->dimension_ancho, $eq->imagen, $eq->icono, $eq->descripcion, $eq->reino, $eq->codicia);
                    echo"<div class='casco'>";
                    echo "<div class='texto'>";
                    echo"<p class='casco_p'> $eq->tipo  $eq->nombre</p>";
                    echo"<p class='casco_p'>$eq->antiguedad</p><p class='casco_p''>$eq->metal</p>";
                    echo"<p class='casco_p'>$eq->dimension_largo</p><p class='casco_p''>$eq->dimension_ancho</p>";
                    echo"<p class='casco_p'>$eq->reino</p><p class='casco_p'>$eq->codicia</p>";
                    echo"<p class='casco_p'>$eq->descripcion</p></div>"; 
                    echo "<img src='$eq->imagen' class='top'></div>";                                             
                }
                if ($eq->tipo == "Hacha"){
                    $hacha = new Hacha($eq->id, $eq->tipo, $eq->nombre, $eq->antiguedad, $eq->dimension_largo, $eq->dimension_ancho, $eq->imagen, $eq->icono, $eq->descripcion, $eq->debilidad, $eq->hobbie);
                    echo"<div class='hacha'>";
                    echo "<div class='texto'>";
                    echo"<p class='hacha_p'> $eq->tipo  $eq->nombre</p>";
                    echo"<p class='hacha_p'>$eq->antiguedad</p><p class='hacha_p''>$eq->metal</p>";
                    echo"<p class='hacha_p'>$eq->dimension_largo</p><p class='hacha_p''>$eq->dimension_ancho</p>";
                    echo"<p class='hacha_p'>$eq->debilidad</p><p class='hacha_p'>$eq->hobbie</p>";
                    echo"<p class='hacha_p'>$eq->descripcion</p></div>";   
                    echo "<img src='$eq->imagen' class='top'></div>";                                             
                }            
            
            }

?>
</div>
</center>

        </body>
        </html>