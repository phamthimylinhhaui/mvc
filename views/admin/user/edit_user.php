<style>
    /*    edit profile*/
    #edit-user-form{
        margin: 50px auto;
        width: 70%;
    }
    .btn-success{
        background-color: #F15B67!important;
    }
    #edit-user-form .input-group-text{
        font-size: 1.25rem !important;
    }
    .input-group-text{
        background: #F15B67;
    }
    .avatar1 {
        object-fit: cover;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        display: block;
        margin: auto;
    }
    .avatar:hover{
        cursor: pointer;
    }
</style>

<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin người dùng</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form action="" method="POST"  id="edit-user-form" enctype="multipart/form-data" >

        <div class="row form-group" align="center">
            <img src="<?php echo $user->getAvatar()?>" class="avatar1"/>
            <input type="file" name="avatar1"  class="input-avatar1" style="display: none;" />
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Tên tài khoản: <?php echo $user->username;?></span>
                </div>
            </div>
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                </div>
                <input type="text" class="form-control email" name="email" value="<?php echo $user->email;?>">

            </div>
            <span class="help-block email-validate" />
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Họ và tên</span>
                </div>
                <input type="text" class="form-control fullname" name="fullname" value="<?php echo $user->getFullName();?>">

            </div>
            <span class="help-block fullname-validate" />
        </div>

        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Ngày sinh</span>
                </div>
                <input type="text" class="form-control date-of-birth1" name="date_of_birth1" value="<?php echo dateFormat($user->date_of_birth);?>">

            </div>
            <span class="help-block date-of-birth-validate" />
        </div>

        <div class="row modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-info btn-success" type="button" onclick="updateUser(this.parentElement.parentElement,<?php echo $user->id;?>);">
                Cập nhật
            </button>
        </div>

    </form>

</div>

<script type="text/javascript">

    function initEditUserForm(){
        var form = $('#edit-user-form');
        initDatepicker(form.find('.date-of-birth1').first());
        var imageAvatar = form.find('.avatar1').first();
        var imageInput  = form.find('.input-avatar1').first();
        initImageFile(imageAvatar, imageInput);
    }
    function updateUser(form,userId){
        var form = $(form);
        var data={
            'id':userId,
            'email':form.find('.email').first().val(),
            'fullname':form.find('.fullname').first().val(),
            'date_of_birth':form.find('.date-of-birth1').first().val(),
            'avatar':form.find('.avatar1').first().attr('src')
        };
        //console.log("hello",data);
        //gửi ajax
        $.ajax({
            url:"<?php echo Route::name('admin.user.edit-user');?>",
            type: "POST",
            data: data,
            success: function (data){
            },
            error: function (){
                //console.log(data);
            }
        });
    }
    //hàm kích hoạt
    initEditUserForm();
</script>