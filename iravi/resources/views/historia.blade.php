<!DOCTYPE html>
@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')
<style type="text/css">
	input
	{
		border-radius: 3px;
		border: 1px gray;
		border-style: solid;
		background-color: #eee;
		color: #003366;
		border-color: #003366;
	}
	#text {
		color: #003366; 
	}
	#button{
		background-color: #003366; 
		border-color: #003366; 
		border-style:solid;
	}
	
	.nav-link.active{
		background-color:#92d050 !important;
		border-color: #92d050 !important; 
		border-style:solid;
		font-weight: bold;
	}
	
	.card-body{
		border-color: #003366; 
		border-style:solid;
	}
	
</style>
<br><br><br>
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		<a  style="color: 92d050; font-weight:bold;" class="nav-link" href="{{ url('comprasRealizadas')}}">Compras realizadas</a>
				<a  class="nav-link" href="{{ url('perfilUsuario')}}">Mi Perfil</a>
				<a  style="color: 92d050; font-weight:bold;" class="nav-link active" href="{{ url('historia')}}">Acerca de Iravi</a>
	</div>
</div>
<div class="col-md-8"> 
<div class="card">
  <article class="card-body">
	<h3 class="card-title text-center mb-6 mt-1">Acerca de Iravi </h3><br><br><br>
	<h4>Correcaminos tropical -<i>Geoccocyx velox</i>   <br><small>Es el ave que representa a nuestro sitio  y que forrajea en el suelo de varios hábitats como matorrales áridos, bosques abiertos y bosques de pino-encino, sabe que se alimenta principalmente de insectos y mamíferos, sus depredadores son principalmente en los matorrales los coyotes, las zorras y desde el aire los gavilanes y halcones y un <b>dato curioso</b> es que se dice que si el ave se cruza en tu camino de acuerdo a los zapotecos, mixtecos y mixes será de buena suerte (dinero y salud). </small></h1><br><br>
		<h5>Los municipios de donde fabricamos nuestros productos son de los municipios de la zona sur del estado de Nayarit y cada uno tiene un significado en su nombre y una historia que contar.</h5><br><br>
		<h5>Ahuacatlán    <br><small>Significa "lugar donde abunda el aguacate", misma que proviene de los vocablos nahuatls: "Tlan", que significa sitio; y "Ahua" que significa aguacate.</small></h1><br>
		<p><h6>Historia</h6>Según la tradición, este municipio se asentó en la región, donde mayor concentración existía de la arquitectura subterránea denominada Tumbas de Tiro entre los años 200 a.C. y 600 d.C.; un ejemplo es la Tumba de Tiro encontrada en el sitio Las Cebollas; que guardaba 2 esqueletos humanos junto con 83 vasijas de cerámica, algunas figurillas sólidas y huecas de estilo chinesco, una maqueta, flautas y artefactos de concha; así como 125 caracoles. Además de la importancia que por sí misma reviste esta tradición, sobre el ritual a sus dioses y a sus muertos; los objetos encontrados dan testimonio, de una actividad de intercambio entre los habitantes de esa época.</p><br><br>
		<h5>Ixtlán del Río    <br><small>El nombre de Ixtlán es de origen "náhuatl", compuesto por los vocablos "Itz-ittztell" que significa obsidiana, y "Tlán", que significa lugar donde abunda, es decir, la palabra Ixtlán significa "lugar donde abunda la obsidiana" o, también, "lugar de cuchillo de obsidiana".</small></h1><br>
		<p><h6>Historia</h6>La población fue fundada, en el siglo XII, por tribus Nahuatlacas en su paso hacía el Valle de México, formando parte del Señorío de Ahuacatlán, conocido por sus construcciones y objetos de obsidiana con los cuales comerciaban.
