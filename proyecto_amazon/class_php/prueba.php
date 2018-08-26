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
    }

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
            



            //case 'cargarPorDepartamento':
			$a = (string)'Belleza y Salud';
			//$a = (string)$_GET['codigo'];
			$sql = "SELECT A.NOMBRE_ARTICULO, A.PRECIO ,A.CODIGO_ARTICULO ". 
			"FROM ".
			"TBL_ARTICULOS A ".
			"INNER JOIN ".
			"DEPARTAMENTOS_X_ARTICULOS B ".
			"ON B.CODIGO_ARTICULO = A.CODIGO_ARTICULO AND B.CODIGO_DEPARTAMENTO = ".
			"( ".
			"SELECT CODIGO_DEPARTAMENTO FROM TBL_DEPARTAMENTOS WHERE DESCRIPCION = '".$a."')";			
			$resultado =$conexion->ejecutarConsulta($sql);
			while($fila = $conexion->obtenerFila($resultado)){
                var_dump($fila);
				$sql2 = 'SELECT IMAGEN FROM TBL_IMAGENES_DE_ARTICULOS WHERE CODIGO_ARTICULO = '.(integer)$fila['CODIGO_ARTICULO'];
				$r2 = $conexion->ejecutarConsulta($sql2);
				$f2 = $conexion->obtenerFila2($r2);
                var_dump($f2);
                echo 'a';
                if($f2){
                    $blob = $f2[0]->load();
                }
				$salida[] = $fila;
				$salida[/*'imagen'.$i] = base64_encode($blob);
				//$salida['nombre'.$i] = $fila['NOMBRE_ARTICULO']; 
				//$salida['precio'.$i] = $fila['PRECIO'];
            }

            $sql = "SELECT CODIGO_DEPARTAMENTO FROM TBL_DEPARTAMENTOS";
			$r1 =$conexion->ejecutarConsulta($sql);
			while($fila = $conexion->obtenerFila($r1)){
				$nombreDepto = (integer)$fila["CODIGO_DEPARTAMENTO"];
                $salida['Departamentos'][] = $fila;
                $sql2 =  "	SELECT IMAGEN ".
						"	FROM( ".
						"		SELECT CODIGO_ARTICULO, CODIGO_DEPARTAMENTO ".
						"		FROM ( ".
						"				SELECT A.CODIGO_ARTICULO, B.CODIGO_DEPARTAMENTO ".
						"				FROM ".
						"				TBL_ARTICULOS A ".
						"				INNER JOIN DEPARTAMENTOS_X_ARTICULOS B ".
						"				ON A.CODIGO_ARTICULO = B.CODIGO_ARTICULO ".
						"				ORDER BY DBMS_RANDOM.VALUE ".
						"		)WHERE ROWNUM = 1 ".
						"	) A ".
						"	INNER JOIN TBL_DEPARTAMENTOS B ".
						"	ON B.CODIGO_DEPARTAMENTO = A.CODIGO_DEPARTAMENTO ".
						"	INNER JOIN TBL_IMAGENES_DE_ARTICULOS C ". 
						"	ON A.CODIGO_ARTICULO = C.CODIGO_ARTICULO ".
						"	WHERE ROWNUM = 1 AND B.CODIGO_DEPARTAMENTO = ".$nombreDepto;
                $r2 = $conexion->ejecutarConsulta($sql2);
                //echo $r2.'////<BR>';
				$f2 = $conexion->obtenerFila2($r2);
                //var_dump($f2);
                if($f2){
                    $blob = $f2[0]->load();
                    echo 'imagen'.base64_encode($blob);
                }
                else{
                    $blob = 0;
                }
                $salida['imagen'][] = base64_encode($blob);
			}
            



            $sql = "SELECT CODIGO_DEPARTAMENTO, DESCRIPCION FROM TBL_DEPARTAMENTOS";
			$r1 =$conexion->ejecutarConsulta($sql);
			while($fila = $conexion->obtenerFila($r1)){
				$nombreDepto = (integer)$fila["CODIGO_DEPARTAMENTO"];
                $salida['Departamentos'][] = $fila['DESCRIPCION'];
                $sql2 = "SELECT IMAGEN, A.CODIGO_DEPARTAMENTO ".
                        "FROM(SELECT CODIGO_ARTICULO, CODIGO_DEPARTAMENTO ".
                        "FROM ( ".
                        "        SELECT B.CODIGO_ARTICULO AS CODIGO_ARTICULO, A.CODIGO_DEPARTAMENTO AS CODIGO_DEPARTAMENTO ".
                        "        FROM ".
                        "        TBL_DEPARTAMENTOS A ".
                        "        LEFT JOIN DEPARTAMENTOS_X_ARTICULOS B ".
                        "        ON A.CODIGO_DEPARTAMENTO = B.CODIGO_DEPARTAMENTO ".
                        "        ORDER BY DBMS_RANDOM.VALUE ".
                        "    ) ".
                        "WHERE ROWNUM = 1 AND CODIGO_DEPARTAMENTO = ".$nombreDepto." ".
                        ") A ".
                        "LEFT JOIN TBL_IMAGENES_DE_ARTICULOS C  ".
                        "ON A.CODIGO_ARTICULO = C.CODIGO_ARTICULO ".
                        "WHERE ROWNUM = 1";
                $r2 = $conexion->ejecutarConsulta($sql2);
                //echo $r2.'////<BR>';
				$f2 = $conexion->obtenerFila2($r2);
                //var_dump($f2);
                if($f2[0]!=NULL){
                    $blob = $f2[0]->load();
                    echo 'imagen'.base64_encode($blob);
                    $salida['imagen'][] = base64_encode($blob);
                }
                else{
                    $blob = 0;
                    $salida['imagen'][] = 0;
                }
			}
            $cod = 6;
			$sql = 	"SELECT A.CODIGO_CONTENIDO, C.CONTENIDO, C.CODIGO_PREGUNTA , TO_CHAR(A.FECHA_PUBLICACION,'DD/MM/YYYY') AS FECHA, ".
					"		D.NOMBRE_USUARIO ".
					"FROM TBL_CONTENIDOS_DE_TEXTO A ". 
					"INNER JOIN TBL_ARTICULOS B ".
					"ON A.CODIGO_ARTICULO = B.CODIGO_ARTICULO ".
					"INNER JOIN TBL_PREGUNTAS C ".
					"ON A.CODIGO_CONTENIDO = C.CODIGO_CONTENIDO ".
					"INNER JOIN TBL_USUARIOS D ".
					"ON A.CODIGO_USUARIO = D.CODIGO_USUARIO ".
					"AND A.CODIGO_ARTICULO = ".$cod; 
			$resultado = $conexion->ejecutarConsulta($sql);
			while($row = $conexion->obtenerFila($resultado)){
                $salida['preguntas'][] = $row;
                $cod2 = $row["CODIGO_PREGUNTA"];
                $sql2 = "SELECT A.CODIGO_PREGUNTA, A.CODIGO_RESPUESTA, A.CONTENIDO,  C.NOMBRE_USUARIO ".
                        "FROM TBL_RESPUESTAS A ".
                        "INNER JOIN TBL_CONTENIDOS_DE_TEXTO B ".
                        "ON A.CODIGO_CONTENIDO = B.CODIGO_CONTENIDO ".
                        "INNER JOIN TBL_USUARIOS C ".
                        "ON B.CODIGO_USUARIO = C.CODIGO_USUARIO ".
                        "AND A.CODIGO_PREGUNTA = ".$cod2;
                $r2 = $conexion->ejecutarConsulta($sql2);
                while($f2 = $conexion->obtenerFila($r2)){
                    $salida["respuestas"][] = $f2;
                }
            }
            
SELECT A.CODIGO_ARTICULO, COUNT(*) AS CANTIDAD_OPINIONES
FROM TBL_CONTENIDOS_DE_TEXTO A 
INNER JOIN TBL_ARTICULOS B
ON A.CODIGO_ARTICULO = B.CODIGO_ARTICULO
INNER JOIN TBL_OPINIONES C
ON A.CODIGO_CONTENIDO = C.CODIGO_CONTENIDO
INNER JOIN TBL_USUARIOS D
ON A.CODIGO_USUARIO = D.CODIGO_USUARIO
GROUP BY A.CODIGO_ARTICULO;




$a = (integer)1;
$sql4 = "SELECT A.CODIGO_ARTICULO, COUNT(*) AS CANTIDAD_OPINIONES ".
					"FROM TBL_CONTENIDOS_DE_TEXTO A ".
					"INNER JOIN TBL_ARTICULOS B ".
					"ON A.CODIGO_ARTICULO = B.CODIGO_ARTICULO ".
					"INNER JOIN TBL_OPINIONES C ".
					"ON A.CODIGO_CONTENIDO = C.CODIGO_CONTENIDO ".
					"INNER JOIN TBL_USUARIOS D ".
					"ON A.CODIGO_USUARIO = D.CODIGO_USUARIO ".
                    "AND A.CODIGO_ARTICULO = ".$a.
                    "GROUP BY A.CODIGO_ARTICULO ";
			$r4 = $conexion->ejecutarConsulta($sql4);
			while($fila = $conexion->obtenerFila($r4)){
				if($fila['CANTIDAD_OPINIONES'] != NULL){
					$salida['cantidadOpiniones'] = $fila;
				}
            }
            if(!$conexion->obtenerFila($r4)){
                $salida['cantidadOpiniones'] = 0;
            }


$sql =  "SELECT D.CODIGO_ARTICULO, COUNT(*) AS CANTIDAD_PREGUNTAS ".
        "FROM TBL_PREGUNTAS A ".
        "INNER JOIN TBL_CONTENIDOS_DE_TEXTO B ".
        "ON A.CODIGO_CONTENIDO = B.CODIGO_CONTENIDO ".
        "INNER JOIN TBL_ARTICULOS D ".
        "ON B.CODIGO_ARTICULO = D.CODIGO_ARTICULO ".
        "AND D.CODIGO_ARTICULO = 6 ".
        "GROUP BY D.CODIGO_ARTICULO";
        $r4 =$conexion->ejecutarConsulta($sql);
        while($fila = $conexion->obtenerFila($r4)){
//            if($fila['CANTIDAD_PREGUNTAS'] != NULL){
                $salida['cantidadPreguntas'] = $fila;
 //            }
        }
        if(!$conexion->obtenerFila($r4)){
            $salida['cantidadPreguntas'] = 0;
        }

$sql =  "SELECT D.CODIGO_ARTICULO, COUNT(*) AS CANTIDAD_PREGUNTAS ".
        "FROM TBL_PREGUNTAS A ".
        "INNER JOIN TBL_CONTENIDOS_DE_TEXTO B ".
        "ON A.CODIGO_CONTENIDO = B.CODIGO_CONTENIDO ".
        "INNER JOIN TBL_ARTICULOS D ".
        "ON B.CODIGO_ARTICULO = D.CODIGO_ARTICULO ".
        "AND D.CODIGO_ARTICULO = 6 ".
        "GROUP BY D.CODIGO_ARTICULO";
        $r4 =$conexion->ejecutarConsulta($sql);
        if($r4){
            $salida['cantidadPreguntas'] = 0;
        }
        while($fila = $conexion->obtenerFila($r4)){
            if($fila['CANTIDAD_PREGUNTAS'] != NULL){
                $salida['cantidadPreguntas'] = $fila['CANTIDAD_PREGUNTAS'];
            }
        }

$a = 3;
$b = '';
			$sql6 = "SELECT D.CODIGO_ARTICULO, AVG(A.CODIGO_CANTIDAD_ESTRELLAS) AS PROMEDIO ".
					"FROM TBL_OPINIONES A ".
					"INNER JOIN TBL_CONTENIDOS_DE_TEXTO B ".
					"ON A.CODIGO_CONTENIDO = B.CODIGO_CONTENIDO ".
					"INNER JOIN TBL_ARTICULOS D ".
					"ON B.CODIGO_ARTICULO = D.CODIGO_ARTICULO AND D.CODIGO_ARTICULO = ".$a.
					"GROUP BY D.CODIGO_ARTICULO";
			$r6 =$conexion->ejecutarConsulta($sql6);
			if($r6){
				$salida['cantidadEstrellas'] = 5;
			}
			while($fila = $conexion->obtenerFila($r6)){
				if($fila['PROMEDIO'] != NULL){
					$salida['cantidadEstrellas'] = $fila['PROMEDIO'];
				}
			}        

$nom = 'AnaLop03';
			$sql =  "SELECT A.CODIGO_USUARIO, COUNT(B.CODIGO_ARTICULO) AS CANTIDAD_CARRITO ".
					"FROM TBL_USUARIOS A ".
					"LEFT JOIN TBL_ARTICULOS_DE_CARRITOS B ".
					"ON A.CODIGO_USUARIO = B.CODIGO_USUARIO ".
					"WHERE A.CODIGO_USUARIO = ( ".
					"	SELECT CODIGO_USUARIO ".
					"	FROM TBL_USUARIOS ".
					"	WHERE NOMBRE_USUARIO = '".$nom."' ".
					") ".
					" GROUP BY A.CODIGO_USUARIO ";
			$r = $conexion->ejecutarConsulta($sql);
			while($fila = $conexion->obtenerFila($r)){
				$salida['cantidadCarrito'] = $fila["CANTIDAD_CARRITO"];
			}
   
  $i = 0;
			$nom = (string)'Ale21';
			$sql = "SELECT C.CODIGO_ARTICULO ". 
				   "FROM TBL_USUARIOS A ".
				   "RIGHT JOIN TBL_ARTICULOS_DE_CARRITOS B ".
				   "ON A.CODIGO_USUARIO = B.CODIGO_USUARIO ".
				   "INNER JOIN TBL_ARTICULOS C ".
				   "ON B.CODIGO_ARTICULO = C.CODIGO_ARTICULO ".
				   "WHERE A.CODIGO_USUARIO = ( ".
				   "	SELECT CODIGO_USUARIO ".
				   "	FROM TBL_USUARIOS ".
				   "	WHERE NOMBRE_USUARIO = '".$nom."' ".
                   ")";
                   echo $sql;
			$r = $conexion->ejecutarConsulta($sql);
			while($fila = $conexion->obtenerFila($r)){

                $salida['fila'.$i] = $fila;
				$sql2 = "SELECT NOMBRE_ARTICULO, CODIGO_ARTICULO, ".
 						"	PRECIO ".
						"FROM TBL_ARTICULOS ".
						"WHERE CODIGO_ARTICULO = ".(integer)$fila['CODIGO_ARTICULO'];
				$r2 = $conexion->ejecutarConsulta($sql2);
				$fila2 = $conexion->obtenerFila($r2);
				$salida['nombre'.$i] = $fila2['NOMBRE_ARTICULO'];
				$salida['precio'.$i] = $fila2['PRECIO'];
				
				$a = (integer)$fila['CODIGO_ARTICULO'];
				$sql3 = 'SELECT IMAGEN FROM TBL_IMAGENES_DE_ARTICULOS WHERE CODIGO_ARTICULO = '.$a;
				$r3 = $conexion->ejecutarConsulta($sql3);
				$fila3 = $conexion->obtenerImagenPorFila($r3);
                $salida['imagen'.$i] = $fila3;
				$i++;
            }
            SELECT A.CODIGO_USUARIO, NVL(C.NOMBRE_ARTICULO,0) AS NOMBRE_ARTICULO, NVL(C.PRECIO,0) AS PRECIO, 
    NVL(D.DESCRIPCION,0) AS DESCRIPCION, NVL(TO_CHAR(B.FECHA_DE_COMPRA,'DD/MM/YYYY'),'0') AS FECHA_DE_COMPRA
FROM TBL_USUARIOS A
LEFT JOIN TBL_PEDIDOS B
ON A.CODIGO_USUARIO = B.CODIGO_USUARIO
LEFT JOIN TBL_ARTICULOS C
ON B.CODIGO_ARTICULO = C.CODIGO_ARTICULO
LEFT JOIN TBL_METODO_DE_ENVIO D
ON B.CODIGO_METODO_ENVIO = D.CODIGO_METODO
WHERE A.CODIGO_USUARIO = (
SELECT CODIGO_USUARIO
FROM TBL_USUARIOS
WHERE NOMBRE_USUARIO = 'Ale21'
);
    

    

            $i = 0;
			//$nom = (string)$_GET['nombre'];
			$sql =  "SELECT A.CODIGO_USUARIO, NVL(C.NOMBRE_ARTICULO,0) AS NOMBRE_ARTICULO, NVL(C.PRECIO,0) AS PRECIO, ".
                    "    NVL(D.DESCRIPCION,0) AS DESCRIPCION, NVL(TO_CHAR(B.FECHA_DE_COMPRA,'DD/MM/YYYY'),'0') AS FECHA_DE_COMPRA, ".
                    "NVL(B.CODIGO_ARTICULO,0) AS CODIGO_ARTICULO ".
                    "FROM TBL_USUARIOS A ".
                    "INNER JOIN TBL_PEDIDOS B ".
                    "ON A.CODIGO_USUARIO = B.CODIGO_USUARIO ".
                    "LEFT JOIN TBL_ARTICULOS C ".
                    "ON B.CODIGO_ARTICULO = C.CODIGO_ARTICULO ".
                    "LEFT JOIN TBL_METODO_DE_ENVIO D ".
                    "ON B.CODIGO_METODO_ENVIO = D.CODIGO_METODO ".
                    "WHERE A.CODIGO_USUARIO = ( ".
                    "SELECT CODIGO_USUARIO ".
                    "FROM TBL_USUARIOS ".
                    "WHERE NOMBRE_USUARIO = 'Ale21')";
			$r = $conexion->ejecutarConsulta($sql);
			while($fila = $conexion->obtenerFila($r)){
				$salida['codigoArticulo'][$i] = $fila['CODIGO_ARTICULO'];
				$salida['nombre'][$i] = $fila['NOMBRE_ARTICULO'];
				$salida['precio'][$i] = $fila['PRECIO'];
				$salida['envio'][$i] = $fila['DESCRIPCION'];
				$salida['fecha'][$i] = $fila['FECHA_DE_COMPRA'];
				$salida['codigoUsuario'][$i] = $fila['CODIGO_USUARIO'];
				$a = (integer)$fila['CODIGO_ARTICULO'];
				$sql3 = 'SELECT IMAGEN FROM TBL_IMAGENES_DE_ARTICULOS WHERE CODIGO_ARTICULO = '.$a;
				$r3 = $conexion->ejecutarConsulta($sql3);
				$fila3 = $conexion->obtenerImagenPorFila($r3);
                $salida['imagen'][$i] = $fila3;
				$i++;
			}
   
*/


$palabra = (string)'a';
			$sql =  "SELECT NOMBRE_ARTICULO, PRECIO, CODIGO_ARTICULO ".
					"FROM TBL_ARTICULOS ".
                    "WHERE NOMBRE_ARTICULO LIKE '%bue%'";
            echo $sql;
            $r1 = $conexion->ejecutarConsulta($sql);
            //echo $r1;
            if($r1){
                echo 'no ';
            }
            var_dump($conexion->obtenerFila($r1));
			while($fila = $conexion->obtenerFila($r1)){
                var_dump($fila);
                /*$sql2 = 'SELECT IMAGEN FROM TBL_IMAGENES_DE_ARTICULOS WHERE CODIGO_ARTICULO = '.(integer)$fila['CODIGO_ARTICULO'];
				$r2 = $conexion->ejecutarConsulta($sql2);
				$f2 = $conexion->obtenerFila2($r2);
				$blob = $f2[0]->load();
				$salida[] = $fila;
                $salida[] = base64_encode($blob);*/
            }









    echo var_dump($salida);
    echo json_encode($salida);
    //ECHO '<BR>ASDF';
    $conexion->cerrarConexion();
?>