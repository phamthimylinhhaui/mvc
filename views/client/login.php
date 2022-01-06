
<?php include 'views/client/layouts/master.php' ?>

<?php startblock('title') ?>
Đăng nhập
<?php endblock() ?>

<!-- End menu mobile -->


<!-- ---------------------Thân------------------- -->
<?php startblock('content') ?>



<div class="breadcrumb-area breadcrumb-height"
     data-bg-image="https://theme.hstatic.net/1000317997/1000499273/14/ms_banner_img1.jpg?v=198"
     xmlns="http://www.w3.org/1999/html">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-12">
                <div class="breadcrumb-item">
                    <div class="main-breadcrum">
                        <h2 class="breadcrumb-heading">Đăng Nhập</h2>
                        <ul style="text-align:center">
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
                        <p style="padding-top:10px">Chào mừng bạn đã đến với VASCARA. Vui lòng nhập đúng thông tin để đăng nhập</p>
                    </div>

<!--   action="/home" -->
                    <form class="user-form" action="<?php echo Route::name('login.post')?>" method="POST" id="form-dn">

                        <div class="form-group">
                            <label for="username1" style="color:#F15B67;font-size: 18px;padding-bottom: 10px">Tên đăng nhập:</label>
                            <input type="text" name="username1" class="form-control" placeholder="Nhập tên tài khoản đăng nhập:" />
                        </div>


                        <div class="form-group">
                            <label for="password1" style="color:#F15B67;font-size: 18px;padding-bottom: 10px ">Mật khẩu:</label>
                            <input type="password" name="password1" class="form-control" placeholder="Nhập mật khẩu" />
                        </div>
                        <div class="form-button">
                           <button class="btn btn-default" type="submit" name="login">ĐĂNG NHẬP</button>
                        </div>
                    </form>

                    <div class="user-form-remind">
                        <p>

                            Bạn chưa có tài khoản?
<!--                            <div>--><?php //echo  $_SESSION['error'];unset( $_SESSION['error'])?><!--</div>-->
                            <button  id="show-login" style="color: #f15b67;" >Đăng ký</button>

                        </p>
                    </div>
                </div>


                <!-- đăng ký-->
                <form class="user-form"  method="POST" id="register" action="<?php echo Route::name('auth.register')?>">
                    <img src="assets/client_source/assets/images/logo/vascra.png" alt="Header Logo">
                    <p style="padding:14px; text-align: center">Chào mừng bạn đã đến với VASCARA. Vui lòng nhập đúng thông tin để <b style="font-size: 20px;">đăng ký</b></p>
                    <div class="close-btn">&times;</div>

                    <div class="form-group">
                        <label for="username" style="color:#F15B67;">Tên đăng nhập</label>
                        <input class="form-control text-box single-line" data-val="true"  id="username" name="username" placeholder="Nhập tên tài khoản của bạn" type="text" value="" />
                    </div>
                    <div class="form-group">
                        <label for="password" style="color:#F15B67;">Mật khẩu</label>
                        <input class="form-control text-box single-line password" data-val="true"  id="password" name="password" placeholder="Nhập mật khẩu" type="password" />
                    </div>
                    <div class="form-group">
                        <label for=password" style="color:#F15B67;">Nhập lại mật khẩu</label>
                        <input class="form-control text-box single-line password" data-val="true"  id="confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu" type="password" />
                    </div>

                    <div class="form-group">
                        <label for="email" style="color:#F15B67;">Email</label>
                        <input class="form-control text-box single-line" data-val="true"  id="email" name="email" placeholder="Nhập địa chỉ mail" type="email" value="" />
                    </div>

                    <div class="form-group">
                        <label for="date_of_birth" style="color:#F15B67;">Ngày sinh</label>
                        <input class="form-control text-box single-line" data-val="true"  id="date_of_birth" name="date_of_birth" placeholder="Nhập ngày sinh của bạn" type="text" value="" />
                    </div>

                    <div class="form-group">
                        <label for="firstname" style="color:#F15B67;">Họ</label>
                        <input class="form-control text-box single-line" data-val="true" id="first_name" name="first_name" placeholder="Nhập họ của bạn" type="text" value="" />
                    </div>
                    <div class="form-group">
                        <label for="middle_name" style="color:#F15B67;">Tên đệm</label>
                        <input class="form-control text-box single-line" data-val="true" id="middle_name" name="middle_name" placeholder="Nhập tên đệm của bạn" type="text" value="" />
                    </div>
                    <div class="form-group">
                        <label for="lastname" style="color:#F15B67;">Tên</label>
                        <input class="form-control text-box single-line" data-val="true" id="last_name" name="last_name" placeholder="Nhập Tên của bạn" type="text" value="" />
                    </div>

                    <div class="form-button">
                        <button class="btn btn-default" type="submit" >Đăng ký</button>
                    </div>

                </form>

            </div>
        </div>
    </div>


</section>
<!--    register-->
<script type="text/javascript">
    document.querySelector("#show-login").addEventListener("click",function() {
        document.querySelector("#register").classList.add("active");
    }	);

    document.querySelector("#register .close-btn").addEventListener("click",function() {
        document.querySelector("#register").classList.remove("active");
    }	);
</script>


<!-- Start footer -->
<!-- Begin Shipping Area -->
<?php
require_once ("layouts/footer.php");
?>

<!-- register đăng nhập thành công -->

<style>
    .error  {
        color: red;
        font-size: 12px;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" ></script>


<script>

    jQuery('#register').validate({

        rules:{
            //myField: { letters_only: true }
            first_name:"required",
            username:"required",
            date_of_birth:"required",
            last_name:{
                required:true,
              //  digits: false
              //  letters_only: true
            },
            email:{
                required:true,
                email:true,
            },
            password:{
                required:true,
                minlength:6
            },
            confirm_password:{
                required:true,
                minlength:6,
                equalTo: "#password"
            },
        }

        ,messages:{

            first_name:"Họ không được để trống! ",
            username:"Tên tài khoản không được để trống! ",
            date_of_birth:"Vui lòng chọn ngày sinh! ",
            last_name:{
                required:"Tên không được để trống! ",
                //digits:"Không được nhập số",
                //letters_only: "vui lòng nhập các ký tự"
            },
            email:{
                required:"Email không được để trống!",
                email:"Vui lòng nhập đúng định dạng của email",
                // remote: "Email đã tồn tại trong hệ thống. Mời bạn chọn email khác"
            },
            password:{
                required:"Mật khẩu không được để trống!",
                minlength:"Mật khẩu phải tối thiểu 6 ký tự!"
            },
            confirm_password:{
                required:"Mật khẩu không được để trống!",
                minlength:"Mật khẩu phải tối thiểu 6 ký tự!",
                equalTo: "Mật khẩu nhập lại không trùng khớp!"
            },
        },

        submitHandler:function(form){
            form.submit();
            alert("Đăng ký thành công");
        }
    });
   // console.log(jQuery('#register').validate())
</script>


<!-- Datetime picker -->
<script src="assets/client_source/js/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript">
    $('#date_of_birth').datetimepicker({
        format:'d-m-Y',
    });
    $.datetimepicker.setLocale('vi');
</script>
<?php endblock() ?>