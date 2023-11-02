<?php

    session_start();

    include "Auth.php";

    $usuarios = $_POST['usuarios'];
    $password = $_POST['password'];

    $Auth = new Auth();

    if ($Auth->login($usuarios, $password)){
        header("location:inicio.php");
    }else {
        echo "No se pudo logear";
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>
    <form action="#" method="POST">
        Username: <br/><input type="text" name="usuarios" required autofocus><br/>
        Password: <br/><input type="password" name="password" required><br/>
        <input type="submit" value="Iniciar sesion">
        <br/><a href="registro.php">No estás registrado? Registrate aqui</a><br/>
    </form>
    
</body>
</html>