function toggleNew() {
  var e = document.getElementById('aside_main');
  var se = document.getElementById('aside_new');
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