var map = L.map('map', {
  zoomControl: false
});

L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: 'Map data &copy; <a href="http://openstr">OpenStreetMap</a> contributors.'
}).addTo(map);

var markers = L.markerClusterGroup();
var geoJsonLayer = L.geoJson(geoJsonData, {
  onEachFeature: function (feature, layer) {
    layer.on('click', function (e) {
      var id = feature.id;
      var name = feature.properties.name;
      var date = feature.properties.date;
      var map = feature.properties.map;

    showMap(id, name, date, map);
    });
  }
});

markers.addLayer(geoJsonLayer);
map.addLayer(markers);

map.fitBounds(markers.getBounds());

function openClose(element1) {
  var e = document.getElementById(element1);
  if (e.offsetWidth > 0 || e.offsetHeight > 0) {
    e.style.display = 'none';
  } else {
    e.style.display = 'block';
  }
}

function toggle(element1, element2) {
  var e = document.getElementById(element1);
  var se = document.getElementById(element2);
  if (e.offsetWidth > 0 || e.offsetHeight > 0) {
    e.style.display = 'none';
    se.style.display = 'block';
  } else {
    e.style.display = 'block';
    se.style.display = 'none';
  }
}

function validateForm() {
  var n = document.forms['new']['name'].value;
  var l = document.forms['new']['location'].value;

  if (n == null || n == '' || l == null || l == '') {
    alert('Name and location is required!');
    return false;
  }
}

function getLocation() {
  var m = document.getElementById('map');
  var btn = document.getElementById('locationselector');

  m.style.cursor = 'crosshair';
  btn.value = 'Click a location on the map.';

  map.on('click', function(e) {
    var l = e.latlng.toString();
    l = l.substr(0, l.length-1);
    l = l.substr(7);

    document.forms['new']['location'].value = l;
    btn.value = l;
    m.style.cursor = 'move';
  });
}

function showMap(id, name, date, map) {

  if (date === '') {
    date = false;
  }

  if (map === '') {
    map = false;
  }

  var eshow = document.getElementById('show');
  var etitle = document.getElementById('showH');
  var eimage = document.getElementById('showI');
  var edate = document.getElementById('showP');

  eshow.style.display = 'block';
  etitle.innerHTML = name;

  if (map != false) {
    eimage.style.display = 'inline';
    eimage.src = 'usercontent/' + map;
  } else {
    eimage.style.display = 'none';
  }

  if (date != false) {
    edate.style.display = 'block';
    edate.innerHTML = date;
  } else {
    edate.style.display = 'none';
  }
}

function showClose() {
  var eshow = document.getElementById('show');
  eshow.style.display = 'none';
}
