<?php

    include_once('conexion.php');

    class Historial{

        //atributos

        private $id_historial;
        private $diagnostico;
        private $nombre_mascota;
        private $tratamiento;
        private $nombre_vacuna;
        private $fecha_vacuna;
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

            $sql = "SELECT * FROM historial_medico";
            $resultado = $this->con->consultaRetorno($sql);
            return $resultado;
            
        }

        public function filtrar($valor){

            $sql = "SELECT * FROM historial_medico where diagnostico like '$valor%'";
            $resultado = $this->con->consultaRetorno($sql);
            return $resultado;
            
        }

        public function crear(){

            $sql = "INSERT INTO historial_medico (diagnostico,nombre_mascota,tratamiento,nombre_vacuna,fecha_vacuna)
                VALUES ('{$this->diagnostico}',  '{$this->nombre_mascota}',    '{$this->tratamiento}',  '{$this->nombre_vacuna}',   '{$this->fecha_vacuna}')";

                $this->con->consultaSimple($sql);
                return true;

        }

        public function eliminar(){

            $sql = "DELETE FROM historial_medico WHERE id_historial ='{$this->id_historial}'";
            $resultado = $this->con->consultaSimple($sql);
        }

        public function consultar(){

            $sql = "SELECT * FROM historial_medico where id_historial ='{$this->id_historial}'";
            $resultado = $this->con->consultaRetorno($sql);
            $row = mysqli_fetch_assoc($resultado);

            //set

            $this->id_historial = $row['id_historial'];
            $this->diagnostico = $row['diagnostico'];
            $this->nombre_mascota = $row['nombre_mascota'];
            $this->tratamiento = $row['tratamiento'];
            $this->nombre_vacuna = $row['nombre_vacuna'];
            $this->fecha_vacuna = $row['fecha_vacuna'];
            return $row;
        }

        public function editar(){

            $sql = "UPDATE historial_medico SET diagnostico = '{$this->diagnostico}', nombre_mascota = '{$this->nombre_mascota}', tratamiento = '{$this->tratamiento}', nombre_vacuna = '{$this->nombre_vacuna}', fecha_vacuna = '{$this->fecha_vacuna}' WHERE id_historial = '{$this->id_historial}'";
                $this->con->consultaSimple($sql);
                return true;
        }
    }
?>        