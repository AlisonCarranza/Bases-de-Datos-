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
		/*if($_POST['login_email']!=''){
			header('location: ../Form2.php');
		}else{
			header('location: ../Form1.php');
		}*/
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
		/*if($_POST['contrasena']!=''){
			header('location: ../index.php');
		}else{
			header('location: ../Form2.php');
		}*/
	}else if(isset($_POST["Continuar3"])){
		if($_POST['nombre']=='' || $_POST['correo']=='' || $_POST['contrasena1']=='' || $_POST['contrasena2']==''){
			header('location: ../Form3.php');
		}else{
			//INSERT INTO TBL_USUARIOS 
            //VALUES(1,1,2,'josue03@hotmail.com','josue01','J0S777','33223723',TO_DATE('14-05-2017','DD/MM/YYYY'),TO_DATE('02-03-1996','DD/MM/YYYY'));
			//$sql = "INSERT INTO TBL_USUARIOS
			//		VALUES(1,1,2,'josue03@hotmail.com','josue01','J0S777','33223723',TO_DATE('14-05-2017','DD/MM/YYYY'),TO_DATE('02-03-1996','DD/MM/YYYY'));";
			//$resultado = $conexion->ejecutarConsulta($sql);
			$bandera = 0;
			/*while ( $row = $conexion->obtenerFila($resultado) ) {
				if($_POST['login_email'] == $row["CORREO"]){
					header('location: ../Form2.php');
					$bandera = 1;
					break;
				}
			}*/
			if($bandera == 0){
				header('location: ../index.php');
			}
		}
		
		/*if($_POST['nombre']!='' && $_POST['correo']!=''){
			header('location: ../index.php');
		}else{
			header('location: ../Form3.php');
        }*/
    }
?>
