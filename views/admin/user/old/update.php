<?php include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
Sửa tài khoản
<?php endblock() ?>


<?php startblock('content') ?>
    <div class="page-wrapper">

        <div class="content container-fluid">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="page-title">Sửa tài khoản</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="card">
                        <div class="card-body">
                            <!-- Form -->
                            <form method="post" action="?controller_ad=manageraccount">
                                <input name="__RequestVerificationToken" type="hidden" value="qRAX9anaa7mQGv2fE5LdAM9hU9YTAqU0eh37gQEp4lnTVdcg4PIcJY-NOvOzPXnkT_cvQomtzEfSc9gEBEUPJbxV8DY-1YWrGkeh0xR_3lo1" />
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Email không được để trống!" id="email" name="email" type="email" value="" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="email" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input class="form-control text-box single-line" data-val="true" data-val-length="Số điện thoại không đúng định dạng" data-val-length-max="11" data-val-maxlength="Số điện thoại không đúng định dạng" data-val-maxlength-max="11" data-val-required="Số điện thoại không được để trống!" id="phone_number" name="phone_number" type="text" value="" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="phone_number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input class="form-control text-box single-line password" data-val="true" data-val-length="The field password must be a string with a maximum length of 200." data-val-length-max="200" data-val-minlength="Mật khẩu tối thiểu 6 ký tự." data-val-minlength-min="6" data-val-required="Mật khẩu không được để trống!" id="password" name="password" type="password" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="password" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label>Xác nhận mật khẩu</label>
                                    <input class="form-control text-box single-line password" data-val="true" data-val-equalto="Mật khẩu không khớp." data-val-equalto-other="*.password" data-val-minlength="Mật khẩu tối thiểu 6 ký tự." data-val-minlength-min="6" data-val-required="Mật khẩu nhập lại không được để trống!" id="confirm_password" name="confirm_password" type="password" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="confirm_password" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field full_name must be a string with a maximum length of 50." data-val-length-max="50" data-val-required="Tên không được để trống!" id="full_name" name="full_name" type="text" value="" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="full_name" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field address must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Địa chỉ không được để trống!" id="address" name="address" type="text" value="" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="address" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label>Quyền</label>
                                    <select class="form-control select" name="role">
                                        <option>Quản trị</option>
                                        <option>Người dùng</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <div class="status-toggle">
                                        <input id="rating_1" name="is_active" class="check" type="checkbox" checked="">
                                        <label for="rating_1" class="checktoggle"></label>
                                    </div>
                                </div>
                                <div class="mt-4">
<!--                                    <button class="btn btn-primary" type="submit">-->
<!--                                        Cập nhật-->
<!--                                    </button>-->
                                    <a href="/user_admin" class="btn btn-link">Cập nhật</a>
                                    <a href="/user_admin" class="btn btn-link">Huỷ</a>
                                </div>
                            </form>
                            <!-- Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php endblock() ?>
