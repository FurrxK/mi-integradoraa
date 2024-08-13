<?php
    require_once 'conexion.php';

    class Login{
        
        public function __construct($user,$password){
            $this->user = $user;
            $this->pass = $password;
        }
        public function validar(){
            $con = new Conexion();
                $sql = "select nombre from usuarios where password='$this->pass' and user='$this->user'";
            $res = $con->consultaRetorno($sql);

            while ($fila = mysqli_fetch_assoc($res)){
                @session_start();
                $_SESSION['nombre'] = $fila['nombre'];
                $_SESSION['user'] = $this->user;
                $_SESSION['validada'] = 1;
            }
        }
    }
?>