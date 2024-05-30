<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">
									<!--begin::Products-->
									<div class="card card-flush">
										<!--begin::Card header-->
										<div class="card-header align-items-center py-5 gap-2 gap-md-5">
											<!--begin::Card title-->
											
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											
												<!--begin::Add product-->
												<a href="apps/ecommerce/catalog/add-product.html" class="btn btn-primary ">Add Product</a>
												<!--end::Add product-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="TablaInventario">
												<thead>
													 
														<th class="min-w-125px">Producto</th>
														<th class="min-w-125px">Descripcion</th>
														<th class="min-w-125px">Categoria</th>
														<th class="min-w-125px">existencia</th>
														<th class="min-w-125px">Precio</th>													
														<th class="min-w-125px">Actions</th>
													</tr>
												</thead>
												<tbody class="fw-semibold text-gray-600">
												

												</tbody>
											</table>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Products-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						
						<!--end::Footer-->
</div>


<!--end:::Main-->


	<!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/custom/apps/ecommerce/catalog/products.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<script>
			// Inicialización de Metronic
			KTMenu.createInstances();
		</script>
<script>
	$(document).ready(function() {
		var TablaverSuscripciones = $("#TablaInventario").DataTable({
			destroy: true,
			dom: 'Bfrtip',
			ajax: {
				url: 'Backend/mostrarVentas.php',
				type: 'POST',
				data: { accion: 'verInventario' },
				dataSrc: 'data',
				error: function (xhr, error, code) {
					console.log("Error: ", error);
					console.log("Code: ", code);
					console.log("Response: ", xhr.responseText);
				}
			},
			columns: [
				 // Espacio para el checkbox
				{ data: 'nombreProducto' },
				{ data: 'descripcion' },
				{ data: 'nombrecategoria'},
				{ data: 'existencia' },
				{ data: 'precio' },
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
		$('#TablaInventario tbody').off("click").on('click', 'a.btnEliminar', function() {
			var fila = TablaverSuscripciones.row($(this).closest('tr')).data();
			// Aquí puedes agregar la lógica para eliminar el producto, por ejemplo, mostrar un modal
		});
	});



</script>