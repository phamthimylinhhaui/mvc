
<?php include 'views/client/layouts/master.php' ?>

<?php startblock('title') ?>
Trang chủ
<?php endblock() ?>

<!-- End menu mobile -->


<!-- ---------------------Thân------------------- -->
<?php startblock('content') ?>
<div class="slider-area">

    <!-- Main Slider -->
    <div class="swiper-container main-slider-2 swiper-arrow with-bg_white">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="slide-inner bg-height" data-bg-image="assets/client_source/assets/images/banner/banner1.png">

                </div>
            </div>

            <div class="swiper-slide ">
                <div class="slide-inner bg-height" data-bg-image="assets/client_source/assets/images/banner/banner2.png">

                </div>
            </div>

            <div class="swiper-slide ">
                <div class="slide-inner bg-height" data-bg-image="assets/client_source/assets/images/banner/banner3.jpg">

                </div>
            </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination with-bg d-md-none"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

</div>


<!-- Slider Area End Here -->
<div class="about-banner different-bg-position section-space-y-axis-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-5">
                <div class="parallax-img-wrap">
                    <div class="papaya">
                        <div class="scene fill"
                             style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: relative; pointer-events: none;">
                            <div class="expand-width" data-depth="0.2"
                                 style="transform: translate3d(5.9px, -7.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                <img src="assets/client_source/assets/images/banner/BLACK_FRIDAY_2019_LP_BANNER_MOBILE.png"
                                     alt="Banner Images" style="border-radius:32px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 align-self-center" style="padding-left:40px">
                <div class="about-banner-content">
                    <div class="section-title">
                        <span class="sub-title main-color-vascara">ABOUT ME</span>
                        <h2 class="title font-size-60 mb-6" style="font-size:34px !important">VỀ THƯƠNG HIỆU <span
                                class="main-color-vascara">VASCARA</span></h2>
                        <p class="short-desc mb-0">
                            Thương hiệu giày dép, túi xách, ví bóp, balo nữ thời trang cao cấp Kiểu dáng trẻ trung,
                            thanh lịch phù hợp với phong cách thời trang công sở, dự tiệc,
                            đi chơi. Giao hàng nhanh toàn quốc. Miễn phí đổi sản phẩm trong 7 ngày. Bảo hành trọn
                            đời
                            Khuyến mãi, giảm giá lễ tết lên đến 40%.
                        </p>
                        <div class="button-wrap pt-8">
                            <a class="btn btn-custom-size lg-size btn-primary btn-dark-hover rounded-0 main-bg-vascara btn-main-vascara"
                               href="#">Xem Thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Begin Product Area -->
<div class="product-area product-style-2 section-space-y-axis-100" style="padding-top:10px">
    <div class="container">
        <div class="section-title text-center pb-55">
            <span class="sub-title text-primary main-color-vascara">OUR PRODUCTS</span>
            <h2 class="title mb-0">Sản phẩm của chúng tôi</h2>
        </div>
        <div class="row">

            <div class="col-lg-3 col-sm-4 pt-6">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="/product_detail">
                            <img class="img-full" src="assets/client_source/assets/images/giaydemo.jpg" alt="Sản phẩm 1 ">

                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a onclick="addToCart(20, 98)" title="Thêm vào giỏ" href="cart_index">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product_detail">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name main-color-vascara" href="/product_detail" style="color:#000">sản phẩm của danh mục 1</a>
                        <div class="price-box pb-1">
                            <span class="new-price">70,500 vnđ</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4 pt-6">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="/product_detail">
                            <img class="img-full" src="assets/client_source/assets/images/giaydemo.jpg" alt="Sản phẩm 1 ">

                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a onclick="addToCart(20, 98)" title="Thêm vào giỏ" href="cart_index">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product_detail">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name main-color-vascara" href="/product_detail" style="color:#000">sản phẩm của danh mục 1</a>
                        <div class="price-box pb-1">
                            <span class="new-price">70,500 vnđ</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4 pt-6">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="/product_detail">
                            <img class="img-full" src="assets/client_source/assets/images/giaydemo.jpg" alt="Sản phẩm 1 ">

                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a onclick="addToCart(20, 98)" title="Thêm vào giỏ" href="cart_index">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product_detail">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name main-color-vascara" href="/product_detail" style="color:#000">sản phẩm của danh mục 1</a>
                        <div class="price-box pb-1">
                            <span class="new-price">70,500 vnđ</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4 pt-6">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="/product_detail">
                            <img class="img-full" src="assets/client_source/assets/images/giaydemo.jpg" alt="Sản phẩm 1 ">

                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a onclick="addToCart(20, 98)" title="Thêm vào giỏ" href="cart_index">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product_detail">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name main-color-vascara" href="/product_detail" style="color:#000">sản phẩm của danh mục 1</a>
                        <div class="price-box pb-1">
                            <span class="new-price">70,500 vnđ</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4 pt-6">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="/product_detail">
                            <img class="img-full" src="assets/client_source/assets/images/giaydemo.jpg" alt="Sản phẩm 1 ">

                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a onclick="addToCart(20, 98)" title="Thêm vào giỏ" href="cart_index">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product_detail">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name main-color-vascara" href="/product_detail" style="color:#000">sản phẩm của danh mục 1</a>
                        <div class="price-box pb-1">
                            <span class="new-price">70,500 vnđ</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4 pt-6">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="/product_detail">
                            <img class="img-full" src="assets/client_source/assets/images/giaydemo.jpg" alt="Sản phẩm 1 ">

                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a onclick="addToCart(20, 98)" title="Thêm vào giỏ" href="cart_index">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product_detail">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name main-color-vascara" href="/product_detail" style="color:#000">sản phẩm của danh mục 1</a>
                        <div class="price-box pb-1">
                            <span class="new-price">70,500 vnđ</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4 pt-6">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="/product_detail">
                            <img class="img-full" src="assets/client_source/assets/images/giaydemo.jpg" alt="Sản phẩm 1 ">

                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a onclick="addToCart(20, 98)" title="Thêm vào giỏ" href="cart_index">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product_detail">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name main-color-vascara" href="/product_detail" style="color:#000">sản phẩm của danh mục 1</a>
                        <div class="price-box pb-1">
                            <span class="new-price">70,500 vnđ</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4 pt-6">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="/product_detail">
                            <img class="img-full" src="assets/client_source/assets/images/giaydemo.jpg" alt="Sản phẩm 1 ">

                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a onclick="addToCart(20, 98)" title="Thêm vào giỏ" href="cart_index">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product_detail">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name main-color-vascara" href="/product_detail" style="color:#000">sản phẩm của danh mục 1</a>
                        <div class="price-box pb-1">
                            <span class="new-price">70,500 vnđ</span>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                <div class="pagination-area pt-10">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <div class="pagination-container">
                                <ul class="pagination">
                                    <li class="page-link page-item active"><a>1</a></li>
                                    <li class="page-link page-item"><a href="/?page=2">2</a></li>
                                    <li class="page-link page-item"><a href="/?page=3">3</a></li>
                                    <li class="page-link page-item"><a href="/?page=4">4</a></li>
                                    <li class="page-link page-item"><a href="/?page=5">5</a></li>
                                    <li class="page-link page-item PagedList-skipToNext"><a href="/?page=2"
                                                                                            rel="next">»</a></li>
                                </ul>
                            </div>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endblock() ?>
<!-- ====================End-thân -->



