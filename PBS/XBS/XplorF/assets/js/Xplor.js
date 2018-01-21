/**
 * 
 */
function cnsprv(p) {
	var a = document.getElementById("nu");
	if (a.value != "") {
		xplorjx('std', a.value + "##" + p, 0);
	} else {
		alert("Ingrese su numero de pasaporte");
	}
}

function xplorjx(tg, prm, nm) {
	var XMLHttpRequestObject = false;
	if (window.XMLHttpRequest) {
		XMLHttpRequestObject = new XMLHttpRequest();
	} else if (window.ActiveXObject) {
		XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
	}
	XPFIOG('Xplor.php', tg, prm, nm, XMLHttpRequestObject);
}

function XPFIOG(datasource, divId, prmts, gky, XMLHttpRequestObject) {
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
			XMLHttpRequestObject.send("cvrs=" + prmts);
			break;
		}
	}
}