<?php include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
Quản lý danh mục
<?php endblock() ?>


<?php startblock('content') ?>
    <div class="page-wrapper">

        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Quản lý danh mục</h3>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary create-category" data-toggle="modal" data-target="#create-category" onclick="showFormCreateCategory();">
                        Thêm mới
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="create-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content create-category">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Start alert -->
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div style="display: none" id="delete" class="alert alert-danger text-center" role="alert"></div>
                </div>
                <div class="col-4"></div>

            </div>
            <!-- End alert -->



            <table class="table users-table table-hover" id="list-categories">
                <thead>
                <tr>
                    <th>
                        STT
                    </th>
                    <th>
                        Tên chuyên mục
                    </th>

                    <th>
                        Ngày tạo
                    </th>
                    <th>
                        Ngày cập nhật
                    </th>
                    <th>
                        Tùy chọn
                    </th>
                </tr>
                </thead>

                <tbody>
                <?php foreach($categories as $category){

                    ?>

                    <tr id="user-row-<?php echo $category->id; ?>">

                        <td>
                            <?php echo $category->id;?>
                        </td>

                        <td>
                            <?php echo $category->name;?>
                        </td>


                        <td>
                            <?php echo $category->created_at;?>
                        </td>
                        <td>
                            <?php echo $category->updated_at;?>
                        </td>

                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-category"
                                    onclick="showFormEdit(<?php echo $category->id; ?>)">
                                Sửa
                            </button>

                            <button type="button" class="btn btn-danger" onclick="">
                                Xóa
                            </button>

                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>


        </div>

    </div>
<?php endblock() ?>

<?php startblock('script') ?>


<script>
    function showFormCreateCategory(){

        // call ajax
        $.ajax({
            url:"<?php echo Route::name('admin.category.show-form-create')?>",
            type:"POST",
            data:{
            },
            success: function (data){
                if (data.message==undefined){
                    $('#create-category').find('.create-category').html(data);
                }
            },
            error: function (){

            },
        });
    }
    
    
    function showFormEdit(categoryId){
        //call ajax
        $.ajax({
            url:"<?php echo Route::name('admin.category.show-form-edit')?>",
            type:"POST",
            data:{
                category_id:categoryId,
            },
            success: function (data){
                if (data.message==undefined){
                    $('#edit-category').find('.modal-content').html(data);
                }
            },
            error: function (){

            },
        });
    }
    
    
    
    $(document).ready(function(){
        // alert("Thành công",'success');

        initDatatable($('#list-categories'),true);
    });
</script>
<?php endblock() ?>