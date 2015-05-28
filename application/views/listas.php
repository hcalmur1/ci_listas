<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="Listas dependientes con Codeigniter, JQuery, Javascript, HTML5 y CSS3">
	<title><?php echo $titulo;?></title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="offset1 span10 well">
				<h1><?php echo $titulo ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="offset1 span5 well">
				<?php echo form_label('Departamentos', 'dptos'); ?>
				<?php echo form_dropdown('sDep', $deptos, 6, 'id="sDep"'); ?>
				<?php echo form_label('Provincias', 'prov'); ?>
				<?php echo form_dropdown('sProv', array(), null, 'id="sPro"'); ?>
				<?php echo form_label('Distritos', 'dist'); ?>
				<?php echo form_dropdown('sDep', array(), null, 'id="sDis" class="span4"'); ?>
			</div>
			<div class="span5 well">
				<?php echo form_label('Código', 'cod'); ?>
				<span id="cod" class="label label-important"> </span>
				<?php echo form_label('Departamento', 'dptos'); ?>
				<span id="depto" class="label label-success"> </span>
				<?php echo form_label('Provincia', 'prov'); ?>
				<span id="prov" class="label label-success"> </span>
				<?php echo form_label('Distrito', 'dist'); ?>
				<span id="dist" class="label label-success"> </span>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<!--<script type="text/javascript" src="js/test.js"></script>-->
	<script>
	base_url = "http://127.0.0.1/CI_Listas/"

	$(document).on('ready', function() {
		cargarProvincias();

		$('#sDep').change(cargarProvincias);
	});

	function cargarProvincias() {
		var coddep = $('#sDep').val();

		$.getJSON('CI_Listas/desplegables/provincias', {id: coddep}, function(resp) {
				//Limpiar la lista de las provincias
				$('#sPro').empty();
				//Es el foreach de codeigniter o php pero de javascript
				$.each(resp, function(indice, valor) {
					option = $('<option></option>', {
						value: indice,
						text: valor,
						class: 'clase'
					});
					$('#sPro').append(option);
				});
		});
	}
	</script>
</body>
</html>