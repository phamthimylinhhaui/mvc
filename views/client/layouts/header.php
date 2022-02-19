




<div class="header-top border-bottom d-none d-md-block" style="padding: 8px 0px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-8">
                <div class="header-top-left">
                    <ul class="dropdown-wrap text-matterhorn">
                        <li style="margin-right: 50px;">
                            <i class="pe-7s-map-marker"></i>
                            Số 298 Đ. Cầu Diễn, Minh Khai, Bắc Từ Liêm, Hà Nội
                        </li>
                        <li>
                            <i class="pe-7s-piggy"></i>
                            <a> Freeship cho đơn hàng từ 500.000đ </a>
                        </li>


                    </ul>
                </div>
            </div>
            <div class="col-4">
                <div class="header-top-right text-matterhorn">
                    <p class="shipping mb-0">
                        <i class="pe-7s-alarm"></i>

                        Mở cửa và phục vụ khách hàng 24/24h
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="header-middle py-5  header-sticky">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="header-middle-wrap">
                    <a href="/home" class="header-logo">
                        <img src="assets/client_source/assets/images/logo/vascra.png" alt="Header Logo">
                    </a>
                    <div class="header-search-area d-none d-lg-block" style="width:630px">


                        <div class="header-searchbox">

                            <input class="input-field" type="text" placeholder="Nhập sản phầm tìm kiếm"
                                   id="keyword">
                            <button class="btn btn-outline-whisper btn-primary-hover" type="submit"
                                    onclick="onSearch()"><a href="/category"><i class="pe-7s-search"></i></a>

                            </button>
                        </div>
                    </div>
                    <div class="header-right">
                        <ul>
<!--                                show tên người dùng-->
                            <li class="dropdown d-none d-md-block">
                                <?php
                                // dd(Auth::checkAuth());
                                if (Auth::checkAuth()){
                                ?>
                                    <img class="avatar-header" src="<?php echo Auth::user()->getAvatar()?>">
                                    <a href="<?php echo Route::name('edit-profile')?>">
                                    <?php
                                    echo Auth::user()->getFullName();
                                    ?>
                                    </a>
                                 <?php
                                }else{
                                ?>
                                        <div class="dropdown d-none d-md-block">

                                            <a href="/show-login" class="btn btn-link dropdown-toggle ht-btn p-0">
                                                <i class="pe-7s-users" style="margin-left: 30px;"> </i>
                                                <span style=" color: #797676; padding-left: 7px; font-size: 16px; padding-top: 3px;">Đăng nhập </span>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </a>
                            </li>
                            </li>
<!--                            show đăng xuất-->
                            <li class="dropdown d-none d-md-block">
                                <?php
                                if (Auth::checkAuth()){
                                    ?>
                                    <a href="<?php echo Route::name('logout')?>">Đăng xuất
                                    </a>
                                    <?php
                                }
                                ?>
                            </li>

                            <li class="d-block d-lg-none" style="padding-top:6px">
                                <a href="#searchBar" class="search-btn toolbar-btn">
                                    <i class="pe-7s-search"></i>
                                </a>
                            </li>
                            <li class="minicart-wrap me-3 me-lg-0">

                                <a title="Cartlist" href="cart_index" class="minicart-btn ">
                                    <i class="pe-7s-shopbag"></i>
                                    <span
                                            style="position: absolute; color: #e87474; left: 46px; font-weight: 600; top: -5px; font-size: 14px; ">Tổng:</span>
                                    <sup id="hdk-count" class="quantity"> 0</sup>

                                </a>
                                <p class="dieuchinhcsscart">
                                    <small id="total-amount" style="font-weight:600">0</small>
                                </p>



                            </li>
                            <li class="mobile-menu_wrap d-block d-lg-none">
                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                    <i class="pe-7s-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const onSearch = () => {
        const keyword = document.getElementById("keyword").value;

        window.location = `/Product/Search?keyword=${keyword}`;
    }
</script>


<!-- Start menu pc -->

