// JavaScript Document
var tempo;
var valor = 60;

function iniciaTempo() { tempo = setInterval('contagemRegressiva()',1000); }

function parar() { 	

	window.clearInterval(tempo);
}

function contagemRegressiva()
{
	var contador = document.getElementById("contador");

	valor--;
	if (valor === -1) {
		parar();
		contador.innerHTML="--";
		
	}
	else {
		if (valor < 10) {
			document.getElementById("contador").innerHTML = "0" + valor;
		} else {
			document.getElementById("contador").innerHTML = valor;
		}
	}
}

