<?php include 'views/client/layouts/master.php' ?>

<?php startblock('title') ?>
Đăng nhập
<?php endblock() ?>

<?php startblock('css') ?>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
<style type="text/css">
    .help-block {
        color: red;
        font-size: 16px;
        font-weight: 500;
    }
</style>
<?php endblock() ?>

<!-- ---------------------Thân------------------- -->
<?php startblock('content') ?>

<div class="breadcrumb-area breadcrumb-height"
     data-bg-image="assets/client_source/IMG/Screenshot_3.png"
     xmlns="http://www.w3.org/1999/html">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-12">
                <div class="breadcrumb-item">
                    <div class="main-breadcrum">
                        <h2 class="breadcrumb-heading" style="color:white;" >Đăng Nhập</h2>
                        <ul style="text-align:center; color: antiquewhite">
                            <li>
                                <a href="/home">Trang chủ <i class="pe-7s-angle-right"></i></a>
                            </li>
                            <li> Đăng Nhập</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="user-form-part">
    <div class="container" id="dangnhap">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                <div class="user-form-card">
                    <div class="user-form-title">
                        <a href="/home" class="header-logo-login">
                            <img src="assets/client_source/assets/images/logo/vascra.png" alt="Header Logo">

                        </a>
                        <p style="padding-top:10px">Chào mừng bạn đã đến với VASCARA. Vui lòng nhập đúng thông tin để
                            đăng nhập</p>
                    </div>
                    <!--LOGIN-->
                    <form class="user-form" method="POST" id="login-form"
                          action="<?php echo Route::name('auth.login') ?>">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="username" class="input-group-text">Tên đăng nhập</label>
                                </div>
                                <input class="form-control text-box single-line username" data-val="true" id="username"
                                       name="username" type="text" value=""/>
                            </div>
                            <span class="help-block login-username-validate"/>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label for="password" class="input-group-text">Mật khẩu</label>
                                </div>
                                <input class="form-control text-box single-line password" data-val="true" id="password"
                                       name="password" type="password"/>
                            </div>
                            <span class="help-block login-password-validate"/>
                        </div>
                        <div class="form-button">
                            <button class="btn btn-primary" type="submit">Đăng nhập</button>
                        </div>

                    </form>

                    <div class="user-form-remind">
                        <a href="<?php echo Route::name('home');?>">Về trang chủ</a>
                        <p>
                            Bạn chưa có tài khoản?
                            <button id="show-login" style="color: #f15b67;">Đăng ký</button>
                        </p>
                    </div>
                </div>

<!--REGISTER-->
                <form class="user-form" method="POST" id="register-form"
                      action="<?php echo Route::name('auth.register') ?>">
                    <img src="assets/client_source/assets/images/logo/vascra.png" alt="Header Logo">
                    <p style="padding:14px; text-align: center">Chào mừng bạn đã đến với VASCARA. Vui lòng nhập đúng
                        thông tin để <b style="font-size: 20px;">đăng ký</b></p>
                    <div class="close-btn">&times;</div>

                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label for="username" class="input-group-text">Tên đăng nhập</label>
                            </div>
                            <input class="form-control text-box single-line username" data-val="true" id="username"
                                   name="username" type="text" value=""/>
                        </div>
                        <span class="help-block username-validate"/>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label for="password" class="input-group-text">Mật khẩu</label>
                            </div>
                            <input class="form-control text-box single-line password" data-val="true" id="password"
                                   name="password" type="password"/>
                        </div>
                        <span class="help-block password-validate"/>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label for=password" class="input-group-text">Gõ lại mật khẩu</label>
                            </div>
                            <input class="form-control text-box single-line password re-password" name="re_password"
                                   data-val="true" id="re-password" type="password"/>
                        </div>
                        <span class="help-block re-password-validate"/>
                    </div>

                    <div class="row form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label for="email" class="input-group-text">Email</label>
                            </div>
                            <input class="form-control text-box single-line email" data-val="true" id="email"
                                   name="email" type="email" value=""/>
                        </div>
                        <span class="help-block email-validate"/>
                    </div>

                    <div class="row form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label for="date_of_birth" class="input-group-text">Ngày sinh</label>
                            </div>
                            <input class="form-control text-box single-line date-of-birth" data-val="true"
                                   id="date-of-birth" name="date_of_birth"
                                   type="text" value=""/>
                        </div>
                        <span class="help-block date-of-birth-validate"/>
                    </div>

                    <div class="row form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label for="fullname" class="input-group-text">Họ và tên</label>
                            </div>
                            <input class="form-control text-box single-line fullname" data-val="true" id="fullname"
                                   name="fullname" type="text" value=""/>
                        </div>
                        <span class="help-block fullname-validate"/>
                    </div>
                    <div class="form-button">
                        <button class="btn btn-primary" type="submit">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--footer -->
<?php
require_once("views/client/layouts/footer.php");
?>

<!-- SHOW REGISTER (POPUP)-->
<script type="text/javascript">
    document.querySelector("#show-login").addEventListener("click", function () {
        document.querySelector("#register-form").classList.add("active");
    });
    document.querySelector("#register-form .close-btn").addEventListener("click", function () {
        document.querySelector("#register-form").classList.remove("active");
    });
</script>

<?php endblock() ?>

<?php startblock('script') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"
        integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php include 'views/client/auth/script.php' ?>
<!--validate form register-->
<script>
    $(document).ready(function () {
        validateRegisterForm();
        validateLoginForm();
    });
</script>
<?php endblock() ?>
