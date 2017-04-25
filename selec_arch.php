<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/dhtmlgoodies_calendar.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="js/dhtmlgoodies_calendar.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<title>Orden del D&iacute;a</title>
</head>

<body>




    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Orden del D&iacute;a</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Subir</a></li>
            <li><a href="#">Mantenimiento</a></li>
            <li><a href="#">Ver</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1></h1>
        
        
<form id="formulario" name="formulario" method="POST" action="subir_arch_bd.php" enctype="multipart/form-data" class="form-horizontal">

  <div class="form-group">
    <label for="arch" class="col-sm-2 control-label">Archivo</label>
    <div class="col-sm-7">
    	<input name="archi" type="file" id="inputArch" placeholder="Archivo" />
    </div>
  </div>
  
  <div class="form-group">
  <label for="Numero O-D" class="col-sm-2 control-label">Numero</label>
    <div class="input-group">
      <div class="input-group-addon">N&deg;</div>
      <input type="text" name="nro_od" id="nro_od" class="form-control" placeholder="Numero"/>
      <div class="input-group-addon"> / <?php echo date("Y"); ?> <input type="hidden" name="anno_od" id="anno_od" value="<?php echo date("Y"); ?>" /></div>
    </div>
  </div>

  <div class="form-group">
  <label for="fecha" class="col-sm-2 control-label">Fecha</label>
    <div class="input-group">
      <input type="text" value="<?php echo date("d-m-Y");?>" readonly name="theDate" class="form-control">
      
      <div class="input-group-addon">
      <input type="button" value="Cal" onclick="displayCalendar(document.forms[0].theDate,'dd-mm-yyyy',this)" class="btn btn-primary">
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <label for="arch" class="col-sm-2 control-label">Tipo</label>
    <div class="col-sm-10">
<div class="radio">
  <label>
    <input name="RadioGroup1" type="radio" id="RadioGroup1_0" value="0" checked="checked" />
    Orden Dia
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_1" />
    Adicion
  </label>
</div>
    </div>
  </div>

  <p>&nbsp;</p>
  <div class="row">
  <div class="col-md-6 col-md-offset-3">
  	<button type="submit" class="btn btn-success">Enviar <i class="fa fa-check" aria-hidden="true"></i></button>
    <button type="reset" class="btn btn-danger">Limpiar <i class="fa fa-trash-o" aria-hidden="true"></i></button>
  </div>
</div>
</form>
        
        
      </div>

    </div> <!-- /container -->


<p>&nbsp;</p>









<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>