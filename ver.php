<?php require_once('Connections/Conexx.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_Conexx, $Conexx);
$query_ver = "SELECT * FROM orden_dia ORDER BY orden_dia.numero_od ASC, orden_dia.tipo ASC";
$ver = mysql_query($query_ver, $Conexx) or die(mysql_error());
while($row[] = mysql_fetch_assoc($ver));
$row_ver = mysql_fetch_assoc($ver);
$totalRows_ver = mysql_num_rows($ver);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<p>Enero</p>
<?php
for ($x = 0; $x < $totalRows_ver; $x++){
	if ($row[$x]['fecha_mm'] == 1 & $row[$x]['tipo'] == 0){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " . $row[$x]['numero_od']. "</a>";
		echo "<br>";
	}
	if ($row[$x]['fecha_mm'] == 1 & $row[$x]['tipo'] == 1){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " .$row[$x]['numero_od']. " ADICION</a>";
		echo "<br>";
	}
};
?>

<p>Febrero</p>
<?php
for ($x = 0; $x < $totalRows_ver; $x++){
	if ($row[$x]['fecha_mm'] == 2 & $row[$x]['tipo'] == 0){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " . $row[$x]['numero_od']. "</a>";
		echo "<br>";
	}
	if ($row[$x]['fecha_mm'] == 2 & $row[$x]['tipo'] == 1){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " .$row[$x]['numero_od']. " ADICION</a>";
		echo "<br>";
	}
};
?>


<p>Marzo</p>
<?php
for ($x = 0; $x < $totalRows_ver; $x++){
	if ($row[$x]['fecha_mm'] == 3 & $row[$x]['tipo'] == 0){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " . $row[$x]['numero_od']. "</a>";
		echo "<br>";
	}
	if ($row[$x]['fecha_mm'] == 3 & $row[$x]['tipo'] == 1){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " .$row[$x]['numero_od']. " ADICION</a>";
		echo "<br>";
	}
};
?>


<p>Abril</p>
<?php
for ($x = 0; $x < $totalRows_ver; $x++){
	if ($row[$x]['fecha_mm'] == 4 & $row[$x]['tipo'] == 0){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " . $row[$x]['numero_od']. "</a>";
		echo "<br>";
	}
	if ($row[$x]['fecha_mm'] == 4 & $row[$x]['tipo'] == 1){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " .$row[$x]['numero_od']. " ADICION</a>";
		echo "<br>";
	}
};
?>


<p>Mayo</p>
<?php
for ($x = 0; $x < $totalRows_ver; $x++){
	if ($row[$x]['fecha_mm'] == 5 & $row[$x]['tipo'] == 0){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " . $row[$x]['numero_od']. "</a>";
		echo "<br>";
	}
	if ($row[$x]['fecha_mm'] == 5 & $row[$x]['tipo'] == 1){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " .$row[$x]['numero_od']. " ADICION</a>";
		echo "<br>";
	}
};
?>


<p>Junio</p>
<?php
for ($x = 0; $x < $totalRows_ver; $x++){
	if ($row[$x]['fecha_mm'] == 6 & $row[$x]['tipo'] == 0){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " . $row[$x]['numero_od']. "</a>";
		echo "<br>";
	}
	if ($row[$x]['fecha_mm'] == 6 & $row[$x]['tipo'] == 1){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " .$row[$x]['numero_od']. " ADICION</a>";
		echo "<br>";
	}
};
?>


<p>Julio</p>
<?php
for ($x = 0; $x < $totalRows_ver; $x++){
	if ($row[$x]['fecha_mm'] == 7 & $row[$x]['tipo'] == 0){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " . $row[$x]['numero_od']. "</a>";
		echo "<br>";
	}
	if ($row[$x]['fecha_mm'] == 7 & $row[$x]['tipo'] == 1){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " .$row[$x]['numero_od']. " ADICION</a>";
		echo "<br>";
	}
};
?>


<p>Agosto</p>
<?php
for ($x = 0; $x < $totalRows_ver; $x++){
	if ($row[$x]['fecha_mm'] == 8 & $row[$x]['tipo'] == 0){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " . $row[$x]['numero_od']. "</a>";
		echo "<br>";
	}
	if ($row[$x]['fecha_mm'] == 8 & $row[$x]['tipo'] == 1){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " .$row[$x]['numero_od']. " ADICION</a>";
		echo "<br>";
	}
};
?>


<p>Septiembre</p>
<?php
for ($x = 0; $x < $totalRows_ver; $x++){
	if ($row[$x]['fecha_mm'] == 9 & $row[$x]['tipo'] == 0){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " . $row[$x]['numero_od']. "</a>";
		echo "<br>";
	}
	if ($row[$x]['fecha_mm'] == 9 & $row[$x]['tipo'] == 1){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " .$row[$x]['numero_od']. " ADICION</a>";
		echo "<br>";
	}
};
?>


<p>Octubre</p>
<?php
for ($x = 0; $x < $totalRows_ver; $x++){
	if ($row[$x]['fecha_mm'] == 10 & $row[$x]['tipo'] == 0){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " . $row[$x]['numero_od']. "</a>";
		echo "<br>";
	}
	if ($row[$x]['fecha_mm'] == 10 & $row[$x]['tipo'] == 1){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " .$row[$x]['numero_od']. " ADICION</a>";
		echo "<br>";
	}
};
?>


<p>Noviembre</p>
<?php
for ($x = 0; $x < $totalRows_ver; $x++){
	if ($row[$x]['fecha_mm'] == 11 & $row[$x]['tipo'] == 0){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " . $row[$x]['numero_od']. "</a>";
		echo "<br>";
	}
	if ($row[$x]['fecha_mm'] == 11 & $row[$x]['tipo'] == 1){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " .$row[$x]['numero_od']. " ADICION</a>";
		echo "<br>";
	}
};
?>


<p>Diciembre</p>
<?php
for ($x = 0; $x < $totalRows_ver; $x++){
	if ($row[$x]['fecha_mm'] == 12 & $row[$x]['tipo'] == 0){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " . $row[$x]['numero_od']. "</a>";
		echo "<br>";
	}
	if ($row[$x]['fecha_mm'] == 12 & $row[$x]['tipo'] == 1){
		echo "<a href='docOD/".$row[$x]['arch']." 'target='_blank'> " .$row[$x]['numero_od']. " ADICION</a>";
		echo "<br>";
	}
};
?>

</body>
</html>
<?php
mysql_free_result($ver);
?>
