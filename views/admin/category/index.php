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
                    <div class="col-auto">
                        <a href="/category_create"
                           class="btn btn-primary ml-3">
                            <i class="fas fa-plus"></i> Thêm danh mục
                        </a>
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user"
                                    onclick="">
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
    $(document).ready(function(){
        // alert("Thành công",'success');

        initDatatable($('#list-categories'),true);
    });
</script>
<?php endblock() ?>