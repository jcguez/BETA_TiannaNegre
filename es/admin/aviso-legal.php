<?php
// session_start(); 
// if ( empty($_SESSION['id_s']) ) {
// 	$_SESSION['id_s'] = 'session_'.date("Y-m-d_H:i:s");
// } else {
// 	$_SESSION['id_s'] = $_SESSION['id_s'];
// 	header("Location: index.php");
// }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio · Tianna Negre</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
	<style>
		html, body{ height: 100%; }
		body, *{ margin: 0; padding: 0; font-family: 'Raleway', sans-serif; }
		body{ background: url(img/FondoTiannaNegre.jpg) no-repeat center center fixed; background-size: cover; }
		.cont-acceso{ display: block; margin-left: 100px; margin-right: 100px; background-color: rgba(20, 19, 19, 0.9); height: 100%; padding-left: 60px; padding-right: 60px; }
		.logo{ height: 40%; border-bottom: 1px solid #fff; }
		.logo > img{ padding-top: 48%; }
		.fecha{ height: 20%; border-bottom: 1px solid #fff; padding-top: 25px; padding-bottom: 25px; }
		.fecha > p{ display: block; color: #fff; text-transform: uppercase; font-weight: 100; letter-spacing: 2px; }
		.fecha > .cont-fecha{ width: 70%; display: inline-block; background-color: #333; padding: 4px; }
		.fecha > .cont-fecha > input{ width: 31%; display: inline-block; background: transparent; border-width: 0px; border-right: 1px solid #fff; text-align: center; color: #fff }
		.fecha > .cont-fecha > input.no-border{ border-right-width: 0px; }
		.fecha > .cont-fecha > input, .btn-ingresar{ display: inline-block; font-size: 12px; padding: 1px 0; }
		.btn-ingresar{ width: 28%; float: right; padding: 5px 0px; border-width: 0px; color: #fff; background-color: #7F6D5D; text-transform: uppercase; font-weight: 200; letter-spacing: 1px; font-size: 12px; }
		.sel-pais{ padding-top: 20px; float: left; width: 100%; }
		.spin-paises{ display: inline-block; background-color: transparent; color: #fff; border-width: 0px; width: 48%; float: left; }
		.cont-recuerda{ display: inline-block; background-color: transparent; color: #fff; border-width: 0px; width: 48%; float: right; text-align: right; }
		.cont-recuerda > input{ margin-right: 5px; }
		.idioma{ height: 40%; padding-top: 25px; }
		.idioma p{ text-align: center; text-transform: uppercase; color: #fff; font-size: 9px; }
		.idioma p.borde{ border-right: 1px solid #fff; }
		.sin-padding-lr{ padding-left: 0px; padding-right: 0px; }

		#footer {
			width: 100%;
			/*height: 50px;*/
			background: #000;
			border-top: 2px solid #000;
			position: absolute;
			bottom: 0;
			color: #fff;
			text-align: center;
		}

		#footer > p{
			text-align: center;
			font-size: 10px;
			font-weight: 200;
		}

		@media screen and ( max-width: 500px ){
			.cont-acceso{ margin-left: 0px; margin-right: 0px; }
		}

		/*Cambiar el color del placeholder*/
		::-webkit-input-placeholder { color: #fff; } /* WebKit */
		:-moz-placeholder { color: #fff; } /* Firefox 18- */
		::-moz-placeholder { color: #fff; } /* Firefox 19+ */
		:-ms-input-placeholder { color: #fff; } /* IE 10+ */
	</style>
</head>
<body>
	<div class="container-fluid" style="height: 100%;">
		<div class="row" style="height: 100%;">
			<div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12" style="height: 100%;">
				<div class="cont-acceso">
					<div class="logo">
						<img class="img-responsive center-block" src="img/LogoTN.png" alt="">
					</div>
					<div class="fecha">
						<p>fecha de nacimiento</p>
						<div class="cont-fecha">
							<input class="day" type="text" placeholder="DD">
							<input class="month" type="text" placeholder="MM">
							<input class="no-border year" type="text" placeholder="AAAA">
						</div>
						<button class="btn-ingresar">Ingresar</button>
						<div class="sel-pais">
							<select id="" class="spin-paises" name="">
								<option value="AF">Afganistán</option>
								<option value="AL">Albania</option>
								<option value="DE">Alemania</option>
								<option value="AD">Andorra</option>
								<option value="AO">Angola</option>
								<option value="AI">Anguilla</option>
								<option value="AQ">Antártida</option>
								<option value="AG">Antigua y Barbuda</option>
								<option value="AN">Antillas Holandesas</option>
								<option value="SA">Arabia Saudí</option>
								<option value="DZ">Argelia</option>
								<option value="AR">Argentina</option>
								<option value="AM">Armenia</option>
								<option value="AW">Aruba</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="AZ">Azerbaiyán</option>
								<option value="BS">Bahamas</option>
								<option value="BH">Bahrein</option>
								<option value="BD">Bangladesh</option>
								<option value="BB">Barbados</option>
								<option value="BE">Bélgica</option>
								<option value="BZ">Belice</option>
								<option value="BJ">Benin</option>
								<option value="BM">Bermudas</option>
								<option value="BY">Bielorrusia</option>
								<option value="MM">Birmania</option>
								<option value="BO">Bolivia</option>
								<option value="BA">Bosnia y Herzegovina</option>
								<option value="BW">Botswana</option>
								<option value="BR">Brasil</option>
								<option value="BN">Brunei</option>
								<option value="BG">Bulgaria</option>
								<option value="BF">Burkina Faso</option>
								<option value="BI">Burundi</option>
								<option value="BT">Bután</option>
								<option value="CV">Cabo Verde</option>
								<option value="KH">Camboya</option>
								<option value="CM">Camerún</option>
								<option value="CA">Canadá</option>
								<option value="TD">Chad</option>
								<option value="CL">Chile</option>
								<option value="CN">China</option>
								<option value="CY">Chipre</option>
								<option value="VA">Ciudad del Vaticano (Santa Sede)</option>
								<option value="CO">Colombia</option>
								<option value="KM">Comores</option>
								<option value="CG">Congo</option>
								<option value="CD">Congo, República Democrática del</option>
								<option value="KR">Corea</option>
								<option value="KP">Corea del Norte</option>
								<option value="CI">Costa de Marfíl</option>
								<option value="CR">Costa Rica</option>
								<option value="HR">Croacia (Hrvatska)</option>
								<option value="CU">Cuba</option>
								<option value="DK">Dinamarca</option>
								<option value="DJ">Djibouti</option>
								<option value="DM">Dominica</option>
								<option value="EC">Ecuador</option>
								<option value="EG">Egipto</option>
								<option value="SV">El Salvador</option>
								<option value="AE">Emiratos Árabes Unidos</option>
								<option value="ER">Eritrea</option>
								<option value="SI">Eslovenia</option>
								<option value="ES" selected="">España</option>
								<option value="US">Estados Unidos</option>
								<option value="EE">Estonia</option>
								<option value="ET">Etiopía</option>
								<option value="FJ">Fiji</option>
								<option value="PH">Filipinas</option>
								<option value="FI">Finlandia</option>
								<option value="FR">Francia</option>
								<option value="GA">Gabón</option>
								<option value="GM">Gambia</option>
								<option value="GE">Georgia</option>
								<option value="GH">Ghana</option>
								<option value="GI">Gibraltar</option>
								<option value="GD">Granada</option>
								<option value="GR">Grecia</option>
								<option value="GL">Groenlandia</option>
								<option value="GP">Guadalupe</option>
								<option value="GU">Guam</option>
								<option value="GT">Guatemala</option>
								<option value="GY">Guayana</option>
								<option value="GF">Guayana Francesa</option>
								<option value="GN">Guinea</option>
								<option value="GQ">Guinea Ecuatorial</option>
								<option value="GW">Guinea-Bissau</option>
								<option value="HT">Haití</option>
								<option value="HN">Honduras</option>
								<option value="HU">Hungría</option>
								<option value="IN">India</option>
								<option value="ID">Indonesia</option>
								<option value="IQ">Irak</option>
								<option value="IR">Irán</option>
								<option value="IE">Irlanda</option>
								<option value="BV">Isla Bouvet</option>
								<option value="CX">Isla de Christmas</option>
								<option value="IS">Islandia</option>
								<option value="KY">Islas Caimán</option>
								<option value="CK">Islas Cook</option>
								<option value="CC">Islas de Cocos o Keeling</option>
								<option value="FO">Islas Faroe</option>
								<option value="HM">Islas Heard y McDonald</option>
								<option value="FK">Islas Malvinas</option>
								<option value="MP">Islas Marianas del Norte</option>
								<option value="MH">Islas Marshall</option>
								<option value="UM">Islas menores de Estados Unidos</option>
								<option value="PW">Islas Palau</option>
								<option value="SB">Islas Salomón</option>
								<option value="SJ">Islas Svalbard y Jan Mayen</option>
								<option value="TK">Islas Tokelau</option>
								<option value="TC">Islas Turks y Caicos</option>
								<option value="VI">Islas Vírgenes (EEUU)</option>
								<option value="VG">Islas Vírgenes (Reino Unido)</option>
								<option value="WF">Islas Wallis y Futuna</option>
								<option value="IL">Israel</option>
								<option value="IT">Italia</option>
								<option value="JM">Jamaica</option>
								<option value="JP">Japón</option>
								<option value="JO">Jordania</option>
								<option value="KZ">Kazajistán</option>
								<option value="KE">Kenia</option>
								<option value="KG">Kirguizistán</option>
								<option value="KI">Kiribati</option>
								<option value="KW">Kuwait</option>
								<option value="LA">Laos</option>
								<option value="LS">Lesotho</option>
								<option value="LV">Letonia</option>
								<option value="LB">Líbano</option>
								<option value="LR">Liberia</option>
								<option value="LY">Libia</option>
								<option value="LI">Liechtenstein</option>
								<option value="LT">Lituania</option>
								<option value="LU">Luxemburgo</option>
								<option value="MK">Macedonia, Ex-República Yugoslava de</option>
								<option value="MG">Madagascar</option>
								<option value="MY">Malasia</option>
								<option value="MW">Malawi</option>
								<option value="MV">Maldivas</option>
								<option value="ML">Malí</option>
								<option value="MT">Malta</option>
								<option value="MA">Marruecos</option>
								<option value="MQ">Martinica</option>
								<option value="MU">Mauricio</option>
								<option value="MR">Mauritania</option>
								<option value="YT">Mayotte</option>
								<option value="MX">México</option>
								<option value="FM">Micronesia</option>
								<option value="MD">Moldavia</option>
								<option value="MC">Mónaco</option>
								<option value="MN">Mongolia</option>
								<option value="MS">Montserrat</option>
								<option value="MZ">Mozambique</option>
								<option value="NA">Namibia</option>
								<option value="NR">Nauru</option>
								<option value="NP">Nepal</option>
								<option value="NI">Nicaragua</option>
								<option value="NE">Níger</option>
								<option value="NG">Nigeria</option>
								<option value="NU">Niue</option>
								<option value="NF">Norfolk</option>
								<option value="NO">Noruega</option>
								<option value="NC">Nueva Caledonia</option>
								<option value="NZ">Nueva Zelanda</option>
								<option value="OM">Omán</option>
								<option value="NL">Países Bajos</option>
								<option value="PA">Panamá</option>
								<option value="PG">Papúa Nueva Guinea</option>
								<option value="PK">Paquistán</option>
								<option value="PY">Paraguay</option>
								<option value="PE">Perú</option>
								<option value="PN">Pitcairn</option>
								<option value="PF">Polinesia Francesa</option>
								<option value="PL">Polonia</option>
								<option value="PT">Portugal</option>
								<option value="PR">Puerto Rico</option>
								<option value="QA">Qatar</option>
								<option value="UK">Reino Unido</option>
								<option value="CF">República Centroafricana</option>
								<option value="CZ">República Checa</option>
								<option value="ZA">República de Sudáfrica</option>
								<option value="DO">República Dominicana</option>
								<option value="SK">República Eslovaca</option>
								<option value="RE">Reunión</option>
								<option value="RW">Ruanda</option>
								<option value="RO">Rumania</option>
								<option value="RU">Rusia</option>
								<option value="EH">Sahara Occidental</option>
								<option value="KN">Saint Kitts y Nevis</option>
								<option value="WS">Samoa</option>
								<option value="AS">Samoa Americana</option>
								<option value="SM">San Marino</option>
								<option value="VC">San Vicente y Granadinas</option>
								<option value="SH">Santa Helena</option>
								<option value="LC">Santa Lucía</option>
								<option value="ST">Santo Tomé y Príncipe</option>
								<option value="SN">Senegal</option>
								<option value="SC">Seychelles</option>
								<option value="SL">Sierra Leona</option>
								<option value="SG">Singapur</option>
								<option value="SY">Siria</option>
								<option value="SO">Somalia</option>
								<option value="LK">Sri Lanka</option>
								<option value="PM">St Pierre y Miquelon</option>
								<option value="SZ">Suazilandia</option>
								<option value="SD">Sudán</option>
								<option value="SE">Suecia</option>
								<option value="CH">Suiza</option>
								<option value="SR">Surinam</option>
								<option value="TH">Tailandia</option>
								<option value="TW">Taiwán</option>
								<option value="TZ">Tanzania</option>
								<option value="TJ">Tayikistán</option>
								<option value="TF">Territorios franceses del Sur</option>
								<option value="TP">Timor Oriental</option>
								<option value="TG">Togo</option>
								<option value="TO">Tonga</option>
								<option value="TT">Trinidad y Tobago</option>
								<option value="TN">Túnez</option>
								<option value="TM">Turkmenistán</option>
								<option value="TR">Turquía</option>
								<option value="TV">Tuvalu</option>
								<option value="UA">Ucrania</option>
								<option value="UG">Uganda</option>
								<option value="UY">Uruguay</option>
								<option value="UZ">Uzbekistán</option>
								<option value="VU">Vanuatu</option>
								<option value="VE">Venezuela</option>
								<option value="VN">Vietnam</option>
								<option value="YE">Yemen</option>
								<option value="YU">Yugoslavia</option>
								<option value="ZM">Zambia</option>
								<option value="ZW">Zimbabue</option>
							</select>

							<div class="cont-recuerda">
								<input type="checkbox">Recuerdame
							</div>
						</div>
					</div>
					<div class="idioma">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="row">
									<div class="col-md-3 col-sm-3 sin-padding-lr">
										<p class="borde">Español</p>
										<img class="img-responsive center-block" src="img/bandera1.png" alt="">
									</div>
									<div class="col-md-3 col-sm-3 sin-padding-lr">
										<p class="borde">Catalán</p>
										<img class="img-responsive center-block" src="img/bandera2.png" alt="">
									</div>
									<div class="col-md-3 col-sm-3 sin-padding-lr">
										<p class="borde">English</p>
										<img class="img-responsive center-block" src="img/bandera3.png" alt="">
									</div>
									<div class="col-md-3 col-sm-3 sin-padding-lr">
										<p>Deutsch</p>
										<img class="img-responsive center-block" src="img/bandera4.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="footer">
		<p>Este sitio es únicamente para uso de personas mayores de edad en países y localidades donde la ley permite el consumo del alcohol. Si usted es una de esas personas y si ha leído y aceptado someterse a los términos y condiciones de uso de CELLER TIANNA NEGRE. podrá acceder a la web. Por favor ingrese su fecha de nacimiento y a continuación presione el botón INGRESAR.<br>
		Camí des Mitjans. 07350 Binissalem. Mallorca. España. Tel. +34 971 886 826 / 661 224 109<br>
		info@tiannanegre.com</p>
	</div>

	<script src="https://code.jquery.com/jquery-2.2.4.js"
	  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
	  crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/moment.js"></script>
	<script>
		$(document).ready(function () {
			$(".btn-ingresar").click(function () {
				var dia = $(".day").val();
				var mes = $(".month").val();
				var anio = $(".year").val();
				var res = moment(anio + mes + dia, "YYYYMMDD").fromNow();
				var str = res.split(" ");
				// console.log( moment(anio + mes + dia, "YYYYMMDD").fromNow() );
				console.log(str[0]);
				if ( str[0] >= 18 ) {
					window.location = "index.php";
				} else {
					window.location = "https://responsibility.org/en-espanol/";
				}
			});
		});
	</script>
</body>
</html>