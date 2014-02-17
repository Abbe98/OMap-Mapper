<?php
include 'core/int.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>OMap Mapper</title>
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
				<li><span class="icon-cog"></span></li><!-- trigger settnings -->
				<li><span class="icon-bookmark"></span></li><!-- trigger about -->
			</ul>
		</nav>
		<aside>
			<?php
				if (isset($_GET['a']) === true && empty($_GET['a']) === false) {
					if ($_GET['a'] === 'new') {
						include 'new.php';
					} elseif ($_GET['a'] === 'show' && isset($_GET['id']) === true && empty($_GET['id']) === false) {
						include 'show.php';
					} else {
						echo 'Error: 1';
					}
				} else {
			?>
				<div role="button" onclick="location.href='index.php?a=new'"><span class="icon-compass"></span><span>New</span></div>
				<div role="button"><span class="icon-bookmark"></span><span>About</span></div><!-- force about -->
				<div role="button" onclick="location.href='https://github.com'"><span class="icon-github"></span><span>Source Code</span></div><!-- fix link when public -->
				<div role="button"><span class="icon-cog"></span><span>Settings</span></div><!-- force settings -->
				<div role="button" onclick="location.href='https://github.com'"><span class="icon-bug"></span><span>Report Bugs</span></div><!-- fix link when public -->
			<?php
				}
			?>
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