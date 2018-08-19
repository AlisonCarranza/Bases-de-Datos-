<?php
    class Conexion{
        private $tablespace = "AMAZON";
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

        public function guardarImagen($codigoArticulo, $archivoEnDatosBinarios){
            $sql = oci_parse($this->conexion, 'INSERT INTO TBL_IMAGENES_DE_ARTICULOS (CODIGO_ARTICULO, IMAGEN) 
                                        VALUES ('.$codigoArticulo.', empty_blob()) 
                                        RETURNING IMAGEN INTO :IMAGEN');
            $blob = oci_new_descriptor($this->conexion, OCI_D_LOB);
            oci_bind_by_name($sql, ":IMAGEN", $blob, -1, OCI_B_BLOB);
            oci_execute($sql, OCI_NO_AUTO_COMMIT);
            $blob->save($archivoEnDatosBinarios);
            oci_commit($this->conexion);
            $blob->free();
            oci_free_statement($sql);
            return 'termino';
        }

        public function obtenerImagenPorFila($sql){
            $archivo= oci_fetch_array($sql, OCI_ASSOC + OCI_NUM + OCI_RETURN_NULLS);
            if(!$archivo){
                return false;
            }else{
                $blob = $archivo[0]->load();
                $a = base64_encode($blob);
                return $a;
            }
        }
    }
?>


