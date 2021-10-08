<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <script src="https://kit.fontawesome.com/348ef26ed0.js" crossorigin="anonymous"></script>
</head>
<body>
<center>
    <h1>Personajes</h1>
    <div class="tabla_personajes">
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>dni</th>
            <th>Altura</th>
            <th>Peso</th>
            <th>Imagen</th>
            <th>Icono</th>
            <th>Descripcion</th>
            <th>Tipo</th>
            <th>Raza</th>
            <th>Temperamento</th>
        </tr>
        
        <?php 
            include "json_personajes.php";
            $personajes=json_decode($json_personaje);
            //var_dump( $personajes);
            foreach($personajes as $f) {

                echo "<tr>";
                echo "<td>" . $f->$id. "</td>";
                echo "<td>" . $f->nombre . "</td>";
                echo "<td>" . $f->dni . "</td>";
                echo "<td>" . $f->altura . "</td>";
                echo "<td>" . $f->peso . "</td>";
                echo "<td>" . $f->imagen . "</td>";
                echo "<td class='fas fa-person-booth'>" . $f->icono . "</td>";
                echo "<td>" . $f->descripcion . "</td>";
                echo "<td>" . $f->tipo . "</td>";
                echo "<td>" . $f->raza . "</td>";
                echo "<td>" . $f->temperamento . "</td>";
                echo "<tr>";
            }
?>

        </body>
        </html>