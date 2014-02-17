<?php
include 'core/int.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Map OMapper</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<meta charset="utf-8" />

		<!-- Load Styles -->
		<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
		<link rel="stylesheet" href="css/markercluster.css" />
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<nav>
			<ul>
				<li>OMap Mapper</li>
				<li><a class="icon-bug" href="#"></a></li>
				<li><a class="icon-github" href="#"></a></li>
				<li><span class="icon-cog" href="#"></span></li><!-- trigger settnings -->
			</ul>
		</nav>
		<aside>
			content
		</aside>
		<div id="map"></div>

		<!-- Load JS Resources -->
		<script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
		<script src="js/map_config.js"></script>
		<script src="js/leaflet.markercluster.js"></script>
		<script src="geojsonp_data.php"></script>

		<script>
		var markers = L.markerClusterGroup();
		var geoJsonLayer = L.geoJson(geoJsonData);
		markers.addLayer(geoJsonLayer);
		map.addLayer(markers);

		//center map by markers
		map.fitBounds(markers.getBounds());
		</script>
	</body>
</html>