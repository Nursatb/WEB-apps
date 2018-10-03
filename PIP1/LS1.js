var x,y,r;

function dot(xnow) {
	xnow = xnow.replace(/,/, '.');
	return xnow;
}

function incBtn(b) {
  document.getElementById('rin').value = b;
}

function Durakfunc(f,name){
f.Xvalue.value = f.Xvalue.value.replace(',','.');
var xnow = f.Xvalue.value;
var elements = document.getElementsByName(name);
var massage= "Исправьте значения Rf";
console.log(elements.length);

if (isNaN(parseFloat(xnow)) || isNaN(xnow) || !isFinite(xnow) || xnow < -3 || xnow > 3){
		window.alert("Исправьте значения X");
		return false;
	} else {
		for (var i = 0; i < elements.length; i++) {
      		if (elements[i].type == "radio" && elements[i].checked) {
        	return true;
      }
  }

	}
window.alert("Исправьте R");
return false;
}



// function params(f) {
// 	var validate = false;
// 	xnow = document.getElementById("Xvalue").value.replace(/,/ , '.');
// 	xnow = parseFloat(xnow);
// 	ynow = parseFloat(document.getElementById("Yvalue").value);
// 	rnow = parseFloat(document.getElementById("R").value);
// 	if ( isNaN(ynow) || isNaN(xnow) || isNaN(rnow)) {
// 		window.alert("write param's")
// 		return false;
// 	}
// }




	// var validate = false;
	// xnow = document.getElementById("Xvalue").value.replace(/,/ , '.');
	// xnow = parseFloat(xnow);
	// ynow = parseFloat(document.getElementById("Yvalue").value);
	// rnow = parseFloat(document.getElementById("R").value);
	// console.log(xnow);
	// var xtf = isNaN(parseFloat(ynow));
	// console.log(xtf);
	// if ( !isNaN(ynow) || !isNaN(xnow) || !isNaN(rnow) || !isFinite(xnow)) {
	// 	window.alert("write param's")
	// 	return false;
	// } else if (xnow <= -3 || xnow >= 3) {
	// 	window.alert("nooooo");
	// } else {
	// 	validate = true;
	// }

	// if (validate == false) {
	// 	window.alert("вводите норм");
	// }


	// if (ynow == null || xnow==null || rnow==null) {
	// 	window.alert("Ввдедите значения");
	// }

	

	// if (input.value != input.value.replace(/[^\d,]/g, '')) {
	// 	window.alert("")
	// }

	// else if (isNaN(xnow)){
	// 	window.alert("Значения не правильны");
	// } else {
	// 	window.alert("wright!")
	// };


	// return validate;


//при пустом вводе выводить ошибку, запятые,
// function getFloat(){
//   return parseFloat(document.getElementById("Xvalue").value .replace(/,/, '.'));
// }

// (/[^\d,.]/g, '')

