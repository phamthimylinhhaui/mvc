<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin người dùng</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form action="" method="POST"  id="edit-category" enctype="multipart/form-data" >
        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Tên tài khoản: </span>
                </div>
            </div>
        </div>



        <div class="row modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-info btn-success" type="button" onclick="updateUser(this.parentElement.parentElement,<?php echo $user->id;?>);">
                Cập nhật
            </button>
        </div>

</form>

</div>