<?php
echo 'tons of forms and stuff here :-)';
# process stuff here
?>
<!--
Aktivera val på kartan med btn och loga sedan kordinaterna genom value i location.
-->
<form action="" method="post">
	<label>Name: <input type="text" name="name" /></label><br>
	<label>Date: <input type="date" name="date" /></label><br>
	<label>Location: <input type="text" value="" class="hide" name="location" /><button>Choose Location</button></label><br>
	<label>Map: <input type="file" name="map1" /></label><br>
	<label>Map: <input type="file" name="map2" /></label><br>
	<label>Map: <input type="file" name="map3" /></label><br>
	<label>Map: <input type="file" name="map4" /></label><br>
	<label>Map: <input type="file" name="map5" /></label>
</form>