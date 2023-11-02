
<?php

    include "Auth.php";

    $usuario = $_POST['usuarios'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $Auth = new Auth();//Crea una instancia para tener acceso al metodo registrar de la clase Auth.

    if($Auth->registrar($usuarios, $password)){
        header("location:index.php");//Una vez registrado te manda directamente al index
    } else {
        echo "No se pudo registrar";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

    <h2>Registro</h2>

    <form action="#" method="POST">
        
        Usuario: <br/><input type="text" name="usuarios"><br/>
        Contraseña: <br/><input type="password" name="password"><br/>
        
        <input type="submit" value="Registrarse">

        <br/><a href="index.php">Ya tiene cuenta? Entra aqui!</a><br/>
    </form>
    
</body>
</html>

