@extends('layouts.head')
@include('layouts.menu_Navegacion')

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
				<a  class="nav-link" href="{{ url('compras_Realizadas')}}">Compras realizadas</a>
				<a  class="nav-link" href="{{ url('perfil_Usuario')}}">Mi Perfil</a>
				<a  class="nav-link" href="{{ url('historia')}}">Acerca de Iravi</a>
			</div>
		</div>
		<div class="col-6">
			<h2 class="text-center">Art&iacute;culos elegidos </h2>
{{------------------------Productos---------------------------}}
<div class="container">
<div class="row">

<div class="col-md-4">
<div class="card" style="width: 15rem;">
  <a href="#">
  <img class="card-img-top" src="images/iconoCarrito.png" alt="Card image cap">
  </a>
  <div class="card-body">
    <h5 class="card-title">T&iacute;tulo</h5>
    <p class="card-text">Precio</p>
  </div>
</div>
</div>

</div>
</div>
{{--------------------Fin Productos---------------------------}}
<br><br><br>
{{--------------------Informacion de Productos---------------------------}}
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <label>Cantidad de productos:</label>
    </div>
    <div class="col-md-4">
      <label>1</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
       <label>Importe:</label>
    </div>
    <div class="col-md-4">
       <label>$389.00</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
       <label>Bonificaci&oacute;n:</label>
    </div>
    <div class="col-md-4">
      <label>$156.47</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
       <label>Monto del pago:</label>
    </div>
    <div class="col-md-4">
       <label>$232.53</label>
    </div>
  </div>  
</div>
{{--------------------Fin Informacion de Productos---------------------------}}
<br><br><br><br>
<h2 class="text-center">Por favor seleccione su método de pago</h2>
<br><br>
{{------------------------Seleccion de metodo de Pago---------------------------}}
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="card" style="width: 15rem; height: 15em; padding: 8px">
    <input type="radio" id="metodoPago" name="metodoPago" value="sss"
        checked>
  <div class="card-body">
    <h5 class="card-title">Paypal</h5>
  <img class="card-img" src="images/paypalPago.png" alt="Card image cap">
  </div>
</div>
</div>



<div class="col-md-6">
<div class="card" style="width: 15rem; height: 15em; padding: 8px" name="metodoPago" value="sss"
        checked>
        <input type="radio" id="metodoPago" name="metodoPago" value="sss"
        checked>
  <div class="card-body">
    <h5 class="card-title">Tarjeta de Crédito</h5>
  <img class="card-img" src="images/visa-MasertCard.png" alt="Card image cap">
  </div>
</div>
</div>

</div>
</div>
{{--------------------Fin metodo de Pago---------------------------}}

<br><br><br><br>
<h2 class="text-center">Por favor seleccione su método de env&iacute;o </h2>
<br><br>
{{------------------------Seleccion de envio---------------------------}}
<div class="container">
<div class="row">

<div class="col-md-3">
<div class="card" style="width: 10rem; height: 10em; padding: 8px">
    <input type="radio" id="metodoEnvio" name="metodoEnvio" value="sss"
        checked>
  <div class="card-body">
    <h5 class="card-title">Estafeta</h5>
  <img class="card-img" src="images/Estafeta.png" alt="Card image cap">
  </div>
</div>
</div>


<div class="col-md-3">
<div class="card" style="width: 10rem; height: 10em; padding: 8px">
  <input type="radio" id="metodoEnvio" name="metodoEnvio" value="sss"
        checked>
  <div class="card-body">
    <h5 class="card-title">DHL</h5>
  <img class="card-img" src="images/dhl.svg.png" alt="Card image cap">
  </div>
</div>
</div>


<div class="col-md-3">
<div class="card" style="width: 10rem; height: 10em; padding: 8px">
   <input type="radio" id="metodoEnvio" name="metodoEnvio" value="sss"
        checked>
  <div class="card-body">
    <h5 class="card-title">Fedex</h5>
  <img class="card-img" src="images/FedEXCabEnfocado.png" alt="Card image cap">
  </div>
</div>
</div>

<div class="col-md-3">
<div class="card" style="width: 10rem; height: 10em; padding: 8px">
    <input type="radio" id="metodoEnvio" name="metodoEnvio" value="sss"
        checked>
  <div class="card-body ">
    <h5 class="card-title">UPS</h5>
   <center><img class="card-img" src="images/ups.svg" alt="Card image cap" style="width: 50px; height: 50px"></center>
  </div>
</div>
</div>

</div>
</div>
{{--------------------Fin de envio---------------------------}}
<br><br><br><br>
<h2 class="text-center">Por favor seleccione su direcci&oacute;n de env&iacute;o</h2>
<br><br>
{{------------------------Seleccion de direccion de envio---------------------------}}
<div class="container">
<div class="row">

<div class="col-md-6">
<div class="card" style="width: 15rem; padding: 8px">
    <input type="radio" id="metodoPago" name="metodoPago" value="sss"
        checked>
  <div class="card-body">
    <p>
      Pais: USA
      Estado: Texas
      Municipio: Kentuchy
      Calle: London Street
      Numero: 60 South
      Referencia: Betweem Java Avenue and C# Street
    </p>

  </div>
</div>
</div>

<div class="col-md-6">
<div class="card" style="width: 15rem; padding: 8px">
    <input type="radio" id="metodoPago" name="metodoPago" value="sss"
        checked>
  <div class="card-body">
    <p>
      Pais: Canada
      Estado: Vancuver
      Municipio: Bahamas
      Calle: Mexico Street
      Numero: 30 West
      Referencia: Betweem USA Street and Colombia Street
    </p>

  </div>
</div>
</div>

</div>
</div>
{{--------------------Fin metodo de Pago---------------------------}}


<div class="container-fluid"><br><br><br></div>

{{------------------------Confirmacion Final---------------------------}}
<div class="container text-center">
<div class="row">

<div class="col-md-12">
  <a href="#" class="btn btn-primary">Realizar pedido</a>
</div>

</div>
</div>
{{------------------------Fin de Confirmacion Final---------------------------}}
		</div>
		<div class="col-3">
			
		</div>
	</div>
</div>
@extends('layouts.footer')
