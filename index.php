<?php
include 'core/int.php';

if (empty($_POST) === false) {

	if($_FILES['map']['error'] > 0) {
		die('Error: An error ocurred when uploading.');
	}

	if($_FILES['map']['size'] > 4194304){
		die('Error: File uploaded exceeds maximum upload size.');
	}

	if(file_exists('usercontent/' . $_FILES['map']['name'])){
		die('Error: File with that name already exists.');
	}

	if(!move_uploaded_file($_FILES['map']['tmp_name'], 'usercontent/' . $_FILES['map']['name'])){
		die('Error: Uploading file - check that destination is writeable.');
	}

	$save = array(
			'name' => $_POST['name'],
			'location' => $_POST['location'],
			'date' => $_POST['date'],
			'map' => $_FILES['map']['name']
		);

	save($save);
}


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
				<li><span class="icon-cog" onclick="openClose('settings');"></span></li>
				<li><span class="icon-bookmark" onclick="openClose('about');"></span></li>
			</ul>
		</nav>
		<aside>
			<div id="aside_main">
				<div role="button" onclick="toggle('aside_main', 'aside_new')"><span class="icon-compass"></span><span>New</span></div>
				<div role="button"><span class="icon-bookmark" onclick="openClose('about');"></span><span>About</span></div>
				<div role="button" onclick="location.href='https://github.com'"><span class="icon-github"></span><span>Source Code</span></div><!-- fix link when public -->
				<div role="button"><span class="icon-cog" onclick="openClose('settings');"></span><span>Settings</span></div>
				<div role="button" onclick="location.href='https://github.com'"><span class="icon-bug"></span><span>Report Bugs</span></div><!-- fix link when public -->
			</div>
			<div id="aside_new">
				<form action="" method="post" name="new" onsubmit="return validateForm()" enctype="multipart/form-data">
					<label>Name:* <input type="text" name="name" /></label><br>
					<label>Date: <input type="date" name="date" /></label><br>
					<label>Location:* <input type="text" value="" class="hide" name="location" /><input type="button" id="locationselector" onclick="getLocation();" value="Location"/></label><br>
					<label>Map: <input type="file" name="map" accept="image/x-png, image/jpeg" /></label><br>
					<input type="submit" value="Save" />
				</form>
			</div>
		</aside>
		<section id="about">
			<span class="close" onclick="openClose('about');">X</span>
			<h1>About</h1>
			<p>OMap Mapper is developed by Albin Larsson. Current version: <?php echo $GLOBALS['config']['v']; ?>.</p>
		</section>
		<section id="settings">
			<span class="close" onclick="openClose('settings');">X</span>
			<h1>Settings</h1>
			<p>Nothing here yet... :-(</p>
			<?php
$database = Database::getInstanse();

$database ->query("SELECT `map`, `name`, `location`, `date` FROM `locations`");
$rows = $database->resultset();
echo "<pre>";
print_r($rows);
echo "</pre>";
			?>
		</section>
		<div id="map"></div>

		<!-- Load JS Resources -->
		<script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
		<script src="js/map_config.js"></script>
		<script src="js/leaflet.markercluster.js"></script>
		<script src="geojsonp_data.php"></script>
		<script src="js/functions.js"></script>

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