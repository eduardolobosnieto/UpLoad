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
$query_elim = "SELECT * FROM orden_dia ORDER BY numero_od ASC, orden_dia.tipo ASC";
$elim = mysql_query($query_elim, $Conexx) or die(mysql_error());
$row_elim = mysql_fetch_assoc($elim);
$totalRows_elim = mysql_num_rows($elim);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<table width="200" border="1">
  <tr>
    <td>Nro</td>
    <td>O D</td>
    <td>Tipo</td>
    <td>Fecha</td>
    <td>Accion</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo $row_elim['numero_od']; ?></td>
    <td><?php echo $row_elim['tipo']; ?></td>
    <td><?php echo $row_elim['fecha_dd']; ?> / <?php echo $row_elim['fecha_mm']; ?> / <?php echo $row_elim['fecha_aa']; ?></td>
    <td><a href="<?php echo $row_elim['arch']; ?>">Ver</a> - <a href="modif.php?id_m=<?php echo $row_elim['id']; ?>">Modificar</a> - <a href="elim.php?ide=<?php echo $row_elim['id']; ?>">Eliminar</a></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($elim);
?>
