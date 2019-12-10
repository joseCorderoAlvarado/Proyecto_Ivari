{{-------------------------Menú de navegación---------------------------}}
<div class="container-fluid" style="background-color: #003366">
<div class="row"> 
<div class="col-md-12">
<nav class="navbar navbar-expand-lg	navbar-light bg-light" style="background-color: #003366 !important">
    <img src="images/iravi.png" width="30" height="30"	class="d-inline-block align-top" alt="">
	<a	class="navbar-brand" href="{{ url('/')}}" style="color: #fff"><b>Artesanias Iravi</b></a>
	<button	class="navbar-toggler"	type="button"	data-toggle="collapse"data-target="#navbarSupportedContent"	aria-controls="navbarSupportedContent" aria-expanded="false"	aria-label="Toggle	navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul	class="navbar-nav ml-auto">
			<a href="{{ url('/')}}">
			<img src="images/iconoHome.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<li class="nav-item dropdown">
			<a lass="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<img src="images/iconoLogin.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ url('login')}}">Iniciar Sesión</a>
            <a class="dropdown-item" href="#registrarUsuario" role="button" class="btn btn-large btn-primary" style="width: 200px;"
					data-toggle="modal">Registrarse</a>
            </li>
			<li	class="nav-item">
				<a	class="nav-link" style="color: #fff">Bienvenido</a>
			</li>
			<img src="images/iconoCarrito.png" width="30" id="carrito" height="30"	class="d-inline-block align-top" data-toggle="modal" data-target="#mensaje">
		</ul>
	</div>
</nav>
</div>
</div>
<div id="mensaje" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title">A&uacute;n no inicias sesi&oacute;n</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-footer">
           	<form  action="Alerta" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
	        	
					<button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Iniciar sesi&oacute;n</button>
					
	        </form>
			<form  action="Alerta1" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
	        	 <a  id="button" href="#registrarUsuario" role="button" class="btn btn-primary" style="background-color: #003669; color: white;" data-toggle="modal">Registrarse</a>
	        	 </form>
	        </div>
	      
        </div>
    </div>
</div>


<div id="registrarUsuario" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title">Registro Usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
           	<form  action="registroUsuarioGuardar" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
           		<div class="modal-body">
           			<div class="row">
						<div class="col-3">
							<label id="text">Nombre:</label>
						</div>
						<div class="col-5">
							<input name="nombre" class="form-control formulario_input" type="text" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" onkeypress="return soloLetras(event)"  required="">
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Apellido Paterno:</label>
						</div>
						<div class="col-5">
							<input name="app" class="form-control formulario_input" type="text" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" onkeypress="return soloLetras(event)" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Apellido Materno:</label>
						</div>
						<div class="col-5">
							<input type="text" name="apm" class="form-control formulario_input" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" onkeypress="return soloLetras(event)" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Fecha de nacimiento:</label>
						</div>
						<div class="col-3">
							<input type="date" name="nacimiento" class="form-control" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Correo Electr&oacute;nico:</label>
						</div>
						<div class="col-5">
							<input type="email" name="correo" class="form-control formulario_input"  style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" value="" >
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Contrase&ntilde;a:</label>
						</div>
						<div class="col-5">
							<input type="password" name="contrasena" class="form-control formulario_input" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" onkeypress="return domicilio(event)"value=""
							title="El password debe contener por lo menos una mayusucla, una minuscula, un numero y tener por lo menos ocho caracteres" required="">
						</div>
					</div>

					<?php
						$tipoDireccion = DB::select('SELECT idtipo, tipo from tipodireccion');
						$tipoGenero = DB::select('SELECT idgenero, sexo from genero');
					?>

					<div class="row">
						<div class="col-3">
							<label id="text">Sexo:</label>
						</div>
						<div class="col-5">
							<select  name="genero" class="custom-select" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;"onkeypress="return checkLetrasYNumerosYCaracteres(event)">
				 	 			@foreach ($tipoGenero as $tipoGenero)
										<option  value={{ $tipoGenero->idgenero }}>
											{{ $tipoGenero->sexo }}
										</option>
				  				@endforeach
		       				</select>
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Tipo de dirección:</label>
						</div>

						<div class="col-5">
							<select  name="tipodireccion" class="custom-select" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;"onkeypress="return checkLetrasYNumerosYCaracteres(event)">
				 	 			@foreach ($tipoDireccion as $tipoDireccion)
										<option  value={{ $tipoDireccion->idtipo }}>
											{{ $tipoDireccion->tipo }}
										</option>
				  				@endforeach
		       				</select>
		       			</div>
		       		</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Calle:</label>
						</div>
						<div class="col-5">
							<input id="text"type="text" name="calle" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;"onkeypress="return soloLetras(event)" value="" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Número Interior:</label>
						</div>
						<div class="col-5">
							<input id="text"type="text" name="ninterior" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;"onkeypress="return domicilio(event)" value="" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Número Exterior:</label>
						</div>
						<div class="col-5">
							<input id="text"type="text" name="nexterior" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;"onkeypress="return domicilio(event)" value="">
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Colonia:</label>
						</div>
						<div class="col-5">
							<input id="text"type="text" name="colonia" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;"onkeypress="return soloLetras(event)" value="" required="" >
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Municipio:</label>
						</div>
						<div class="col-5">
							<input id="text"type="text" name="municipio" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;"onkeypress="return soloLetras(event)" value="" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Ciudad:</label>
						</div>
						<div class="col-5">
							<input id="text"type="text" name="ciudad" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;"onkeypress="return soloLetras(event)"value="" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Pais:</label>
						</div>
						<div class="col-5">
							<input id="text"type="text" name="pais" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;" required=""onkeypress="return soloLetras(event)">
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Código Postal:</label>
						</div>
						<div class="col-5">
							<input id="text"type="text" name="cp" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;"onkeypress="return checkNumeros(event)" value="" pattern="^[0-9]{5}" required>
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							<label id="text">Teléfono:</label>
						</div>
						<div class="col-5">
							<input id="text"type="text" name="telefono" style="width: 320px; border: solid; border-color: blue; background-color: transparent; color: black;"onkeypress="return checkNumeros(event)" value="" title="El telefono debo contener solo numeros" required=""  pattern="^[0-9]{10}">
						</div>
					</div>
	            	<p class="text-warning"><small>No dejar este campo vacio.</small></p>
	       		</div>
	        	<div class="modal-footer" align:center>
					<button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Registrar</button>
				</div>
	        </form>
        </div>
    </div>
</div>
<script type="text/javascript">

	 function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
     function domicilio(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " abcdefghijklmnñopqrstuvwxyz0123456789";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

	function checkNumeros(e) 
	{
    	tecla = (document.all) ? e.keyCode : e.which;

    	//Tecla de retroceso para borrar, siempre la permite
    	if (tecla == 8) {
        	return true;
    	}

    	// Patron de entrada, en este caso solo acepta numeros y letras
    	patron = /[0-9]/;
    	tecla_final = String.fromCharCode(tecla);
    	return patron.test(tecla_final);
	}
	
</script>


</div>
{{-----------------------FinMenú de navegación---------------------------}}
