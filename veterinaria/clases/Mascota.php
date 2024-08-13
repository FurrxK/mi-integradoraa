<?php

    include_once('conexion.php');

    class Mascota{

        //atributos

        private $id_mascota;
        private $nombre_mascota;
        private $fecha_nacimiento;
        private $tipo_animal;
        private $raza;
        private $peso;
        private $size;
        private $genero;
        private $nombre_persona;
        private $telefono_persona;
        private $correo_persona;
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

            $sql = "SELECT * FROM mascotas";
            $resultado = $this->con->consultaRetorno($sql);
            return $resultado;
            
        }

        public function filtrar($valor){

            $sql = "SELECT * FROM mascotas where nombre_mascota like '$valor%'";
            $resultado = $this->con->consultaRetorno($sql);
            return $resultado;
            
        }

        public function crear(){

            $sql = "INSERT INTO mascotas (nombre_mascota,fecha_nacimiento,tipo_animal,raza,peso,size,genero,nombre_persona,telefono_persona,correo_persona)
                VALUES ('{$this->nombre_mascota}',  '{$this->fecha_nacimiento}',  '{$this->tipo_animal}',   '{$this->raza}', '{$this->peso}', '{$this->size}', '{$this->genero}','{$this->nombre_persona}', '{$this->telefono_persona}', '{$this->correo_persona}')";

                $this->con->consultaSimple($sql);
                return true;

        }

        public function eliminar(){

            $sql = "DELETE FROM mascotas WHERE id_mascota ='{$this->id_mascota}'";
            $resultado = $this->con->consultaSimple($sql);
        }

        public function consultar(){

            $sql = "SELECT * FROM mascotas where id_mascota ='{$this->id_mascota}'";
            $resultado = $this->con->consultaRetorno($sql);
            $row = mysqli_fetch_assoc($resultado);

            //set

            $this->id_mascota = $row['id_mascota'];
            $this->nombre_mascota = $row['nombre_mascota'];
            $this->fecha_nacimiento = $row['fecha_nacimiento'];
            $this->tipo_animal = $row['tipo_animal'];
            $this->raza = $row['raza'];
            $this->peso = $row['peso'];
            $this->size = $row['size'];
            $this->genero = $row['genero'];
            $this->nombre_persona = $row['nombre_persona'];
            $this->telefono_persona = $row['telefono_persona'];
            $this->correo_persona = $row['correo_persona'];
            return $row;
        }

        public function editar(){

            $sql = "UPDATE mascotas SET nombre_mascota = '{$this->nombre_mascota}', fecha_nacimiento = '{$this->fecha_nacimiento}', tipo_animal = '{$this->tipo_animal}', raza = '{$this->raza}', peso = '{$this->peso}', size = '{$this->size}', genero = '{$this->genero}',nombre_persona = '{$this->nombre_persona}', telefono_persona = '{$this->telefono_persona}', correo_persona = '{$this->correo_persona}' WHERE id_mascota = '{$this->id_mascota}'";
                $this->con->consultaSimple($sql);
                return true;
        }
    }
?>        