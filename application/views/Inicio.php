<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>Revelalos!</title>
</head>
<body onload="mostrarCantidad();">	
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1 align="center">Petición para revelar los nombres de los implicados</h1>
					<h3 align="center" id="numeroFirmas"> </h3>
				</div>
				<div id="map" class="col-xs-12 col-md-10 col-md-offset-1" style="background-color: #87b5ff; border-radius: 6px; height: 400px">
				</div>
				
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
				<a href="<?php echo base_url('app/registro');?>" class="btn btn-info" style="margin: 5px; width:100%; font-size: 25px">Firma</a>
				</div>
			</div>
		</div>

		<script>

      function initMap() {
        var myLatLng = {lat: 18.5261268, lng: -69.8835651};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: myLatLng
        });
        <?php 
        	$CI =& get_instance();

        	$rs = $CI->db->query("Select * from usuario order by id desc limit 10");

        	$datos = $rs->result();

        	foreach($datos as $persona) {
        			echo "myLatLng = {lat: {$persona->Latitud}, lng: {$persona->Longitud}};
   					var marker = new google.maps.Marker({
   						position: myLatLng,
   						map: map,
   						title: 'Ultimas firmas'
   					});				
           			";
        	}
        ?>
        
      }

      function mostrarCantidad(){
      	var encabezado = document.getElementById("numeroFirmas");
      	<?php
      		$CI =& get_instance();

        	$rs = $CI->db->query("Select count('ID') AS num from usuario ");

        	$datos = $rs->result();

        	foreach($datos as $cantidad) {
        			echo "encabezado.innerHTML = '{$cantidad->num} personas han firmado' ";
        	}
      	?>
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqWvUA2I1rv6IErcKU0awImqt2ZQCpQwA&callback=initMap">
    </script>
</body>
</html>