<?php
include 'core/int.php';

header('Content-type: application/javascript');
header('Content-Disposition:attachment;filename="geojson.js"');


$database = Database::getInstanse();
$database ->query("SELECT `name`, `location`, `date`, `id` FROM `locations`");

$rows = $database->resultset();
$rowcount = $database->rowCount();

echo '/*
 * Generated from OMap Mapper
 * https://github.com/Abbe98/OMap-Mapper
*/
';

echo 'var geoJsonData = {
    "type": "FeatureCollection", 
    "features": [
  ';

if ($rowcount < 1) {
  echo '{ "type": "Feature", "id":"0", "geometry": { "type": "Point", "coordinates": [16.4888, 59.15008] } "properties": { "name": "Example", "date": "2014-02-20" } }';
} else {
  $i = 0;
  while ($i <= $rowcount -1) {
    $location = $rows[$i]['location'];
    $lonlat = explode(', ', $location);

    echo '{ "type": "Feature", "id":"' . $rows[$i]['id'] . '", "geometry": { "type": "Point", "coordinates": [' . $lonlat[1] . ',' . $lonlat[0] . '] }, "properties": { "name": "' . $rows[$i]['name'] . '", "date": "' . $rows[$i]['date'] . '" } }';

    if ($i != $rowcount -1) {
      echo ', ';
    }

    $i++;
  }
}
echo '
    ]
  };';
?>
