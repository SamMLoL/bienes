$(document).ready(function() {
	$('#loginForm').validate({
		rules: {
			user: {required:true},
			pass: {required:true},
		},

		messages: {
			user: '¡Ingrese su usuario!',
			pass: '¡Ingrese su contraseña!',
		},
	});
});