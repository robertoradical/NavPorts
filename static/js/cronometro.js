// JavaScript Document
var tempo;
var min2 = 2;
var seg2 = 59;

function iniciaTempo() { tempo = setInterval('contagemRegressiva()',1000); }

function parar() { 	

	window.clearInterval(tempo);
}

function contagemRegressiva()
{
	var min = document.getElementById("min"); //recebe a variável global
	var seg = document.getElementById("seg");

	if (seg2 === 0){
		if (min2 === 0 && seg2 === 0){
			parar();
			contador.innerHTML="00:00";
		} else {
			min2--;
			seg2 = 60;
			document.getElementById("min").innerHTML = "0" + min2;
			document.getElementById("seg").innerHTML = seg2;			
		}
	}

	if (min2 > -1) {
		seg2--;
		if (seg2 < 10){
			document.getElementById("seg").innerHTML = "0" + seg2;	
		} else {
			document.getElementById("seg").innerHTML = seg2;	
		}
	}

}


