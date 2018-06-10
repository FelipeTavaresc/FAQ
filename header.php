<!DOCTYPE html>
<html>
<head>
	<title>FCA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/fca.css">
	<link href="jquery-ui.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$( function() {
			$( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
			$( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
		} );
	</script>
	<style>
		.ui-tabs-vertical { width: 80em; }
		.ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
		.ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
		.ui-tabs-vertical .ui-tabs-nav li a { display:block; }
		.ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }
		.ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 60em;}
	</style>


</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Home</a>
			</div>

			<div>
				<ul class="nav navbar-nav">
					<li><a href="softwares.php">Softwares</a></li>
					<li><a href="hardwares.php">Hardwares</a></li>
					<li><a href="utilitarios.php">Utilitários</a></li>
				</ul>
			</div>
		</div>

	</div>

	<div class="container">
		<div class="principal">