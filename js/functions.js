function toggleNew(element1, element2) {
  var e = document.getElementById(element1);
  var se = document.getElementById(element2);
  if(e.offsetWidth > 0 || e.offsetHeight > 0) {
    e.style.display = 'none';
    se.style.display = 'block';
  } else {
    e.style.display = 'block';
    se.style.display = 'none';
  }
}

//vadilate input
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