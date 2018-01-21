<?php
require_once 'fncn/fhr.php';

if (! isset($_SESSION)) {
    session_start();
}
if (! $_SESSION['logged'] == 'yes') {
    nelentry();
}
// var_dump($_SESSION['nuac']);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Xperiencia XCaret</title>
<meta charset="utf-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="assets/css/noscript.css" />
</head>
<body onload="ini();">
	<div id="wrapper">
		<p style="text-align: left;">
			<img alt="" src="../images/Logob.png" width="200px" height="48px">
		</p>
		<header id="header">
			<div class="content">
				<nav style="font-weight: bold; text-align: center;">
					<ul>
						<li style="padding-top: 10px; text-align: center;"><a id="en0"
							href="HotelXcaret">Conoce el Hotel</a></li>
						<li style="padding-top: 10px; text-align: center;"><a id="en1"
							href="#afi-prk">Conoce los parques y tours</a></li>
						<li style="padding-top: 10px; text-align: center;"><a id="en2"
							href="#totravel">Para tu viaje</a></li>
						<li style="padding-top: 10px; text-align: center;"><a id="en0"
							href="#jbmr">Itinerario</a></li>
						<li style="padding-top: 10px; text-align: center;"><a id="en0"
							href="#jaam">Recomendaciones</a></li>
					</ul>
				</nav>
				<div class="inner">
					<img alt="Logo" src="images/Logob.png" width="300" height="300">
					<h3 style="padding-top: 20px;">
						BIENVENIDOS A NUESTRA CONVENCI&oacute;N anual <b>Unidos es mejor -
							Nos vamos a Xcaret</b>
					</h3>
					<p style="font-weight: bold;">
						Del 21 al 23 de Febrero disfruta<br> del Hotel XCaret
						M&eacute;xico y Experiencia Xcaret,<br> tu merecida aventura como
						reconocimiento por tus resultados. <br> <br> Si eres el afortunado
						ganador del derecho al acompa&ntilde;ante,<br> tu estad&iacute;a
						ser&aacute; hasta el 25 de Febrero 2018.
					</p>
					<br> <br>
				</div>
			</div>
		</header>
		<div id="main" style="background-color: #f5d230; opacity: 0.76">
			<article id="afi-prk" style="background-color: #24468a;">
				<h2 class="major">Parques y tours</h2>
				<h2 style="font-size: 16pt; font-weight: bold;">¡UNA EXPERIENCIA
					INOLVIDABLE!</h2>
				<p>Por tu esfuerzo y dedicación, mereces conocer y divertirte al
					máximo! Por eso te invitamos a conocer todos los parques del hotel
					Xcaret, al que tendrás acceso de forma gratuita, en diversos
					horarios de noche y de día.</p>
				<p>Recuerda que en algunos parques necesitas reserva previa, para
					que planees tu tiempo y lo disfrutes al máximo!</p>
				<p style="text-align: justify;"></p>
				<h3>Parques D&iacute;a</h3>
				<h4>Sin reservac&iacute;on previa</h4>
				<div class="table-wrapper">
					<table style="text-align: center;">
						<tbody>
							<tr>
								<td title="XCaret"><a href="XCaret"><img alt=""
										src="images/X2.png" width="48px" height="48px"></a></td>
								<td><a href="Xplor"><img alt="" src="images/X5.png" width="48px"
										height="48px"></a></td>
								<td><a href="Xenses"><img alt="" src="images/X8.png"
										width="48px" height="48px"></a></td>
							</tr>
							<tr>
								<td style="font-size: 12pt; font-weight: bold;"><a href="XCaret">XCaret</a></td>
								<td style="font-size: 12pt; font-weight: bold;"><a href="Xplor">Xplor</a></td>
								<td style="font-size: 12pt; font-weight: bold;"><a href="Xenses">Xenses</a></td>
							</tr>
						</tbody>
					</table>
					<h4>Requiere reservaci&oacute;n previa</h4>
					<table style="text-align: center;">
						<tbody>
							<tr>
								<td><a href="Xelha"><img alt="" src="images/X6.png" width="48px"
										height="48px"></a></td>
							</tr>
							<tr>
								<td style="font-size: 12pt; font-weight: bold;"><a href="Xelha">Xelha</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table-wrapper" id="cntdia"></div>
				<h3>Parques Noche</h3>
				<h4>Requiere reservaci&oacute;n previa</h4>
				<div class="table-wrapper" style="text-align: center;">
					<table style="text-align: center;">
						<tr>
							<td><a href="Xoximilco"><img alt="" src="images/X1.png"
									width="48px" height="48px"></a></td>

							<td><a href="XplorF"><img alt="" src="images/X7.png" width="48px"
									height="48px"></a></td>
						</tr>
						<tr>
							<td style="font-size: 12pt; font-weight: bold;"><a
								href="Xoximilco">Xoximilco</a></td>

							<td style="font-size: 12pt; font-weight: bold;"><a href="XplorF">Xplor
									Fuego</a></td>
						</tr>
						</tbody>
					</table>
				</div>
				<h3>Tours D&iacute;a completo</h3>
				<h4>Requiere reservaci&oacute;n previa</h4>
				<div class="table-wrapper" style="text-align: center;">
					<table style="text-align: center;">
						<tbody>
							<tr>
								<td><a href="Xenotes"><img alt="" src="images/X3.png"
										width="48px" height="48px"></a></td>
							</tr>
							<tr>

								<td style="font-size: 12pt; font-weight: bold;"><a
									href="Xenotes">Xenotes</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<p>
					* Para los parques que requieren reservaci&oacute;n, deber&aacute;n
					completar el fórmulario que se encuentra al final de cada parque.<br>

				</p>
				<div>
					<span><iframe class="image main" height="315"
							src="https://www.youtube.com/embed/HBS1A39i3us"> </iframe></span>
				</div>
				<div class="table-wrapper" id="cntnch"></div>
				<!-- <span class="image main"><input type="button"></span> -->
			</article>
			<article id="totravel" style="background-color: #24468a;">
				<h2 class="major">
					<img alt="" src="images/avion.png" width="64px" height="40px">&nbsp;Itinerario
					a&eacute;reo
				</h2>
				<div class="table-wrapper" style="text-align: center;">
					<table>
						<thead>
							<tr>
								<th>Vuelo</th>
								<th>Fecha de salida</th>
								<th>Origen</th>
								<th>Destino</th>
								<th>Hora de salida</th>
								<th>Hora de llegada</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Charter</td>
								<td>21 de febrero</td>
								<td>San Salvador</td>
								<td>Cancún</td>
								<td>8:45</td>
								<td>11:45</td>
							</tr>
							<tr>
								<td>Charter</td>
								<td>23 de febrero</td>
								<td>Cancún</td>
								<td>San Salvador</td>
								<td>18:40</td>
								<td>19:00</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h2 class="major">
					<img alt="" src="images/pass.png" width="56px" height="62px">&nbsp;REQUISITOS
					MIGRATORIOS
				</h2>
				<p>Estos son los documentos requeridos a todo ciudadano extranjero
					que desee entrar en México:</p>
				<ul>
					<li>Pasaporte con vigencia mínima de 6 meses</li>
					<li>Visa mexicana o americana requerida para salvadoreños, otras
						nacionalidades consultar con la agencia de viajes.</li>
					<li>Completar Forma Migratoria Múltiple (FMM) (será entregada el
						día del vuelo de salida).</li>
				</ul>
				<h2 class="major">
					<img alt="" src="images/visaame.png" width="56px" height="37px">&nbsp;REQUISITOS
					VISA MEXICANA
				</h2>
				<b>El solicitante deberá registrarse en <a
					href="https://mexitel.sre.gob.mx/citas.webportal/pages/public/login/login.jsf"
					target=" " style="color: white; font-weight: bold;">Embajada de
						M&eacute;xico </a>, programar su cita y presentarse el d&iacute;a
					y en la hora definida con los siguientes requisitos:
				</b>
				<ol style="text-align: justify;">
					<li>Formulario llenado completamente por ambos lados a mano con
						bol&iacute;grafo azul o negro.</li>
					<li>Pasaporte vigente y copia de la p&aacute;gina principal del
						pasaporte en donde están sus datos con la fotograf&iacute;a</li>
					<li>En su caso, copia de visas y sellos migratorios anteriores</li>
					<li>Una fotograf&iacute;a reciente (m&aacute;ximo dos meses de
						antigüedad) con el rostro visible y sin anteojos, a color, tamaño
						c&eacute;dula, con fondo blanco y de frente. Solicitudes con otro
						tipo o tamaño de fotograf&iacute;as no ser&aacute;n admitidas.</li>
					<li>Carta responsiva ORIGINAL: Original de la carta de una
						organización o de una institución pública o privada de reconocida
						probidad que invite a la persona extranjera a participar en alguna
						actividad no remunerada en territorio nacional. La carta deberá
						contener, sin excepción, los datos especificados en el enlace: <a
						href="https://mexitel.sre.gob.mx/citas.webportal/pages/public/login/login.jsf"
						target=" " style="color: white; font-weight: bold;">Visa mediante
							carta responsiva </a>
					</li>
					<li>Impresión del Comprobante de la cita agendada.</li>
					<li>Acreditar solvencia econ&oacute;mica o arraigo con al menos uno
						de los par&aacute;metros especificados en la p&aacute;gina web: El
						solicitante podr&aacute; solicitar su cita en: <a
						href="https://mexitel.sre.gob.mx/citas.webportal/pages/public/login/login.jsf"
						target=" " style="color: white; font-weight: bold;">Embajada de
							M&eacute;xico. </a>
				
				</ol>
				<h2 class="major">
					<img alt="" src="images/visamex.png" width="56px" height="37px">&nbsp;REQUISITOS
					VISA AMERICANA
				</h2>
				<p>Estos son los requisitos para solicitar la visa de turismo
					americana:</p>
				<ol>
					<li>Determine su categor&iacute;a de visa: turista.</li>
					<li>Pague la tarifa de solicitud (Tarifa MRV).</li>
					<li>Completar formulario DS-160.</li>
					<li>Programe su cita.</li>
					<li>El d&iacute;a de su entrevista, para ingresar a la Embajada a
						la hora programada, deber&aacute; presentar lo siguiente:
						<ul>
							<li>Pasaporte vigente.</li>
							<li>Hoja de Confirmación de Cita de nuestro Centro de Información
								de Visas.</li>
							<li>Hoja de Confirmación del formulario DS-16.</li>
							<li>Una fotografía tamaño 5X5 cm.</li>
						</ul>
					</li>
				</ol>

				<p style="text-align: justify;">
					Los siguientes documentos de soporte no son requisito para ser
					entrevistado pero son com&uacute;nmente solicitados durante la
					entrevista para apoyar su formulario: cartas de su empleador,
					partidas de nacimiento y matrimonio, pasaportes con visas vigentes
					de otros miembros de su núcleo familiar, documentos bancarios,
					declaraciones de renta y de IVA y títulos de bienes como
					veh&iacute;culos, casa, terrenos, etc. Esta no es una lista
					exclusiva y tener los documentos durante la entrevista no garantiza
					que sea elegible para recibir visa. <br> Para mayor
					informaci&oacute;n visita el siguiente enlace: <a
						href="http://www.ustraveldocs.com/do_es/do-niv-typeb1b2.asp"
						target=" " style="color: white; font-weight: bold;">Visa de
						turismo </a>
				</p>

				<h2 class="major">
					<img alt="" src="images/ubic.png" width="48px" height="66px">&nbsp;Ubicaci&oacute;n
				</h2>
				<p style="text-align: justify;">Hotel Xcaret México está
					convenientemente ubicado cerca de Parque Xcaret, en el corazón de
					Riviera Maya, por lo que ofrece fácil acceso a los parques
					temáticos de Grupo Experiencias Xcaret. A 15 minutos de Playa del
					Carmen Aproximadamente a 45 minutos del Aeropuerto Internacional de
					Cancún.</p>
				<p>Carretera Chetumal - Puerto Juárez Kilómetro 282, Solidaridad,
					77710 Playa del Carmen, Quintana Roo</p>
				<p>Tel&eacute;fono: +52 (998) 881 9836</p>
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.050833186445!2d-87.11392798544811!3d20.585981586239875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e447a0e284c35%3A0xe6e589c27e2a75f3!2sHotel+Xcaret+M%C3%A9xico!5e0!3m2!1ses!2ssv!4v1515470089098"
					width="560" height="350"></iframe>
				<br>
				<hr />
				<h2 class="major">
					<img alt="" src="images/clima.png" width="48px" height="48px">&nbsp;Clima
				</h2>
				<div id="cont_f44c7b8a49f48567c420611c61a48647">
					<span style="width: auto;"><script type="text/javascript" async
							src="https://www.meteored.mx/wid_loader/f44c7b8a49f48567c420611c61a48647"></script>
					</span>
				</div>
				<hr />
				<h2 class="major">
					<img alt="" src="images/cambio.png" width="48px" height="48px">&nbsp;Tipo
					de cambio
				</h2>
				<div>
					<form action="index.html" method="post">
						<label>Dolar a Peso</label> <input type="text" value="19.2012"
							readonly="readonly"
							style="font-weight: bold; text-align: center;">
					</form>
				</div>
				<form method="post" action="#">
					<div class="field half first">
						<label for="name">Dolar</label> <input type="number"
							style="font-weight: bold;" min="1" onchange="chngr(this.value);">
					</div>
					<div class="field half">
						<label for="email">Peso</label> <input type="text" name="email"
							id="equ" />
					</div>
				</form>
				<div></div>
				<hr />
				<h2>
					<img alt="" src="images/taxdev.png" width="48px" height="48px">&nbsp;Devoluci&oacute;n
					de impuestos
				</h2>
				<h3 class="major">Tax Free</h3>
				<p>
					<b>¿QUIENES SOMOS?</b><br> Ofrecemos un servicio GRATUITO de
					devolución de impuestos diseñado para beneficiar directamente a los
					turistas extranjeros, a la vez que brinda una experiencia de compra
					más agradable.  Somos una empresa 100% mexicana, fundada en 2006.
					Autorizada por SAT, una rama del gobierno mexicano, para
					administrar el servicio de devolución de IVA a turistas
					extranjeros.
				</p>

				<b>COMPRAS</b><br> Realiza tus compras en nuestros establecimientos
				afiliados y elige entre nuestras 12 categorías de productos
				participantes en la devolución de impuestos. Nuestras categorías son
				las siguientes:
				<ol style="text-align: justify;">
					<li>Grasas y aceites animales o vegetales, productos de su
						desdoblamiento; grasas alimenticias elaboradas; ceras de origen
						animal o vegetal (cremas hidratantes para el cuerpo, aceites,
						tratamientos de belleza, cosméticos, exfoliantes).</li>
					<li>Plástico y sus manufacturas; caucho y sus manufacturas.</li>
					<li>Pieles, cueros, peletería, artículos de viaje, bolsos de mano
						(carteras, billeteras), artículos de talabartería.</li>
					<li>Bebidas, líquidos alcohólicos (botellas de vino) y vinagre;
						tabaco y sucedáneos del tabaco elaborados.</li>
					<li>Paraguas, quitasoles, bastones, látigos, fustas, y sus partes;
						flores artificiales; manufacturas de cabello (tintes, extensiones,
						diademas).</li>
					<li>Manufacturas de piedra, cemento, amianto (asbesto), mica o
						materias análogas; productos cerámicos; vidrio y sus manufacturas.</li>
					<li>Máquinas y aparatos, material eléctrico y sus partes; aparatos
						de grabación o de reproducción de sonido, aparatos de grabación o
						de reproducción de imagen y de sonido en televisión, y las partes
						y accesorios de estos aparatos.</li>
					<li>Objetos de arte o de colección y antigüedades.</li>
					<li>Instrumentos y aparatos de óptica (gafas y lentes de contacto),
						fotografía o de cinematografía, de medida, de control o de
						precisión; instrumentos y aparatos médico-quirúrgicos; aparatos de
						relojería; instrumentos musicales; partes y accesorios de estos
						instrumentos o aparatos, discos compactos, DVD´s.</li>
					<li>Materias textiles y sus manufacturas (ropa, calzado, corbatas).</li>
					<li>Perlas naturales o cultivadas, piedras preciosas o
						semipreciosas (collares), metales preciosos, chapados de metal
						precioso (plaqué) y manufacturas de estas materias; bisutería;
						monedas.</li>
					<li>Artículos varios (perfumes, fragancias, bolígrafos, juguetes,
						juegos de mesa)</li>
				</ol>

				<p style="text-align: justify;">
					<b>DOCUMENTACIÓN A PRESENTAR</b><br>Diríjase a las oficinas de TAX
					FREE y presente -Vouchers y factura. -Pasaporte, su pase de abordar
					y su forma migratoria (FMM).<br> <br> <b>FACTURAS</b><br>Una vez
					realizada tu compra solamente necesitas solicitar la factura en el
					área de cajas o atención a clientes del establecimiento. Recuerda
					que es muy importante que conserves cada uno de los documentos que
					avalan el pago, así como el ticket de compra, nota de venta y
					vouchers de tarjeta de crédito en caso de haber realizado la compra
					con una tarjeta de crédito o débito. Cuando has pagado en efectivo,
					las facturas expedidas deben ser mayores a $1,000.00 M.N. (Mil
					pesos mexicanos) y no deben rebasar los $3,000.00 M.N. (Tres mil
					pesos mexicanos) para poder realizar la devolución. Para las
					compras realizadas con tarjeta de crédito o débito el monto mínimo
					es de $1,200.00 M.N. (Mil doscientos pesos mexicanos).<br> <br> <b>ARTÍCULOS
						EXENTOS</b><br>Consumos y servicios (hoteles, restaurantes, taxis,
					boletos de avión, bienes -raíces, etc.) -Productos perecederos.
					-Libros. -Medicinas. -Bebidas alcohólicas abiertas Todos los
					documentos deben ser con el mismo nombre del turista.<br> <br> <b>REEMBOLSO</b><br>Se
					depositará la cantidad correspondiente después de 40 días de haber
					salido del país. Se reembolsará el 65%del IVA por disposición
					oficial.<br> <br> Para mayor informaci&oacute;n puede acceder a: <a
						href="https://taxfree.com.mx/v1/" target=" "
						style="color: white; font-weight: bold;">Tax free</a>
				</p>

				<hr>
				<h2 class="major">MONEY BACK</h2>
				<p style="text-align: justify;">
					Es el proveedor líder de servicios de reembolso de impuestos
					(reembolso del impuesto al valor agregado o reembolso del impuesto
					a las ventas) para viajeros internacionales en México. <br> <br> <b>COMPRAS</b><br>
					Realice sus compras en todos los comercios afiliados a MONEY BACK,
					la mayoría de los cuales puede identificar a través de una
					calcomanía o display colocado en la entrada de estos o junto a la
					caja. El monto mínimo es de $1,200.00 MXN. Las compras realizadas
					en efectivo tienen un limite de $3,000.00 incluyendo IVA por
					persona. Si el pago es realizado en tarjeta de crédito, no hay
					límite máximo. Debe solicitar una factura (RFC XEXX010101000), que
					es el comprobante fiscal oficial por cada compra que realice. <br>
					<br> <b>DOCUMENTACION A PRESENTAR</b><br> Vouchers y facturas. -
					Pasaporte, su pase de abordar y su forma migratoria (FMM). Todos
					los documentos deben ser con el mismo nombre del turista.<br> <br>
					<b>REEMBOLSO</b><br> Se depositará en su tarjeta de crédito la
					cantidad correspondiente después de 45 días, se reembolsará el 8.9%
					sobre sus compras. <br> <br> Para mayor informaci&oacute;n visita
					el siguiente enlace: <a href="http://www.moneyback.mx/" target=" "
						style="color: white; font-weight: bold;">Visa de turismo </a>
				</p>
			</article>

			<article id="jaam" style="background-color: #24468a;">
				<h2 class="major">
					<img alt="" src="images/avion.png" width="64px" height="40px">&nbsp;Recomendaciones
				</h2>

				<h3>Antes del Viaje</h3>
				<ol>
					<li>Recuerda llevar tu pasaporte vigente y a la mano para agilizar
						los tramites migratorios.</li>
					<li>Utiliza ropa cómoda, ligera y zapatos cerrados para viajar,
						llevando siempre una chaqueta para abrigarte del frio durante el
						vuelo.</li>
					<li>No guardes objetos corto punzantes ni líquidos en tu maleta de
						mano, para evitar los decomisos en migración.</li>
					<li>Señaliza tu maleta adecuadamente con nombre y apellido y algún
						distintivo para evitar perdidas.</li>
					<li>No guardes en tu equipaje laptops, tablets o celulares,cámaras
						o demás objetos de valor, llévalos contigo en tu maleta de mano.</li>
					<li>No olvides llevar tu protector solar y repelente para
						mosquitos.</li>
					<li>No ingresar licor ni cremas en tu maleta de mano, para evitar
						decomisos en el aeropuerto.</li>
					<li>Llega 3 horas antes de tu vuelo, para evitar cualquier
						contratiempo.</li>
				</ol>
				<h3>Durante el viaje</h3>
				<ol>
					<li>Trata de estar 10 min antes de la salida a cualquier tour o
						ceremonia, recuerda que la puntualidad te ayudará a disfrutar mas
						cada segundo de tu viaje.</li>
					<li>No olvides tus gafas solares, repelentes o protector.</li>
					<li>Recuerda reservar con tiempo los tours para que no te pierdas
						de ninguna experiencia</li>
					<li>Sigue las recomendaciones de los códigos de vestimenta para que
						estemos en armonía.</li>
					<li>Utiliza sombrero o gorras para protegerte del sol.</li>
					<li>Respeta las reglas y normativas del hotel para evitar cargos
						extras.</li>
					<li>No dejes tus pertenencias como cámaras, tablets, computadoras o
						celulares sin observación para evitar perdidas o reclamos.</li>
				</ol>
				<h3>Después del viaje</h3>
				<ol>
					<li>Comparte esta gran experiencia con tus familiares y amigos y
						disfruta de los grandes recuerdos que te deja el viaje!</li>
				</ol>
				<h3>Durante tu estad&iacute;a</h3>
				<ol>
					<li>No se permite fumar dentro de las habitaciones y la persona que
						lo haga pagará una multa de $500 USD.</li>
				</ol>
			</article>
			<article id="jbmr" style="background-color: #24468a;">
				<h2 class="major">
					<img alt="" src="images/avion.png" width="64px" height="40px">&nbsp;Itinerario
					de actividades
				</h2>
				<h2 class="major">21 de Febrero</h2>
				<h2 class="major">Premiaci&oacute;n Unidos 2018</h2>
				<span class="image main"><img src="HotelXcaret/images/Fondo.png"
					alt="" /></span>
				<p>El momento de reconocer tu excelente desempeño ha llegado, en un
					escenario paradisiaco y lleno de diversi&oacute;n.</p>
				<table>
					<tr>
						<td colspan="2" style="font-weight: bold;">Bienvenida en
							Aeropuerto - Hotel</td>
					</tr>
					<tr>
						<td>11:45 am</td>
						<td>Hora de llegada al aeropuerto, recibimiento y traslado
							privados con experiencias Xcaret. Recuerda viajar con ropa cómoda
							y ligera, tu pasaporte y documentos de migración a la mano para
							agilizar el paso en el aeropuerto.</td>
					</tr>
					<tr>
						<td colspan="2" style="font-weight: bold;">Registro y recepción de
							habitaciones</td>
					</tr>
					<tr>
						<td>12:45 pm <br>1:30 a 2:30 pm
						</td>
						<td>Llegada al hotel <br> Check in es ON THE GO, mientras llegas
							al hotel te chequearas en línea.<br> <br> Bienvenida en el Salón
							de convenciones
						</td>
					</tr>
					<tr>
						<td colspan="2" style="font-weight: bold;">Almuerzo / Snack</td>
					</tr>
					<tr>
						<td>3:30 pm a 6:00 pm</td>
						<td><br>Almuerzo en el restaurante de tu elección</td>
					</tr>
					<tr>
						<td colspan="2" style="font-weight: bold;">Premiaci&oacute;n
							Unidos es Mejor</td>
					</tr>

					<tr>
						<td>6:00 pm <br> 7:00 pm
						</td>
						<td>C&oacute;ctel de bienvenida en Las Caletas a la par
							restaurante Las Cuevas <br> <br> Inicio Premiación, cena de gala
							y baile
						</td>

					</tr>
					<tr>
						<td colspan="2">Recomendaciones de Vestuario</td>
					</tr>
					<tr>
						<td colspan="2"><span class="image main"><img
								alt="Recomendaci&oacute;n" src="images/Fiesta-01.png"></span></td>
					</tr>

				</table>
				<h2 class="major">22 de Febrero</h2>
				<span class="image main"><img src="images/dia4.png" alt="" /></span>
				<p>
					Este día es enteramente para ti, para que disfrutes de los parques
					y los tours y explores la belleza de Xcaret. <br> <b>Parques por
						visitar:</b> <br>XCARET<br> XPLOR<br> XENSES<br> X-HELA<br>
					XENOTEX<br> XOXIMILCO
				</p>
				<p>
					<b>Desayuno</b><br>7:00 a 8:00 - Desayuno en Restaurante de tu
					elección.
				</p>
				<p>
					<b>Almuerzo</b><br>12:00 a 2:00 Opcional: Departir en bar La
					Cantina
				</p>

				<p style="text-align: justify;">
					<b>Tienes diferentes opciones para que disfrutes tu noche:</b><br>
					<b>Fiesta Mexicana en Parque Xoximilco</b><br> 5:30 p.m Salida en
					lobby<br> 6:30 -12:00 a.m Noche llena de música, baile y fiesta! <br>
					<b>Show México Espectacular</b><br> 6:30 p.m Salida de hotel hacia
					parque Xcaret. Conoce la cultura de México con un show excepcional.
					<br> <b>Xplor Fuego</b><b></b> 5:30 – 11:00 p.m Disfruta el parque
					Xplor fuego para una aventura diferente!
				</p>
				Recomendaciones de Vestuario <span class="image main"><img
					alt="Recomendaci&oacute;n" src="images/playa-02.png"></span>

				<h2 class="major">23 de Febrero</h2>
				<span class="image main"><img src="images/Dia3.png" alt="" /></span>
				<p style="text-align: justify;">
					Tenemos para ti toda una oferta de desayunos y snacks, un paseo por
					los parques XCARET – XPLOR y XENSES para despedirte de este paraíso
					tropical. <br> <b>* Si eliges visitar los parques en este dia,
						recuerda hacer previamente tu check out y dejar tus maletas en el
						lobby.</b>
				</p>
				<p style="text-align: justify;">
					<b>Desayuno</b><br>7:00 – 8:00 a.m Desayuno en el restaurante de tu
					elección.
				</p>
				<p style="text-align: justify;">
					<b>Visita a Parques XCARET – XPLOR - XENSES</b><br>8:30 a.m – 1:00
					p.m Salida a parques completo Hotel- Parque – Hotel.
				</p>
				<p style="text-align: justify;">
					<b>Llegada de acompa&ntilde;antes</b><br>11:30 a.m – LLegada de
					acompañantes de ganadores EXCELENCIA.<br> 1:30 p.m – Check in en el
					hotel a acompañantes
				</p>
				<p style="text-align: justify;">
					<b>Almuerzo</b><br>12:00 – 1:00 p.m –Almuerzo en restaurante de tu
					elección
				</p>
				<p style="text-align: justify;">
					<b>Check-out</b><br>1:30 p.m – 2:30 p.m Entrega de habitaciones
				</p>
				<p style="text-align: justify;">
					<b>Salida</b><br>3:00 p.m – Traslado a aeropuerto .
				</p>
				<p style="text-align: justify;">
					<b>Tour de acompa&ntilde;antes</b><br>5:00 p.m – Salida hacia tour
					nocturno.
				</p>

				<p style="font-weight: bold;">Recuerda usar la vestimenta adecuada y
					guardar tus pertenencias</p>

				<h2 class="major">24 de Febrero</h2>
				<span class="image main"><img src="images/Dia2.png" alt="" /></span>
				<p style="text-align: justify;">Tenemos para ti toda una oferta de
					desayunos, almuerzos, cenas y snacks, un paseo por los parques para
					que disfrutes de este paraíso tropical.</p>
				<p style="text-align: justify;">
					<b>Desayuno</b><br>7:00 – 8:00 a.m Desayuno en el restaurante de tu
					elección.
				</p>
				<p style="text-align: justify;">
					<b>Visita a Parques</b><br>8:30 a.m – Salida a parques completo
					Hotel- Parque – Hotel.
				</p>
				<p style="text-align: justify;">
					<b>Parques por visitar:</b> <br>XCARET<br> XPLOR<br> XENSES<br>
					X-HELA<br> XENOTEX<br> XOXIMILCO
				</p>
				<p style="text-align: justify;">
					<b>Almuerzo</b><br>12:00 – 2:00 p.m –Almuerzo en restaurante de tu
					elección
				</p>
				<p style="text-align: justify;">
					<b>Tour nocturnos</b><br>5:30 p.m – Salida hacia tour nocturno.
				</p>
				<p style="text-align: justify;">
					<b>Cena</b><br>7:00 – 8:00 p.m Cena en el restaurante de tu
					elección.
				</p>
				Recomendaciones de Vestuario <span class="image main"><img
					alt="Recomendaci&oacute;n" src="images/playa-02.png"></span>


				<h2 class="major">25 de Febrero</h2>
				<span class="image main"><img src="images/Dia3.png" alt="" /></span>
				<p style="text-align: justify;">Nos despedimos de este paraíso
					tropical y esperamos con ansias verte el próximo año!!</p>
				<p style="text-align: justify;">
					<b>Desayuno</b><br>7:00 – 8:00 a.m Desayuno en el restaurante de tu
					elección.
				</p>
				<p style="text-align: justify;">
					<b>Check-out</b><br>9:00 a.m – Entrega de habitaciones.
				</p>
				<p style="text-align: justify;">
					<b>Salida</b><br>10:00 a.m – Traslado a aeropuerto para abordar
					vuelo con destino a El Salvador.
				</p>

			</article>
			<article id="registro" style="background-color: #24468a;">
				<div style="text-align: center;">
					<img alt="Logo" src="images/Logob.png" width="200" height="200"
						style="text-align: center;"> <label
						style="padding-top: 30px; font-size: 16pt; font-weight: bold;">Forma
						parte de esta Xperiencia sin igual </label>
					<h2 class="major" style="text-align: justify;">
						<br>
					</h2>
				</div>
				<form method="post" enctype="multipart/form-data"
					style="text-align: center;">
					<div id="mm"></div>
					<div id="gm"></div>
					<div id="rel"></div>
				</form>
			</article>

			<!-- Elements -->
			<article id="elements">
				<h2 class="major">Elements</h2>

				<section>
					<h3 class="major">Text</h3>
					<p>
						This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i>
						and this is <em>emphasized</em>. This is <sup>superscript</sup>
						text and this is <sub>subscript</sub> text. This is and this is
						code:
						<code>for (;;) { ... }</code>
						. Finally, <a href="#">this is a link</a>.
					</p>
					<hr />
					<h2>Heading Level 2</h2>
					<h3>Heading Level 3</h3>
					<h4>Heading Level 4</h4>
					<h5>Heading Level 5</h5>
					<h6>Heading Level 6</h6>
					<hr />
					<h4>Blockquote</h4>
					<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis
						tincidunt felis sagittis eget tempus euismod. Vestibulum ante
						ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis
						iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante
						ipsum primis in faucibus lorem ipsum dolor sit amet nullam
						adipiscing eu felis.</blockquote>
					<h4>Preformatted</h4>
					<pre>
						<code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code>
					</pre>
				</section>
			</article>
		</div>
		<footer id="footer">
			<p class="copyright" style="font-weight: bold;">
				Power by<br> <a href="http://amatetravel.com"><img
					alt="powerby-amatetravel"
					src="images/Amate Travel para fondo gris-01.png" width="291px"
					height="44px"></a>
			</p>
		</footer>
	</div>
	<div id="bg">
		<input type="text" readonly="readonly" id="streg" name="streg">
	</div>
	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/rel.js"></script>
</body>
</html>