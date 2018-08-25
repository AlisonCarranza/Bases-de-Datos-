<!DOCTYPE html>
<html>
<head>
	<title>Subir todas las fotos</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
</head>
<body>
	<!--<form method="post" action="proceso.php" enctype="multipart/form-data">
    Subir imagen: <input type="file" name="file[]" multiple>
    <input type="submit" value="Subir imágenes" />-->
    <div class="container">		
					<form name="form1" id="form1" method="post" action="proceso.php" enctype="multipart/form-data">
						<br><br><h4 class="text-center">Cargar Imagenes</h4><br><br>
							<h6 class="text-center">Seleccione todas las imagenes a cargar </h6><br>
							<div class="text-center" style="width: 50%; margin-left: 25%">
								<input type="file" class="form-control" id="file[]" name="file[]" multiple="">
							</div><br><br>
                            <div style="text-align: right;" class="text-center">
                                <button type="submit" class="btn btn-primary">Cargar</button>
							</div>
					</form>
		</div>
 </form>
</body>
</html>