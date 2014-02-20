<?php




header('Content-type: application/javascript');

echo '
	var geoJsonData = {
			"type": "FeatureCollection", 
			"features": [
	';

echo '
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [56.59579, 41.87988] } },
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [-7.75635, 69.17818] } },
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [56.59579, 41.87988] } },
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [-7.75635, 69.17818] } }
	';

echo '
			]
		};
	';

?>