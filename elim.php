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

$colname_elim = "-1";
if (isset($_GET['ide'])) {
  $colname_elim = $_GET['ide'];
}
mysql_select_db($database_Conexx, $Conexx);
$query_elim = sprintf("SELECT * FROM orden_dia WHERE id = %s", GetSQLValueString($colname_elim, "int"));
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
<p><?php echo $row_elim['arch']; ?>
  <?php echo $row_elim['numero_od']; ?>
  <?php echo $row_elim['fecha_dd']; ?>
  <?php echo $row_elim['fecha_mm']; ?>
  <?php echo $row_elim['fecha_aa']; ?>
  <?php echo $row_elim['tipo']; ?>
</p>
<p>&nbsp;</p>
<p>SI</p>
</body>
</html>
<?php
mysql_free_result($elim);
?>
