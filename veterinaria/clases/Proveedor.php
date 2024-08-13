<?php

    include_once('conexion.php');

    class Proveedor{

        //atributos

        private $id_proveedor;
        private $nombre_farmaceutica;
        private $direccion_farmaceutica;
        private $telefono_farmaceutica;
        private $correo_farmaceutica;
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

            $sql = "SELECT * FROM proveedores";
            $resultado = $this->con->consultaRetorno($sql);
            return $resultado;
            
        }

        public function filtrar($valor){

            $sql = "SELECT * FROM proveedores WHERE nombre_farmaceutica like '$valor%'";
            $resultado = $this->con->consultaRetorno($sql);
            return $resultado;
            
        }

        public function crear(){

            $sql = "INSERT INTO proveedores (nombre_farmaceutica,direccion_farmaceutica,telefono_farmaceutica,correo_farmaceutica)
                VALUES ('{$this->nombre_farmaceutica}',  '{$this->direccion_farmaceutica}',    '{$this->telefono_farmaceutica}',  '{$this->correo_farmaceutica}')";

                $this->con->consultaSimple($sql);
                return true;

        }

        public function eliminar(){

            $sql = "DELETE FROM proveedores WHERE id_proveedor ='{$this->id_proveedor}'";
            $resultado = $this->con->consultaSimple($sql);
        }

        public function consultar(){

            $sql = "SELECT * FROM proveedores WHERE id_proveedor ='{$this->id_proveedor}'";
            $resultado = $this->con->consultaRetorno($sql);
            $row = mysqli_fetch_assoc($resultado);

            //set

            $this->id_proveedor = $row['id_proveedor'];
            $this->nombre_farmaceutica = $row['nombre_farmaceutica'];
            $this->direccion_farmaceutica = $row['direccion_farmaceutica'];
            $this->telefono_farmaceutica = $row['telefono_farmaceutica'];
            $this->correo_farmaceutica = $row['correo_farmaceutica'];
            return $row;
        }

        public function editar(){

            $sql = "UPDATE proveedores SET nombre_farmaceutica = '{$this->nombre_farmaceutica}', direccion_farmaceutica = '{$this->direccion_farmaceutica}', telefono_farmaceutica = '{$this->telefono_farmaceutica}', correo_farmaceutica = '{$this->correo_farmaceutica}' WHERE id_proveedor = '{$this->id_proveedor}'";
            $this->con->consultaSimple($sql);
            return true;
        }
    }
?>        