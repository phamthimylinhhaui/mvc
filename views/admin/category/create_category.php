<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Thêm mới</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form action=""  method="POST"  id="form-create-user" enctype="multipart/form-data" >
        <div class="row form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Tên chuyên mục:</span>
                </div>
                <input type="text" class="form-control category_name" name="category_name" >
            </div>
            <span class="help-block category_name-validate" />
        </div>


        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="createUser(this.parentElement.parentElement)">Thêm mới</button>
        </div>
    </form>
</div>
