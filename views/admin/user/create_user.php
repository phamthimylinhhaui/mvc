<style type="text/css">
    #form-create-user{
        width: 100%;
        color: black;
        font-size: 14px;
    }
    .avatar2 {
        object-fit: cover;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        display: block;
        margin: auto;
    }
</style>

<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Thêm mới</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form action=""  method="POST"  id="form-create-user" enctype="multipart/form-data" >

        <div class="row form-group" align="center">
            <img src="http://mvc.test/public/avatar/no-avatar.png" class="avatar2"/>
            <input type="file" name="avatar"  class="input-avatar2" style="display:none;" />

        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Tên tài khoản:</span>
                </div>
                <input type="text" class="form-control username" name="username" >
            </div>
            <span class="help-block username-validate" />
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Mật khẩu:</span>
                </div>
                <input type="password" class="form-control password" name="password" >
            </div>
            <span class="help-block password-validate" />
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nhập lại mật khẩu:</span>
                </div>
                <input type="password" class="form-control re_password" name="re_password" >
            </div>
            <span class="help-block re-password-validate" />
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                </div>
                <input type="text" class="form-control email" name="email">

            </div>
            <span class="help-block email-validate" />
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Họ và tên</span>
                </div>
                <input type="text" class="form-control fullname" name="fullname">

            </div>
            <span class="help-block fullname-validate" />
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Ngày sinh</span>
                </div>
                <input type="text" class="form-control date-of-birth2" name="date_of_birth" >
            </div>
            <span class="help-block date-of-birth-validate" />
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="createUser(this.parentElement.parentElement)">Thêm mới</button>
        </div>
    </form>
</div>

<?php include "views/admin/user/script.php"?>
<!--<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
<script type="text/javascript">


    function initCreateUserForm(){
        var form = $('#form-create-user');
        initDatepicker(form.find('.date-of-birth2').first());
        var imageAvatar = form.find('.avatar2').first();
        var imageInput  = form.find('.input-avatar2').first();
        initImageFile(imageAvatar, imageInput);
    }

    //validate create
    function validateRegisterForm(){

        // var datepicker = $('#register-form').find('.date-of-birth').first();
        // initDatepicker(datepicker);

        $('#form-create-user').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    container: '.username-validate',
                    validators: {
                        notEmpty: {
                            message: 'Cần phải nhập tên tài khoản'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'Tên tài khoản phải từ 6-30 ký tự'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'Tên tài khoản không được chứa ký tự đặc biệt'
                        },
                        different: {
                            field: 'password',
                            message: 'Tên tài khoản không được giống mật khẩu'
                        },
                        remote: {
                            message: "Tên tài khoản đã được sử dụng",
                            url: "<?php echo Route::name('auth.check-duplicate-username')?>",
                            data: {
                                username: 'username'
                            },
                            dataType: 'JSON',
                            type: 'POST',
                            delay: 2000     // Send Ajax request every 2 seconds
                        }
                    }
                },
                email: {
                    container: '.email-validate',
                    validators: {
                        emailAddress: {
                            message: 'Email phải đúng định dạng'
                        }
                    }
                },
                password: {
                    container: '.password-validate',
                    validators: {
                        notEmpty: {
                            message: 'Mật khẩu không được để trống'
                        },
                        identical: {
                            field: 'password',
                            message: "Bạn phải nhập lại mật khẩu chính xác",
                        }
                    }
                },

                re_password: {
                    container: '.re-password-validate',
                    validators: {
                        notEmpty: {
                            message: 'Bạn phải nhập lại mật khẩu'
                        },
                        identical: {
                            field: 'password',
                            message: "Bạn phải nhập lại mật khẩu chính xác",
                        }
                    }
                },

                full_name: {
                    container: '.fullname-validate',
                    validators: {
                        notEmpty: {
                            message: 'Cần phải nhập họ tên'
                        }
                    }
                },

                date_of_birth: {
                    container: '.date-of-birth-validate',
                    validators: {
                        notEmpty: {
                            message: 'Cần phải nhập ngày sinh'
                        }
                    }
                },

            }
        });
    }

    function createUser(form){
        var form = $(form);
        var data={
            'username':form.find('.username').first().val(),
            'password':form.find('.password').first().val(),
            'email':form.find('.email').first().val(),
            'fullname':form.find('.fullname').first().val(),
            'date_of_birth':form.find('.date-of-birth2').first().val(),
            'avatar':form.find('.avatar2').first().attr('src')
        };

        //gửi ajax
        $.ajax({
            url:"<?php echo Route::name('admin.users.create-user');?>",
            type: "POST",
            data: data,
            success: function (data){
                alert("Thêm mới người dùng thành công",'success');
                setTimeout(function (){
                    location.reload();
                },3000);
            },
            error: function (){
                //console.log(data);
            }
        });
    }



    $(document).ready(function(){
        setTimeout(function(){
            initCreateUserForm();
            validateRegisterForm();

        },2000);
    });

</script>

