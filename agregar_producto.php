<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">
									<!--begin::Form-->
									<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" data-kt-redirect="apps/ecommerce/catalog/products.html">
										<!--begin::Aside column-->
										<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
											<!--begin::Thumbnail settings-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Miniatura</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body text-center pt-0">
													<!--begin::Image input-->
													<!--begin::Image input placeholder-->
													<style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
													<!--end::Image input placeholder-->
													<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
														<!--begin::Preview existing avatar-->
														<div class="image-input-wrapper w-150px h-150px"></div>
														<!--end::Preview existing avatar-->
														<!--begin::Label-->
														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
															<i class="ki-duotone ki-pencil fs-7">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
															<!--begin::Inputs-->
															<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
															<input type="hidden" name="avatar_remove">
															<!--end::Inputs-->
														</label>
														<!--end::Label-->
														<!--begin::Cancel-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
														<!--end::Cancel-->
														<!--begin::Remove-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
														<!--end::Remove-->
													</div>
													<!--end::Image input-->
													<!--begin::Description-->
													<div class="text-muted fs-7">Configure la imagen en miniatura del producto. Sólo se aceptan archivos de imagen *.png, *.jpg, *.jpeg</div>
													<!--end::Description-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Thumbnail settings-->
											<!--begin::Status-->
											
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Detalles de producto</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<!--begin::Label-->
													<label class="form-label">Categorías</label>
													<!--end::Label-->
													<!--begin::Select2-->
													<form  method="POST" id="Mostrarcategorias">
													<select  id="categoria" class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-placeholder="Seleccione una opción" data-allow-clear="true" multiple="" data-select2-id="select2-data-11-x5az" tabindex="-1" aria-hidden="true" data-kt-initialized="1" name="MostrarCategorias">
													
													</form>
													</select>
													<span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-12-2yt1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select mb-2" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-4a7k-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-4a7k-container" placeholder="Seleccione una opción" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													<!--end::Select2-->
													<!--begin::Description-->
													<div class="text-muted fs-7 mb-7">Agregar producto a una categoría.</div>
													<!--end::Description-->
													<!--end::Input group-->
													<!--begin::Button-->
													<a href="apps/ecommerce/catalog/add-category.html" class="btn btn-light-primary btn-sm mb-10">
													<i class="ki-duotone ki-plus fs-2"></i>Crear nueva categoría</a>
													<!--end::Button-->
													<!--end::Description-->
													<!--end::Input group-->
												</div>
												<!--end::Card body-->
											</div>
											
											
										</div>
										<!--end::Aside column-->
										<!--begin::Main column-->
										<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
											<!--begin:::Tabs-->
											<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2" role="tablist">
												<!--begin:::Tab item-->
												<li class="nav-item" role="presentation">
													<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general" aria-selected="true" role="tab">General</a>
												</li>
												
											</ul>
											<!--end:::Tabs-->
											<!--begin::Tab content-->
											<div class="tab-content">
												<!--begin::Tab pane-->
												<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
													<div class="d-flex flex-column gap-7 gap-lg-10">
														<!--begin::General options-->
														<div class="card card-flush py-4">
															<!--begin::Card header-->
															<div class="card-header">
																<div class="card-title">
																	<h2>General</h2>
																</div>
															</div>
															<!--end::Card header-->
															<!--begin::Card body-->
															<div class="card-body pt-0">
																<!--begin::Input group-->
																<div class="mb-10 fv-row fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="required form-label">Nombre del producto</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="product_name" class="form-control mb-2" placeholder="Nombre del producto" value="">
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Se requiere y se recomienda que un nombre de producto sea único.</div>
																	<!--end::Description-->
																<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div>
																	<!--begin::Label-->
																	<label class="form-label">Descripción</label>
																	<!--end::Label-->
																	<!--begin::Editor-->
																	<div class="ql-toolbar ql-snow"><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span></span></span><select class="ql-header" style="display: none;"><option value="1"></option><option value="2"></option><option selected="selected"></option></select></span><span class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button></span><span class="ql-formats"><button type="button" class="ql-image"><svg viewBox="0 0 18 18"> <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect> <circle class="ql-fill" cx="6" cy="7" r="1"></circle> <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline> </svg></button><button type="button" class="ql-code-block"><svg viewBox="0 0 18 18"> <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline> <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline> <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line> </svg></button></span></div><div id="kt_ecommerce_add_product_description" name="kt_ecommerce_add_product_description" class="min-h-200px mb-2 ql-container ql-snow"><div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Escribe tu texto aquí..."><p><br></p></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
																	<!--end::Editor-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Establezca una descripción del producto para una mejor viabilidad.</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
															</div>
															<!--end::Card header-->
														</div>
														<!--end::General options-->
														<!--begin::Media-->
														<div class="card card-flush py-4">
															<!--begin::Card header-->
															<div class="card-header">
																<div class="card-title">
																	<h2>Sube la Imagen aquí</h2>
																</div>
															</div>
															<!--end::Card header-->
															<!--begin::Card body-->
															<div class="card-body pt-0">
																<!--begin::Input group-->
																<div class="fv-row mb-2">
																	<!--begin::Dropzone-->
																	<div class="dropzone dz-clickable" id="kt_ecommerce_add_product_media">
																		<!--begin::Message-->
																		<div class="dz-message needsclick">
																			<!--begin::Icon-->
																			<i class="ki-duotone ki-file-up text-primary fs-3x">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																			<!--end::Icon-->
																			<!--begin::Info-->
																			<div class="ms-4">
																				<h3 class="fs-5 fw-bold text-gray-900 mb-1">Suelte los archivos aquí o haga clic para cargarlos.</h3>
																				
																			</div>
																			<!--end::Info-->
																		</div>
																	</div>
																	<!--end::Dropzone-->
																</div>
																<!--end::Input group-->
																<!--begin::Description-->
																<div class="text-muted fs-7">Configure la galería de medios del producto.</div>
																<!--end::Description-->
															</div>
															<!--end::Card header-->
														</div>
														<!--end::Media-->
														<!--begin::Pricing-->
														<div class="card card-flush py-4">
															<!--begin::Card header-->
															<div class="card-header">
																<div class="card-title">
																	<h2>Precios</h2>
																</div>
															</div>
															<!--end::Card header-->
															<!--begin::Card body-->
															<div class="card-body pt-0">
																<!--begin::Input group-->
																<div class="mb-10 fv-row fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="required form-label">Precio base</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="price" class="form-control mb-2" placeholder="Precio del producto" value="">
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Establecer el precio del producto.</div>
																	<!--end::Description-->
																<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-10">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Tipo de descuento 
																	</label>
																	<!--End::Label-->
																	<!--begin::Row-->
																	<div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']" data-kt-initialized="1">
																		<!--begin::Col-->
																		<div class="col">
																			<!--begin::Option-->
																			<label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
																				<!--begin::Radio-->
																				<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input" type="radio" name="discount_option" value="1" checked="checked">
																				</span>
																				<!--end::Radio-->
																				<!--begin::Info-->
																				<span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">Sin descuento</span>
																				</span>
																				<!--end::Info-->
																			</label>
																			<!--end::Option-->
																		</div>
																		<!--end::Col-->
																		<!--begin::Col-->
																		<div class="col">
																			<!--begin::Option-->
																			<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
																				<!--begin::Radio-->
																				<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input" type="radio" name="discount_option" value="2">
																				</span>
																				<!--end::Radio-->
																				<!--begin::Info-->
																				<span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">Porcentaje %</span>
																				</span>
																				<!--end::Info-->
																			</label>
																			<!--end::Option-->
																		</div>
																		<!--end::Col-->
																		<!--begin::Col-->
																		<div class="col">
																			<!--begin::Option-->
																			<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
																				<!--begin::Radio-->
																				<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input" type="radio" name="discount_option" value="3">
																				</span>
																				<!--end::Radio-->
																				<!--begin::Info-->
																				<span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">Precio fijo</span>
																				</span>
																				<!--end::Info-->
																			</label>
																			<!--end::Option-->
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Row-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
															
																<!--end::Input group-->
																<!--begin::Input group-->
																
															</div>
															<!--end::Card header-->
														</div>
														<!--end::Pricing-->
													</div>
												</div>
												<!--end::Tab pane-->
												<!--begin::Tab pane-->
												
												<!--end::Tab pane-->
											</div>
											<!--end::Tab content-->
											<div class="d-flex justify-content-end">
												<!--begin::Button-->
												<a href="apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancelar</a>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
													<span class="indicator-label">Guardar cambios</span>
													<span class="indicator-progress">Please wait... 
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
										</div>
										<!--end::Main column-->
									</form>
									<!--end::Form-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Apoyo</a>
									</li>
									
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#categorias").on("click", function(e){
            e.preventDefault();
            bloquearBoton("categorias");
            $.post("Backend/funcionesProductos.php", $("#Mostrarcategorias").serialize(), function(data){
                console.log(data); // Añade esta línea para depuración
                if(data.resultado){
                    $('#categorias').append('<option value="' + data.id_categoria + '">' + categoria.nombrecategoria + '</option>');
                    //setTimeout(function(){ window.location.href = 'panel.php'; }, 700);
                } else {
                    Swal.fire({icon:"warning", title:"Lo sentimos",  text:data.mensaje, confirmButtonText:"Aceptar"});
                }
                desbloquearBoton("agregar_categoria");
            }, "json").fail(function(){
                desbloquearBoton("agregar_categoria");
                Swal.fire({icon:"error", title:"Lo sentimos", text: "No existe conexion con el servidor", confirmButtonText:"Aceptar"});
            });
        });

        function bloquearBoton(boton){
            $("#" + boton).attr('data-kt-indicator', 'on');
            $("#" + boton).attr('disabled', true);
        }

        function desbloquearBoton(boton){
            $("#" + boton).removeAttr('data-kt-indicator');
            $("#" + boton).removeAttr('disabled');
        }
    });
</script>
