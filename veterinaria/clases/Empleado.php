<?php

    include_once('conexion.php');

    class Empleado{

        //atributos

        private $id_empleado;
        private $nombre;
        private $direccion;
        private $fecha_nacimiento;
        private $lugar_nacimiento;
        private $puesto;
        private $sueldo;
        private $telefono;
        private $correo;
        private $con;

        //metodos

        public function __construct(){

            $this->con = new conexion();
            
        }

        public function set($atributo, $contenido){

            $this->$atributo = $contenido;

        }

        public function get($atributo){

            return $this->$atributo;
            
        }

        public function listar(){

            $sql = "SELECT * FROM empleados";
            $resultado = $this->con->consultaRetorno($sql);
            return $resultado;
            
        }

        public function filtrar($valor){

            $sql = "SELECT * FROM empleados where nombre like '$valor%'";
            $resultado = $this->con->consultaRetorno($sql);
            return $resultado;
            
        }

        public function crear(){

            $sql = "INSERT INTO empleados (nombre,direccion,fecha_nacimiento,lugar_nacimiento,puesto,sueldo,telefono,correo)
                VALUES ('{$this->nombre}',  '{$this->direccion}',    '{$this->fecha_nacimiento}',  '{$this->lugar_nacimiento}',   '{$this->puesto}', '{$this->sueldo}', '{$this->telefono}','{$this->correo}')";

                $this->con->consultaSimple($sql);
                return true;

        }

        public function eliminar(){

            $sql = "DELETE FROM empleados WHERE id_empleado ='{$this->id_empleado}'";
            $resultado = $this->con->consultaSimple($sql);
        }

        public function consultar(){

            $sql = "SELECT * FROM empleados where id_empleado ='{$this->id_empleado}'";
            $resultado = $this->con->consultaRetorno($sql);
            $row = mysqli_fetch_assoc($resultado);

            //set

            $this->id_empleado = $row['id_empleado'];
            $this->nombre = $row['nombre'];
            $this->direccion = $row['direccion'];
            $this->fecha_nacimiento = $row['fecha_nacimiento'];
            $this->lugar_nacimiento = $row['lugar_nacimiento'];
            $this->puesto = $row['puesto'];
            $this->sueldo = $row['sueldo'];
            $this->telefono = $row['telefono'];
            $this->correo = $row['correo'];
            return $row;
        }

        public function editar(){

            $sql = "UPDATE empleados SET nombre = '{$this->nombre}', direccion = '{$this->direccion}', 
            fecha_nacimiento = '{$this->fecha_nacimiento}', lugar_nacimiento = '{$this->lugar_nacimiento}',
             puesto = '{$this->puesto}', sueldo = '{$this->sueldo}', telefono='{$this->telefono}',
              correo='{$this->correo}'  WHERE id_empleado = '{$this->id_empleado}'";
                $this->con->consultaSimple($sql);
                return true;
        }
    }
?>        