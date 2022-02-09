<!DOCTYPE html>
<html lang="es">
<head>
	<title>Iniciar Sesion | Yota</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/yota2.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Vistas/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Vistas/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Vistas/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Vistas/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Vistas/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Vistas/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Vistas/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Vistas/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Vistas/css/util.css">
	<link rel="stylesheet" type="text/css" href="Vistas/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="Controladores/alertifyjs/css/alertify.css">
 <link rel="stylesheet" type="text/css" href="Controladores/alertifyjs/css/themes/default.css">
<script src="Controladores/alertifyjs/alertify.js"></script>
 <!-- el siguiente script obtiene la version del navegador -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bowser/1.9.4/bowser.min.js"></script>
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('Vistas/images/yota.png');">
			<div class="wrap-login100 p-t-30 p-b-50" style="opacity: 0.9">
				<span class="login100-form-title p-b-41">
					<b style="color:#ffffff">Yota</b> <b style="color: #ffffff">|</b> <b style="color:#ffffff">Gestiones</b>
				</span>
				<form id="frmDatos" method="POST" class="login100-form validate-form p-b-33 p-t-5" >

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" id="user" name="user" placeholder="Usuario">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" id="pass" name="pass" placeholder="Contraseña">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button id="btnLogin" class="login100-form-btn">
							Iniciar Sesión
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="Vistas/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Vistas/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Vistas/vendor/bootstrap/js/popper.js"></script>
	<script src="Vistas/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Vistas/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Vistas/vendor/daterangepicker/moment.min.js"></script>
	<script src="Vistas/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Vistas/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Vistas/js/main.js"></script>
	<script src="Controladores/login.js"></script>
	<script src="Controladores/alertifyjs/alertify.js"></script>
	 <script type="text/javascript">
 	window.RTCPeerConnection = window.RTCPeerConnection || window.mozRTCPeerConnection || window.webkitRTCPeerConnection;   //compatibility for firefox and chrome
    var pc = new RTCPeerConnection({iceServers:[]}), noop = function(){};
    pc.createDataChannel("");    //create a bogus data channel
    pc.createOffer(pc.setLocalDescription.bind(pc), noop);    // create offer and set local description
    pc.onicecandidate = function(ice){  //listen for candidate events
        if(!ice || !ice.candidate || !ice.candidate.candidate)  return;
        var myIP = /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/.exec(ice.candidate.candidate)[1];
        //document.write('IP: ', myIP);
        console.log(myIP);
        document.getElementById("ip").value=myIP;
        pc.onicecandidate = noop;
    };



//-----------------------------------------------


 </script>
</body>
</html>
