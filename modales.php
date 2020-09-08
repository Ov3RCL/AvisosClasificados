<div id="modalesUsuario">
	<!-- modal Inicio sesión -->
	<div class="modal fade" id="modalInicioSesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"> INICIA SESION CON TU CUENTA </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Correo</label>
			    <input type="email" class="form-control" v-model="user">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" v-model="password">
			  </div>
			  <button type="submit" class="btn btn-primary" v-bind:disabled="user =='' || password=='' " v-on:click.prevent="iniciarSesion()">Ingresar</button>
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
    </div>	

<!-- modal Inicio registrarse -->
	<div class="modal fade" id="modalRegistrarse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"> Ingrese sus datos </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	         
	         <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombre</label>
              <input type="text" class="form-control" v-model="nombreUsuario">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Apellido</label>
              <input type="text" class="form-control" v-model="apellidoUsuario">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Foto</label>
            <input type="text" class="form-control" v-model="fotoUsuario">
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputCity">Teléfono</label>
              <input type="number" class="form-control" v-model="telefonoUsuario">
            </div>
            <div class="form-group col-md-5">
              <label for="inputState">Correo</label>
              <input type="email" class="form-control" v-model="correoUsuario">
            </div>
            <div class="form-group col-md-3">
              <label for="inputZip">Password</label>
              <input type="password" class="form-control" v-model="passwordUsuario">
            </div>
          </div>
          <button type="submit" class="btn btn-primary" v-on:click.prevent="registrarUsuario()">Registrarme</button>
        </form>


	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>	

		<div class="modal fade" id="mensajeRegistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      
	      <div class="modal-body">
	        <h5>Se registró exitosamente</h5>
	      </div>
	      
	    </div>
	  </div>
	</div>

<!-- modal informacion de usuario en articulo publicado -->
<div class="modal fade" tabindex="-1" id="modalInformacionUsuario">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Datos de Vendedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2>Nombre: </h2>
        <h2>Telefono:</h2>
        <h2>E-Mail: </h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    
      </div>
    </div>
  </div>
</div>

	
</div>