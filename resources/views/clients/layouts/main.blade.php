<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Badminton store</title>

    @include('clients.layouts.style')

</head>

<body>
    <!-- ...:::: Start Header Section:::... -->
    <header class="header-section d-lg-block d-none">
        <!-- Start Header Center Area -->
        <div class="header-center">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-3">
                        <!-- Logo Header -->
                        <div class="header-logo">
                            <a href="{{ route('homepage') }}"><img src="{{ asset('clients/assets/images/logo/logo.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- Start Header Search -->
                        <div class="header-search">
                            <form action="#" method="post">
                                <div class="header-search-box default-search-style d-flex">
                                    <input class="default-search-style-input-box border-around border-right-none"
                                        type="search" placeholder="Tìm kiếm sản phẩm" required>
                                    <button class="default-search-style-input-btn" type="submit"><i
                                            class="icon-search"></i></button>
                                </div>
                            </form>
                        </div> <!-- End Header Search -->
                    </div>
                    <div class="col-3 text-right">
                        <!-- Start Header Action Icon -->
                        <ul class="header-action-icon">
                            <li>
                                <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="header-action-icon-item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="offcanvas-toggle">
                                    <i class="fas fa-user"></i>
                                </a>
                            </li>
                        </ul> <!-- End Header Action Icon -->
                    </div>
                </div>
            </div>
        </div> <!-- End Header Center Area -->

        <!-- Start Bottom Area -->
        <div class="header-bottom sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Header Main Menu -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="has-dropdown">
                                        <a href="{{ route('homepage') }}">Trang chủ</a>
                                    </li>
                                    <li class="has-dropdown has-megaitem">
                                        <a href="{{ route('shop') }}">Cửa hàng <i class="fa fa-angle-down"></i></a>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu">
                                            <ul class="mega-menu-inner">
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Vợt cầu lông</a>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="">Vợt cầu lông yonex</a></li>
                                                        <li><a href="">Vợt cầu lông Victor</a></li>
                                                        <li><a href="">Vợt cầu lông Lining</a></li>
                                                        <li><a href="">Vợt cầu lông Mizuno</a></li>
                                                        <li><a href="">Vợt cầu lông Apacs</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Giày cầu lông</a>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="">Giày cầu lông yonex</a></li>
                                                        <li><a href="">Giày cầu lông Victor</a></li>
                                                        <li><a href="">Giày cầu lông Lining</a></li>
                                                        <li><a href="">Giày cầu lông Mizuno</a></li>
                                                        <li><a href="">Giày cầu lông Apacs</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Áo cầu lông</a>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="">Áo cầu lông yonex</a></li>
                                                        <li><a href="">Áo cầu lông Victor</a></li>
                                                        <li><a href="">Áo cầu lông Lining</a></li>
                                                        <li><a href="">Áo cầu lông Mizuno</a></li>
                                                        <li><a href="">Áo cầu lông Apacs</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Balo cầu lông</a>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="">Balo cầu lông yonex</a></li>
                                                        <li><a href="">Balo cầu lông Victor</a></li>
                                                        <li><a href="">Balo cầu lông Lining</a></li>
                                                        <li><a href="">Balo cầu lông Mizuno</a></li>
                                                        <li><a href="">Balo cầu lông Apacs</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Phụ kiện cầu lông</a>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="">Phụ kiện cầu lông yonex</a></li>
                                                        <li><a href="">Phụ kiện cầu lông Victor</a></li>
                                                        <li><a href="">Phụ kiện cầu lông Lining</a></li>
                                                        <li><a href="">Phụ kiện cầu lông Mizuno</a></li>
                                                        <li><a href="">Phụ kiện cầu lông Apacs</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="">Vợt cầu lông</a>
                                    </li>
                                    <li>
                                        <a href="">Quần áo</a>
                                    </li>
                                    <li>
                                        <a href="">Giày</a>
                                    </li>
                                    <li>
                                        <a href="">Phụ kiện</a>
                                    </li>
                                    <li>
                                        <a href="about-us.html">Chia sẻ</a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html">Liên hệ</a>
                                    </li>
                                </ul>
                            </nav>
                        </div> <!-- Header Main Menu Start -->
                    </div>
                </div>
            </div>
        </div> <!-- End Bottom Area -->
    </header> <!-- ...:::: End Header Section:::... -->

    <!-- ...:::: Start Mobile Header Section:::... -->
    <div class="mobile-header-section d-block d-lg-none">
        <!-- Start Mobile Header Wrapper -->
        <div class="mobile-header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <div class="mobile-header--left">
                            <a href="index.html" class="mobile-logo-link">
                                <img src="{{ asset('clients/assets/images/logo/logo.png') }}" alt="" class="mobile-logo-img">
                            </a>
                        </div>
                        <div class="mobile-header--right">
                            <a href="#mobile-menu-offcanvas" class="mobile-menu offcanvas-toggle">
                                <span class="mobile-menu-dash"></span>
                                <span class="mobile-menu-dash"></span>
                                <span class="mobile-menu-dash"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Mobile Header Wrapper -->
    </div> <!-- ...:::: Start Mobile Header Section:::... -->

    <!-- ...:::: Start Offcanvas Mobile Menu Section:::... -->
    <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-leftside offcanvas-mobile-menu-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="fa fa-times"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-mobile-menu-wrapper">
            <!-- Start Mobile Menu User Center -->
            <div class="mobile-menu-center">
                <form action="#" method="post">
                    <div class="header-search-box default-search-style d-flex">
                        <input class="default-search-style-input-box border-around border-right-none" type="search"
                            placeholder="Search entire store here ..." required>
                        <button class="default-search-style-input-btn" type="submit"><i
                                class="icon-search"></i></button>
                    </div>
                </form>
                <!-- Start Header Action Icon -->
                <ul class="mobile-action-icon">
                    <li class="mobile-action-icon-item">
                        <a href="wishlist.html" class="mobile-action-icon-link">
                            <i class="icon-heart"></i>
                            <span class="mobile-action-icon-item-count">3</span>
                        </a>
                    </li>
                    <li class="mobile-action-icon-item">
                        <a href="cart.html" class="mobile-action-icon-link">
                            <i class="icon-shopping-cart"></i>
                            <span class="mobile-action-icon-item-count">3</span>
                        </a>
                    </li>
                </ul> <!-- End Header Action Icon -->
            </div> <!-- End Mobile Menu User Center -->
            <!-- Start Mobile Menu Bottom -->
            <div class="mobile-menu-bottom">
                <!-- Start Mobile Menu Nav -->
                <div class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="#"><span>Home</span></a>
                            <ul class="mobile-sub-menu">
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Shop Layout</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="shop-grid-sidebar-left.html">Grid Left Sidebar</a></li>
                                        <li><a href="shop-grid-sidebar-right.html">Grid Right Sidebar</a></li>
                                        <li><a href="shop-full-width.html">Full Width</a></li>
                                        <li><a href="shop-list-sidebar-left.html">List Left Sidebar</a></li>
                                        <li><a href="shop-list-sidebar-right.html">List Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Product Single</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="product-details-default.html">Product Default</a></li>
                                        <li><a href="product-details-variable.html">Product Variable</a></li>
                                        <li><a href="product-details-affiliate.html">Product Referral</a></li>
                                        <li><a href="product-details-group.html">Product Group</a></li>
                                        <li><a href="product-details-single-slide.html">Product Slider</a></li>
                                        <li><a href="product-details-tab-left.html">Product Tab Left</a></li>
                                        <li><a href="product-details-tab-right.html">Product Tab Right</a></li>
                                        <li><a href="product-details-gallery-left.html">Product Gallery Left</a></li>
                                        <li><a href="product-details-gallery-right.html">Product Gallery Right</a></li>
                                        <li><a href="product-details-sticky-left.html">Product Sticky Left</a></li>
                                        <li><a href="product-details-sticky-right.html">Product Sticky right</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Blogs</span></a>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Blog Grid</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="blog-grid-sidebar-left.html">Blog Grid Sidebar left</a></li>
                                        <li><a href="blog-grid-sidebar-right.html">Blog Grid Sidebar Right</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog-full-width.html">Blog Full Width</a>
                                </li>
                                <li>
                                    <a href="#">Blog Single</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="blog-single-sidebar-left.html">Blog Single Sidebar left</a></li>
                                        <li><a href="blog-single-sidebar-right.html">Blog Single Sidebar Right</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Pages</span></a>
                            <ul class="mobile-sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="faq.html">Frequently Questions</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div> <!-- End Mobile Menu Nav -->

                <!-- Mobile Manu Mail Address -->
                <a class="mobile-menu-email icon-text-right" href="mailto:info@yourdomain.com"><i
                        class="fa fa-envelope-o"> info@yourdomain.com</i></a>

                <!-- Mobile Manu Social Link -->
                <ul class="mobile-menu-social">
                    <li><a href="" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="" class="youtube"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="" class="instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div> <!-- End Mobile Menu Bottom -->
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- ...:::: Start Offcanvas Addcart Section :::... -->
    <div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="fa fa-times"></i></button>
        </div> <!-- End Offcanvas Header -->

        <!-- Start  Offcanvas Addcart Wrapper -->
        <div class="offcanvas-add-cart-wrapper">
            <h4 class="offcanvas-title">Giỏ hàng</h4>
            <ul class="offcanvas-cart">
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="" class="offcanvas-cart-item-image-link">
                            <img src="{{ asset('clients/assets/images/products_images/aments_products_image_2.jpg') }}" alt=""
                                class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="" class="offcanvas-cart-item-link">Shock Absorber</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">1 x </span>
                                <span class="offcanvas-cart-item-details-price">$350.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-right">
                        <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            </ul>
            <div class="offcanvas-cart-total-price">
                <span class="offcanvas-cart-total-price-text">Tổng tiền:</span>
                <span class="offcanvas-cart-total-price-value">$170.00</span>
            </div>
            <ul class="offcanvas-cart-action-button">
                <li class="offcanvas-cart-action-button-list"><a href="" class="offcanvas-cart-action-button-link">Chi tiết</a></li>
                <li class="offcanvas-cart-action-button-list"><a href=""
                        class="offcanvas-cart-action-button-link">Thanh toán</a></li>
            </ul>
        </div> <!-- End  Offcanvas Addcart Wrapper -->

    </div> <!-- ...:::: End  Offcanvas Addcart Section :::... -->

    @yield('content')

    <!-- ...:::: Start Footer Section:::... -->
    <footer class="footer-section section-top-gap-100">
        <!-- Start Footer Top Area -->
        <div class="footer-top section-inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-5">
                        <div class="footer-widget footer-widget-contact" data-aos="fade-up" data-aos-delay="0">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset('clients/assets/images/logo/logo.png') }}" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="footer-contact">
                                <p>Chúng tôi luôn đem những sản phẩm tốt nhất đến cho khách hàng</p>
                                <div class="customer-support">
                                    <div class="customer-support-icon">
                                        <img src="{{ asset('clients/assets/images/icon/support-icon.png') }}" alt="">
                                    </div>
                                    <div class="customer-support-text">
                                        <span>Số điện thoại hỗ trợ</span>
                                        <a class="customer-support-text-phone" href="tel:0977290289">0977290289</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-7">
                        <div class="footer-widget footer-widget-subscribe" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="footer-widget-title">Đăng ký thông tin</h3>
                            <form action="#" method="post">
                                <div class="footer-subscribe-box default-search-style d-flex">
                                    <input
                                        class="default-search-style-input-box border-around border-right-none subscribe-form"
                                        type="email" placeholder="Search entire store here ..." required>
                                    <button class="default-search-style-input-btn" type="submit">Gửi</button>
                                </div>
                            </form>
                            <ul class="footer-social">
                                <li><a href="" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="footer-widget footer-widget-menu" data-aos="fade-up" data-aos-delay="600">
                            <h3 class="footer-widget-title">Thông tin khác</h3>
                            <div class="footer-menu">
                                <ul class="footer-menu-nav">
                                    <li><a href="">Delivery</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact us</a></li>
                                    <li><a href="">Stores</a></li>
                                </ul>
                                <ul class="footer-menu-nav">
                                    <li><a href="">Legal Notice</a></li>
                                    <li><a href="">Secure payment</a></li>
                                    <li><a href="">Sitemap</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Footer Top Area -->
        <!-- Start Footer Bottom Area -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright-area">
                            <p class="copyright-area-text">&copy; 2021 <a href="index.html">Q-STORE</a>. Custom with <i
                                    class="fa fa-heart text-danger"></i> by <a href="https://hasthemes.com/"
                                    target="_blank">Quannv</a> </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-payment">
                            <a href=""><img class="img-fluid" src="{{ asset('clients/assets/images/icon/payment-icon.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Footer Bottom Area -->
    </footer> <!-- ...:::: End Footer Section:::... -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="modal-add-cart-product-img">
                                            <img class="img-fluid"
                                                src="{{ asset('clients/assets/images/products_images/aments_products_image_1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added to cart
                                            successfully!</div>
                                        <div class="modal-add-cart-product-cart-buttons">
                                            <a href="cart.html">View Cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal-border">
                                <ul class="modal-add-cart-product-shipping-info">
                                    <li> <strong><i class="icon-shopping-cart"></i> There Are 5 Items In Your
                                            Cart.</strong></li>
                                    <li> <strong>TOTAL PRICE: </strong> <span>$187.00</span></li>
                                    <li class="modal-continue-button"><a href="#" data-dismiss="modal">CONTINUE
                                            SHOPPING</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-details-gallery-area">
                                    <div class="product-large-image modal-product-image-large">
                                        <div class="product-image-large-single">
                                            <img class="img-fluid"
                                                src="{{ asset('clients/assets/images/products_images/aments_products_image_1.jpg') }}" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid"
                                                src="{{ asset('clients/assets/images/products_images/aments_products_image_2.jpg') }}" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid"
                                                src="{{ asset('clients/assets/images/products_images/aments_products_image_3.jpg') }}" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid"
                                                src="{{ asset('clients/assets/images/products_images/aments_products_image_4.jpg') }}" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid"
                                                src="{{ asset('clients/assets/images/products_images/aments_products_image_5.jpg') }}" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid"
                                                src="{{ asset('clients/assets/images/products_images/aments_products_image_6.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="product-image-thumb modal-product-image-thumb">
                                        <div class="zoom-active product-image-thumb-single">
                                            <img class="img-fluid"
                                                src="{{ asset('clients/assets/images/products_images/aments_products_image_1.jpg') }}" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid"
                                                src="{{ asset('clients/assets/images/products_images/aments_products_image_2.jpg') }}" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid"
                                                src="{{ asset('clients/assets/images/products_images/aments_products_image_3.jpg') }}" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid"
                                                src="{{ asset('clients/assets/images/products_images/aments_products_image_4.jpg') }}" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid"
                                                src="{{ asset('clients/assets/images/products_images/aments_products_image_5.jpg') }}" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid"
                                                src="{{ asset('clients/assets/images/products_images/aments_products_image_6.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-details-content-area">
                                    <!-- Start  Product Details Text Area-->
                                    <div class="product-details-text">
                                        <h4 class="title">Nonstick Dishwasher PFOA</h4>
                                        <div class="price"><del>$70.00</del>$80.00</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                            in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                            recusandae</p>
                                    </div> <!-- End  Product Details Text Area-->
                                    <!-- Start Product Variable Area -->
                                    <div class="product-details-variable">
                                        <!-- Product Variable Single Item -->
                                        <div class="variable-single-item">
                                            <span>Color</span>
                                            <div class="product-variable-color">
                                                <label for="modal-product-color-red">
                                                    <input name="modal-product-color" id="modal-product-color-red"
                                                        class="color-select" type="radio" checked>
                                                    <span class="product-color-red"></span>
                                                </label>
                                                <label for="modal-product-color-tomato">
                                                    <input name="modal-product-color" id="modal-product-color-tomato"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-tomato"></span>
                                                </label>
                                                <label for="modal-product-color-green">
                                                    <input name="modal-product-color" id="modal-product-color-green"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-green"></span>
                                                </label>
                                                <label for="modal-product-color-light-green">
                                                    <input name="modal-product-color"
                                                        id="modal-product-color-light-green" class="color-select"
                                                        type="radio">
                                                    <span class="product-color-light-green"></span>
                                                </label>
                                                <label for="modal-product-color-blue">
                                                    <input name="modal-product-color" id="modal-product-color-blue"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-blue"></span>
                                                </label>
                                                <label for="modal-product-color-light-blue">
                                                    <input name="modal-product-color"
                                                        id="modal-product-color-light-blue" class="color-select"
                                                        type="radio">
                                                    <span class="product-color-light-blue"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Product Variable Single Item -->
                                        <div class="variable-single-item ">
                                            <span>Quantity</span>
                                            <div class="product-variable-quantity">
                                                <input min="1" max="100" value="1" type="number">
                                            </div>
                                        </div>
                                    </div> <!-- End Product Variable Area -->
                                    <!-- Start  Product Details Meta Area-->
                                    <div class="product-details-meta mb-20">
                                        <ul>
                                            <li><a href=""><i class="icon-heart"></i>Add to wishlist</a></li>
                                            <li><a href=""><i class="icon-repeat"></i>Compare</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                        class="icon-shopping-cart"></i>Add To Cart</a></li>
                                        </ul>
                                    </div> <!-- End  Product Details Meta Area-->
                                    <!-- Start  Product Details Social Area-->
                                    <ul class="modal-product-details-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul> <!-- End  Product Details Social Area-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->

    @include('clients.layouts.script')
</body>

</html>