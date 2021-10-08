<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <style>
        .main{
            display: flex;
            width: min-content;
            margin: 0 auto;
        }
        img{
            width: 370px;
            height: 500px;
        }
        .foto_uno {
            display: inline;
            width: 50%;
            height: 195px;
            position: relative;
            display: inline-block;
            margin: 50px;
        }
        .foto_dos {
            width: 50%;
            height: 195px;
            position: relative;
            display: inline-block;
            margin: 50px;
        }
        .foto_uno .top {
            display: inline;
            display: none;
            position: absolute;
            top: 0;
            left: 0;
        }
        .foto_dos .top {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
        }
        .foto_uno:hover .top {
            display: inline;
        }
        .foto_dos:hover .top {
            display: inline;
        }
        .equipamiento{
            visibility: hidden;
        }
        .personajes{
            visibility: hidden;
        }
        .foto_dos:hover .equipamiento {
            visibility: visible;
        }
        .foto_uno:hover .personajes {
            visibility: visible;
        }
        #nav{
            height: 90px;
            width: 100%;
        }
        ul{
            list-style-type: none;
            overflow: hidden;
            background-color:dimgray;
        }
        li {
            float: left; 
            display: block;
            color: white;
            text-align: center;
            padding: 16px;
            text-decoration: none;
        }
        li a:hover {
            background-color: #111111;
        }


    </style>
    </head>
    <body>
    <?php include "header.php"?>
    <div class="main">
        <div class="foto_uno">
            <img src="https://i.pinimg.com/564x/a1/b0/19/a1b019b9d54db4ed3b71033403a13402.jpg" />
            <a href="index_personajes.php"><img src="https://cdn.domestika.org/c_fit,dpr_auto,f_auto,t_base_params,w_820/v1599173271/content-items/005/682/259/52B341F9-4FB7-4748-9377-9C51107711A4-original.jpeg?1599173271" class="top" ></a>
            <h2 class="personajes">Personajes</h2>
        </div>
        <div class="foto_dos">
            <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2013/06/229798-manga-7-armas-luchar-zombis.jpg?itok=NLIF7rqH" />
            <a href="index_fer.php"><img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/480/public/media/image/2013/06/229800-manga-7-armas-luchar-zombis.jpg?itok=j_EvOHpn" class="top" ></a>
            <h2 class="equipamiento">Equipamiento</p>
        </div>
    </div>
</body>
</html>