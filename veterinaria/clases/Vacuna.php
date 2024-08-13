<?php

    include_once('conexion.php');

    class Vacuna{

        //atributos

        private $id_vacuna;
        private $nombre;
        private $fecha_expiracion;
        private $lote;
        private $fecha_elaboracion;
        private $cantidad;
        private $tipo_vacuna;
        private $descripcion;
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

            $sql = "SELECT * FROM vacunas";
            $resultado = $this->con->consultaRetorno($sql);
            return $resultado;
            
        }

        public function filtrar($valor){

            $sql = "SELECT * FROM vacunas where nombre like '$valor%'";
            $resultado = $this->con->consultaRetorno($sql);
            return $resultado;
            
        }

        public function crear(){

            $sql = "INSERT INTO vacunas (nombre,fecha_expiracion,lote,fecha_elaboracion,cantidad,tipo_vacuna,descripcion)
                VALUES ('{$this->nombre}',  '{$this->fecha_expiracion}',  '{$this->lote}',  '{$this->fecha_elaboracion}',   '{$this->cantidad}', '{$this->tipo_vacuna}', '{$this->descripcion}')";

                $this->con->consultaSimple($sql);
                return true;

        }

        public function eliminar(){

            $sql = "DELETE FROM vacunas WHERE id_vacuna ='{$this->id_vacuna}'";
            $resultado = $this->con->consultaSimple($sql);
        }

        public function consultar(){

            $sql = "SELECT * FROM vacunas where id_vacuna ='{$this->id_vacuna}'";
            $resultado = $this->con->consultaRetorno($sql);
            $row = mysqli_fetch_assoc($resultado);

            //set

            $this->id_vacuna = $row['id_vacuna'];
            $this->nombre = $row['nombre'];
            $this->fecha_expiracion = $row['fecha_expiracion'];
            $this->lote = $row['lote'];
            $this->fecha_elaboracion = $row['fecha_elaboracion'];
            $this->cantidad = $row['cantidad'];
            $this->tipo_vacuna = $row['tipo_vacuna'];
            $this->descripcion = $row['descripcion'];
            return $row;
        }

        public function editar(){

            $sql = "UPDATE vacunas SET nombre = '{$this->nombre}', fecha_expiracion = '{$this->fecha_expiracion}', lote = '{$this->lote}', fecha_elaboracion = '{$this->fecha_elaboracion}', cantidad = '{$this->cantidad}', tipo_vacuna = '{$this->tipo_vacuna}', descripcion = '{$this->descripcion}' WHERE id_vacuna = '{$this->id_vacuna}'";
                $this->con->consultaSimple($sql);
                return true;
        }
    }
?>        