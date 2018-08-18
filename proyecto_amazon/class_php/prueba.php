<?php
    /*
    // Create connection to Oracle
    $conn = oci_connect("hr", "oracle");
    if (!$conn) {
    $m = oci_error();
    echo $m['message'], "\n";
    exit;
    }
    else {
    print "Connected to Oracle!"."<br><br>";
    }
    $sql = 'select * from employees';
    $stmt = oci_parse($conn, $sql);
    oci_execute($stmt);
    while ( $row = oci_fetch_assoc($stmt) ) {
        echo $row["FIRST_NAME"]."<br>";
    }
    // Close the Oracle connection
    oci_close($conn);
    */


    //Llama la clase conexion.
    include("../class_php/class-conexion.php");
    //Crea la instancia de conexion.
    $conexion = new Conexion();
    $salida = array();
    //En esta parte se verifica si la conexion es exitosa.
    if (!$conexion) {
    $m = oci_error();
    echo $m['message'], "\n";
    exit;
    }
    else {
    print "Connected to Oracle!"."<br><br>";
    }

    //Las consultas son cadenas, retornan arreglos, se usa un while para recorrer ese arreglo.
    /*$sql = 'select * from tbl_generos';
    $resultado = $conexion->ejecutarConsulta($sql);
    while ( $row = $conexion->obtenerFila($resultado) ) {

        //Estos arreglos son hashmaps, es decir sus indices son los nombres de las columnas.
        echo $row["NOMBRE_GENERO"]."<br>";
    }*/
    //}else if(isset($_POST['accion'])){
    //    switch($_POST['accion']){
    //        case 'cargarPaises':
                $sql = "SELECT NOMBRE_USUARIO FROM TBL_USUARIOS WHERE CORREO = :correo";
                $a = 'AnaLopez@gmail.com';
                //$conexion->vincularConsulta();
                $conection = $conexion->obtenerConexion();
                $consulta = oci_parse($conection,$sql);
                oci_bind_by_name($consulta, ":correo", $a);
                $resultado = oci_execute($consulta);
                echo $resultado;
                //$resultado = $conexion->ejecutarConsulta($sql);
                while($row = oci_fetch_assoc($consulta)){
                    echo $row['NOMBRE_USUARIO'];
                }
    //        break;
    //    }
    //}
    echo json_encode($salida);
    $conexion->cerrarConexion();
?>