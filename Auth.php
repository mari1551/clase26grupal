<?php

    include "Conexion.php";

    //Extiende de conexion para que se pueda acceder rapido a la conexion
    class Auth extends Conexion {
        public function registrar($usuarios, $password){
            $conexion = parent::conectar();//Trae por herencia la funcion conectar
            $sql = "INSERT INTO usuarios (usuarios, password) 
                    VALUES (?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ss', $usuarios, $password);//Esto tambien genera una error. Intente cambiarlo pero no encuentro donde estar el error.
            return $query->execute();
        }


        public function login($usuarios, $password){
            $conexion = parent::conectar();
            $passwordExistente = "";
            $sql = "SELECT * FROM usuarios WHERE usuarios = '$usuarios'";
            $respuesta = mysqli_query($conexion, $sql);
            
            //Almacena el password en esa variable
            $passwordExistente = mysqli_fetch_array($respuesta)['password'];

            if(password_verify($password, $passwordExistente)){
                $_SESSION['usuarios'] = $usuarios;
                return true;
            }else {
                return false;
            }
        }
    };


?>