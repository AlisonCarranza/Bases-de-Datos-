<?php
  include ('class-conexion.php');
  $conexion = new Conexion();
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
        $b = (integer)$nombre[0];
        $a = $conexion->guardarImagen($b,$archivo_string);
        if($a != 'termino'){
          $reporte = "<p style='color: red'>Error.</p>";
        }
        else{
          echo "<p style='color: blue'>La imagen $nombre ha sido subida con éxito</p>";
        }
      }
    }
    echo $reporte;
    $conexion->cerrarConexion();
  }
?>