<?php
$a = mt_rand();
$b = mt_rand();
if ($a > $b){
	$x = $a;
	$a = $b;
	$b = $x;
}
$x = mt_rand($a,$b);
$nombre_upload = $_FILES['archi']['name'];
$separar_archivo = explode (".",$nombre_upload);
$nombre_upload_codif = $separar_archivo[0].$x.'.'.$separar_archivo[1];

$nro_od = $_POST['nro_od'];
$anno_od = $_POST['anno_od'];
$a_od = array ($nro_od,$anno_od);
$i_od = implode ("/",$a_od);

$fechaCH = $_POST['theDate'];
$fechaEX = explode ("-",$fechaCH);

//conexion a la base de datos
error_reporting(E_ALL ^ E_DEPRECATED);
$conexion = mysql_connect("localhost" , "root" , "") or die(mysql_error());
mysql_select_db("orden_diveduc",$conexion) or die(mysql_error());

//comprobamos si ha ocurrido un error.
if ($_FILES['archi']["error"] > 0){
	echo "ha ocurrido un error";
} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	$permitidos = array("pdf");
	$limite_kb = 100;

	if (($_FILES['archi']['type']) && $_FILES['archi']['size']){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "docOD/" . $nombre_upload_codif; //$_FILES['arch_resol']['name']
		//comprobamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES['archi']["tmp_name"], $ruta);
			if ($resultado){
				
				$narch = $nombre_upload_codif;
				$radio = $_POST['RadioGroup1'];
				
				//mb_strtoupper;
				
				$sql = "INSERT INTO orden_dia (arch, numero_od, fecha_aa, fecha_mm, fecha_dd, tipo) VALUES ('$narch','$i_od','$fechaEX[2]','$fechaEX[1]','$fechaEX[0]','$radio')";
				
				mysql_query($sql);
				
				echo "el archivo ha sido movido exitosamente";
			} else {
				echo "ocurrio un error al mover el archivo.";
			}
		} else {
			echo $_FILES['archi']['name'] . ", este archivo existe";
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
	}
}

?>

<a href="selec_arch.php">Otro</a>