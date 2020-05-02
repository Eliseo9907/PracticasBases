function validar(){
	var nombre,matricula,telefono,carrera;
	//nombre = document.getElementById("nombre").value;
	nombre = $("#nombre").val();
	carrera = $("#carrera").val();
 	matricula =  $("#matricula").val();
 	telefono = $("#telefono").val();
	

	var letras = /^([A-Za-z ñáéíóú]{3,25})$/i;

	if (nombre === "") {	
		document.MAYUS.nombre.focus();
		$("#mensaje1").fadeIn();
		return false;	
	}
	else if (nombre.length<3) {
		document.MAYUS.nombre.focus();
		$("#mensaje2").fadeIn();
		return false;
	}
	else if (!letras.test(nombre)) {
		document.MAYUS.nombre.focus();
		$("#mensaje3").fadeIn();
		return false;
	}

	if (carrera === "") {
		$("#mensaje1").fadeOut();
		$("#mensaje2").fadeOut();
		$("#mensaje3").fadeOut();

		document.MAYUS.carrera.focus();
		$("#mensaje1").fadeIn();
		return false;
	}
	else if (carrera.length<2) {
		document.MAYUS.carrera.focus();
		$("#mensaje4").fadeIn();
		return false;
	}
	else if (!letras.test(carrera)) {
		document.MAYUS.apellidos.focus();
		$("#mensaje3").fadeIn();
		return false;
	}

	if (matricula === "") {
		document.MAYUS.matricula.focus();
		$("#mensaje6").fadeIn();		
		return false;
	}
	else if (matricula.length!=8) {		
		$("#mensaje1").fadeOut();		
		$("#mensaje3").fadeOut();
		$("#mensaje4").fadeOut();

		document.MAYUS.matricula.focus();
		$("#mensaje5").fadeIn();		
		return false;
	}
	else if (isNaN(matricula)) {
		$("#mensaje10").fadeOut();

		document.MAYUS.matricula.focus();
		$("#mensaje11").fadeIn();		
		return false;
	}

	if (telefono === "") {
		document.MAYUS.telefono.focus();
		$("#mensaje8").fadeIn();
		return false;
	}
	else if (telefono.length!=10) {
		$("#mensaje5").fadeOut();
		$("#mensaje6").fadeOut();

		document.MAYUS.telefono.focus();
		$("#mensaje7").fadeIn();	
		return false;
	}		
	else if (isNaN(telefono)) {
		$("#mensaje11").fadeOut();

		document.MAYUS.telefono.focus();
		$("#mensaje12").fadeIn();		
		return false;
	}
	else {
		$("#mensaje1").fadeOut();
		$("#mensaje2").fadeOut();
		$("#mensaje3").fadeOut();
		$("#mensaje4").fadeOut();
		$("#mensaje5").fadeOut();
		$("#mensaje6").fadeOut();
		$("#mensaje7").fadeOut();
		$("#mensaje8").fadeOut();
		$("#mensaje9").fadeOut();
		$("#mensaje10").fadeOut();
		$("#mensaje11").fadeOut();
		$("#mensaje12").fadeOut();
		alert("Bien!!!!!");
		document.MAYUS.submit();
	}
	
}
