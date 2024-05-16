
<!--for para iterar sobre las categorias existentes-->
                                                
                                                <?php
                                                for ($i = 0; $i < 2; $i++) {
                                                    echo '
                                                    <li class="nav-item mb-3 me-0" role="presentation">
                                                        <!--begin::Nav link-->
                                                        <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg active" data-bs-toggle="pill" href="#kt_pos_food_content_5" style="width: 138px;height: 180px" aria-selected="true" role="tab">
                                                            <!--begin::Icon-->
                                                            <div class="nav-icon mb-3">
                                                                <!--begin::Food icon-->
                                                                <img src="images_tienda/videos.png" class="w-50px" alt="">
                                                                <!--end::Food icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="">
                                                                <span class="text-gray-800 fw-bold fs-2 d-block">Videos</span>
                                                                <span class="text-gray-500 fw-semibold fs-7">the best account</span>
                                                            </div>
                                                            
                                                            <!--end::Info-->
                                                        </a>
                                                        <!--end::Nav link-->
                                                    </li>';
                                                }
                                                ?>