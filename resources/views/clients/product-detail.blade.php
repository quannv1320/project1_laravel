@extends('clients.layouts.main')

@section('content')
        <!-- ...:::: Start Breadcrumb Section:::... -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-wrapper">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">
                            <h3 class="breadcrumb-title">Chi tiết sản phẩm</h3>
                            <div class="breadcrumb-nav">
                                <nav aria-label="breadcrumb">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                        <li class="active" aria-current="page">Product Details Affiliate</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ...:::: End Breadcrumb Section:::... -->
    
        <!-- Start Product Details Section -->
        <div class="product-details-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                            <div class="product-large-image product-large-image-horaizontal">
                                <div class="product-image-large-single zoom-image-hover">
                                    <img src="{{  asset('clients/assets/images/products_images/aments_products_large_image_1.jpg') }}" alt="">
                                </div>
                                <div class="product-image-large-single zoom-image-hover">
                                    <img src="{{  asset('clients/assets/images/products_images/aments_products_large_image_2.jpg') }}" alt="">
                                </div>
                                <div class="product-image-large-single zoom-image-hover">
                                    <img src="{{  asset('clients/assets/images/products_images/aments_products_large_image_3.jpg') }}" alt="">
                                </div>
                                <div class="product-image-large-single zoom-image-hover">
                                    <img src="{{  asset('clients/assets/images/products_images/aments_products_large_image_4.jpg') }}" alt="">
                                </div>
                                <div class="product-image-large-single zoom-image-hover">
                                    <img src="{{  asset('clients/assets/images/products_images/aments_products_large_image_5.jpg') }}" alt="">
                                </div>
                                <div class="product-image-large-single zoom-image-hover">
                                    <img src="{{  asset('clients/assets/images/products_images/aments_products_large_image_6.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-details-content-area" data-aos="fade-up" data-aos-delay="200">
                            <!-- Start  Product Details Text Area-->
                            <div class="product-details-text">
                                <h4 class="title">Vợt cầu lông ProKennex Thunder 7002</h4>
                                <h6 class="product-ref mb-20">Thương hiệu: <span>ProKennex</span></h6>
                                <div class="d-flex align-items-center">
                                    <div class="product-review">
                                        <span class="review-fill"><i class="fa fa-star"></i></span>
                                        <span class="review-fill"><i class="fa fa-star"></i></span>
                                        <span class="review-fill"><i class="fa fa-star"></i></span>
                                        <span class="review-fill"><i class="fa fa-star"></i></span>
                                        <span class="review-empty"><i class="fa fa-star"></i></span>
                                    </div>
                                    <a href="" class="customer-review">(customer review )</a>
                                </div>
                                <div class="price"><del>$70.00</del>$80.00</div>
                                <p>Vợt cầu lông CHUYÊN CÔNG ProKennex Thunder 7002 được thiết kế với hai màu 
                                    khá bắt mắt cho bạn lựa chọn đó là: Đỏ và xanh lá. Hai màu này vô cùng ấn 
                                    tượng dành cho các lông thủ trải nghiệm</p>
                            </div> <!-- End  Product Details Text Area-->
                            <!-- Start Product Variable Area -->
                            <div class="product-details-variable"> 
                                <!-- Product Variable Single Item -->
                                <div class="d-flex align-items-center">
                                    <div class="variable-single-item ">
                                        <span>Số lượng</span>
                                        <div class="product-variable-quantity">
                                            <input min="1" max="100" value="1" type="number">
                                        </div>
                                    </div>
    
                                    <div class="product-add-to-cart-btn">
                                        <a href="#" data-toggle="modal" data-target="#modalQuickview">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div> <!-- End Product Variable Area -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Product Details Section -->
    
        <!-- Start Product Content Tab Section -->
        <div class="product-details-content-tab-section section-inner-bg section-top-gap-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-details-content-tab-wrapper" data-aos="fade-up" data-aos-delay="0">
    
                            <!-- Start Product Details Tab Button -->
                            <ul class="nav tablist product-details-content-tab-btn d-flex justify-content-center">
                                <li><a class="nav-link active" data-toggle="tab" href="#description">
                                        <h5>Mô tả sản phẩm</h5>
                                    </a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#specification">
                                        <h5>Thương hiệu</h5>
                                    </a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#review">
                                        <h5>Đánh giá</h5>
                                    </a></li>
                            </ul> <!-- End Product Details Tab Button -->
    
                            <!-- Start Product Details Tab Content -->
                            <div class="product-details-content-tab">
                                <div class="tab-content">
                                    <!-- Start Product Details Tab Content Singel -->
                                    <div class="tab-pane active show" id="description">
                                        <div class="single-tab-content-item">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                                nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                                ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                                adipiscing cursus eu, suscipit id nulla. </p>
                                            <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem,
                                                quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies
                                                massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero
                                                hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus
                                                nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus,
                                                consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in
                                                imperdiet ligula euismod eget</p>
                                        </div>
                                    </div> <!-- End Product Details Tab Content Singel -->
                                    <!-- Start Product Details Tab Content Singel -->
                                    <div class="tab-pane" id="specification">
                                        <div class="single-tab-content-item">
                                            <table class="table table-bordered mb-20">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Compositions</th>
                                                        <td>Polyester</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Styles</th>
                                                        <td>Girly</td>
                                                    <tr>
                                                        <th scope="row">Properties</th>
                                                        <td>Short Dress</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Fashion has been creating well-designed collections since 2010. The brand
                                                offers feminine designs delivering stylish separates and statement dresses
                                                which have since evolved into a full ready-to-wear collection in which every
                                                item is a vital part of a woman's wardrobe. The result? Cool, easy, chic
                                                looks with youthful elegance and unmistakable signature style. All the
                                                beautiful pieces are made in Italy and manufactured with the greatest
                                                attention. Now Fashion extends to a range of accessories including shoes,
                                                hats, belts and more!</p>
                                        </div>
                                    </div> <!-- End Product Details Tab Content Singel -->
                                    <!-- Start Product Details Tab Content Singel -->
                                    <div class="tab-pane" id="review">
                                        <div class="single-tab-content-item">
                                            <!-- Start - Review Comment -->
                                            <ul class="comment">
                                                <!-- Start - Review Comment list-->
                                                <li class="comment-list">
                                                    <div class="comment-wrapper">
                                                        <div class="comment-img">
                                                            <img src="{{  asset('clients/assets/images/user/image-1.png') }}" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-content-top">
                                                                <div class="comment-content-left">
                                                                    <h6 class="comment-name">Kaedyn Fraser</h6>
                                                                    <div class="product-review">
                                                                        <span class="review-fill"><i
                                                                                class="fa fa-star"></i></span>
                                                                        <span class="review-fill"><i
                                                                                class="fa fa-star"></i></span>
                                                                        <span class="review-fill"><i
                                                                                class="fa fa-star"></i></span>
                                                                        <span class="review-fill"><i
                                                                                class="fa fa-star"></i></span>
                                                                        <span class="review-empty"><i
                                                                                class="fa fa-star"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-content-right">
                                                                    <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                                </div>
                                                            </div>
    
                                                            <div class="para-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                    Tempora inventore dolorem a unde modi iste odio amet,
                                                                    fugit fuga aliquam, voluptatem maiores animi dolor nulla
                                                                    magnam ea! Dignissimos aspernatur cumque nam quod sint
                                                                    provident modi alias culpa, inventore deserunt
                                                                    accusantium amet earum soluta consequatur quasi eum eius
                                                                    laboriosam, maiores praesentium explicabo enim dolores
                                                                    quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam
                                                                    officia, saepe repellat. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Start - Review Comment Reply-->
                                                    <ul class="comment-reply">
                                                        <li class="comment-reply-list">
                                                            <div class="comment-wrapper">
                                                                <div class="comment-img">
                                                                    <img src="{{  asset('clients/assets/images/user/image-2.png') }}" alt="">
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="comment-content-top">
                                                                        <div class="comment-content-left">
                                                                            <h6 class="comment-name">Oaklee Odom</h6>
                                                                        </div>
                                                                        <div class="comment-content-right">
                                                                            <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                                        </div>
                                                                    </div>
    
                                                                    <div class="para-content">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit. Tempora inventore dolorem a
                                                                            unde modi iste odio amet, fugit fuga aliquam,
                                                                            voluptatem maiores animi dolor nulla magnam ea!
                                                                            Dignissimos aspernatur cumque nam quod sint
                                                                            provident modi alias culpa, inventore deserunt
                                                                            accusantium amet earum soluta consequatur quasi
                                                                            eum eius laboriosam, maiores praesentium
                                                                            explicabo enim dolores quaerat! Voluptas ad
                                                                            ullam quia odio sint sunt. Ipsam officia, saepe
                                                                            repellat. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul> <!-- End - Review Comment Reply-->
                                                </li> <!-- End - Review Comment list-->
                                                <!-- Start - Review Comment list-->
                                                <li class="comment-list">
                                                    <div class="comment-wrapper">
                                                        <div class="comment-img">
                                                            <img src="{{  asset('clients/assets/images/user/image-3.png') }}" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-content-top">
                                                                <div class="comment-content-left">
                                                                    <h6 class="comment-name">Jaydin Jones</h6>
                                                                    <div class="product-review">
                                                                        <span class="review-fill"><i
                                                                                class="fa fa-star"></i></span>
                                                                        <span class="review-fill"><i
                                                                                class="fa fa-star"></i></span>
                                                                        <span class="review-fill"><i
                                                                                class="fa fa-star"></i></span>
                                                                        <span class="review-fill"><i
                                                                                class="fa fa-star"></i></span>
                                                                        <span class="review-empty"><i
                                                                                class="fa fa-star"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-content-right">
                                                                    <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                                </div>
                                                            </div>
    
                                                            <div class="para-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                    Tempora inventore dolorem a unde modi iste odio amet,
                                                                    fugit fuga aliquam, voluptatem maiores animi dolor nulla
                                                                    magnam ea! Dignissimos aspernatur cumque nam quod sint
                                                                    provident modi alias culpa, inventore deserunt
                                                                    accusantium amet earum soluta consequatur quasi eum eius
                                                                    laboriosam, maiores praesentium explicabo enim dolores
                                                                    quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam
                                                                    officia, saepe repellat. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li> <!-- End - Review Comment list-->
                                            </ul> <!-- End - Review Comment -->
                                            <div class="review-form">
                                                <div class="review-form-text-top">
                                                    <h5>ADD A REVIEW</h5>
                                                    <p>Your email address will not be published. Required fields are marked
                                                        *</p>
                                                </div>
    
                                                <form action="#" method="post">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="default-form-box mb-20">
                                                                <label for="comment-name">Your name <span>*</span></label>
                                                                <input id="comment-name" type="text"
                                                                    placeholder="Enter your name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="default-form-box mb-20">
                                                                <label for="comment-email">Your Email <span>*</span></label>
                                                                <input id="comment-email" type="email"
                                                                    placeholder="Enter your email" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="default-form-box mb-20">
                                                                <label for="comment-review-text">Your review
                                                                    <span>*</span></label>
                                                                <textarea id="comment-review-text"
                                                                    placeholder="Write a review" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button class="form-submit-btn" type="submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- End Product Details Tab Content Singel -->
                                </div>
                            </div> <!-- End Product Details Tab Content -->
    
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Product Content Tab Section -->
    
        <!-- ...:::: Start Product  Section:::... -->
        <div class="product-section section-top-gap-100">
            <!-- Start Section Content -->
            <div class="section-content-gap">
                <div class="container">
                    <div class="row">
                        <div class="section-content">
                            <h3 class="section-title" data-aos="fade-up" data-aos-delay="0">Sản phẩm liên quan</h3>
                        </div>
                    </div>
                </div>
            </div> <!-- End Section Content -->
    
            <!-- Start Product Wrapper -->
            <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-default-slider product-default-slider-4grids-1row">
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_1.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_2.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_3.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_4.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_5.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_6.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_8.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_7.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Product Wrapper -->
        </div> <!-- ...:::: End Product Section:::... -->
    
        <!-- ...:::: Start Product Section:::... -->
        <div class="product-section section-top-gap-100">
            <!-- Start Section Content -->
            <div class="section-content-gap">
                <div class="container">
                    <div class="row">
                        <div class="section-content">
                            <h3 class="section-title" data-aos="fade-up" data-aos-delay="0">Sản phẩm khác</h3>
                        </div>
                    </div>
                </div>
            </div> <!-- End Section Content -->
    
            <!-- Start Product Wrapper -->
            <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-default-slider product-default-slider-4grids-1row">
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_1.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_2.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_3.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_4.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_5.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_6.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_8.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="product-details-default.html" class="product-default-img-link">
                                            <img src="{{  asset('clients/assets/images/products_images/aments_products_image_7.jpg') }}" alt=""
                                                class="product-default-img img-fluid">
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
                                        <h6 class="product-default-link"><a href="product-details-default.html">New Balance
                                                Fresh Foam Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End product Wrapper -->
        </div> <!-- ...:::: End Product Section:::... -->
@endsection