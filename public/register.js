window.onload = function(){

		ajaxCall('GET','http://pilote.techo.org/?do=api.getPaises',llenarSelectPaises);

		var cmbpaises = document.getElementById('cmbPaises');
		cmbpaises.addEventListener("change",cambioPaisSeleccionado);

		var submitearRegistro = document.getElementById('submitRegistro');
		submitearRegistro.addEventListener("click",registrar);

}


function cambioPaisSeleccionado(){
		//lleno las provincias
		ajaxCall('GET','http://pilote.techo.org/?do=api.getRegiones?idPais=' + this.value ,llenarSelectProvincias);
}

function llenarSelectPaises(resultado){
		llenarSelect("cmbPaises",resultado.contenido);
}

function llenarSelectProvincias(resultado){
		llenarSelect("cmbProvincia",resultado.contenido);
}
function registrar() {
		return view('/register');
}


function llenarSelect (cmbPaises, objetoResultado){
	var select = document.getElementById(cmbPaises);

	var option = document.createElement("OPTION");
	option.value = '';
	option.text = 'Por favor elegi algo';

	select.appendChild(option);

	for (var x in objetoResultado) {

    	var option2 = document.createElement("OPTION");
			option2.value = objetoResultado[x];
			option2.text = x;

			select.appendChild(option2);
	}

}


function ajaxCall (method,url,callbackFunction){
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

        var objetoResultado = JSON.parse(xmlhttp.responseText);
        callbackFunction(objetoResultado);
    }
  };

  if(method == "POST")
    xmlhttp.setRequestHeader("Contenttype", "application/xwwwformurlencoded");

  xmlhttp.open(method, url, true);
  xmlhttp.send();

}
