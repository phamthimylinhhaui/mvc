
<?php include 'views/client/layouts/master.php' ?>

<?php startblock('title') ?>
Chi tiết tài khoản
<?php endblock() ?>

<!-- End menu mobile -->


<!-- ---------------------Thân------------------- -->
<?php startblock('content') ?>


<main class="main-content">

    <div class="breadcrumb-area breadcrumb-height" data-bg-image="https://theme.hstatic.net/1000317997/1000499273/14/ms_banner_img1.jpg?v=198">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <div class="main-breadcrum">
                            <h2 class="breadcrumb-heading">Thông tin tài khoản</h2>
                            <ul style="text-align:center">
                                <li>
                                    <a href="/">Trang chủ <i class="pe-7s-angle-right"></i></a>
                                </li>
                                <li> Thông tin tài khoản</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="account-page-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab" href="#account-dashboard" role="tab" aria-controls="account-dashboard" aria-selected="true">Quản lí tài khoản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-orders-tab" data-bs-toggle="tab" href="#account-orders" role="tab" aria-controls="account-orders" aria-selected="false">Đơn hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-address-tab" data-bs-toggle="tab" href="#account-address" role="tab" aria-controls="account-address" aria-selected="false">Địa chỉ </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-details-tab" data-bs-toggle="tab" href="#account-details" role="tab" aria-controls="account-details" aria-selected="false">Thông tin tài khoản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-logout-tab" href="/login" role="tab" aria-selected="false">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9">



                    <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                        <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel" aria-labelledby="account-dashboard-tab">
                            <div class="myaccount-dashboard">
                                <p>
                                    Xin chào <b class="text-danger">Ho&#224;ng Duy Kh&#225;nh</b> (bạn không phải là <b> ADMIN</b> ? <a href="/login" class="text-danger">
                                        Đăng xuất
                                    </a>)
                                </p>
                                <p>
                                    Chào mừng bạn đã đến với hệ thống quản lí tài khoản của Harmic. <br />Tại đây bạn có thể theo dõi các thông tin như:
                                    <br />
                                    <b>Địa chỉ giao hàng</b>
                                    <b style="padding-left:20px">Thông tin tài khoản</b>
                                    <b style="padding-left:20px">Đơn hàng đã đặt</b>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                            <div class="myaccount-orders">
                                <h4 class="small-title">Đơn hàng của tôi</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                    <tr>
                                        <th scope="col">Mã đơn</th>
                                        <th scope="col">Tổng tiền</th>
                                        <th scope="col">Ngày tạo</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Hành động</th>
                                    </tr>
                                    <tr>
                                        <td> <h6>5</h6></td>


                                        <td><h6>310,500 vnđ</h6></td>


                                        <td><h6>10/4/2021 12:01:22 AM</h6></td>


                                        <td> <h6>Đang giao</h6></td>


                                        <td>
                                            <a class="view" href="/Invoice/Index/5">
                                                <i class="pe-7s-info"></i> <span style="color: #198754">Chi tiết</span>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <h6>4</h6></td>


                                        <td><h6>141,000 vnđ</h6></td>


                                        <td><h6>10/3/2021 9:37:43 PM</h6></td>


                                        <td> <h6>Đang giao</h6></td>


                                        <td>
                                            <a class="view" href="/Invoice/Index/4">
                                                <i class="pe-7s-info"></i> <span style="color: #198754">Chi tiết</span>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <h6>3</h6></td>


                                        <td><h6>1,379,400 vnđ</h6></td>


                                        <td><h6>10/3/2021 9:15:03 PM</h6></td>


                                        <td> <h6>Đang giao</h6></td>


                                        <td>
                                            <a class="view" href="/Invoice/Index/3">
                                                <i class="pe-7s-info"></i> <span style="color: #198754">Chi tiết</span>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <h6>2</h6></td>


                                        <td><h6>266,000 vnđ</h6></td>


                                        <td><h6>10/3/2021 1:49:32 AM</h6></td>


                                        <td> <h6>Đang giao</h6></td>


                                        <td>
                                            <a class="view" href="/Invoice/Index/2">
                                                <i class="pe-7s-info"></i> <span style="color: #198754">Chi tiết</span>
                                            </a>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>



                        </div>
                        <div class="tab-pane fade" id="account-address" role="tabpanel" aria-labelledby="account-address-tab">
                            <div class="myaccount-address">

                                <div class="row">
                                    <div class="col">
                                        <h4 class="small-title">Địa chỉ nhận hàng</h4>
                                        <p style="margin-bottom:30px">Địa chỉ bên dưới sẽ được sử dụng trên trang thanh toán theo mặc định.</p>
                                        <address style="font-size:20px">
                                            An L&#227;o
                                        </address>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-details" role="tabpanel" aria-labelledby="account-details-tab">
                            <div class="myaccount-details">
                                <div class="account-title">
                                    <h4 style="margin-bottom: 40px; font-size: 32px;">Thông tin tài khoản</h4>
                                    <a href="#" style="background: #ffffff; padding: 10px 0px; margin-bottom: 40px !important; display: block; text-align: center; color: #f15b67; font-size: 18px; border: 1px solid; border-radius: 5px;">Đổi mật khẩu</a>
                                </div>
                                <form action="/Profile/Update" method="post" class="account-content">
                                    <input name="__RequestVerificationToken" type="hidden" value="8ePsVMA94AxwKx660aHdi-TNpdSsTzuAQy_Q64kCmHwu6PbGo9PWx9VT2oMg1gpFOsKCK2swUb2PJwxA-2CCscFnb4IsrLiw_NdB21TxZwc1" />

                                    <div class="row">

                                        <div hidden="hidden"><input type="text" name="id" value="1" /></div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Họ Tên</label>

                                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field full_name must be a string with a maximum length of 50." data-val-length-max="50" data-val-required="Tên không được để trống!" id="full_name" name="full_name" type="text" value="Hoàng Duy Khánh" />
                                                <span class="field-validation-valid text-danger" data-valmsg-for="full_name" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input readonly="readonly" class="form-control"
                                                       type="email"
                                                       name="email"
                                                       value="nhom2admin@gmail.com" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Số điện thoại</label>

                                                <input class="form-control text-box single-line" data-val="true" data-val-length="Số điện thoại không đúng định dạng" data-val-length-max="11" data-val-maxlength="Số điện thoại không đúng định dạng" data-val-maxlength-max="11" data-val-required="Số điện thoại không được để trống!" id="phone_number" name="phone_number" type="text" value="0866136920" />
                                                <span class="field-validation-valid text-danger" data-valmsg-for="phone_number" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Địa chỉ</label>

                                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field address must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Địa chỉ không được để trống!" id="address" name="address" type="text" value="An Lão" />
                                                <span class="field-validation-valid text-danger" data-valmsg-for="address" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 align-middle">
                                            <button class=" btn-inline pt-2 pb-2 mt-4 btn btn-custom-size lg-size btn-secondary btn-primary-hover rounded-0" style="line-height: 30px; background: #f15b67; border-radius: 10px !important; border: 1px solid;">
                                                <span>Cập nhật</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<style>
    label.form-label {
        font-size: 18px;
        margin-top: 20px;
        font-weight: 500;
    }
    .pagination .page-item:not(:last-child){
        padding-right:0px !important;
    }
    li.page-link.page-item.active {
        background: #bac34e !important;
        color: #fff !important;
    }
</style>


<!-- Start footer -->
<!-- Begin Shipping Area -->

<!--Main JS (Common Activation Codes)-->
<script src="../../assets/wwwroot/assets/js/main.min.js"></script>

<script src="../../assets/wwwroot/js/custom/carttt.js"></script>

<script src="/Scripts/jquery-3.4.1.js"></script>
<script src="/Scripts/jquery.validate.js"></script>
<script src="/Scripts/jquery.validate.unobtrusive.js"></script>



<?php endblock() ?>
