<?php include 'views/client/layouts/master.php'; ?>

<?php startblock('title');?>
    Sửa thông tin cá nhân
<?php endblock(); ?>

<?php startblock('css'); ?>
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
    .avatar {
        object-fit: cover;
        width: 150px;
        height: 120px;
        border-radius: 50%;
        display: block;
        margin: auto;
    }
    .avatar:hover{
        cursor: pointer;
    }
</style>
<?php endblock();?>

<?php  startblock('content');?>
        <div class="col-3"></div>
        <div class="col-6">
            <form action="<?php echo Route::name('update-profile');?>" method="POST"  id="edit-user-form" enctype="multipart/form-data" >

                <div class="row form-group" align="center">
                    <img src="<?php echo $user->getAvatar()?>" class="avatar"/>
                    <input type="file" name="avatar"  class="input-avatar" style="display:none;" />
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
                        <input type="text" class="form-control date-of-birth" name="date_of_birth" value="<?php echo dateFormat($user->date_of_birth);?>">

                    </div>
                    <span class="help-block date-of-birth-validate" />
                </div>


                <div class="row form-group">
                    <div class="col-6">
                        <button class="btn btn-info btn-block" type="submit">
                            Cập nhật thông tin
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-info btn-block" type="button" onclick="updateUser(this.parentElement.parentElement.parentElement);">
                            Cập nhật qua AJAX
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
<?php endblock(); ?>

<?php startblock('script'); ?>
    <script type="text/javascript">
        function initEditUserForm(){
            var form = $('#edit-user-form');
            initDatepicker(form.find('.date-of-birth').first());
            var imageAvatar = form.find('.avatar').first();
            var imageInput  = form.find('.input-avatar').first();
            initImageFile(imageAvatar, imageInput);
        }

        function updateUser(form){
            var form = $(form);

            var data={
                'email':form.find('.email').first().val(),
                'fullname':form.find('.fullname').first().val(),
                'date_of_birth':form.find('.date-of-birth').first().val(),
                'avatar':form.find('.avatar').first().attr('src')
            };
            console.log(data);
            //gửi ajax
            $.ajax({
                url:"<?php echo Route::name('update-profile');?>",
                type: "POST",
                data: data,
                success: function (data){

                },
                error: function (){
                    console.log(data);
                }
            });
        }


        $(document).ready(function(){

            initEditUserForm();

        });


    </script>
<?php endblock();?>




