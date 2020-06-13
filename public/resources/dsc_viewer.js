/*

*/

function selectCandidate(number, total){
	var i = 0;					//counter through the while loops until reching total (candidates)
	var elementID = "";			//String that represents the constructed html element ID
	if (number == 99) {
		while (i < total){
			elementID = "inner-container".concat(i);
			
			document.getElementById(elementID).style.display= "none";
			i++;
		}
		document.getElementById("choose2").style.display= "none";
		document.getElementById("choose1").style.display= "block";
		document.getElementById("inner-container99").style.display= "block";
	}else{
		document.getElementById("inner-container99").style.display= "none";
		document.getElementById("choose1").style.display= "none";
		document.getElementById("choose2").style.display= "block";
		while (i < total){
			elementID = "inner-container".concat(i);
			if (i == number){
				document.getElementById(elementID).style.display= "block";

			}else{
				document.getElementById(elementID).style.display= "none";

			}
			i++;
		}
	
	}
	
}