<div class="main-header " style="border-top: 1px solid #f15c68; border-bottom: 1px solid #f15c68;">
    <div class="container">
        <div class="main-header_nav position-relative">
            <div class="row align-items-center">
                <div class="col-lg-12 d-none d-lg-block">
                    <div class="main-menu">
                        <nav class="main-nav">
                            <ul style="justify-content:left">
                                <li class="drop-holder">
                                    <a href="/home">
                                        <i class="pe-7s-home" style="font-size:20px"></i>

                                    </a>

                                </li>
                                <li>
                                    <a href="<?php echo Route::name('category')?>">Giày Cao gót</a></li>


                                <li>
                                    <a href="/category">Giày Sandals</a></li>


                                <li>
                                    <a href="/category">Giày Sneaker</a></li>



                                <li>
                                    <a href="/category">Giày Boots</a></li>


                                <li>
                                    <a href="/category">Giày da thật</a></li>

                                <li>
                                    <a href="/category">Giày Lười</a></li>
                                <li>

                                    <?php
                                        if (Auth::checkAuth()){
                                    ?>
                                            <a href="<?php echo Route::name('admin.users')?>">Quản lý người dùng</a>
                                    <?php
                                        }
                                    ?>

                                </li>

                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End menu pc -->
<!-- Start menu mobile -->

<style>
    .header-right {
        min-width: 0px;
    }

    .header-right>ul {
        justify-content: space-between;
    }

    ul.dropdown-wrap.justify-content-center.text-silver {
        background: #2b2828;
        padding: 20px;
    }

    .dropdown-wrap li .ht-btn:after {
        display: none;
    }

    .offcanvas-search_wrapper .harmic-offcanvas-body .offcanvas-search {
        justify-content: flex-start;
    }

    .main-header.header-sticky.sticky {
        top: 94px;
    }
</style>


<div class="mobile-menu_wrapper" id="mobileMenu">
    <div class="harmic-offcanvas-body">
        <div class="inner-body">

            <div class="harmic-offcanvas-top">
                <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
            </div>

            <div class="offcanvas-user-info text-center px-6 pb-5">

                <ul class="dropdown-wrap justify-content-center text-silver">


                    <li class="dropdown dropup">
                        <a class="btn btn-link  ht-btn p-0" href="?controller=users">
                            <i class="pe-7s-users"></i>
                            <span
                                    style=" color: #797676; padding-left: 7px; font-size: 16px; padding-top: 3px;">Đăng
                                    nhập </span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="offcanvas-menu_area">
                <nav class="offcanvas-navigation">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children">
                            <a href="/">
                                <i class="pe-7s-home" style="font-size:20px"></i>
                                Home
                            </a>

                        </li>
                        <li>
                            <a href="">
                                <span class="mm-text">Giới thiệu</span>
                            </a>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="#">
                                    <span class="mm-text">
                                        Danh mục sản phẩm
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                            </a>
                            <ul class="sub-menu">

                                <li>
                                    <a href="/category">

                                        <span class="mm-text">Danh mục 1</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="/category">

                                        <span class="mm-text">Danh mục 2</span>

                                    </a>
                                </li>

                                <li>
                                    <a href="/category">

                                        <span class="mm-text">Danh mục 3</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="/category">

                                        <span class="mm-text">Danh mục 4</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="/category">

                                        <span class="mm-text">Danh mục 5</span>

                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li>
                            <a href="#">Khuyến mãi</a>
                        </li>
                        <li>
                            <a href="#">Tin tức</a>
                        </li>
                        <li>
                            <a href="#">Hình ảnh</a>
                        </li>

                        <li>
                            <a href="#">Liên hệ</a>
                        </li>
                        <li style="padding-left:70px">
                            <a href="#" style="color:red; font-weight:bold">Hotline: 038.464.0190</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="offcanvas-search_wrapper" id="searchBar">
    <div class="harmic-offcanvas-body">
        <div class="container h-100">
            <div class="offcanvas-search">
                <div class="harmic-offcanvas-top">
                    <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                </div>
                <span class="searchbox-info">Nhập từ bạn muốn tìm và nhấn Enter</span>

                <div class="hm-searchbox">
                    <input type="text" placeholder="Tìm kiếm.....">
                    <button class="search-btn" type="submit" onclick="onSearch()"><a href="/category"><i class="pe-7s-search"></i></a></i></button>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- End menu mobile -->