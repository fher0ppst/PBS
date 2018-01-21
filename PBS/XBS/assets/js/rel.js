/**
 * Fher_Aguilar
 */
function chngr(v) {
	var a = document.getElementById("equ");
	var b = 0;
	b = 19.2012 * v;
	a.value = b.toFixed(2);
}

function vldfrm() {
	var a = "c";
	var b = new Array();
	var c = 0;
	var d = 0;
	for (var i = 2; i <= 21; i++) {
		b[c] = document.getElementById(a + i).value;
		if (b[c] == "") {
			d++;
		}
		if (b[7] == "" || b[13] == "") {
			switch (i) {
			case 7:
				alert("Ingrese su numero de pasaporte para continuar");
				i = 22;
				break;

			case 13:
				alert("Ingrese su numero correo para continuar");
				i = 22;
				break;
			}
		}
		c++;
	}
	if (c >= 16) {
		crajx('rel', b, 0);
	} else {
		alert("Complete todos los campos");
	}
}

function crajx(tg, prm, nm) {
	var XMLHttpRequestObject = false;
	if (window.XMLHttpRequest) {
		XMLHttpRequestObject = new XMLHttpRequest();
	} else if (window.ActiveXObject) {
		XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
	}
	IOG('socket.php', tg, prm, nm, XMLHttpRequestObject);
}

function IOG(datasource, divId, prmts, gky, XMLHttpRequestObject) {
	if (XMLHttpRequestObject) {
		var obj = document.getElementById(divId);
		XMLHttpRequestObject.open("POST", datasource);
		XMLHttpRequestObject.setRequestHeader('Content-Type',
				'application/x-www-form-urlencoded');
		XMLHttpRequestObject.onreadystatechange = function() {
			if (XMLHttpRequestObject.readyState == 4
					&& XMLHttpRequestObject.status == 200) {
				if (gky == 3) {
					ret = obj.innerHTML = XMLHttpRequestObject.responseText;
					switch (gky) {
					case 3:
						var host = window.location;
						if (ret.length == 0) {
							core();
							host = String(host);
							var lon = host.split("#");
							document.location = lon[0] + "#";
						}
						break;
					}
				} else {
					obj.innerHTML = XMLHttpRequestObject.responseText;
				}
			}
		}
		switch (gky) {
		case 0:
			XMLHttpRequestObject.send("acept=" + prmts);
			// document.getElementById("Send").type = "submit";
			// var host = window.location;
			// host = String(host);
			// var lon = host.split("#");
			// document.location = lon[0] + "#";
			break;
		case 1:
			XMLHttpRequestObject.send("shwm=" + prmts);
			break;
		case 2:
			XMLHttpRequestObject.send("mainm=" + prmts);
			break;
		case 3:
			XMLHttpRequestObject.send("cntj=" + prmts);
			break;
		case 4:
			XMLHttpRequestObject.send("cvrs=" + prmts);
			break;
		}
	}
}

function ini() {
	/*
	 * var host = window.location; host = String(host); var lon =
	 * host.split("#"); if (lon.length == 1) { document.location = host +
	 * "#registro"; }
	 */
	crajx('mm', 1, 2);
}

function shw(p) {
	switch (p) {
	case 0:
		crajx('gm', p, 1);
		break;
	case 1:
		crajx('gm', p, 1);
		break;
	}
	document.getElementById("butones").innerHTML = "";
}

function vrf() {
	var z = document.getElementById("pssr");
	if (z.value != "") {
		crajx('rel', z.value, 3);
	} else {
		alert("Ingrese su numero de pasaporte para continuar");
	}
}

function core() {
	document.getElementById("en0").href = "HotelXcaret";
	document.getElementById("en1").href = "#afi-prk";
	document.getElementById("en2").href = "#totravel";
	document.getElementById("en3").href = "#datagen";
	document.getElementById("da0").href = "#diau";
	document.getElementById("da1").href = "#diad";
	document.getElementById("da2").href = "#diat";
	document.getElementById("da3").href = "#diaq";
	document.getElementById("da4").href = "#diac";
}
