function incBtn(b) {
  document.getElementById('rin').value = b;
}

function parseY(f) {
  return parseFloat(f.yin.value.replace(',','.'));
}

function validate(f) {
  f.yin.value = f.yin.value.replace(',','.');
  var y = f.yin.value;
  if(y.indexOf('x') >= 0 || isNaN(parseFloat(y)) || isNaN(y) || !isFinite(y) || y < -3 || y > 5){
    f.yin.value = "";
    document.getElementById('error').style.display = 'block';
    return false;
  }
	document.getElementById('error').style.display = 'none';
}
