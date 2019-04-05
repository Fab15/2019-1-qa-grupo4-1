function agregarFilaContribuyente() {
  var table = document.getElementById("tablaContribuyentes");
  var row = table.insertRow(-1);

  var cellNombre 	= row.insertCell(0);
  var cellCuota 	= row.insertCell(1);
  var cellNumRecibo = row.insertCell(2);
  var cellFecha 	= row.insertCell(3);
  var cellRecibe 	= row.insertCell(4);

  cellNombre.contentEditable = true;
  cellCuota.contentEditable = true;
  cellNumRecibo.contentEditable = true;
  cellFecha.contentEditable = true;
  cellRecibe.contentEditable = true;

  cellNombre.setAttribute("id", "idNombre");
  cellCuota.setAttribute("id", "idCuota");
  cellNumRecibo.setAttribute("id", "idNumRecibo");
  cellFecha.setAttribute("id", "idFecha");
  cellRecibe.setAttribute("id", "idRecibe");

  
  cellNombre.innerHTML 		= "Nombre";
  cellCuota.innerHTML 		= "Cuota";
  cellNumRecibo.innerHTML 	= "N° de Recibo";
  cellFecha.innerHTML 		= "Fecha";
  cellRecibe.innerHTML		= "Recibe";

}

function llenarContabilidad(){
  llenarModalidades();
  llenarTrimestres();
  llenarAnnos();
  obtenerModalidad()
}

function llenarSelectMeses(){
var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre"];     
var sel = document.getElementById('inputMeses');
  for(var i = 0; i < meses.length; i++) {
      var opt = document.createElement('option');
      opt.innerHTML = meses[i];
      opt.value = meses[i];
      sel.appendChild(opt);
  }
}
function llenarAnnos(){
var annos = ["2016","2017","2018","2019"];     
var sel = document.getElementById('inputAnnos');
  for(var i = 0; i < annos.length; i++) {
      var opt = document.createElement('option');
      opt.innerHTML = annos[i];
      opt.value = annos[i];
      sel.appendChild(opt);
  }
}
function llenarModalidades(){
var modalidades = ["Trimestre","Semestre","Anual"];     
var sel = document.getElementById('inputModalidades');
  for(var i = 0; i < modalidades.length; i++) {
      var opt = document.createElement('option');
      opt.innerHTML = modalidades[i];
      opt.value = modalidades[i];
      sel.appendChild(opt);
  }
}
function cargarModalidadesEspecificas(){
  limpiarSelect(document.getElementById("inputModalidadEspecifica"));
  modalidad = obtenerModalidad();
  if(modalidad=="Trimestre"){
    mostrarSelect(document.getElementById("spanModalidadEspecifica"));
    llenarTrimestres();
  }
  else if(modalidad=="Semestre"){
    mostrarSelect(document.getElementById("spanModalidadEspecifica"));
    llenarSemestres();
  }
  else if(modalidad=="Anual"){
    esconderSelect(document.getElementById("spanModalidadEspecifica"));
  }
  window.alert(modalidad);
}
function obtenerModalidad(){
  var sel = document.getElementById("inputModalidades");
  var modalidad = sel.options[sel.selectedIndex].text;
  return modalidad;
}
function limpiarSelect(inputModalidadEspecifica){
  for(i = inputModalidadEspecifica.options.length - 1 ; i >= 0 ; i--)
    {
        inputModalidadEspecifica.remove(i);
    }
}
function esconderSelect(spanModalidadEspecifica){
  spanModalidadEspecifica.style.visibility = "hidden";
}
function mostrarSelect(spanModalidadEspecifica){
  spanModalidadEspecifica.style.visibility = "visible";
}
function llenarSemestres(){
var semestres = ["I Semestre","II Semestre"];     
var sel = document.getElementById('inputModalidadEspecifica');
  for(var i = 0; i < semestres.length; i++) {
      var opt = document.createElement('option');
      opt.innerHTML = semestres[i];
      opt.value = semestres[i];
      sel.appendChild(opt);
  }
}
function llenarTrimestres(){
var semestres = ["I Trimestre","II Trimestre"];     
var sel = document.getElementById('inputModalidadEspecifica');
  for(var i = 0; i < semestres.length; i++) {
      var opt = document.createElement('option');
      opt.innerHTML = semestres[i];
      opt.value = semestres[i];
      sel.appendChild(opt);
  }
}

