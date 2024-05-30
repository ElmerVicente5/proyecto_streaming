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
										<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10" data-select2-id="select2-data-144-9243">
											<!--begin::Thumbnail settings-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Thumbnail</h2>
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
													<div class="image-input image-input-outline image-input-placeholder mb-3 image-input-empty" data-kt-image-input="true">
														<!--begin::Preview existing avatar-->
														<div class="image-input-wrapper w-150px h-150px" style=""></div>
														<!--end::Preview existing avatar-->
														<!--begin::Label-->
														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
															<i class="ki-duotone ki-pencil fs-7">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
															<!--begin::Inputs-->
															<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
															<input type="hidden" name="avatar_remove" value="0">
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
													<div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
													<!--end::Description-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Thumbnail settings-->
											<!--begin::Status-->
											
											<!--end::Status-->
											<!--begin::Category & tags-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Product Details</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<!--begin::Label-->
													<label class="form-label">Categories</label>
													<!--end::Label-->
													<!--begin::Select2-->
													<select id="category-select"class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="" data-select2-id="select2-data-11-op1i" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
														
													</select><span class="select2 select2-container select2-container--bootstrap5 select2-container--below" dir="ltr" data-select2-id="select2-data-12-ndmz" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select mb-2" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-olpf-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-olpf-container" placeholder="Select an option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													<!--end::Select2-->
																					<!--begin::Description-->
													<div class="text-muted fs-7 mb-7">Add product to a category.</div>
													<!--end::Description-->
													<!--end::Input group-->
													<!--begin::Button-->
													<a href="apps/ecommerce/catalog/add-category.html" class="btn btn-light-primary btn-sm mb-10">
													<i class="ki-duotone ki-plus fs-2"></i>Create new category</a>
													<!--end::Button-->
													<!--begin::Input group-->
													<!--begin::Label-->
													
													<!--end::Description-->
													<!--end::Input group-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Category & tags-->
											<!--begin::Weekly sales-->
											
											<!--end::Weekly sales-->
											<!--begin::Template settings-->
											
											<!--end::Template settings-->
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
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												
												<!--end:::Tab item-->
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
																	<label class="required form-label">Product Name</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="product_name" class="form-control mb-2" placeholder="Product name" value="">
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Nombre del producto único</div>
																	<!--end::Description-->
																<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>

																<div class="mb-10 fv-row fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="required form-label">Precio</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="product_name" class="form-control mb-2" placeholder="Product name" value="">
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">ingrese el precio del producto</div>
																	<!--end::Description-->
																<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>

																<div class="mb-10 fv-row fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="required form-label">existencia</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="product_name" class="form-control mb-2" placeholder="Product name" value="">
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Ingrese la cantidad en existencia</div>
																	<!--end::Description-->
																<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																<!--end::Input group-->
																<!--end::Input group-->
																<!--end::Input group-->
																<!--begin::Input group-->
															
																<!--end::Input group-->
															</div>
															<!--end::Card header-->
														</div>
														<!--end::General options-->
														<!--begin::Media-->
														
													</div>
												</div>
												<!--end::Tab pane-->
												<!--begin::Tab pane-->
												
												<!--end::Tab pane-->
											</div>
											<!--end::Tab content-->
											<div class="d-flex justify-content-end">
												<!--begin::Button-->
												<a href="apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
													<span class="indicator-label">Guardar cambios </span>
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
								<div class="text-gray-900 order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2024©</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>

<script src="assets/js/scripts.bundle.js"></script>
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
<script src="assets/js/custom/apps/ecommerce/catalog/save-product.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<script>
			// Inicialización de Metronic
			KTMenu.createInstances();
		</script>
   <script>
        $(document).ready(function() {
            // Inicializar Select2
            $('#category-select').select2();

            // Cargar las categorías desde la base de datos
            $.ajax({
                url: 'funcionesProductos.php', // Archivo PHP que maneja las solicitudes
                type: 'GET',
                data: { tipo:'mostrarCategorias' },
                success: function(data) {
                    if (data.data) {
                        var categories = data.data;
                        var select = $('#category-select');
                        
                        // Añadir las opciones al select
                        categories.forEach(function(category) {
                            var option = new Option(category.nombrecategoria, category.id_categoria, false, false);
                            select.append(option).trigger('change');
                        });
                    } else {
                        console.error('Error:', data.error);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error al cargar las categorías:', error);
                }
            });
        });
    </script>