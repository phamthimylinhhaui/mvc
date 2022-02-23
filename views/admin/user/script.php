<script>
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
</script>
