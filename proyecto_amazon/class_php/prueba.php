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
                /*$sql = "SELECT NOMBRE_USUARIO FROM TBL_USUARIOS WHERE CORREO = :correo";
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
    $sql = 'SELECT NOMBRE_ARTICULO, PRECIO, CODIGO_ARTICULO
            FROM TBL_ARTICULOS';
    $resultado =$conexion->ejecutarConsulta($sql);
    $i = 0;
    while($fila = $conexion->obtenerFila($resultado)){
        $sql2 = 'SELECT IMAGEN FROM TBL_IMAGENES_DE_ARTICULOS WHERE CODIGO_ARTICULO = '.(integer)$fila['CODIGO_ARTICULO'];
        $r2 = $conexion->ejecutarConsulta($sql2);
        $f2 = $conexion->obtenerFila2($r2);
        $blob = $f2[0]->load();
        $salida[] = $fila;
        $salida['imagen'.$i] = base64_encode($blob);
        //$salida['nombre'.$i] = $fila['NOMBRE_ARTICULO']; 
        //$salida['precio'.$i] = $fila['PRECIO'];
        if($i == 4){
            break;
        }
        $i++;
    }*/

    $a = (integer)1;
			$sql = 'SELECT CARACTERISTICA FROM TBL_CARACTERISTICAS WHERE CODIGO_ARTICULO='.$a;
			$resultado = $conexion->ejecutarConsulta($sql);
			//$i = 0;
			while($fila = $conexion->obtenerFila($resultado)){
				$salida['caracteristica'][] = $fila;
				//$i++;
			}
			$sql2 = "SELECT A.NOMBRE_MARCA, B.CODIGO_ARTICULO, B.NOMBRE_ARTICULO,".
						"C.NOMBRE_USUARIO, D.NOMBRE_UBICACION AS REGION_DE_VENTA, ".
						"E.DESCRIPCION AS ENVIO, ".
				   		"TO_CHAR(B.FECHA_DE_PUBLICACION,'DD/MM/YYYY') AS FECHA_PUBLICACION, B.DESCRIPCION, B.PRECIO ".
			"FROM TBL_MARCAS A, TBL_ARTICULOS B, TBL_USUARIOS C, TBL_UBICACION D, TBL_TIPO_ENVIOS E ".
			"WHERE A.CODIGO_MARCA = B.CODIGO_MARCA AND ".
			"C.CODIGO_USUARIO = B.CODIGO_USUARIO_PUBLICO AND ".
			"B.REGION_DE_VENTA = D.CODIGO_UBICACION AND ".
			"B.CODIGO_TIPO_ENVIO = E.CODIGO_TIPO AND ".
			"B.CODIGO_ARTICULO = ".$a.
			" ORDER BY B.CODIGO_ARTICULO ASC";
			$r2 = $conexion->ejecutarConsulta($sql2);
			$fila = $conexion->obtenerFila($r2);
			$salida['marca'] = $fila['NOMBRE_MARCA'];
			$salida['nombre'] = $fila['NOMBRE_ARTICULO'];
			$salida['usuario'] = $fila['NOMBRE_USUARIO'];			
			$salida['regionDeVenta'] = $fila['REGION_DE_VENTA'];
			$salida['tipoEnvio'] = $fila['ENVIO'];
			$salida['fechaPublicacion'] = $fila['FECHA_PUBLICACION'];
			$salida['descripcion'] = $fila['DESCRIPCION'];
			$salida['precio'] = $fila['PRECIO'];
            
            $sql3 = 'SELECT NOMBRE_EMPRESA_ENVIO FROM TBL_EMPRESAS_DE_ENVIO';
            $r3 = $conexion->ejecutarConsulta($sql3);
			while($fila = $conexion->obtenerFila($r3)){
				$salida['empresas'][] = $fila;
			}

    echo var_dump($salida);
    echo json_encode($salida);
    $conexion->cerrarConexion();
?>