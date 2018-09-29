function dot(xnow) {
	xnow = xnow.replace(/,/, '.');
	return xnow;
}

function incBtn(b) {
  document.getElementById('rin').value = b;
}

function Durakfunc(){
	var validate = false;
	xnow = document.getElementById("Xvalue").value;
	xnow = xnow.replace(/,/ , '.');
	ynow = document.getElementById("Yvalue").value;
	rnow = document.getElementById("R").value;
	console.log(xnow);
	if (isNaN(xnow)|| isNan(ynow) || isNaN(rnow)) {
		window.alert("write param's")
	} else if (xnow <= -3 || xnow >= 3 || xnow!= xnow.replace(/[^\d.]/g, '')) {
		window.alert("nooooo");
	} else {
		validate = true;
	}

	if (validate == false) {
		window.alert("вводите норм");
	}


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


	return validate;



}


//при пустом вводе выводить ошибку, запятые,
// function getFloat(){
//   return parseFloat(document.getElementById("Xvalue").value .replace(/,/, '.'));
// }

// (/[^\d,.]/g, '')