En 1525 arribó Francisco Cortés de San Buenaventura. Durante la época colonial fue paso obligado hacia la capital de la Nueva Galicia, la costa, el centro del hoy estado de Nayarit, y a la zona serrana para la explotación minera.
En 1823 fue mencionada como Ayuntamiento de la partida Ahuacatlán del estado de Jalisco, con el nombre de Ixtlán. En 1825, dentro del Séptimo Cantón de Jalisco, la municipalidad formó parte de los departamentos de Ahuacatlán. Años más tarde, en 1828, se cambia la cabecera del departamento de Ahuacatlán por la de Ixtlán. En el año de 1858, tras su pronunciamiento a favor de los liberales, el pueblo de Ixtlán fue incendiado y ocupado por fuerzas de Manuel Lozada (el Tigre de Álica) hasta 1873, año en que fue fusilado el caudillo por el gobierno de Sebastián Lerdo de Tejada. En 1885, fue prefectura del nuevo territorio de Tepic y subprefectura en 1891.
En 1909, su cabecera fue elevada a categoría de ciudad. En marzo de 1911, Martín Espinosa inició ahí la insurrección maderista contra fuerzas federales. En 1918, con la promulgación del Estado Libre y Soberano de Nayarit, Ixtlán quedó integrado como uno de sus municipios. </p><br><br>
		<h5>Jala    <br><small>El nombre de Jala- lugar donde abunda la arena, se deriva del vocablo náhuatl "Xali", que significa "Arena", y la variante "Tla", que significa "lugar donde abunda".</small></h1><br>
		<p><h6>Historia</h6>Durante la tradición Aztatlán, los pueblos asentados en la zona participaron en el surgimiento de formas arquitectónicas en la construcción de templos (como fueron los toriles, de Ixtlán del Río); así mismo, sus habitantes fueron tributarios del Señorío de Ahuacatlán. Jala, la vieja, fue el primer asentamiento con pobladores de origen náhuatl, que en su tiempo pertenecieron al cacicazgo de Xuchitepec, localizado a 6 km de la cabecera municipal. Fue evangelizado por los frailes de Ahuacatlán, que lo visitaban junto con los pueblos de Jomulco, Ixtlán, Acatil y Tequepexpan. Posteriormente, pasó de pueblo a villa y el 5 de febrero de 1918, con la promulgación de la Constitución Política del Estado de Nayarit, Jala quedó integrado como municipio de esta entidad.</p><br><br>
		<h5>Amatlán de Cañas    <br><small>La palabra náhuatl Amatlán “Lugar donde abunda el amate y papel”, se compone de los vocablos “Amtl” árbol conocido como “amate y papel” y “tlán” lugar donde abunda. 
A la creación del  municipio se le incorporó al nombre la palabra cañas, por contar con trapiches y molienda de caña de azúcar.
</small></h1><br>
		<p><h6>Historia</h6>En el periodo de la cultura  Aztatlán (700 d.C. a 1524), los pueblos del territorio debieron ser independientes, pese a su cercanía con el Señorío de Ahuacatlán y Etzatlán, del ahora está de Jalisco.
En los años 1524 y 1525, el conquistador español, Francisco Cortés de San Buenaventura, organizó numerosas expediciones a la región a fin de comprobar la existencia de sus riquezas minerales.
Nuño Beltrán de Guzmán y Fray Juan Padilla, conquistaron Amatlán de Cañas en mayo de 1530, y tomaron providencias para la evangelización de los nativos.
En 1600, Tepuzhuacán, lugar con extensos cañaverales y el trapiche más grande y productivo de la Nueva Galicia, registró una inundación por una creciente del Rio Ameca. EN 1620, se fundó, por misioneros franciscanos, la población de Amatlán de Cañas, encomienda minera de la cual se extrajeron abundantes minerales de oro, plata y plomo de la zona serrana, que aunados a la explotación cañera, representaron importantes fuentes de riqueza.
En 1822, se crearon como parte de la partida de Mascota, los Ayuntamientos de Amatlán y Garabatos, cuya extensión territorial hoy es conocida como El Rosario.
Para 1850, Amatlán encabezaba la municipalidad y en 1884, por división política del nuevo territorio de Tepic, fue sede de la prefectura y municipalidad.
</p><br><br>
  </article>
</div>
</div>
</div>
{{-------------------------Fin de alta usuario administrador---------------------------}}
@extends('layouts.footer')