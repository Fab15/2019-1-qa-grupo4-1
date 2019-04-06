function mostrarTiposPension() {
	document.getElementById("pensionEstado").disabled = false;
	document.getElementById("pensionCCSS").disabled = false;
  	document.getElementById("pensionOtro").disabled = false;
}
function ocultarTiposPension() {
	document.getElementById("pensionEstado").disabled = true;
	document.getElementById("pensionCCSS").disabled = true;
  	document.getElementById("pensionOtro").disabled = true;

  	document.getElementById("pensionEstado").checked = false;
	document.getElementById("pensionCCSS").checked = false;
  	document.getElementById("pensionOtro").checked = false;
}
