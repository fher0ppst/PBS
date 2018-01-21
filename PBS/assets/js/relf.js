/**
 * Fher Aguilar
 */

function rl(pa) {
	var a = document.getElementById(pa);
	var b = "";
	var go = false;
	b = (a.value).split(".");
	if (b.length > 2) {
		alert("El nombre del archivo no debe contener signos de puntuacion");
		go = false;
	} else {
		if (b[1] != "png" && b[1] != "jpg" && b[1] != "jpeg" && b[1] != "pdf") {
			alert("Formato de arhivo invalido");
			go = false;
		} else {
			go = true;
		}
	}
	return go;
}

function vldfrm() {
	var a = "c";
	var b = new Array();
	var c = 0;
	var d = document.getElementById("c12");
	var e = document.getElementById("c13");
	var f = document.getElementById("c14");
	var g = h = "";
	var x = document.getElementById("f2");
	for (var i = 1; i <= 21; i++) {
		b[c] = document.getElementById(a + i).value;
		switch (i) {
		case 7:
			if (b[c] == "") {
				alert("Complete los datos del pasaporte");
				i = 22;
			}
			break;
		case 11:
			if (b[c] == "E") {
				alert("Especifique el tipo de visa");
				i = 22;
			} else {
				if (b[c] != "N") {
					if (d.value == "" || e.value == "" || f.value == "") {
						alert("Complete los datos de la visa");
						i = 22;
					}
				}
			}
			break;
		}
		c++;
	}
	if (c >= 16) {
		if (document.getElementById("c11").value != "N") {
			g = rl("f1");
			h = rl("f2");
			if (g == true && h == true) {
				crajx('rel', b, 0);
			}
		} else {
			g = rl("f1");
			if (g == true) {
				crajx('rel', b, 0);
			}
		}
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
	IOG('nu.php', tg, prm, nm, XMLHttpRequestObject);
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
				obj.innerHTML = XMLHttpRequestObject.responseText;

			}
		}
		switch (gky) {
		case 0:
			XMLHttpRequestObject.send("acept=" + prmts);
//			document.getElementById("Send").type = "submit";
			break;
		}
	}
}

function shw(p) {
	var ff = document.getElementById("ff");
	var ov = document.getElementById("ov");
	var bt = document.getElementById("butones");
	switch (p) {
	case 0:
		bt.hidden = "true";
		ff.hidden = "";
		ov.hidden = "true";
		break;
	case 1:
		bt.hidden = "true";
		ff.hidden = "true";
		ov.hidden = "";
		break;
	}
}

function vrf() {
	var z = document.getElementById("pssr");
	if (z.value != "") {
//		document.getElementById("acepto").type = "submit";
	} else {
		alert("Ingrese su numero de pasaporte para continuar");
	}
}
function au() {
	var ac = document.getElementById("c11");
	var bc = document.getElementById("f2");
	var a = "c";
	if (ac.value != "N" && ac.value != "E") {
		for (var i = 12; i < 15; i++) {
			document.getElementById(a + i).disabled = "";
		}
		bc.disabled = "";
	} else {
		for (var i = 12; i < 15; i++) {
			document.getElementById(a + i).disabled = "disabled";
			document.getElementById(a + i).value = "";
		}
		bc.disabled = "disabled";
		bc.value = "";
	}
}