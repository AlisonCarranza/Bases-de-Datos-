<?php
	session_start();
    include("../class_php/class-conexion.php");
    $conexion = new Conexion();
    //validacion sincrona basica de los formularios de ingreso y de registro aqui debe usarse consultas
    if(isset($_POST["Continuar"])){
		$sql = "SELECT CORREO FROM TBL_USUARIOS";
		$resultado = $conexion->ejecutarConsulta($sql);
		$bandera = 0;
		while ( $row = $conexion->obtenerFila($resultado) ) {
			if($_POST['login_email'] == $row["CORREO"]){
				$bandera = 1;
				$_SESSION['correo'] = $row['CORREO'];
				header('location: ../Form2.php');
				break;
			}
		}
		if($bandera == 0){
			header('location: ../Form1.php');
		}
	}else if(isset($_POST["Continuar2"])){
		$sql = "SELECT CONTRASENA FROM TBL_USUARIOS";
		$resultado = $conexion->ejecutarConsulta($sql);
		$bandera = 0;
		$_SESSION['nombre'] = 'Ingresar';
		while ( $row = $conexion->obtenerFila($resultado) ) {
			if($_POST['contrasena'] == $row["CONTRASENA"]){
				$sql2 = "SELECT NOMBRE_USUARIO FROM TBL_USUARIOS WHERE CORREO = :correo";
                $conection = $conexion->obtenerConexion();
                $consulta = oci_parse($conection,$sql2);
                oci_bind_by_name($consulta, ":correo", $_SESSION['correo']);
                $resultado = oci_execute($consulta);
                while($row = oci_fetch_assoc($consulta)){
                    $_SESSION['nombre'] = $row['NOMBRE_USUARIO'];
				}
				$bandera = 1;
				header('location: ../index.php');
				break;
			}
		}
		if($bandera == 0){
			header('location: ../Form2.php');
		}
	}else if(isset($_POST["Continuar3"])){
		if($_POST['nombre']=='' || $_POST['correo']=='' || 
		   $_POST['contrasena1']=='' || $_POST['contrasena2']=='' ||
		   $_POST['telefono'] == '' || $_POST['fechaN'] == ''){
			header('location: ../Form3.php');
		}else{
			$pais = $_POST['slc-pais'];
			$genero = (integer)$_POST['rbt-genero'];
			$correo = $_POST['correo'];
			$contrasena = $_POST['contrasena1'];
			$nombre = $_POST['nombre'];
			$telefono = (integer)$_POST['telefono'];
			$fechaN = $_POST['fechaN'];
			//INSERT INTO TBL_USUARIOS 
            //VALUES(1,1,2,'josue03@hotmail.com','josue01','J0S777','33223723',TO_DATE('14-05-2017','DD/MM/YYYY'),TO_DATE('02-03-1996','DD/MM/YYYY'));
			$sql = "INSERT INTO TBL_USUARIOS
					VALUES(SQ_CODIGO_USUARIO.NEXTVAL,".
					$pais.",".$genero.",'".$correo."','".$contrasena.
					"','".$nombre."',".$telefono.",TO_DATE(SYSDATE, 'DD/MM/YYYY'),TO_DATE('".$fechaN."','YYYY/MM/DD'))";
			$resultado = $conexion->ejecutarConsulta($sql);
			if($resultado){
				header('location: ../index.php');
				$_SESSION['nombre'] = $nombre;
				//echo $sql;
				//echo $_POST['slc-pais'];
			}else{
				echo oci_error($conexion->obtenerConexion());
			}
		}
    } else if(isset($_POST["Continuar4"])){
		if( $_POST['nombre']=='' ||  
			$_POST['Telefono'] == ''){
			header('location: ../FormCompra.php');
		}else{
			$sql = "INSERT INTO TBL_PEDIDOS VALUES(SQ_CODIGO_PEDIDO.NEXTVAL, ".
			"(SELECT CODIGO_USUARIO FROM TBL_USUARIOS ". 
			"WHERE NOMBRE_USUARIO = '".(string)$_POST['nombre-usuario']."'),".(integer)$_POST['codigo-articulo'].", 1,TO_DATE(SYSDATE, 'DD/MM/YYYY'),1)";
			$resultado = $conexion->ejecutarConsulta($sql);
			//echo $sql;
			if($resultado){
				header('location: ../index.php');
			}else{
				echo oci_error($conexion->obtenerConexion());
			}
		}
	} else if(isset($_POST["continuar5"])){
		if( $_POST['cantidad']=='' ||  
			$_POST['descripcion'] == ''){
			header('location: ../FormVenta.php');
		}else{
			$nom = (string)$_POST['nombre-usuario'];
			$env = (integer)$_POST['slc-tipo'];
			$pais = (integer)$_POST['slc-pais'];
			$marca = (integer)$_POST['slc-marcas'];
			$desc = (string)$_POST['descripcion'];
			$cant = (integer)$_POST['cantidad'];
			$precio = (integer)$_POST['precio'];
			$nombre = (string)$_POST['nombre'];
			$departamento = (integer)$_POST['slc-deptos'];
			$sql = "INSERT INTO TBL_ARTICULOS ".
				   "VALUES (SQ_CODIGO_ARTICULO.NEXTVAL,(SELECT CODIGO_USUARIO FROM TBL_USUARIOS WHERE NOMBRE_USUARIO = '".
				   $nom."'), ".$env.",".$marca.",".$pais.",3,'".$desc."',10, ".
				   "TO_DATE(SYSDATE,'DD-MM-YYYY'),'".$nombre."',".$precio.")";
			//echo "HOLA".$sql;
			$resultado = $conexion->ejecutarConsulta($sql);
			//echo $sql;
			if($resultado){
				$sql2 = "SELECT CODIGO_ARTICULO ".
				        "FROM ( ".
				        "SELECT CODIGO_ARTICULO FROM TBL_ARTICULOS ". 
				        "ORDER BY CODIGO_ARTICULO DESC ".
				        ") ".
						"WHERE ROWNUM = 1";
				$r2 = $conexion->ejecutarConsulta($sql2);
				while($fila = $conexion->obtenerFila($r2)){
					$codigo =$fila['CODIGO_ARTICULO'];
					$_SESSION['cod'] = $codigo;
					//echo $sql.' '.$codigo;
				}
				$sql3 = "INSERT INTO DEPARTAMENTOS_X_ARTICULOS VALUES (".$codigo.",".$departamento.")";
				echo $sql3;
				$r3 = $conexion->ejecutarConsulta($sql3);
				//if($r3){}
				header('location: ../subir.php?codigo='.$codigo);
			}else{
				echo oci_error($conexion->obtenerConexion());
			}
		}
	}
	if (isset($_FILES["file"]))
	{
		$reporte = null;
		foreach($_FILES["file"]['tmp_name'] as $key => $tmp_name){
		//for($x=0; $x<count($_FILES["file"]["name"]); $x++){
		$file = $_FILES["file"];
		$nombre = $file["name"][$key];
		$tipo = $file["type"][$key];
		//$ruta_provisional = $file[$key][$key];
		$string = $file["tmp_name"][$key];
		$archivo_string = file_get_contents($string);
		if ($tipo != 'image/jpeg' && $tipo != 'image/jpg' && $tipo != 'image/png' && $tipo != 'image/gif'){
			$reporte = "<p style='color: red'>Error $nombre, el archivo no es una imagen.</p>";
		}
		else{
			$b = (integer)$_SESSION['cod'];
			$a = $conexion->guardarImagen($b,$archivo_string);
			if($a != 'termino'){
			$reporte = "<p style='color: red'>Error.</p>";
			}
			else{
			echo "<p style='color: blue'>La imagen $nombre ha sido subida con éxito</p>";
			header('location: ../index.php');
			}
		}
		}
		echo $reporte;
		$conexion->cerrarConexion();
	}
?>
