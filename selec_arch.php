<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/dhtmlgoodies_calendar.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="js/dhtmlgoodies_calendar.js"></script>
<title></title>
</head>

<body>
<p>Subir Archivo
</p>
<form id="formulario" name="formulario" method="POST" action="subir_arch_bd.php" enctype="multipart/form-data">
  <p>
    <input name="archi" type="file" />
  </p>
  <p>
    <label for="numero_od">Numero_odd</label>
    <input type="text" name="nro_od" id="nro_od" /> / <?php echo date("Y"); ?> <input type="hidden" name="anno_od" id="anno_od" value="<?php echo date("Y"); ?>" />
  </p>
  <p>Fecha
   <input type="text" value="<?php echo date("d-m-Y");?>" readonly name="theDate"><input type="button" value="Cal" onclick="displayCalendar(document.forms[0].theDate,'dd-mm-yyyy',this)">
  </p>
  <table width="200">
    <tr>
      <td><label>
        <input name="RadioGroup1" type="radio" id="RadioGroup1_0" value="0" checked="checked" />
        Orden Dia</label></td>
    </tr>
    <tr>
      <td><label>
        <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_1" />
        Adicion</label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>