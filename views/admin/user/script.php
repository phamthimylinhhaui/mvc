<script>
    function showFormCreateUser(){

       // call ajax
        $.ajax({
            url:"<?php echo Route::name('admin.users.show-form-create')?>",
            type:"POST",
            data:{
            },
            success: function (data){
                if (data.message==undefined){
                    $('#create-user').find('.create-user').html(data);
                }
            },
            error: function (){

            },
        });
    }

    function showFormEdit(userId){
        //call ajax
        $.ajax({
            url:"<?php echo Route::name('admin.users.show-form-edit')?>",
            type:"POST",
            data:{
                user_id:userId,
            },
            success: function (data){
                if (data.message==undefined){
                    $('#edit-user').find('.modal-content').html(data);
                }
            },
            error: function (){

            },
        });
    }

    function deleteUser(userId){
        var runFunction = function(){
            //alert("đã thực hiện",'success');
            $.ajax({
                url: "<?php echo Route::name('admin.users.delete');?>",
                type: "POST",
                data: {
                    user_id: userId
                },
                dataType:'JSON',
                success: function (data) {
                    if(data.code == 200){
                        alert("xóa người dùng thành công", "success");
                       $('#user-row-'+userId).remove();
                    }else{
                        alert(data.message, "warning");
                    }
                },
                error: function (e) {
                    alert("Vui lòng thực hiện lại", "error");
                }
            });
        };
        confirm("Bạn muốn xóa người dùng này ? ",runFunction);
    }
</script>
