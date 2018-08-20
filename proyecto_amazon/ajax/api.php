<?php
    include("../class_php/class-conexion.php");
    $conexion = new Conexion();
    $salida = array();
	//if(isset($_POST['accion'])){
	switch($_GET['accion']){
		case 'cargarPaises':
			$sql = "SELECT NOMBRE_UBICACION FROM TBL_UBICACION WHERE CODIGO_TIPO = 1";
			$resultado = $conexion->ejecutarConsulta($sql);
			while($row = $conexion->obtenerFila($resultado)){
				$salida[] = $row;
			}
		break;
		case 'cargarDepartamentos':
			$sql = 'SELECT DESCRIPCION FROM TBL_DEPARTAMENTOS';
			$resultado = $conexion->ejecutarConsulta($sql);
			while($row = $conexion->obtenerFila($resultado)){
				$salida[] = $row;
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
			$a = (string)1;
			$sql = 'SELECT IMAGEN FROM TBL_IMAGENES_DE_ARTICULOS WHERE CODIGO_ARTICULO = '.$a;
			$resultado = $conexion->ejecutarConsulta($sql);
			$i = 0;
			while($fila = $conexion->obtenerImagenPorFila($resultado)){
				$salida[$i] = $fila;
				$i++;
			}
		break;
		/*case 'cargarTodosLosDepartamentos':
			$sql = 'SELECT DESCRIPCION FROM TBL_DEPARTAMENTOS';
			$resultado = $conexion->ejecutarConsulta($sql);
			while($row = $conexion->obtenerFila($resultado)){
				$salida['nombre'] = $row;
			}
			$sql = 
		break;*/
		case 'cargarHistorial':
			$sql = 'SELECT NOMBRE_ARTICULO, PRECIO FROM TBL_ARTICULOS';
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
		break;	
	}
	//}

    echo json_encode($salida);
    $conexion->cerrarConexion();
?>