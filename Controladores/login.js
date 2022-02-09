$(document).ready(function(){

	$('#btnLogin').click(function(){
		var email=$('#email').val();
		var pass=$('#pass').val();

		var datos=$('#frmDatos').serialize();

		if(email===""){
			alertify.error('Ingrese su usuario');
			return false;
		}
		if(pass===""){
			alertify.error('Ingrese su contraseña');
			return false;
		}
		else{

			$.ajax({
				url:"Controladores/login.php",
				method:"POST",
				data:datos,
				cache:false,
				beforeSend:function(){
					$('#btnLogin').text("Accediendo...");
				},
				success:function(data){
					if (data=="1") {
						$(location).attr('href','inicio.php');
					}
					else{
						alertify.alert("Error de acceso","Usuario o contraseña incorrecta");
						$('#btnLogin').text("Iniciar sesión");
						$('#pass').val('');
						return false;
					}
				}

			});
			return false;
		}
	});

});
