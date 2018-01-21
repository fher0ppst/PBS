/**
 * Fher Aguilar
 */
function fli() {
	var a = document.getElementById("nu_s").value;
	var b = document.getElementById("p_nu").value;
	if (!a.value && !b.value) {
		ajx('dtr', a + "##" + b, 0);
	} else {
		alert("Ingrese sus credenciales para continuar");
	}
}

function ajx(tg, prm, nm) {
	var XMLHttpRequestObject = false;
	if (window.XMLHttpRequest) {
		XMLHttpRequestObject = new XMLHttpRequest();
	} else if (window.ActiveXObject) {
		XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
	}
	IMRP('rpx.php', tg, prm, nm, XMLHttpRequestObject);
}

function IMRP(datasource, divId, prmts, gky, XMLHttpRequestObject) {
	if (XMLHttpRequestObject) {
		var obj = document.getElementById(divId);
		XMLHttpRequestObject.open("POST", datasource);
		XMLHttpRequestObject.setRequestHeader('Content-Type',
				'application/x-www-form-urlencoded');
		XMLHttpRequestObject.onreadystatechange = function() {
			if (XMLHttpRequestObject.readyState == 4
					&& XMLHttpRequestObject.status == 200) {
				obj.innerHTML = XMLHttpRequestObject.responseText;
			}
		}
		switch (gky) {
		case 0:
			XMLHttpRequestObject.send("onlo=" + prmts);
			break;
		}
	}
}