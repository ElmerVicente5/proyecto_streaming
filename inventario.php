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
													<input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
												</div>
												<!--end::Search-->
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
												<div class="w-100 mw-150px">
													<!--begin::Select2-->
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
														<option></option>
														<option value="all">All</option>
														<option value="published">Published</option>
														<option value="scheduled">Scheduled</option>
														<option value="inactive">Inactive</option>
													</select>
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
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
												<thead>
													<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
														<th class="w-10px pe-2">
															<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
															</div>
														</th>
														<th class="min-w-200px">Product</th>
														<th class="text-end min-w-100px">SKU</th>
														<th class="text-end min-w-70px">Qty</th>
														<th class="text-end min-w-100px">Price</th>
														<th class="text-end min-w-100px">Rating</th>
														<th class="text-end min-w-100px">Status</th>
														<th class="text-end min-w-70px">Actions</th>
													</tr>
												</thead>
												<tbody class="fw-semibold text-gray-600">
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
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
														<td class="text-end pe-0">
															<span class="fw-bold">02981006</span>
														</td>
														<td class="text-end pe-0" data-order="42">
															<span class="fw-bold ms-3">42</span>
														</td>
														<td class="text-end pe-0">236</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
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
														<td class="text-end pe-0">
															<span class="fw-bold">03921003</span>
														</td>
														<td class="text-end pe-0" data-order="36">
															<span class="fw-bold ms-3">36</span>
														</td>
														<td class="text-end pe-0">278</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
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
														<td class="text-end pe-0">
															<span class="fw-bold">03633008</span>
														</td>
														<td class="text-end pe-0" data-order="43">
															<span class="fw-bold ms-3">43</span>
														</td>
														<td class="text-end pe-0">290</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
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
														<td class="text-end pe-0">
															<span class="fw-bold">01810006</span>
														</td>
														<td class="text-end pe-0" data-order="20">
															<span class="fw-bold ms-3">20</span>
														</td>
														<td class="text-end pe-0">300</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
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
														<td class="text-end pe-0">
															<span class="fw-bold">02290007</span>
														</td>
														<td class="text-end pe-0" data-order="17">
															<span class="fw-bold ms-3">17</span>
														</td>
														<td class="text-end pe-0">53</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
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
														<td class="text-end pe-0">
															<span class="fw-bold">04848001</span>
														</td>
														<td class="text-end pe-0" data-order="27">
															<span class="fw-bold ms-3">27</span>
														</td>
														<td class="text-end pe-0">155</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
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
														<td class="text-end pe-0">
															<span class="fw-bold">02556003</span>
														</td>
														<td class="text-end pe-0" data-order="5">
															<span class="badge badge-light-warning">Low stock</span>
															<span class="fw-bold text-warning ms-3">5</span>
														</td>
														<td class="text-end pe-0">101</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
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
														<td class="text-end pe-0">
															<span class="fw-bold">02495006</span>
														</td>
														<td class="text-end pe-0" data-order="35">
															<span class="fw-bold ms-3">35</span>
														</td>
														<td class="text-end pe-0">169</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
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
														<td class="text-end pe-0">
															<span class="fw-bold">04403001</span>
														</td>
														<td class="text-end pe-0" data-order="16">
															<span class="fw-bold ms-3">16</span>
														</td>
														<td class="text-end pe-0">109</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
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
														<td class="text-end pe-0">
															<span class="fw-bold">04585006</span>
														</td>
														<td class="text-end pe-0" data-order="24">
															<span class="fw-bold ms-3">24</span>
														</td>
														<td class="text-end pe-0">181</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/11.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 11</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01325005</span>
														</td>
														<td class="text-end pe-0" data-order="14">
															<span class="fw-bold ms-3">14</span>
														</td>
														<td class="text-end pe-0">70</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/12.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 12</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02281001</span>
														</td>
														<td class="text-end pe-0" data-order="4">
															<span class="badge badge-light-warning">Low stock</span>
															<span class="fw-bold text-warning ms-3">4</span>
														</td>
														<td class="text-end pe-0">276</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/13.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 13</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04797004</span>
														</td>
														<td class="text-end pe-0" data-order="39">
															<span class="fw-bold ms-3">39</span>
														</td>
														<td class="text-end pe-0">226</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/14.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 14</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04456005</span>
														</td>
														<td class="text-end pe-0" data-order="28">
															<span class="fw-bold ms-3">28</span>
														</td>
														<td class="text-end pe-0">121</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/15.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 15</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01847008</span>
														</td>
														<td class="text-end pe-0" data-order="42">
															<span class="fw-bold ms-3">42</span>
														</td>
														<td class="text-end pe-0">277</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/16.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 16</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02170005</span>
														</td>
														<td class="text-end pe-0" data-order="25">
															<span class="fw-bold ms-3">25</span>
														</td>
														<td class="text-end pe-0">49</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/17.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 17</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01266003</span>
														</td>
														<td class="text-end pe-0" data-order="47">
															<span class="fw-bold ms-3">47</span>
														</td>
														<td class="text-end pe-0">23</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/18.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 18</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02631008</span>
														</td>
														<td class="text-end pe-0" data-order="27">
															<span class="fw-bold ms-3">27</span>
														</td>
														<td class="text-end pe-0">168</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/19.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 19</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02803003</span>
														</td>
														<td class="text-end pe-0" data-order="11">
															<span class="fw-bold ms-3">11</span>
														</td>
														<td class="text-end pe-0">127</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/20.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 20</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02464003</span>
														</td>
														<td class="text-end pe-0" data-order="8">
															<span class="badge badge-light-warning">Low stock</span>
															<span class="fw-bold text-warning ms-3">8</span>
														</td>
														<td class="text-end pe-0">81</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/21.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 21</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04536009</span>
														</td>
														<td class="text-end pe-0" data-order="30">
															<span class="fw-bold ms-3">30</span>
														</td>
														<td class="text-end pe-0">240</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/22.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 22</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03681008</span>
														</td>
														<td class="text-end pe-0" data-order="0">
															<span class="badge badge-light-danger">Sold out</span>
															<span class="fw-bold text-danger ms-3">0</span>
														</td>
														<td class="text-end pe-0">104</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/23.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 23</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01368005</span>
														</td>
														<td class="text-end pe-0" data-order="37">
															<span class="fw-bold ms-3">37</span>
														</td>
														<td class="text-end pe-0">117</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/24.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 24</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02820008</span>
														</td>
														<td class="text-end pe-0" data-order="42">
															<span class="fw-bold ms-3">42</span>
														</td>
														<td class="text-end pe-0">234</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/25.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 25</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01306009</span>
														</td>
														<td class="text-end pe-0" data-order="19">
															<span class="fw-bold ms-3">19</span>
														</td>
														<td class="text-end pe-0">207</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/26.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 26</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02409009</span>
														</td>
														<td class="text-end pe-0" data-order="42">
															<span class="fw-bold ms-3">42</span>
														</td>
														<td class="text-end pe-0">244</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/27.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 27</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02859008</span>
														</td>
														<td class="text-end pe-0" data-order="50">
															<span class="fw-bold ms-3">50</span>
														</td>
														<td class="text-end pe-0">83</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/28.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 28</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04210004</span>
														</td>
														<td class="text-end pe-0" data-order="22">
															<span class="fw-bold ms-3">22</span>
														</td>
														<td class="text-end pe-0">74</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/29.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 29</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03193009</span>
														</td>
														<td class="text-end pe-0" data-order="24">
															<span class="fw-bold ms-3">24</span>
														</td>
														<td class="text-end pe-0">10</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/30.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 30</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03389004</span>
														</td>
														<td class="text-end pe-0" data-order="9">
															<span class="badge badge-light-warning">Low stock</span>
															<span class="fw-bold text-warning ms-3">9</span>
														</td>
														<td class="text-end pe-0">60</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/31.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 31</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04926004</span>
														</td>
														<td class="text-end pe-0" data-order="6">
															<span class="badge badge-light-warning">Low stock</span>
															<span class="fw-bold text-warning ms-3">6</span>
														</td>
														<td class="text-end pe-0">112</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/32.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 32</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02835001</span>
														</td>
														<td class="text-end pe-0" data-order="26">
															<span class="fw-bold ms-3">26</span>
														</td>
														<td class="text-end pe-0">155</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/33.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 33</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03904001</span>
														</td>
														<td class="text-end pe-0" data-order="49">
															<span class="fw-bold ms-3">49</span>
														</td>
														<td class="text-end pe-0">190</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/34.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 34</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04522007</span>
														</td>
														<td class="text-end pe-0" data-order="12">
															<span class="fw-bold ms-3">12</span>
														</td>
														<td class="text-end pe-0">267</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/35.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 35</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04412008</span>
														</td>
														<td class="text-end pe-0" data-order="39">
															<span class="fw-bold ms-3">39</span>
														</td>
														<td class="text-end pe-0">221</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/36.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 36</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01892002</span>
														</td>
														<td class="text-end pe-0" data-order="13">
															<span class="fw-bold ms-3">13</span>
														</td>
														<td class="text-end pe-0">217</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/37.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 37</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01155009</span>
														</td>
														<td class="text-end pe-0" data-order="48">
															<span class="fw-bold ms-3">48</span>
														</td>
														<td class="text-end pe-0">236</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/38.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 38</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04623007</span>
														</td>
														<td class="text-end pe-0" data-order="29">
															<span class="fw-bold ms-3">29</span>
														</td>
														<td class="text-end pe-0">52</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/39.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 39</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02913003</span>
														</td>
														<td class="text-end pe-0" data-order="12">
															<span class="fw-bold ms-3">12</span>
														</td>
														<td class="text-end pe-0">170</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/40.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 40</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04592003</span>
														</td>
														<td class="text-end pe-0" data-order="15">
															<span class="fw-bold ms-3">15</span>
														</td>
														<td class="text-end pe-0">40</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/41.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 41</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01413008</span>
														</td>
														<td class="text-end pe-0" data-order="14">
															<span class="fw-bold ms-3">14</span>
														</td>
														<td class="text-end pe-0">76</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/42.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 42</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01258004</span>
														</td>
														<td class="text-end pe-0" data-order="49">
															<span class="fw-bold ms-3">49</span>
														</td>
														<td class="text-end pe-0">171</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/43.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 43</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03720006</span>
														</td>
														<td class="text-end pe-0" data-order="39">
															<span class="fw-bold ms-3">39</span>
														</td>
														<td class="text-end pe-0">28</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/44.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 44</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02773003</span>
														</td>
														<td class="text-end pe-0" data-order="30">
															<span class="fw-bold ms-3">30</span>
														</td>
														<td class="text-end pe-0">80</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/45.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 45</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04735008</span>
														</td>
														<td class="text-end pe-0" data-order="43">
															<span class="fw-bold ms-3">43</span>
														</td>
														<td class="text-end pe-0">111</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/46.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 46</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04981009</span>
														</td>
														<td class="text-end pe-0" data-order="43">
															<span class="fw-bold ms-3">43</span>
														</td>
														<td class="text-end pe-0">168</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/47.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 47</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04683009</span>
														</td>
														<td class="text-end pe-0" data-order="49">
															<span class="fw-bold ms-3">49</span>
														</td>
														<td class="text-end pe-0">292</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/48.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 48</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04682002</span>
														</td>
														<td class="text-end pe-0" data-order="25">
															<span class="fw-bold ms-3">25</span>
														</td>
														<td class="text-end pe-0">288</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/49.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 49</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04373001</span>
														</td>
														<td class="text-end pe-0" data-order="15">
															<span class="fw-bold ms-3">15</span>
														</td>
														<td class="text-end pe-0">288</td>
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
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/50.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 50</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02850007</span>
														</td>
														<td class="text-end pe-0" data-order="22">
															<span class="fw-bold ms-3">22</span>
														</td>
														<td class="text-end pe-0">101</td>
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
													</tr>
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
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-gray-900 order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2024&copy;</span>
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