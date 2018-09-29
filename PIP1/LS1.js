function Durakfunc(){
	var validate = false;
	xnow = document.getElementById("Xvalue").value;
	if (xnow< -3 || xnow>3) {
		window.alert("Значения не правильны!!!");
	} 
	else {
		validate = true;
	}

	// else if (isNaN(xnow)){
	// 	window.alert("Значения не правильны");
	// } else {
	// 	window.alert("wright!")
	// };
	return validate;




}

