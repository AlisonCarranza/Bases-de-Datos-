<?php
    class Conexion{
        private $tablespace = "hr";
        private $contrasena = "oracle";
        private $conexion;

        public function __construct(){
            $this->conexion = oci_connect(
                $this->tablespace,
                $this->contrasena
            );
        }

        public function ejecutarConsulta($sql){
            $sentencia = oci_parse($this->conexion, $sql);
            oci_execute($sentencia);
            return $sentencia;
        }

        public function obtenerFila($resultado){
            return oci_fetch_assoc($resultado);
        }

        public function cerrarConexion(){
            oci_close($this->conexion);
        }

        public function obtenerConexion(){
            return $this->conexion;
        }
    }
?>


