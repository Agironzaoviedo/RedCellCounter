<?php
	require_once "db.php";
	require_once "include/header.php";
?>

<div class="cuadrado-1" id="cudrado-contador">

	<div class="linea1">

		<select onchange="selectorOpciones()" id="sectorFSP" class="selector" name="transporte">
			<option>Seleccione FSP</option>
			<option>Anisocitosis</option>
			<option>Poiquilocitosis</option>
			<option>Hipocromía</option>
		</select>


		<input class="button" type="button" onclick="Reiniciar()" value="Reiniciar" />
		<audio id="miAudio" src="Rifle_Shot_01.wav"></audio>
		<input class="button" type="button" onclick="abrirResultados()" value="Resultados" />


	</div>
	<div class="linea5">
		<h5<a>
			<?php 
						 
						$conn = new PDO("mysql:host=localhost;dbname=usuariosrcc","root","");


						$consulta=$conn->query("SELECT * FROM acual");

						$datos=array();
						foreach ($consulta as $row) {
							$datos[]=$row;
						}
						foreach($datos as $data){
							$nombre= $data["nombre"];
							
						}
						echo $nombre;
						 
						 ?>
			</a> </h5>
	</div>

	<div class="linea2">
		<h5>Total recuento:<span id="contadorTotal">0</span></h5>
		<h5>poiquilocitosis:<span id="contadorPoiq">0</span></h5>
	</div>

	<div class="recuadroBotones">

		<a class="contador" id="aniciositosis">
			<p>Anisocitosis</p>
			<div class="cont_img">
				<img id="a-1" onclick="ContA(this)" src="images/Anisocitosis/Anisocitosis.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="a-1a" title="Aniciositosis" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="macrocitos">
			<p>Macrocitos</p>
			<div class="cont_img">
				<img id="a-2" onclick="ContA(this)" src="images/Anisocitosis/macrocitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="a-2a" title="Macrocitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="macrocitos_ovales">
			<p id="a-3">Macrocitos ovales</p>
			<div class="cont_img">
				<img id="a-3" onclick="ContA(this)" src="images/Anisocitosis/macrocitos_ovales.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="a-3a" title="Macrocitos ovales" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="microcitos">
			<p>Microcitos</p>
			<div class="cont_img">
				<img id="a-4" onclick="ContA(this)" src="images/Anisocitosis/microcitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="a-4a" title="Microcitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="hipercromia">
			<p>Hipercromía</p>
			<div class="cont_img">
				<img id="h-1" onclick="ContH(this)" src="images/Color/hipercromia.png" width="100px" height="100px">
				<div class="conteo">
					<span><input id="h-1h" title="Hipercromía" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="hipocromia">
			<p>Hipocromía</p>
			<div class="cont_img">
				<img id="h-2" onclick="ContH(this)" src="images/Color/hipocromia.png" width="100px" height="100px">
				<div class="conteo">
					<span><input id="h-2h" title="Hipocromía" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="policromatofilia">
			<p>Policromatofilia</p>
			<div class="cont_img">
				<img id="h-3" onclick="ContH(this)" src="images/Color/policromatofilia.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="h-3h" title="Policromatofilia" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Anillo_de_Cabot">
			<p>Anillo de Cabot</p>
			<div class="cont_img">
				<img id="h-4" onclick="ContH(this)" src="images/Inclusiones_eritrocitarias/Anillo_de_Cabot.png"
					width="100px" height="100px">
				<div class="conteo">
					<span><input id="h-4h" title="Anillo de Cabot" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Cuerpos_de_Howell_Jolly">
			<p>Cuerpos de Howell J.</p>
			<div class="cont_img">
				<img id="h-5" onclick="ContH(this)" src="images/Inclusiones_eritrocitarias/Cuerpos_de_Howell_Jolly.png"
					width="100px" height="100px">
				<div class="conteo">
					<span><input id="h-5h" title="Cuerpos de Howell J." type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Cuerpos_de_Pappenheimer">
			<p>Cuerpos de Pappenheimer</p>
			<div class="cont_img">
				<img id="h-6" onclick="ContH(this)" src="images/Inclusiones_eritrocitarias/Cuerpos_de_Pappenheimer.png"
					width="100px" height="100px">
				<div class="conteo">
					<span><input id="h-6h" title="Cuerpos de Pappenheimer" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="punteado_basofilo">
			<p>Punteado basofilo</p>
			<div class="cont_img">
				<img id="h-7" onclick="ContH(this)" src="images/Inclusiones_eritrocitarias/punteado_basofilo.png"
					width="100px" height="100px">
				<div class="conteo">
					<span><input id="h-7h" title="Punteado basofilo" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Acantocitos">
			<p>Acantocitos</p>
			<div class="cont_img">
				<img id="p-1" onclick="ContP(this)" src="images/Poiquilocitosis/Acantocitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="p-1p" title="Acantocitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Celulas_en_champinion">
			<p>Cel. en champiñón</p>
			<div class="cont_img">
				<img id="p-2" onclick="ContP(this)" src="images/Poiquilocitosis/Celulas_en_champinion.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="p-2p" title="el. en champiñón" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Celulas_contraidas_irregularmente">
			<p>Cel. contraidas Irr.</p>
			<div class="cont_img">
				<img id="p-3" onclick="ContP(this)" src="images/Poiquilocitosis/Celulas_contraidas_irregularmente.png"
					width="100px" height="100px">
				<div class="conteo">
					<span><input id="p-3p" title="Cel. contraidas Irr." type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Codocitos">
			<p>Codocitos</p>
			<div class="cont_img">
				<img id="p-4" onclick="ContP(this)" src="images/Poiquilocitosis/Codocitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="p-4p" title="Codocitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Dacriocitos">
			<p>Dacriocitos</p>
			<div class="cont_img">
				<img id="p-5" onclick="ContP(this)" src="images/Poiquilocitosis/Dacriocitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="p-5p" title="Dacriocitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Drepanocitos">
			<p>Drepanocitos</p>
			<div class="cont_img">
				<img id="p-6" onclick="ContP(this)" src="images/Poiquilocitosis/Drepanocitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="p-6p" title="Drepanocitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Eccentrocitos">
			<p>Eccentrocitos</p>
			<div class="cont_img">
				<img id="p-7" onclick="ContP(this)" src="images/Poiquilocitosis/Eccentrocitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="p-7p" title="Eccentrocitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Eliptocitos">
			<p>Eliptocitos</p>
			<div class="cont_img">
				<img id="p-8" onclick="ContP(this)" src="images/Poiquilocitosis/Eliptocitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="p-8p" title="Eliptocitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>

		<a class="contador" id="Equinocitos">
			<p>Equinocitos</p>
			<div class="cont_img">
				<img id="p-9" onclick="ContP(this)" src="images/Poiquilocitosis/Equinocitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="p-9p" title="Equinocitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Esferocitos">
			<p>Esferocitos</p>
			<div class="cont_img">
				<img id="p-10" onclick="ContP(this)" src="images/Poiquilocitosis/Esferocitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="p-10p" title="Esferocitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Esquizocitos">
			<p>Esquizocitos</p>
			<div class="cont_img">
				<img id="p-11" onclick="ContP(this)" src="images/Poiquilocitosis/Esquizocitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="p-11p" title="Esquizocitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Estomastocitos">
			<p>Estomastocitos</p>
			<div class="cont_img">
				<img id="p-12" onclick="ContP(this)" src="images/Poiquilocitosis/Estomastocitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="p-12p" title="Estomastocitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Knizocitos">
			<p>Knizocitos</p>
			<div class="cont_img">
				<img id="p-13" onclick="ContP(this)" src="images/Poiquilocitosis/Knizocitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="p-13p" title="Knizocitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Ovalocitos">
			<p>Ovalocitos</p>
			<div class="cont_img">
				<img id="p-14" onclick="ContP(this)" src="images/Poiquilocitosis/Ovalocitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="p-14p"  title="Ovalocitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>
		<a class="contador" id="Queratocitos">
			<p>Queratocitos</p>
			<div class="cont_img">
				<img id="p-15" onclick="ContP(this)" src="images/Poiquilocitosis/Queratocitos.png" width="100px"
					height="100px">
				<div class="conteo">
					<span><input id="p-15p" title="Queratocitos" type="text" value="0" class="formaanormal" ></span>
				</div>
			</div>
		</a>

	</div>

</div>

<div class="cuadrado-5" id="cudrado-resultados">

	<div class="encabezadoLogin">

		<img src="images/icono.png" width="190px">
		<h1>Red Cell Counter</h1>

		<aside class="recuadroLogin">

			<div class="linea4">
				<h5>Resultados <br></h5>
			</div>
			<div class="linea4">

			</div>


			<center>
				<table border="1px" bordercolor="#000000" width="80%" bgcolor="#ffffff" cellpadding="8" id="tabla">
					<thead>
						<tr>
							<th>FORMA ANORMAL</th>
							<th>POCOS</th>
							<th>MODERADO</th>
							<th>MUCHOS</th>
						</tr>
					</thead>
					<tbody id="tbody">

					</tbody>
				</table>
    		</center>
		</aside>
	</div>
</div>
<script src="js/resultado.js"></script>

<?php 
	require_once "include/footer.php";
	?>