<div class="header">
    <div class="header-left">
        <a href="/admin" class="logo logo-small">
            <img src="../../assets/admin_source/vascra.png"
                 alt="Logo"
                 width="30"
                 height="30" />
        </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fas fa-align-left"></i>
    </a>
    <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
        <i class="fas fa-align-left"></i>
    </a>

    <ul class="nav user-menu">
        <!-- User Menu -->
        <li class="nav-item dropdown">
            <a href="/admin"
               class="dropdown-toggle user-link nav-link"
               data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle"
                                 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdeeVu5CWReDBpxNGN9QHVsVT6l33OLK4mIfcy6L-obDRXBxgGiSu3w44JIfj-MU9eu3Y&usqp=CAU"
                                 width="40"
                                 alt="Admin" />Đăng xuất
                        </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="/admin">Đăng xuất</a>
            </div>
        </li>
        <!-- /User Menu -->
    </ul>
</div>

<div class="sidebar" id="sidebar">
    <div class="sidebar-logo">
        <a href="/admin_main">
            <img src="../../assets/admin_source/vascra.png" style="margin-bottom:20px"
                 class="img-fluid"
                 alt="" />
        </a>
    </div>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="/admin_main"><i class="fas fa-columns"></i> <span>Thống kê</span></a>
                </li>
                <li class="">
                    <a href="/category_admin">
                        <i class="fas fa-layer-group"></i>
                        <span>Quản lý chuyên mục</span>
                    </a>
                </li>
                <li class="">
                    <a href="/product_admin">
                        <i class="fab fa-buffer"></i>
                        <span>Quản lý bài viết</span>
                    </a>
                </li>
                <li class="">
                    <a href="/bill_admin">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Quản lý Tags</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo Route::name('admin.users')?>" >
                        <i class="fas fa-user"></i>
                        <span>Quản lý tài khoản </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
