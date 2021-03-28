@extends('clients.layouts.main')

@section('content')
<div class="breadcrumb-section">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div
                    class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">
                    <h3 class="breadcrumb-title">Tất cả sản phẩm</h3>
                    <div class="breadcrumb-nav">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                <li class="active" aria-current="page">Shop Full Width</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Shop Section:::... -->
<div class="shop-section">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-12">
                <!-- Start Shop Product Sorting Section -->
                <div class="shop-sort-section" data-aos="fade-up" data-aos-delay="0">
                    <div class="container">
                        <div class="row">
                            <!-- Start Sort Wrapper Box -->
                            <div
                                class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column">
                                <!-- Start Sort tab Button -->
                                <div class="sort-tablist">
                                    <ul class="tablist nav sort-tab-btn">
                                        <li><a class="nav-link active" data-toggle="tab" href="#layout-4-grid"><img
                                                    src="assets/images/icon/bkg_grid.png" alt=""></a></li>
                                        <li><a class="nav-link" data-toggle="tab" href="#layout-list"><img
                                                    src="assets/images/icon/bkg_list.png" alt=""></a></li>
                                    </ul>
                                </div> <!-- End Sort tab Button -->

                                <!-- Start Sort Select Option -->
                                <div class="sort-select-list">
                                    <form action="#">
                                        <fieldset>
                                            <select name="speed" id="speed">
                                                <option>Đánh giá cao nhất</option>
                                                <option>Sản phẩm phổ biến</option>
                                                <option selected="selected">Mới nhất</option>
                                                <option>Sắp xếp theo giá: Thấp đến Cao</option>
                                                <option>Sắp xếp theo giá: Cao xuống Thấp</option>
                                                <option>Sắp xếp theo tên</option>
                                            </select>
                                        </fieldset>
                                    </form>
                                </div> <!-- End Sort Select Option -->

                                <!-- Start Page Amount -->
                                <div class="page-amount">
                                    <span>Showing 1–9 of 21 results</span>
                                </div> <!-- End Page Amount -->

                            </div> <!-- Start Sort Wrapper Box -->
                        </div>
                    </div>
                </div> <!-- End Section Content -->

                <!-- Start Tab Wrapper -->
                <div class="sort-product-tab-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content tab-animate-zoom">
                                    <!-- Start Grid View Product -->
                                    <div class="tab-pane active show sort-layout-single" id="layout-4-grid">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                <!-- Start Product Defautlt Single -->
                                                <div class="product-default-single border-around" data-aos="fade-up"
                                                    data-aos-delay="0">
                                                    <div class="product-img-warp">
                                                        <a href="product-details-default.html"
                                                            class="product-default-img-link">
                                                            <img src="assets/images/products_images/aments_products_image_1.jpg"
                                                                alt="" class="product-default-img img-fluid">
                                                        </a>
                                                        <div class="product-action-icon-link">
                                                            <ul>
                                                                <li><a href="#"><i class="icon-shopping-cart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-default-content">
                                                        <h6 class="product-default-link"><a
                                                                href="product-details-default.html">New Balance
                                                                Fresh Foam Kaymin Car Purts</a></h6>
                                                        <span class="product-default-price"><del
                                                                class="product-default-price-off">$30.12</del>
                                                            $25.12</span>
                                                    </div>
                                                </div> <!-- End Product Defautlt Single -->
                                            </div>                                    
                                        </div>
                                    </div> <!-- End Grid View Product -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Tab Wrapper -->

                <!-- Start Pagination -->
                <div class="page-pagination text-center" data-aos="fade-up" data-aos-delay="0">
                    <ul>
                        <li><a href="#">Previous</a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div> <!-- End Pagination -->
            </div> <!-- End Shop Product Sorting Section  -->
        </div>
    </div>
</div> <!-- ...:::: End Shop Section:::... -->
@endsection