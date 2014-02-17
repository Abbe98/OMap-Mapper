var map = L.map('map', {
	zoomControl: false
});
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	attribution: 'Map data &copy; <a href="http://openstr">OpenStreetMap</a> contributors.'
}).addTo(map);