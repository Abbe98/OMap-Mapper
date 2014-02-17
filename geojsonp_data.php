<?php
/*
* 
*
*
*/
header('Content-type: application/javascript');

echo '
	var geoJsonData = {
			"type": "FeatureCollection", 
			"features": [
	';

echo '
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [175.2209316333,-37.8210922667 ] } },
				{ "type": "Feature", "id":"2", "geometry": { "type": "Point", "coordinates": [175.2238417833,-37.80975435   ] } },
				{ "type": "Feature", "id":"3", "geometry": { "type": "Point", "coordinates": [175.2169955667,-37.818193     ] } },
				{ "type": "Feature", "id":"4", "geometry": { "type": "Point", "coordinates": [175.2240856667,-37.8216963    ] } },
				{ "type": "Feature", "id":"5", "geometry": { "type": "Point", "coordinates": [175.2196982333,-37.8188702167 ] } },
				{ "type": "Feature", "id":"6", "geometry": { "type": "Point", "coordinates": [175.2209942   ,-37.8192782833 ] } },
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [175.2209316333,-37.8210922667 ] } },
				{ "type": "Feature", "id":"2", "geometry": { "type": "Point", "coordinates": [175.2238417833,-37.80975435   ] } },
				{ "type": "Feature", "id":"3", "geometry": { "type": "Point", "coordinates": [175.2169955667,-37.818193     ] } },
				{ "type": "Feature", "id":"4", "geometry": { "type": "Point", "coordinates": [175.2240856667,-37.8216963    ] } },
				{ "type": "Feature", "id":"5", "geometry": { "type": "Point", "coordinates": [175.2196982333,-37.8188702167 ] } },
				{ "type": "Feature", "id":"6", "geometry": { "type": "Point", "coordinates": [175.2209942   ,-37.8192782833 ] } },
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [175.2209316333,-37.8210922667 ] } },
				{ "type": "Feature", "id":"2", "geometry": { "type": "Point", "coordinates": [175.2238417833,-37.80975435   ] } },
				{ "type": "Feature", "id":"3", "geometry": { "type": "Point", "coordinates": [175.2169955667,-37.818193     ] } },
				{ "type": "Feature", "id":"4", "geometry": { "type": "Point", "coordinates": [175.2240856667,-37.8216963    ] } },
				{ "type": "Feature", "id":"5", "geometry": { "type": "Point", "coordinates": [175.2196982333,-37.8188702167 ] } },
				{ "type": "Feature", "id":"6", "geometry": { "type": "Point", "coordinates": [175.2209942   ,-37.8192782833 ] } },
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [175.2209316333,-37.8210922667 ] } },
				{ "type": "Feature", "id":"2", "geometry": { "type": "Point", "coordinates": [175.2238417833,-37.80975435   ] } },
				{ "type": "Feature", "id":"3", "geometry": { "type": "Point", "coordinates": [175.2169955667,-37.818193     ] } },
				{ "type": "Feature", "id":"4", "geometry": { "type": "Point", "coordinates": [175.2240856667,-37.8216963    ] } },
				{ "type": "Feature", "id":"5", "geometry": { "type": "Point", "coordinates": [175.2196982333,-37.8188702167 ] } },
				{ "type": "Feature", "id":"6", "geometry": { "type": "Point", "coordinates": [175.2209942   ,-37.8192782833 ] } },
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [175.2209316333,-37.8210922667 ] } },
				{ "type": "Feature", "id":"2", "geometry": { "type": "Point", "coordinates": [175.2238417833,-37.80975435   ] } },
				{ "type": "Feature", "id":"3", "geometry": { "type": "Point", "coordinates": [175.2169955667,-37.818193     ] } },
				{ "type": "Feature", "id":"4", "geometry": { "type": "Point", "coordinates": [175.2240856667,-37.8216963    ] } },
				{ "type": "Feature", "id":"5", "geometry": { "type": "Point", "coordinates": [175.2196982333,-37.8188702167 ] } },
				{ "type": "Feature", "id":"6", "geometry": { "type": "Point", "coordinates": [175.2209942   ,-37.8192782833 ] } },
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [175.2209316333,-37.8210922667 ] } },
				{ "type": "Feature", "id":"2", "geometry": { "type": "Point", "coordinates": [175.2238417833,-37.80975435   ] } },
				{ "type": "Feature", "id":"3", "geometry": { "type": "Point", "coordinates": [175.2169955667,-37.818193     ] } },
				{ "type": "Feature", "id":"4", "geometry": { "type": "Point", "coordinates": [175.2240856667,-37.8216963    ] } },
				{ "type": "Feature", "id":"5", "geometry": { "type": "Point", "coordinates": [175.2196982333,-37.8188702167 ] } },
				{ "type": "Feature", "id":"6", "geometry": { "type": "Point", "coordinates": [175.2209942   ,-37.8192782833 ] } },
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [175.2209316333,-37.8210922667 ] } },
				{ "type": "Feature", "id":"2", "geometry": { "type": "Point", "coordinates": [175.2238417833,-37.80975435   ] } },
				{ "type": "Feature", "id":"3", "geometry": { "type": "Point", "coordinates": [175.2169955667,-37.818193     ] } },
				{ "type": "Feature", "id":"4", "geometry": { "type": "Point", "coordinates": [175.2240856667,-37.8216963    ] } },
				{ "type": "Feature", "id":"5", "geometry": { "type": "Point", "coordinates": [175.2196982333,-37.8188702167 ] } },
				{ "type": "Feature", "id":"6", "geometry": { "type": "Point", "coordinates": [175.2209942   ,-37.8192782833 ] } },
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [175.2209316333,-37.8210922667 ] } },
				{ "type": "Feature", "id":"2", "geometry": { "type": "Point", "coordinates": [175.2238417833,-37.80975435   ] } },
				{ "type": "Feature", "id":"3", "geometry": { "type": "Point", "coordinates": [175.2169955667,-37.818193     ] } },
				{ "type": "Feature", "id":"4", "geometry": { "type": "Point", "coordinates": [175.2240856667,-37.8216963    ] } },
				{ "type": "Feature", "id":"5", "geometry": { "type": "Point", "coordinates": [175.2196982333,-37.8188702167 ] } },
				{ "type": "Feature", "id":"6", "geometry": { "type": "Point", "coordinates": [175.2209942   ,-37.8192782833 ] } },
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [175.2209316333,-37.8210922667 ] } },
				{ "type": "Feature", "id":"2", "geometry": { "type": "Point", "coordinates": [175.2238417833,-37.80975435   ] } },
				{ "type": "Feature", "id":"3", "geometry": { "type": "Point", "coordinates": [175.2169955667,-37.818193     ] } },
				{ "type": "Feature", "id":"4", "geometry": { "type": "Point", "coordinates": [175.2240856667,-37.8216963    ] } },
				{ "type": "Feature", "id":"5", "geometry": { "type": "Point", "coordinates": [175.2196982333,-37.8188702167 ] } },
				{ "type": "Feature", "id":"6", "geometry": { "type": "Point", "coordinates": [175.2209942   ,-37.8192782833 ] } },
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [175.2209316333,-37.8210922667 ] } },
				{ "type": "Feature", "id":"2", "geometry": { "type": "Point", "coordinates": [175.2238417833,-37.80975435   ] } },
				{ "type": "Feature", "id":"3", "geometry": { "type": "Point", "coordinates": [175.2169955667,-37.818193     ] } },
				{ "type": "Feature", "id":"4", "geometry": { "type": "Point", "coordinates": [175.2240856667,-37.8216963    ] } },
				{ "type": "Feature", "id":"5", "geometry": { "type": "Point", "coordinates": [175.2196982333,-37.8188702167 ] } },
				{ "type": "Feature", "id":"6", "geometry": { "type": "Point", "coordinates": [175.2209942   ,-37.8192782833 ] } },
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [175.2209316333,-37.8210922667 ] } },
				{ "type": "Feature", "id":"2", "geometry": { "type": "Point", "coordinates": [175.2238417833,-37.80975435   ] } },
				{ "type": "Feature", "id":"3", "geometry": { "type": "Point", "coordinates": [175.2169955667,-37.818193     ] } },
				{ "type": "Feature", "id":"4", "geometry": { "type": "Point", "coordinates": [175.2240856667,-37.8216963    ] } },
				{ "type": "Feature", "id":"5", "geometry": { "type": "Point", "coordinates": [175.2196982333,-37.8188702167 ] } },
				{ "type": "Feature", "id":"6", "geometry": { "type": "Point", "coordinates": [175.2209942   ,-37.8192782833 ] } },
				{ "type": "Feature", "id":"1", "geometry": { "type": "Point", "coordinates": [175.2209316333,-37.8210922667 ] } },
				{ "type": "Feature", "id":"2", "geometry": { "type": "Point", "coordinates": [175.2238417833,-37.80975435   ] } },
				{ "type": "Feature", "id":"3", "geometry": { "type": "Point", "coordinates": [175.2169955667,-37.818193     ] } },
				{ "type": "Feature", "id":"4", "geometry": { "type": "Point", "coordinates": [175.2240856667,-37.8216963    ] } },
				{ "type": "Feature", "id":"5", "geometry": { "type": "Point", "coordinates": [175.2196982333,-37.8188702167 ] } },
				{ "type": "Feature", "id":"6", "geometry": { "type": "Point", "coordinates": [175.2209942   ,-37.8192782833 ] } }
	';

echo '
			]
		};
	';

?>