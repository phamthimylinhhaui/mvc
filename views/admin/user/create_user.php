<style type="text/css">
    #form-create-user{
        width: 100%;
        color: black;
        font-size: 14px;

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
            <img src="<?php echo $user->getAvatar()?>" class="avatar2"/>
            <input type="file" name="avatar"  class="input-avatar2" style="display:none;" />

        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Tên tài khoản:</span>
                </div>
                <input type="text" class="form-control username" name="username" >
            </div>
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Mật khẩu:</span>
                </div>
                <input type="password" class="form-control password" name="password" >
            </div>
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nhập lại mật khẩu:</span>
                </div>
                <input type="password" class="form-control re_password" name="re_password" >
            </div>
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
<script type="text/javascript">
    function initCreateUserForm(){
        var form = $('#form-create-user');
        initDatepicker(form.find('.date-of-birth2').first());
        var imageAvatar = form.find('.avatar2').first();
        var imageInput  = form.find('.input-avatar2').first();
        initImageFile(imageAvatar, imageInput);
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
                //console.log(data);
            },
            error: function (){
                //console.log(data);
            }
        });
    }


    $(document).ready(function(){

        initCreateUserForm();

    });

</script>

