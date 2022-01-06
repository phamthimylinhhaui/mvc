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
                    <div style="display: none" id="deletee" class="alert alert-danger text-center" role="alert"></div>
                </div>
                <div class="col-4"></div>

            </div>
            <!-- End alert -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0 datatable">
                                    <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Tên danh mục</th>
                                        <th>Ngày chỉnh sửa</th>
                                        <th class="text-right">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>5</td>
                                        <td>Sản phẩm 1</td>
                                        <td>10/19/2021 10:35:42 PM</td>
                                        <td class="text-right">
                                            <a href="/category_update"
                                               class="btn btn-sm bg-success-light mr-2">
                                                <i class="far fa-edit mr-1"></i> Sửa
                                            </a>
                                            <a data-id="40"
                                               href="javascript:void(0);"
                                               class="
                                                btn btn-sm
                                                bg-danger-light
                                                mr-2
                                                delete_review_comment
                                                "
                                               data-toggle="modal"
                                               data-target="#model-5">
                                                <i class="far fa-trash-alt mr-1"></i> Xoá
                                            </a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php endblock() ?>
