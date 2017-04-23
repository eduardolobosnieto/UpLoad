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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "formulario")) {
  $updateSQL = sprintf("UPDATE orden_dia SET tipo=%s WHERE id=%s",
                       GetSQLValueString($_POST['RadioGroup1'], "int"),
                       GetSQLValueString($_POST['gid'], "int"));

  mysql_select_db($database_Conexx, $Conexx);
  $Result1 = mysql_query($updateSQL, $Conexx) or die(mysql_error());

  $updateGoTo = "mok.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_modif = "-1";
if (isset($_GET['id_m'])) {
  $colname_modif = $_GET['id_m'];
}
mysql_select_db($database_Conexx, $Conexx);
$query_modif = sprintf("SELECT * FROM orden_dia WHERE id = %s", GetSQLValueString($colname_modif, "int"));
$modif = mysql_query($query_modif, $Conexx) or die(mysql_error());
$row_modif = mysql_fetch_assoc($modif);
$totalRows_modif = mysql_num_rows($modif);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<p>Subir Archivo
</p>
<form id="formulario" name="formulario" method="POST" action="<?php echo $editFormAction; ?>">
  <p>
  <a href="docOD/<?php echo $row_modif['arch']; ?>">ARCHIVO</a> </p>
  <input name="gid" type="hidden" value="<?php echo $row_modif['id']; ?>">
  <p>
    <label for="numero_od">Numero Orden D&iacute;a</label>
    <?php echo $row_modif['numero_od']; ?>
  </p>
  <p>Fecha = <?php echo $row_modif['fecha_dd']; ?> / <?php echo $row_modif['fecha_mm']; ?> / <?php echo $row_modif['fecha_aa']; ?>
  </p>
  <table width="200">
    <tr>
      <td><label>
        <input <?php if (!(strcmp($row_modif['tipo'],"0"))) {echo "checked=\"checked\"";} ?> name="RadioGroup1" type="radio" id="RadioGroup1_0" value="0" checked="checked" />
        Orden Dia</label></td>
    </tr>
    <tr>
      <td><label>
        <input <?php if (!(strcmp($row_modif['tipo'],"1"))) {echo "checked=\"checked\"";} ?> type="radio" name="RadioGroup1" value="1" id="RadioGroup1_1" />
        Adicion</label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
  <input type="hidden" name="MM_update" value="formulario">
</form>
<p>&nbsp;</p>

</body>
</html>
<?php
mysql_free_result($modif);
?>
