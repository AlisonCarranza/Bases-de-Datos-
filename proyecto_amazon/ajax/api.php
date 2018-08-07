<?php
    include("../class_php/class-conexion.php");
    $conexion = new Conexion();
    $salida = array();
    switch($_POST['accion']){
        case 'primer caso':
        break;
    }

    echo json_encode($salida);
    $conexion->cerrarConexion();
?>