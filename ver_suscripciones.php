
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-fluid">
								<!--begin::Card-->
								<div class="card">
									 
									<!--begin::Card body-->
									<div class="card-body pt-5 "> 
										<div class="table-responsive">
											<!--begin::Add subscription-->
											
											<!--end::Add subscription-->

											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="TablaverSuscripciones">
												<thead>
													<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
														<th class="w-10px pe-2">
															<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_subscriptions_table .form-check-input" value="1" />
															</div>
														</th>
														<th class="min-w-125px">Usuario</th>
														<th class="min-w-125px">Estado</th>
														<th class="min-w-125px">Metodo Pago</th>
														<th class="min-w-125px">producto</th>
														<th class="min-w-125px">FechaVencimiento</th>
														<th class="text-end min-w-70px">Actions</th>
													</tr>
												</thead>
												<tbody class="text-gray-600 fw-semibold">
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<a href="apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>
															<div class="badge badge-light">Auto-debit</div>
														</td>
														<td>Basic</td>
														<td>Apr 15, 2024</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 m-0"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="apps/subscriptions/add.html" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="apps/subscriptions/add.html" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													
												</tbody>
											</table>
											<!--end::Table-->

										</div>
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
								<!--begin::Modals-->
								<!--begin::Modal - Adjust Balance-->
								<div class="modal fade" id="kt_subscriptions_export_modal" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bold">Export Subscriptions</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div id="kt_subscriptions_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
													<i class="ki-duotone ki-cross fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Close-->
											</div>
											<!--end::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Form-->
												<form id="kt_subscriptions_export_form" class="form" action="#">
													<!--begin::Input group-->
													<div class="fv-row mb-10">
														<!--begin::Label-->
														<label class="fs-5 fw-semibold form-label mb-5">Select Export Format:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<select data-control="select2" data-placeholder="Select a format" data-hide-search="true" name="format" class="form-select form-select-solid">
															<option value="excell">Excel</option>
															<option value="pdf">PDF</option>
															<option value="cvs">CVS</option>
															<option value="zip">ZIP</option>
														</select>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-10">
														<!--begin::Label-->
														<label class="fs-5 fw-semibold form-label mb-5">Select Date Range:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input class="form-control form-control-solid" placeholder="Pick a date" name="date" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Row-->
													<div class="row fv-row mb-15">
														<!--begin::Label-->
														<label class="fs-5 fw-semibold form-label mb-5">Payment Type:</label>
														<!--end::Label-->
														<!--begin::Radio group-->
														<div class="d-flex flex-column">
															<!--begin::Radio button-->
															<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
																<input class="form-check-input" type="checkbox" value="1" checked="checked" name="payment_type" />
																<span class="form-check-label text-gray-600 fw-semibold">All</span>
															</label>
															<!--end::Radio button-->
															<!--begin::Radio button-->
															<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
																<input class="form-check-input" type="checkbox" value="2" checked="checked" name="payment_type" />
																<span class="form-check-label text-gray-600 fw-semibold">Visa</span>
															</label>
															<!--end::Radio button-->
															<!--begin::Radio button-->
															<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
																<input class="form-check-input" type="checkbox" value="3" name="payment_type" />
																<span class="form-check-label text-gray-600 fw-semibold">Mastercard</span>
															</label>
															<!--end::Radio button-->
															<!--begin::Radio button-->
															<label class="form-check form-check-custom form-check-sm form-check-solid">
																<input class="form-check-input" type="checkbox" value="4" name="payment_type" />
																<span class="form-check-label text-gray-600 fw-semibold">American Express</span>
															</label>
															<!--end::Radio button-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Row-->
													<!--begin::Actions-->
													<div class="text-center">
														<button type="reset" id="kt_subscriptions_export_cancel" class="btn btn-light me-3">Discard</button>
														<button type="submit" id="kt_subscriptions_export_submit" class="btn btn-primary">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait... 
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
													<!--end::Actions-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - New Card-->
								<!--end::Modals-->
							</div>
							<!--end::Content container-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Content wrapper-->
						<!--begin::Footer-->
						
</div>
					<!--end:::Main-->


   		 
		 
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/apps/subscriptions/list/export.js"></script>
		<script src="assets/js/custom/apps/subscriptions/list/list.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
 
		<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>

		<script>
			// Inicialización de Metronic
			KTMenu.createInstances();
		</script>
<script>
	
$(document).ready(function() {
    var TablaverSuscripciones = $("#TablaverSuscripciones").DataTable({
        destroy: true,
        dom: 'Bfrtip',
        ajax: {
            url: 'Backend/mostrarVentas.php',
            type: 'POST',
            data: { accion: 'verSuscripciones' },
            dataSrc: 'data',
            error: function (xhr, error, code) {
                console.log("Error: ", error);
                console.log("Code: ", code);
                console.log("Response: ", xhr.responseText);
            }
        },
        columns: [
            { data: null, render: function (data, type, row, meta) { return ''; } }, // Espacio para el checkbox
            { data: 'usuario' },
            { data: 'estado', render: function (data, type, row) {
                return `<div class='badge badge-light-success'>${data}</div>`;
            }},
            { data: 'tipo_pago', render: function (data, type, row) {
                return `<div class='badge badge-light'>${data}</div>`;
            }},
            { data: 'nombreProducto' },
            { data: 'fechaCompra' },
            {
                defaultContent: "<a class='btn btn-light btn-active-light-primary btn-sm' data-kt-menu-trigger='click' data-kt-menu-placement='bottom-end'>Acciones<i class='ki-duotone ki-down fs-5 m-0'></i></a><div class='menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4' data-kt-menu='true'><div class='menu-item px-3'><a class='btnEditar menu-link px-3'>Editar</a></div><div class='menu-item px-3'><a class='btnEliminar menu-link px-3'>Eliminar</a></div></div>"
            }
        ],
        buttons: [
            { extend: 'excelHtml5', title: 'Ventas', footer: true },
            { extend: 'pdfHtml5', title: 'Ventas', footer: true },
            { extend: 'print', title: 'Ventas', footer: true }
        ],
        initComplete: function () {
            KTComponents.init();
            KTMenu.createInstances(); // Inicializa los menús
        }
    });

    // Evento para el botón Eliminar
    $('#TablaverSuscripciones tbody').off("click").on('click', 'a.btnEliminar', function() {
        var fila = TablaverSuscripciones.row($(this).closest('tr')).data();
        // Aquí puedes agregar la lógica para eliminar el producto, por ejemplo, mostrar un modal
    });
});



</script>


