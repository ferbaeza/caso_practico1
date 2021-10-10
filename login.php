<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main">
    <div class="login">
        <h2>Inserte su usuario y contrasena</h2>
        <form name="login" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
            <table>
                <tr>
                    <td><label>User </label><input id="row" name="user" size="10" placeholder="Enter Username"></tr>
                    <td><label>Password </label><input id="row" name="paswd" size="10" placeholder="Enter Password"></tr>
                    <td><input id="but" type="submit" name="acceso" value="Entrar"></tr>
                </tr>
        </form>
    </div>
    </div>
<?php
    $user= "";
    $pass="";
    if(isset($_POST['acceso'])){
        $user = $_POST['user'];
        $pass = $_POST['paswd'];
        if (empty($user) || empty($pass)){
            echo '<script>alert("Debes rellenar el usuario y password");</script>';
        }
        else{
            //echo '<script>window.location.replace("index_caso.php");</script>';
            header("Location: index.php");
    
        }
    }


?>
    
</body>
</html>