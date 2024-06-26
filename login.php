<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.2.4
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Tecunes QQQ</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Metronic by Keenthemes" />
		<link rel="canonical" href="http://authentication/layouts/creative/sign-in.html" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('assets/media/auth/bg7-dark.jpg'); } [data-bs-theme="dark"] body { background-image: url('assets/media/auth/bg4-dark.jpg'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						<a href="index.html" class="mb-7">
							
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h2 class="text-white fw-normal m-0">Tu mejor opcion en cuentas</h2>
						<!--end::Title-->
					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
					<!--begin::Card-->
					<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
						<!--begin::Wrapper-->
						<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20" id='panelForm'>
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="formLogin"  method="POST">
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-gray-900 fw-bolder mb-3">Iniciar sesión</h1>
									<!--end::Title-->
									<!--begin::Subtitle-->
									<div class="text-gray-500 fw-semibold fs-6"></div>
									<!--end::Subtitle=-->
								</div>
								<!-- Campo oculto para indicar el tipo de operación -->
   								 <input type="hidden" name="tipo" value="iniciar_sesion" />
								
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="text" placeholder="Correo electrónico o número de teléfono" name="correo" autocomplete="off" class="form-control bg-transparent" required/>
									<!--end::Email-->
								</div>
								<!--end::Input group=-->
								<div class="fv-row mb-3">
									<!--begin::Password-->
									<input type="password" placeholder="Contraseña" name="contrasena" autocomplete="off" class="form-control bg-transparent" required />
									<!--end::Password-->
								</div>
								<!--end::Input group=-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									<!--begin::Link-->
									<a href="#/recuperarContrasena" class="link-primary">Has olvidado tu contraseña ?</a>
									<!--end::Link-->
									<!--end::Submit button-->
								<!--begin::Sign up-->
								<div class="text-gray-500 text-center fw-semibold fs-6">No eres miembro todavía? 
								<a href="#/suscribirse" class="link-primary">Suscribirse</a></div>
								<!--end::Sign up-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="btnIniciarSEsion" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Iniciar sesión</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Espera un momento... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
									
								</div>
			
								<div class="d-grid mb-10">
                                <a href="panel.php" class="btn btn-secondary">
                                    Comprar en modo invitado
                                </a>
                            </div>
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Footer-->
						<div class="d-flex flex-stack px-lg-10">
							<!--begin::Languages-->
							
							<!--end::Languages-->
							<!--begin::Links-->
							
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>


<script type="text/javascript">
			$(document).ready(function(){
				
				//============= INICIAR SESION ============ 
				$("#btnIniciarSEsion").on("click", function(e){
					e.preventDefault();
					bloquearBoton("btnIniciarSEsion");
					$.post("Backend/f_login.php", $("#formLogin").serialize(), function(data){
						if(data.resultado){
							Swal.fire({icon:"success", title:"Exito", text:data.mensaje, confirmButtonText:"Aceptar" }) 
							setTimeout("window.location.href = 'panel.php'", 700);

						}else{
							Swal.fire({icon:"warning", title:"Lo sentimos",  text:data.mensaje, confirmButtonText:"Aceptar"})

						}
						desbloquearBoton("btnIniciarSEsion");
					},"json")
					.fail(function(){

						desbloquearBoton("btnIniciarSEsion");
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