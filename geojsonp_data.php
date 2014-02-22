<?php
include 'core/int.php';

$database = Database::getInstanse();
$database ->query("SELECT `map`, `name`, `location`, `date`, `id` FROM `locations`");

$rows = $database->resultset();
$rowcount = $database->rowCount();

header('Content-type: application/javascript');

echo '
	var geoJsonData = {
			"type": "FeatureCollection", 
			"features": [
	';

if ($rowcount < 1) {
	echo '{ "type": "Feature", "id":"0", "geometry": { "type": "Point", "coordinates": [16.4888, 59.15008] } "properties": { "name": "Example", "date": "2014-02-20", "map": "_example" } }';
} else {
	$i = 0;
	while ($i <= $rowcount -1) {
		$location = $rows[$i]['location'];
		$lonlat = explode(', ', $location);

		echo '{ "type": "Feature", "id":"' . $rows[$i]['id'] . '", "geometry": { "type": "Point", "coordinates": [' . $lonlat[1] . ',' . $lonlat[0] . '] }, "properties": { "name": "' . $rows[$i]['name'] . '", "date": "' . $rows[$i]['date'] . '", "map": "' . $rows[$i]['map'] .'" } }';

		if ($i != $rowcount -1) {
			echo ', ';
		}

		$i++;
	}
}
echo '
			]
		};
	';

?>