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
		case 'cargarVariasImagenes':
			$a = (string)2;
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
			$sql = 'SELECT NOMBRE_ARTICULO, PRECIO FROM TBL_ARTICULOS';
			$resultado =$conexion->ejecutarConsulta($sql);
			while($fila = $conexion->obtenerFila($resultado)){
				$salida[] = $fila;
			}
		break;
		case 'cargar4Ofertas':
			$sql = 'SELECT NOMBRE_ARTICULO, PRECIO FROM TBL_ARTICULOS';
			$resultado =$conexion->ejecutarConsulta($sql);
			$i = 0;
			while($fila = $conexion->obtenerFila($resultado)){
				$i++;
				$salida[] = $fila;
				if($i == 4){
					break;
				}
			}
		break;
		
	}
	//}

    echo json_encode($salida);
    $conexion->cerrarConexion();
?>