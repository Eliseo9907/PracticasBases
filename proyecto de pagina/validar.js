function validar(){	
	var nombre = $("#nombre").val();
	
	if (nombre == "") {
		document.formulario.nombre.focus();
		$("#mensaje1").fadeIn();
		return false;
	}
}