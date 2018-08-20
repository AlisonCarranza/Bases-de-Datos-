<!DOCTYPE html>
<html>
<head>
	<title>Subir todas las fotos</title>
</head>
<body>
	<form method="post" action="proceso.php" enctype="multipart/form-data">
    Subir imagen: <input type="file" name="file[]" multiple>
    <input type="submit" value="Subir imágenes" />
 </form>
</body>
</html>