<?php

			navigator.geolocation.getCurrentPosition(onSuccess, onError, { timeout: 30000 });
			geocoder = new google.maps.Geocoder();
            

			function onSuccess(position) {

				
				$data[] = array('latitude'=>position.coords.latitude, 'longitude'=>position.coords.longitude);
				echo json_encode($data);

				



			}

			function onError(error) {
                <script>
				alert('code: ' + error.code + '\n' +
					'message: ' + error.message + '\n');
                </script>
			}
			header('Content-Type: application/json');
		
?>
