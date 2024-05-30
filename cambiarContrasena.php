<form class="form w-100" novalidate="novalidate" id="formCambiarContra"  method="POST">
    <!--begin::Heading-->
    <div class="text-center mb-11">
        <!--begin::Title-->
        <h1 class="text-gray-900 fw-bolder mb-3">Cambiar Contraseña</h1>
        <!--end::Title-->
        <!--begin::Subtitle-->
        <div class="text-gray-500 fw-semibold fs-6"></div>
        <!--end::Subtitle=-->
    </div>

    <div class="fv-row mb-8">
        <!--begin::Email-->
        <input type="text" placeholder="Nombre de usuario" name="correo" autocomplete="off" class="form-control bg-transparent" required/>
        <!--end::Email-->
    </div>
    <!--end::Input group=-->
    <div class="fv-row mb-3">
        <!--begin::Password-->
        <input type="password" placeholder="Nueva Contraseña" name="nueva_contrasena" autocomplete="off" class="form-control bg-transparent" required />
        <!--end::Password-->
    </div>
	<div class="fv-row mb-3">
        <!--begin::Password-->
        <input type="password" placeholder="Confirmar Contraseña" name="confirmar_contrasena" autocomplete="off" class="form-control bg-transparent" required />
        <!--end::Password-->
    </div>
    <!--end::Input group=-->
    
    <!--begin::Dropdown-->
 <!-- Campo oculto para indicar el tipo de operación -->
    <input type="hidden" name="tipo" value="cambiar_contrasena" />
   
    <div class="d-grid mb-10">
        <button type="submit" id="btnCambiarContra" class="btn btn-primary">
            <!--begin::Indicator label-->
            <span class="indicator-label">Cambiar Contraseña</span>
            <!--end::Indicator label-->
            <!--begin::Indicator progress-->
            <span class="indicator-progress">Please wait... 
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            <!--end::Indicator progress-->
            
        </button>
             <label class="form-check form-switch form-check-custom form-check-solid">
                
                <span class="form-check-label text-muted fs-7"></span>
            </label>
    </div>
    <!--end::Submit button-->
    <!--begin::Sign up-->
    <div class="text-gray-500 text-center fw-semibold fs-6">
    <a href="index.php" class="link-primary">Regresar</a></div>
    <!--end::Sign up-->
</form>

<script type="text/javascript">
			$(document).ready(function(){
				
				//============= INICIAR SESION ============ 
				$("#btnCambiarContra").on("click", function(e){
					e.preventDefault();
					bloquearBoton("btnCambiarContra");
					$.post("Backend/f_login.php", $("#formCambiarContra").serialize(), function(data){
						if(data.resultado){
							Swal.fire({icon:"success", title:"Exito", text:data.mensaje, confirmButtonText:"Aceptar" }) 
							//setTimeout("window.location.href = 'panel.php'", 700);

						}else{
							Swal.fire({icon:"warning", title:"Lo sentimos",  text:data.mensaje, confirmButtonText:"Aceptar"})

						}
						desbloquearBoton("btnCambiarContra");
					},"json")
					.fail(function(){

						desbloquearBoton("btnCambiarContra");
						Swal.fire({icon:"error", title:"Lo sentimos", text: "No existe conexion con el servidor", confirmButtonText:"Aceptar"})
					})
				})

				function bloquearBoton(boton){
					$("#"+boton).attr('data-kt-indicator', 'on');
					$("#"+boton).attr('disabled', true);
					$("#"+boton).css("disabled", true)
				}

			function desbloquearBoton(boton){
				$("#"+boton).removeAttr('data-kt-indicator');// Remove loading indication			
				$("#"+boton).removeAttr('disabled');// Remove loading indication			
			}


			})
</script>
