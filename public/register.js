window.onload = function(){

		ajaxCall('GET','http://pilote.techo.org/?do=api.getPaises',llenarSelectPaises);

		var cmbpaises = document.getElementById('cmbPaises');
		cmbpaises.addEventListener("change",cambioPaisSeleccionado);

		var cmbProvincia = document.getElementById('cmbProvincia');
		cmbPaises.addEventListener("change",cambioProvinciaSeleccionada);

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


function llenarSelect (selectId, objetoResultado){
	var select = document.getElementById(selectId);

	var option = document.createElement("OPTION");
	option.value = -1;
	option.text = 'Por favor elegi algo';

	select.appendChild(option);

	for (var x in objetoResultado) {

    	var option = document.createElement("OPTION");
			option.value = objetoResultado[x];
			option.text = x;

			select.appendChild(option);
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
