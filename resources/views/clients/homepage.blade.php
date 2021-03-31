@extends('clients.layouts.main')

@section('content')
        <!-- ...:::: Start Hero Area Section:::... -->
        <div class="hero-area">
            <div class="hero-area-wrapper hero-slider-dots fix-slider-dots">
                <!-- Start Hero Slider Single -->
                <div class="hero-area-single">
                    <div class="hero-area-bg">
                        <img class="hero-img" src="{{ asset('clients/assets/images/slider_images/home_1/1.jpg') }}" alt="">
                    </div>
                    <div class="hero-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-10 col-md-8 col-xl-6">
                                    <h3>Q-STORE</h3>
                                    <h2>Vợt cầu lông số 1 Việt Nam</h2>
                                    <a href="product-details-default.html" class="hero-button">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Slider Single -->
                <!-- Start Hero Slider Single -->
                <div class="hero-area-single">
                    <div class="hero-area-bg">
                        <img class="hero-img" src="{{ asset('clients/assets/images/slider_images/home_1/2.jpg') }}" alt="">
                    </div>
                    <div class="hero-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-10 col-md-8 col-xl-6">
                                    <h3>Q-STORE</h3>
                                    <h2>Trùm phụ kện cầu lông</h2>
                                    <a href="product-details-default.html" class="hero-button">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Slider Single -->
            </div>
        </div> <!-- ...:::: End Hero Area Section:::... -->
    
        <!-- ...:::: Start Product Catagory Section:::... -->
        <div class="product-catagory-section section-top-gap-100">
            <!-- Start Section Content -->
            <div class="section-content-gap">
                <div class="container">
                    <div class="row">
                        <div class="section-content">
                            <h3 class="section-title" data-aos="fade-up" data-aos-delay="50">Top thương hiệu</h3>
                        </div>
                    </div>
                </div>
            </div> <!-- End Section Content -->
    
            <!-- Start Catagory Wrapper -->
            <div class="product-catagory-wrapper">
                <div class="container">
                    <div class="row">
                        @foreach ($brands as $item)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <!-- Start Product Catagory Single -->
                                <a href="" class="product-catagory-single" data-aos="fade-up"
                                    data-aos-delay="0">
                                    <div class="product-catagory-img">
                                        <img src="{{ asset($item->logo) }}">
                                    </div>
                                    <div class="product-catagory-content">
                                        <h5 class="product-catagory-title">{{ $item->name }}</h5>
                                        <span class="product-catagory-items">(20 Sản phẩm)</span>
                                    </div>
                                </a> <!-- End Product Catagory Single -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> <!-- End Catagory Wrapper -->
        </div> <!-- ...:::: End Product Catagory Section:::... -->
    
        <!-- ...:::: Start Banner Section:::... -->
        <div class="banner-section section-top-gap-100">
            <!-- Start Banner Wrapper -->
            <div class="banner-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Banner Single -->
                            <div class="banner-single" data-aos="fade-up" data-aos-delay="0">
                                <a href="product-details-default.html" class="banner-img-link">
                                    <img class="banner-img" src="{{ asset('clients/assets/images/banner_images/badminton1.jpg') }}" alt="">
                                </a>
                                <div class="banner-content">
                                    <h3 class="banner-text-large">30% Off</h3>
                                    <a href="product-details-default.html" class="banner-link">Mua ngay</a>
                                </div>
                            </div> <!-- End Banner Single -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Banner Single -->
                            <div class="banner-single" data-aos="fade-up" data-aos-delay="200">
                                <a href="product-details-default.html" class="banner-img-link">
                                    <img class="banner-img" src="{{ asset('clients/assets/images/banner_images/badminton2.jpg') }}" alt="">
                                </a>
                                <div class="banner-content">
                                    <h3 class="banner-text-large">40% Off</h3>
                                    <a href="product-details-default.html" class="banner-link">Mua ngay</a>
                                </div>
                            </div> <!-- End Banner Single -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Banner Single -->
                            <div class="banner-single" data-aos="fade-up" data-aos-delay="400">
                                <a href="product-details-default.html" class="banner-img-link">
                                    <img class="banner-img" src="{{ asset('clients/assets/images/banner_images/badminton3.jpg') }}" alt="">
                                </a>
                                <div class="banner-content">
                                    <h3 class="banner-text-large">50% Off</h3>
                                    <a href="product-details-default.html" class="banner-link">Mua ngay</a>
                                </div>
                            </div> <!-- End Banner Single -->
                        </div>
                    </div>
                </div>
            </div> <!-- End Banner Wrapper -->
        </div> <!-- ...:::: End Banner Section:::... -->
    
        <!-- ...:::: Start Product Tab Section:::... -->
        <div class="product-tab-section section-top-gap-100">
            <!-- Start Section Content -->
            <div class="section-content-gap">
                <div class="container">
                    <div class="row">
                        <div
                            class="section-content d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column">
                            <h3 class="section-title" data-aos="fade-up" data-aos-delay="0">Sản phẩm mới về</h3>
                        </div>
                    </div>
                </div>
            </div> <!-- End Section Content -->
    
            <!-- Start Tab Wrapper -->
            <div class="product-tab-wrapper" data-aos="fade-up" data-aos-delay="50">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content tab-animate-zoom">
                                <div class="tab-pane show active" id="car_and_drive">
                                    <div class="product-default-slider product-default-slider-4grids-1row">
                                        @foreach ($products as $item)
                                            <!-- Start Product Defautlt Single -->
                                        <div class="product-default-single border-around">
                                            <div class="product-img-warp">
                                                <a href="{{ route('product-detail', ['id' => $item->id]) }}" class="product-default-img-link">
                                                    <img src="{{ asset($item->image) }}"
                                                        alt="" class="product-default-img img-fluid">
                                                </a>
                                                <div class="product-action-icon-link">
                                                    <ul>
                                                        <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                        <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                                    class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modalAddcart"><i
                                                                    class="icon-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-default-content">
                                                <h6 class="product-default-link"><a href="{{ route('product-detail', ['id' => $item->id]) }}">
                                                    {{ $item->name }}
                                                </a></h6>
                                                <span class="product-default-price"><del
                                                        class="product-default-price-off"></del>{{ number_format($item->price) }} VNĐ</span>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Catagory Wrapper -->
    
        </div> <!-- ...:::: End Product Tab Section:::... -->
        
        <div class="product-tab-section section-top-gap-100">
            <!-- Start Section Content -->
            <div class="section-content-gap">
                <div class="container">
                    <div class="row">
                        <div
                            class="section-content d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column">
                            <h3 class="section-title" data-aos="fade-up" data-aos-delay="0">Sản phẩm giảm giá <span style="color: red;">  (up to 50%)</span></h3>
                        </div>
                    </div>
                </div>
            </div> <!-- End Section Content -->
    
            <!-- Start Tab Wrapper -->
            <div class="product-tab-wrapper" data-aos="fade-up" data-aos-delay="50">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content tab-animate-zoom">
                                <div class="tab-pane show active" id="car_and_drive">
                                    <div class="product-default-slider product-default-slider-4grids-1row">
                                        @foreach ($products as $item)
                                            <!-- Start Product Defautlt Single -->
                                        <div class="product-default-single border-around">
                                            <div class="product-img-warp">
                                                <a href="{{ route('product-detail', ['id' => $item->id]) }}" class="product-default-img-link">
                                                    <img src="{{ asset($item->image) }}"
                                                        alt="" class="product-default-img img-fluid">
                                                </a>
                                                <div class="product-action-icon-link">
                                                    <ul>
                                                        <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                        <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i
                                                                    class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modalAddcart"><i
                                                                    class="icon-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-default-content">
                                                <h6 class="product-default-link"><a href="{{ route('product-detail', ['id' => $item->id]) }}">
                                                    {{ $item->name }}
                                                </a></h6>
                                                <span class="product-default-price"><del
                                                        class="product-default-price-off"></del>{{ number_format($item->price) }} VNĐ</span>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Catagory Wrapper -->
    
        </div> <!-- ...:::: End Product Tab Section:::... -->
    
        <!-- ...:::: Start Blog Feed Section:::... -->
        <div class="blog-feed-section section-top-gap-100">
            <!-- Start Section Content -->
            <div class="section-content-gap">
                <div class="container">
                    <div class="row">
                        <div class="section-content">
                            <h3 class="section-title" data-aos="fade-up" data-aos-delay="0">Tin tức cầu lông</h3>
                        </div>
                    </div>
                </div>
            </div> <!-- End Section Content -->
    
            <!-- Start Blog Feed Wrapper -->
            <div class="blog-feed-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Blog Feed Single -->
                            <div class="blog-feed-single" data-aos="fade-up" data-aos-delay="0">
                                <a href="blog-single-sidebar-left.html" class="blog-feed-img-link">
                                    <img src="{{ asset('clients/assets/images/blog_images/aments_blog_01.jpg') }}" alt="" class="blog-feed-img">
                                </a>
                                <div class="blog-feed-content">
                                    <div class="blog-feed-post-meta">
                                        <span>By:</span>
                                        <a href="" class="blog-feed-post-meta-author">Admin</a> -
                                        <a href="" class="blog-feed-post-meta-date">Sep 14, 2020</a>
                                    </div>
                                    <h5 class="blog-feed-link"><a href="blog-single-sidebar-left.html">Lorem ipsum dolor
                                            amet cons adipisicing elit</a></h5>
                                </div>
                            </div><!-- End Blog Feed Single -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Blog Feed Single -->
                            <div class="blog-feed-single" data-aos="fade-up" data-aos-delay="400">
                                <a href="blog-single-sidebar-left.html" class="blog-feed-img-link">
                                    <img src="{{ asset('clients/assets/images/blog_images/aments_blog_02.jpg') }}" alt="" class="blog-feed-img">
                                </a>
                                <div class="blog-feed-content">
                                    <div class="blog-feed-post-meta">
                                        <span>By:</span>
                                        <a href="" class="blog-feed-post-meta-author">Admin</a> -
                                        <a href="" class="blog-feed-post-meta-date">Sep 14, 2020</a>
                                    </div>
                                    <h5 class="blog-feed-link"><a href="blog-single-sidebar-left.html">Lorem ipsum dolor
                                            amet cons adipisicing elit</a></h5>
                                </div>
                            </div><!-- End Blog Feed Single -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Blog Feed Single -->
                            <div class="blog-feed-single" data-aos="fade-up" data-aos-delay="600">
                                <a href="blog-single-sidebar-left.html" class="blog-feed-img-link">
                                    <img src="{{ asset('clients/assets/images/blog_images/aments_blog_03.jpg') }}" alt="" class="blog-feed-img">
                                </a>
                                <div class="blog-feed-content">
                                    <div class="blog-feed-post-meta">
                                        <span>By:</span>
                                        <a href="" class="blog-feed-post-meta-author">Admin</a> -
                                        <a href="" class="blog-feed-post-meta-date">Sep 14, 2020</a>
                                    </div>
                                    <h5 class="blog-feed-link"><a href="blog-single-sidebar-left.html">Lorem ipsum dolor
                                            amet cons adipisicing elit</a></h5>
                                </div>
                            </div><!-- End Blog Feed Single -->
                        </div>
                    </div>
                </div>
            </div> <!-- End Blog Feed Wrapper -->
    
    
        </div> <!-- ...:::: End Blog Feed Section:::... -->
    
@endsection