$(document).on('ready', function() {
	cargarProvincias();

	$('sDep').change(cargarProvincias);
});

function cargarProvincias(){
	var coddep = $('#sDep').val();

	$.getJSON('127.0.0.1/proyectosPHP/CI_Listas/prov', {id: coddep}, function(resp) {
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
