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
    $sql = 'select * from employees';
    $resultado = $conexion->ejecutarConsulta($sql);
    while ( $row = $conexion->obtenerFila($resultado) ) {

        //Estos arreglos son hashmaps, es decir sus indices son los nombres de las columnas.
        echo $row["FIRST_NAME"]."<br>";
    }


    $conexion->cerrarConexion();
?>