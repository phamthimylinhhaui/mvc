
<?php include 'views/client/layouts/master.php' ?>

<?php startblock('title') ?>
Chi tiết sản phẩm
<?php endblock() ?>

<!-- End menu mobile -->


<!-- ---------------------Thân------------------- -->
<?php startblock('content') ?>


<main class="main-content">

    <div class="breadcrumb-area breadcrumb-height" data-bg-image="https://theme.hstatic.net/1000317997/1000499273/14/ms_banner_img1.jpg?v=198">
        <div class="container h-100" >
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <div class="main-breadcrum">
                            <h2 class="breadcrumb-heading">Sản phẩm của danh mục 1</h2>
                            <ul style="text-align:center">
                                <li>
                                    <a href="#">Trang chủ <i class="pe-7s-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="#">Danh mục 1 <i class="pe-7s-angle-right"></i></a>
                                </li>
                                <li>Sản phẩm của danh mục 1</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product-area section-space-top-100" style="margin-bottom:50px">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="single-product-img h-100">
                        <div class="swiper-container single-product-slider">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <a href="https://www.vascara.com/uploads/cms_productmedia/2021/June/30/giay-sneaker-vien-chi-noi-thoi-trang-snk-0042-mau-trang-5__60485__1625071843-medium@2x.jpg?1"
                                       class="single-img gallery-popup" style="margin:0 auto">
                                        <img class="img-full img-"
                                             src="assets/client_source/assets/images/giaydemo.jpg"
                                             alt="Product Image" style="width: 100%; max-height: 450px; margin: 0 auto; display: block; ">

                                    </a>
                                </div>

                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="product-thumb-with-content row">
                        <div class="col-12 order-lg-1 order-2 pt-10 pt-lg-0">
                            <div class="single-product-content">
                                <h2 class="title pb-2">Sản phẩm của danh mục 1</h2>





                                <div class="price-box pb-1">
                                    Giá:<span class="new-price text-danger" style=" color: #f26570 !important;"> 70,500 vnđ</span>
                                </div>

                                <div class="product-category product-tags text-matterhorn pb-1">
                                    <span class="title"><b>Tình trạng:</b></span>
                                    <ul>

                                        <li style="background: #f15b67; padding: 0px 10px; border-radius: 5px; color: #fff;">
                                            <a>Còn hàng</a>
                                        </li>


                                    </ul>
                                </div>



                                <div class="product-category text-matterhorn pb-2 pt-2">
                                    <span class="title"><b>Loại mũi và chất liệu:</b></span>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">
                                                500g
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="product-category text-matterhorn pb-2 pt-2">
                                    <span class="title"><b>Kiểu gót và độ cao gót:</b></span>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">
                                                Gót nhọn, cao 30cm.
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="product-category text-matterhorn pb-2 pt-2">
                                    <span class="title"><b>Phù hợp sử dụng:</b></span>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">
                                                Phù hợp đi làm, đi tiệc đi ăn...
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="product-category product-tags text-matterhorn pb-4">
                                    <ul>
                                        <span class="title"><b>Danh mục:</b></span>
                                        <li style="color: #f15e6a; padding: 0px 10px; background: #fff; border: 1px solid; border-radius: 5px; font-weight: 600;">
                                            <a>Danh mục 1</a>
                                        </li>

                                    </ul>
                                </div>



                                <ul class="quantity-with-btn pb-7">


                                    <button class="product-add btn btn-custom-size lg-size btn-primary btn-secondary-hover rounded-0" style="background: #f15b67; border-radius: 10px !important; border: 2px solid #fff;" onclick="addToCart(20, 98)" title="Add to Cart">
                                        <a href="/cart_index">  <i class="pe-7s-shopbag" style="padding-right:10px"></i><span>Thêm vào giỏ hàng</span></a>
                                    </button>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


<?php endblock() ?>