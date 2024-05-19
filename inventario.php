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
											<div class="card-title">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product">
												</div>
												<!--end::Search-->
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
												<div class="w-100 mw-150px">
													<!--begin::Select2-->
													<select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status" data-select2-id="select2-data-9-yxpn" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
														<option data-select2-id="select2-data-11-kaxp"></option>
														<option value="all">All</option>
														<option value="published">Published</option>
														<option value="scheduled">Scheduled</option>
														<option value="inactive">Inactive</option>
													</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-9ujf" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-k934-container" aria-controls="select2-k934-container"><span class="select2-selection__rendered" id="select2-k934-container" role="textbox" aria-readonly="true" title="Status"><span class="select2-selection__placeholder">Status</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													<!--end::Select2-->
												</div>
												<!--begin::Add product-->
												<a href="apps/ecommerce/catalog/add-product.html" class="btn btn-primary">Add Product</a>
												<!--end::Add product-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<div id="kt_ecommerce_products_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer"><div id="" class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_ecommerce_products_table" style="width: 1059.9px;"><colgroup><col style="width: 36.4px;"><col style="width: 251.3px;"><col style="width: 125.65px;"><col style="width: 137.475px;"><col style="width: 125.65px;"><col style="width: 125.65px;"><col style="width: 125.65px;"><col style="width: 132.125px;"></colgroup>
												<thead>
													<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0" role="row"><th class="w-10px pe-2 dt-orderable-none" data-dt-column="0" rowspan="1" colspan="1" aria-label="
															
																
															
														"><span class="dt-column-title">
															<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1">
															</div>
														</span><span class="dt-column-order"></span></th><th class="min-w-200px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="Product: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Product</span><span class="dt-column-order"></span></th><th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="SKU: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">SKU</span><span class="dt-column-order"></span></th><th class="text-end min-w-70px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="Qty: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Qty</span><span class="dt-column-order"></span></th><th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="Price: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Price</span><span class="dt-column-order"></span></th><th class="text-end min-w-100px dt-orderable-asc dt-orderable-desc" data-dt-column="5" rowspan="1" colspan="1" aria-label="Rating: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Rating</span><span class="dt-column-order"></span></th><th class="text-end min-w-100px dt-orderable-asc dt-orderable-desc" data-dt-column="6" rowspan="1" colspan="1" aria-label="Status: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Status</span><span class="dt-column-order"></span></th><th class="text-end min-w-70px dt-orderable-none" data-dt-column="7" rowspan="1" colspan="1" aria-label="Actions"><span class="dt-column-title">Actions</span><span class="dt-column-order"></span></th></tr>
												</thead>
												<tbody class="fw-semibold text-gray-600">

												<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/1.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 1</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0 dt-type-numeric">
															<span class="fw-bold">02981006</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric" data-order="42">
															<span class="fw-bold ms-3">42</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric">236.00</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr><tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/2.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 2</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0 dt-type-numeric">
															<span class="fw-bold">03921003</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric" data-order="36">
															<span class="fw-bold ms-3">36</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric">278.00</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr><tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/3.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 3</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0 dt-type-numeric">
															<span class="fw-bold">03633008</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric" data-order="43">
															<span class="fw-bold ms-3">43</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric">290.00</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr><tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/4.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 4</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0 dt-type-numeric">
															<span class="fw-bold">01810006</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric" data-order="20">
															<span class="fw-bold ms-3">20</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric">300.00</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr><tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/5.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 5</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0 dt-type-numeric">
															<span class="fw-bold">02290007</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric" data-order="17">
															<span class="fw-bold ms-3">17</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric">53.00</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr><tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/6.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 6</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0 dt-type-numeric">
															<span class="fw-bold">04848001</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric" data-order="27">
															<span class="fw-bold ms-3">27</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric">155.00</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr><tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/7.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 7</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0 dt-type-numeric">
															<span class="fw-bold">02556003</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric" data-order="5">
															<span class="badge badge-light-warning">Low stock</span>
															<span class="fw-bold text-warning ms-3">5</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric">101.00</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Scheduled">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Scheduled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr><tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/8.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 8</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0 dt-type-numeric">
															<span class="fw-bold">02495006</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric" data-order="35">
															<span class="fw-bold ms-3">35</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric">169.00</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr><tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/9.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 9</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0 dt-type-numeric">
															<span class="fw-bold">04403001</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric" data-order="16">
															<span class="fw-bold ms-3">16</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric">109.00</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr><tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/10.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 10</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0 dt-type-numeric">
															<span class="fw-bold">04585006</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric" data-order="24">
															<span class="fw-bold ms-3">24</span>
														</td>
														<td class="text-end pe-0 dt-type-numeric">181.00</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr></tbody>
											<tfoot></tfoot></table></div><div id="" class="row"><div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar"><div><select name="kt_ecommerce_products_table_length" aria-controls="kt_ecommerce_products_table" class="form-select form-select-solid form-select-sm" id="dt-length-1"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><label for="dt-length-1"></label></div></div><div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dt-paging paging_simple_numbers"><ul class="pagination"><li class="dt-paging-button page-item disabled"><a class="page-link previous" aria-controls="kt_ecommerce_products_table" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1"><i class="previous"></i></a></li><li class="dt-paging-button page-item active"><a href="#" class="page-link" aria-controls="kt_ecommerce_products_table" aria-current="page" data-dt-idx="0" tabindex="0">1</a></li><li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="kt_ecommerce_products_table" data-dt-idx="1" tabindex="0">2</a></li><li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="kt_ecommerce_products_table" data-dt-idx="2" tabindex="0">3</a></li><li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="kt_ecommerce_products_table" data-dt-idx="3" tabindex="0">4</a></li><li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="kt_ecommerce_products_table" data-dt-idx="4" tabindex="0">5</a></li><li class="dt-paging-button page-item"><a href="#" class="page-link next" aria-controls="kt_ecommerce_products_table" aria-label="Next" data-dt-idx="next" tabindex="0"><i class="next"></i></a></li></ul></div></div></div></div>
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