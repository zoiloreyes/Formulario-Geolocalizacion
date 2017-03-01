<!DOCTYPE html>
<?php
	$msg = "";

	$CI = get_instance();
	if($_POST){

		$datos = $_POST;
		$datos["ip"] = $_SERVER["REMOTE_ADDR"];
		$CI->db->insert("usuario",$datos);
		$msg = "Registro Recibido";
	}
?>
<html lang="es">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
		<div class="container">
			<h3 align="center"><?php echo $msg?></h3>
			<form method="post" name="formRegistro" onsubmit="return validar();">
			<div class="row">
				<h2 class="col-md-12" align="center">Registrate</h2>
				<div class="col-md-12" style="margin: 10px">
					<div class="form-group input-group">
						<span class="input-group-addon">Cedula</span>
						<input type="text" class="form-control" name="cedula" required>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">Nombre</span>
						<input type="text" class="form-control" name="nombre" required>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">Email</span>
						<input type="text" class="form-control" name="email" required>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">Teléfono</span>
						<input type="text" class="form-control" name="telefono">
					</div>
					<div class="form-group input-group">	
						<span class="input-group-addon">Comentario</span>
						<textarea name="comentario" class="form-control"></textarea>
					</div>
					<div class="col-md-4 col-md-offset-2">
						<button id="enviar" type="submit" class="btn btn-success btn-block" style="font-size: 20px; margin: 5px">Enviar</button>
						
					</div>
					<div class="col-md-4">
						<a href="<?php echo base_url("app"); ?>" class="btn btn-info btn-block" style="font-size: 20px; margin: 5px">Regresar</a>
					</div>
				</div>
			</div>
			<input type="hidden" name="latitud" id="lat" />
			<input type="hidden" name="longitud" id="lon" />
			</form>
		</div>
		<script type="text/javascript">
			window.onload = function(){
				navigator.geolocation.getCurrentPosition(function(posicion){
					document.getElementById("lat").value = posicion.coords.latitude;
					document.getElementById("lon").value = posicion.coords.longitude;
				}, function(error){
					switch(error.code) {
					        case error.PERMISSION_DENIED:
					        	alert("La página requiere tu ubicación");
					            document.getElementById("enviar").disabled = true;
					            break;
					        case error.POSITION_UNAVAILABLE:
					        	alert("La página requiere tu ubicación");
					            document.getElementById("enviar").disabled = true;
					            break;
					        case error.TIMEOUT:
					        	alert("La página requiere tu ubicación");
					            document.getElementById("enviar").disabled = true;
					            break;
					        case error.UNKNOWN_ERROR:
					        	alert("La página requiere tu ubicación");
					            document.getElementById("enviar").disabled = true;
					            break;
					    }
				});
			}

			function validar(){
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
				var cedula = document.forms["formRegistro"]["cedula"].value;
				var email = document.forms["formRegistro"]["email"].value;
				var telefono = document.forms["formRegistro"]["telefono"].value;
				if(isNaN(cedula)){
					alert("Escribe la cédula usando números");
					return false;
				}else if(cedula.length != 11){
					alert("La cédula debe tener 11 dígitos");
					return false;
				}else if(!email.match(mailformat)){
					alert("Correo inválido");
					return false;
				}else if(isNaN(telefono)){
					alert("El telefono debe tener solo numeros");
					return false;
				}
				else{
					return true;
				}
			}
		</script>
</body>
</html>