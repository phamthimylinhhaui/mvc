<?php
             include_once ("../../connection.php");
             include_once ("../../Models/Users.php");
             include_once ("../../libs/functions.php");


if (isset($_POST['register_submit'])){
    $firstName=$_POST['firstname'];
    $middleName=$_POST['middlename'];
    $lastName=$_POST['lastname'];
    $dateOfBirth=$_POST['date_of_birth'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
echo "<pre>";
print_r($_POST);
echo "<pre>";

//   Users::insert($username,$password,$email,$dateOfBirth,$firstName,$middleName,$lastName);
    register_submit($username,$password,$email,$dateOfBirth,$firstName,$middleName,$lastName);
}
?>


<!--                    đăng ký-->
<form class="user-form"  method="post" id="popup" action="">
    <img src="assets/client_source/assets/images/logo/vascra.png" alt="Header Logo">
    <p style="padding:15px; text-align: center">Chào mừng bạn đã đến với VASCARA. Vui lòng nhập đúng thông tin để <b style="font-size: 24px;">đăng ký</b></p>
    <div class="close-btn">&times;</div>
    <!--    <input name="__RequestVerificationToken" type="hidden" value="eMvLpvasMxMUfPYL1EzKI2ueN8FRxx81F5prsG3CWSYLA1r0buVor1VrheHgIgykmfqM3S3YVOYdDrFZFgeWMp7soxC5Vqn_Ys1IWAG6lhU1" />-->

    <div class="form-group">
        <label for="firstname" style="color:#F15B67;">Họ</label>
        <input class="form-control text-box single-line" data-val="true" data-val-length="The field full_name must be a string with a maximum length of 50." data-val-length-max="50" data-val-required="Họ không được để trống!" id="full_name" name="firstname" placeholder="Nhập họ của bạn" type="text" value="" />
        <span class="field-validation-valid text-danger" data-valmsg-for="full_name" data-valmsg-replace="true"></span>
    </div>
    <div class="form-group">
        <label for="middlename" style="color:#F15B67;">Tên đệm</label>
        <input class="form-control text-box single-line" data-val="true" data-val-length="The field full_name must be a string with a maximum length of 50." data-val-length-max="50" data-val-required="Tên đệm không được để trống!" id="full_name" name="middlename" placeholder="Nhập tên đệm của bạn" type="text" value="" />
        <span class="field-validation-valid text-danger" data-valmsg-for="full_name" data-valmsg-replace="true"></span>
    </div>
    <div class="form-group">
        <label for="lastname" style="color:#F15B67;">Tên</label>
        <input class="form-control text-box single-line" data-val="true" data-val-length="The field full_name must be a string with a maximum length of 50." data-val-length-max="50" data-val-required="Tên không được để trống!" id="full_name" name="lastname" placeholder="Nhập Tên của bạn" type="text" value="" />
        <span class="field-validation-valid text-danger" data-valmsg-for="full_name" data-valmsg-replace="true"></span>
    </div>
    <div class="form-group">
        <label for="date_of_birth" style="color:#F15B67;">Ngày sinh</label>
        <input class="form-control text-box single-line" data-val="true" data-val-length="The field full_name must be a string with a maximum length of 50." data-val-length-max="50" data-val-required="Ngày sinh không được để trống!" id="full_name" name="date_of_birth" placeholder="Nhập ngày sinh của bạn" type="text" value="" />
        <span class="field-validation-valid text-danger" data-valmsg-for="full_name" data-valmsg-replace="true"></span>
    </div>
    <div class="form-group">
        <label for="email" style="color:#F15B67;">Email</label>
        <input class="form-control text-box single-line" data-val="true" data-val-length="The field email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Email không được để trống!" id="email" name="email" placeholder="Nhập địa chỉ mail" type="email" value="" />
        <span class="field-validation-valid text-danger" data-valmsg-for="email" data-valmsg-replace="true"></span>
    </div>

    <div class="form-group">
        <label for="username" style="color:#F15B67;">Tên đăng nhập</label>
        <input class="form-control text-box single-line" data-val="true" data-val-length="The field full_name must be a string with a maximum length of 50." data-val-length-max="50" data-val-required="user name không được để trống!" id="full_name" name="username" placeholder="Nhập tên tài khoản của bạn" type="text" value="" />
        <span class="field-validation-valid text-danger" data-valmsg-for="full_name" data-valmsg-replace="true"></span>
    </div>

    <div class="form-group">
        <label for="password" style="color:#F15B67;">Mật khẩu</label>
        <input class="form-control text-box single-line password" data-val="true" data-val-length="The field password must be a string with a maximum length of 200." data-val-length-max="200" data-val-minlength="Mật khẩu tối thiểu 6 ký tự." data-val-minlength-min="6" data-val-required="Mật khẩu không được để trống!" id="password" name="password" placeholder="Nhập mật khẩu" type="password" />
        <span class="field-validation-valid text-danger" data-valmsg-for="password" data-valmsg-replace="true"></span>
    </div>
    <div class="form-group">
        <label for=password" style="color:#F15B67;">Nhập lại mật khẩu</label>
        <input class="form-control text-box single-line password" data-val="true" data-val-equalto="Mật khẩu không khớp." data-val-equalto-other="*.password" data-val-minlength="Mật khẩu tối thiểu 6 ký tự." data-val-minlength-min="6" data-val-required="Mật khẩu nhập lại không được để trống!" id="confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu" type="password" />
        <span class="field-validation-valid text-danger" data-valmsg-for="confirm_password" data-valmsg-replace="true"></span>
    </div>

    <div class="form-button">
        <input type="submit" style="color:#F15B67;" name="register_submit" value="Đăng ký">
    </div>

</form>
