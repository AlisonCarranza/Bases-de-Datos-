<?php
    include("../class_php/class-conexion.php");
    $conexion = new Conexion();
    $salida = array();
	switch($_GET['accion']){
		case 'cargarPaises':
			$sql = "SELECT NOMBRE_UBICACION FROM TBL_UBICACION WHERE CODIGO_TIPO = 1";
			$resultado = $conexion->ejecutarConsulta($sql);
			while($row = $conexion->obtenerFila($resultado)){
				$salida[] = $row;
			}
		break;
		case 'cargarDepartamentos':
			$sql = "SELECT DESCRIPCION FROM TBL_DEPARTAMENTOS";
			$resultado = $conexion->ejecutarConsulta($sql);
			while($row = $conexion->obtenerFila($resultado)){
				$salida[] = $row;
			}
		break;
		case 'cargarDepartamentos2':
			$sql = "SELECT CODIGO_DEPARTAMENTO, DESCRIPCION FROM TBL_DEPARTAMENTOS";
			$r1 = $conexion->ejecutarConsulta($sql);
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
				$f2 = $conexion->obtenerFila2($r2);
				if($f2[0]!=NULL){
					$blob = $f2[0]->load();
					$salida['imagen'][] = base64_encode($blob);
				}
				else{
					$blob = 0;
					$salida['imagen'][] = 0;
				}
			}
		break;
		case 'cargarIdiomas':
			$sql = 'SELECT NOMBRE_IDIOMA  FROM TBL_IDIOMAS';
			$resultado = $conexion->ejecutarConsulta($sql);
			while($row = $conexion->obtenerFila($resultado)){
				$salida[] = $row;
			}
		break;
		case 'cargarVariasImagenes':
			$sql = "SELECT IMAGEN, CODIGO_ARTICULO FROM TBL_IMAGENES_DE_ARTICULOS ORDER BY DBMS_RANDOM.VALUE";
			$resultado = $conexion->ejecutarConsulta($sql);
			$i = 0;
			while($fila = $conexion->obtenerFila2($resultado)){
				$blob = $fila[0]->load();
				$salida['imagen'.$i] = base64_encode($blob);
				$salida['codigo'.$i] = $fila['CODIGO_ARTICULO'];
				$i++;
				if($i == 2){
					break;
				}
			}
		break;
		case 'cargarHistorial':
			$sql = 'SELECT A.CODIGO_ARTICULO, A.NOMBRE_ARTICULO, A.PRECIO FROM TBL_ARTICULOS A '.
				   'INNER JOIN TBL_IMAGENES_DE_ARTICULOS B ON A.CODIGO_ARTICULO = B.CODIGO_ARTICULO '.
				   '';
			$resultado =$conexion->ejecutarConsulta($sql);
			while($fila = $conexion->obtenerFila($resultado)){
				$salida[] = $fila;
			}
		break;
		case 'cargarOfertas':
			/*$sql = 'SELECT NOMBRE_ARTICULO, PRECIO FROM TBL_ARTICULOS';
			$resultado =$conexion->ejecutarConsulta($sql);
			while($fila = $conexion->obtenerFila($resultado)){
				$salida[] = $fila;
			}*/
			$sql = 'SELECT NOMBRE_ARTICULO, PRECIO, CODIGO_ARTICULO
            FROM TBL_ARTICULOS';
			$resultado =$conexion->ejecutarConsulta($sql);
			//$i = 0;
			while($fila = $conexion->obtenerFila($resultado)){
				$sql2 = 'SELECT IMAGEN FROM TBL_IMAGENES_DE_ARTICULOS WHERE CODIGO_ARTICULO = '.(integer)$fila['CODIGO_ARTICULO'];
				$r2 = $conexion->ejecutarConsulta($sql2);
				$f2 = $conexion->obtenerFila2($r2);
				$blob = $f2[0]->load();
				$salida[] = $fila;
				$salida[] = base64_encode($blob);
			//	$i++;
			//	if($i == 4){
			//		break;
			//	}
			}
		break;
		case 'cargar4Ofertas':
			/*$sql = 'SELECT B.IMAGEN, A.NOMBRE_ARTICULO, A.PRECIO
					FROM TBL_ARTICULOS A 
					LEFT JOIN TBL_IMAGENES_DE_ARTICULOS B
					ON A.CODIGO_ARTICULO = B.CODIGO_ARTICULO';
			$resultado =$conexion->ejecutarConsulta($sql);
			$i = 0;
			while($fila = $conexion->obtenerImagenPorFila($resultado)){
				$i++;
				$salida[] = $fila;
				$blob = $fila[0]->load();
                $a = base64_encode($blob);
				if($i == 4){
					break;
				}
			}*/
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
				$salida[/*'imagen'.$i*/] = base64_encode($blob);
				//$salida['nombre'.$i] = $fila['NOMBRE_ARTICULO']; 
				//$salida['precio'.$i] = $fila['PRECIO'];
				$i++;
				if($i == 4){
					break;
				}
			}
			//$sql = 'SELECT IMAGEN FROM TBL_IMAGENES_DE_ARTICULOS WHERE CODIGO_ARTICULO = ';
		break;
		case 'imagenesDeArticulo':
			$a = (integer)$_GET['codigo'];
			$sql = 'SELECT IMAGEN FROM TBL_IMAGENES_DE_ARTICULOS WHERE CODIGO_ARTICULO = '.$a;
			$resultado = $conexion->ejecutarConsulta($sql);
			$i = 0;
			while($fila = $conexion->obtenerImagenPorFila($resultado)){
				$salida[$i] = $fila;
				$i++;
			}
		break;
		case 'informacionDeArticulo':
			$a = (integer)$_GET['codigo'];
			$sql = 'SELECT CARACTERISTICA FROM TBL_CARACTERISTICAS WHERE CODIGO_ARTICULO='.$a;
			$resultado = $conexion->ejecutarConsulta($sql);
			//$i = 0;
			while($fila = $conexion->obtenerFila($resultado)){
				$salida['caracteristica'][] = $fila;
			//	$i++;
			}
			$sql2 = "SELECT A.NOMBRE_MARCA, B.CODIGO_ARTICULO, B.NOMBRE_ARTICULO, B.CANTIDAD, ".
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
			$salida['cantidad'] = $fila['CANTIDAD'];
            $sql3 = 'SELECT NOMBRE_EMPRESA_ENVIO FROM TBL_EMPRESAS_DE_ENVIO';
            $r3 = $conexion->ejecutarConsulta($sql3);
			while($fila = $conexion->obtenerFila($r3)){
				$salida['empresas'][] = $fila;
			}
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
			if($r4){
				$salida['cantidadOpiniones'] = 0;
			}
			while($fila = $conexion->obtenerFila($r4)){
				if($fila['CANTIDAD_OPINIONES'] != NULL){
					$salida['cantidadOpiniones'] = $fila['CANTIDAD_OPINIONES'];
				}
			}						
			$sql5 =  "SELECT D.CODIGO_ARTICULO, COUNT(*) AS CANTIDAD_PREGUNTAS ".
					"FROM TBL_PREGUNTAS A ".
					"INNER JOIN TBL_CONTENIDOS_DE_TEXTO B ".
					"ON A.CODIGO_CONTENIDO = B.CODIGO_CONTENIDO ".
					"INNER JOIN TBL_ARTICULOS D ".
					"ON B.CODIGO_ARTICULO = D.CODIGO_ARTICULO ".
					"AND D.CODIGO_ARTICULO = ".$a.
					"GROUP BY D.CODIGO_ARTICULO";
			$r5 =$conexion->ejecutarConsulta($sql5);
			if($r5){
				$salida['cantidadPreguntas'] = 0;
			}
			while($fila = $conexion->obtenerFila($r5)){
				if($fila['CANTIDAD_PREGUNTAS'] != NULL){
					$salida['cantidadPreguntas'] = $fila['CANTIDAD_PREGUNTAS'];
				}
			}
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
		break;	
		case 'cargarPiePagina':
			$sql = 'SELECT * FROM TBL_OPCIONES_1';
			$resultado = $conexion->ejecutarConsulta($sql);
			while($fila = $conexion->obtenerFila($resultado)){
				$salida['parte1'][] = $fila;
			}
			$sql2 = 'SELECT * FROM TBL_OPCIONES_2';
			$r2 = $conexion->ejecutarConsulta($sql2);
			while($fila = $conexion->obtenerFila($r2)){
				$salida['parte2'][] = $fila;
			}
		break;
		case 'cargarPorDepartamento':
			$a = (string)$_GET['codigo'];
			$sql = "SELECT A.NOMBRE_ARTICULO, A.PRECIO ,A.CODIGO_ARTICULO ". 
			"FROM ".
			"TBL_ARTICULOS A ".
			"INNER JOIN ".
			"DEPARTAMENTOS_X_ARTICULOS B ".
			"ON B.CODIGO_ARTICULO = A.CODIGO_ARTICULO AND B.CODIGO_DEPARTAMENTO = ".
			"( ".
			"SELECT CODIGO_DEPARTAMENTO FROM TBL_DEPARTAMENTOS WHERE DESCRIPCION = '".$a."' ) ";			
			$resultado = $conexion->ejecutarConsulta($sql);
			$i = 0;
			while($fila = $conexion->obtenerFila($resultado)){
				$sql2 = 'SELECT IMAGEN FROM TBL_IMAGENES_DE_ARTICULOS WHERE CODIGO_ARTICULO = '.(integer)$fila['CODIGO_ARTICULO'];
				$r2 = $conexion->ejecutarConsulta($sql2);
				$f2 = $conexion->obtenerFila2($r2);
				if($f2){
                    $blob = $f2[0]->load();
                }
				$salida[] = $fila;
				$salida[] = base64_encode($blob);
			}
		break;
		case 'cargarPreguntas':
			$cod = (integer)$_GET['codigo'];
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
                $sql2 = "SELECT A.CODIGO_PREGUNTA, A.CODIGO_RESPUESTA, A.CONTENIDO,  C.NOMBRE_USUARIO, B.FECHA_PUBLICACION ".
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
		break;
		case 'cargarOpiniones':
			$cod = (integer)$_GET['codigo'];
			$sql =  "SELECT A.CODIGO_CONTENIDO, C.CONTENIDO, C.CODIGO_OPINION , C.CODIGO_CANTIDAD_ESTRELLAS, ".
					"TO_CHAR(A.FECHA_PUBLICACION,'DD/MM/YYYY') AS FECHA, ".
					"D.NOMBRE_USUARIO ".
					"FROM TBL_CONTENIDOS_DE_TEXTO A ". 
					"INNER JOIN TBL_ARTICULOS B ".
					"ON A.CODIGO_ARTICULO = B.CODIGO_ARTICULO ".
					"INNER JOIN TBL_OPINIONES C ".
					"ON A.CODIGO_CONTENIDO = C.CODIGO_CONTENIDO ".
					"INNER JOIN TBL_USUARIOS D ".
					"ON A.CODIGO_USUARIO = D.CODIGO_USUARIO ".
					"AND A.CODIGO_ARTICULO = ".$cod;
			$r = $conexion->ejecutarConsulta($sql);
			while($fila = $conexion->obtenerFila($r)){
				$salida[] = $fila;
			}
		break;
	}

    echo json_encode($salida);
    $conexion->cerrarConexion();
?>