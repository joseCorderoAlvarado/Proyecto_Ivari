@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')
<style type="text/css">
	#text{color: #003366;}
	
	.nav-link.active{
		background-color:#92d050 !important;
		border-color: #92d050 !important; 
		border-style:solid;
		font-weight: bold;
	}

</style>
<script type="text/javascript">
  
</script>
{{-------------------------Buscador---------------------------}}
<div class="container-fluid">
	<div class="row justify-content-center">
	   <div class="col-md-4"></div>
		<div class="col-md-4"></div>
        <div class="col-md-4">
          <form>
            <div class="card-body row no-gutters align-items-center">
             <div class="col">
              <input class="form-control" type="search" placeholder="Buscar">
             </div>
            <div class="col-auto">
            <button class="btn" type="submit">
            <img src="images/iconoBuscar.png" width="30" height="30"	class="d-inline-block align-top">
            </button>
            </div>
           </div>
          </form>
        </div>
    </div>
</div>
{{------------------------Fin de Buscador---------------------------}}
<div class="container-fluid">
	<div class="row">
		<div class="col-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a  style="color: 92d050; font-weight:bold;" class="nav-link" href="{{ url('compras_Realizadas')}}">Compras realizadas</a>
				<a  style="color: 92d050; font-weight:bold;" class="nav-link" href="{{ url('perfil_Usuario')}}">Mi Perfil</a>
				<a  style="color: 92d050; font-weight:bold;" class="nav-link" href="{{ url('historia')}}">Acerca de Iravi</a>
			</div>
		</div>


<div class="content">
<!-- Multistep Form -->
<div class="main">
<form action="#" class="regform" method="get">
<!-- Progressbar -->
<ul id="progressbar">
<li id="active1">Domicilio<span class="Ok" id="ok1">✔</span></li>
<li id="active2">Seleccionar pago<span class="Ok" id="ok2">✔</span></li>
<li id="active3">Env&iacute;o<span class="Ok" id="ok3">✔</span></li>
<li id="active4">Confirmaci&oacute;n<span class="Ok" id="ok4">✔</span></li>

</ul>
<!-- Fieldsets -->
<fieldset id="first">
<h2 class="title">Seleccione Domicilio</h2>
<p class="subtitle">Domicilio de env&iacute;o</p>
<div class="radio_btn">
<input type="radio" name="gender" value="Domicilio 1"> Calle xxxx Nayarit #xxx</div><br>
<div class="radio_btn">
<input type="radio" name="gender" value="Domicilio 2"> Calle xxxx Nayarit #xxx</div><br>
<div class="radio_btn">
<input type="radio" name="gender" value="Domicilio 3"> Calle xxxx Nayarit #xxx
</div>
<div align="center">
<input id="next_btn1" onclick="next_step1()" type="button" value="Siguiente"></div>
</fieldset>
<fieldset id="second">
<h2 class="title">Seleccione el metodo de pago</h2>
<p class="subtitle">Metodos de pago disponibles:</p>
<div class="radio_btn_pago">
<input type="radio" name="Pago" value="Pago1"> PayPal </div><br>
<div align="center">
<input id="pre_btn1" onclick="prev_step1()" type="button" value="Anterior">
<input id="next_btn2" name="next" onclick="next_step2()" type="button" value="Siguiente"></div>
</fieldset>

<fieldset id="third">
<h2 class="title">Educational Profiles</h2>
<p class="subtitle">Step 2</p>
<select class="options">
<option>--Select Education--</option>
<option>Post Graduate</option>
<option>Graduate</option>
<option>HSC</option>
<option>SSC</option>
</select>
<div align="center">
<input id="pre_btn2" onclick="prev_step2()" type="button" value="Anterior">
<input id="next_btn3" name="next" onclick="next_step3()" type="button" value="Siguiente"></div>
</fieldset>

<fieldset id="four">
<h2 class="title">Personal Details</h2>
<p class="subtitle">Step 3</p>
<input class="text_field" name="fname" placeholder="First Name" type="text">
<input class="text_field" name="lname" placeholder="Last Name" type="text">
<input class="text_field" name="cont" placeholder="Contact" type="text">
<label>Gender</label>
<input name="gender" type="radio" value="Male">Male
<input name="gender" type="radio" value="Female">Female
<textarea name="address" placeholder="Address">
</textarea>
<div align="center">
<input id="pre_btn3" onclick="prev_step3()" type="button" value="Anterior">
<input class="submit_btn" onclick="validation(event)" type="submit" value="Confirmar"></div>
</fieldset>
</form>
</div>
</div>
<script src="js/form.js"></script>
@extends('layouts.footer')
