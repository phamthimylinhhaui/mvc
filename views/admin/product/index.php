<?php include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
Quản lý sản phẩm
<?php endblock() ?>


<?php startblock('content') ?>
<div class="page-wrapper">

    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Quản lý sản phẩm</h3>
                </div>
                <div class="col-auto text-right">
                    <a class="btn btn-white ml-3"
                       href="javascript:void(0);"
                       id="filter_search">
                        <i class="fas fa-search"></i> Tìm kiếm
                    </a>
                    <a href="/product_create"
                       class="btn btn-primary ml-3">
                        <i class="fas fa-plus"></i> Thêm sản phẩm
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
        <!-- Search Filter -->
        <div class="card filter-card" id="filter_inputs">
            <div class="card-body pb-0">
                <form action="#" method="post">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" type="text" name="SearchString" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">
                                    Lọc
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Search Filter -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0 datatable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Giá</th>
                                    <th>Số lượng còn</th>
                                    <th class="text-center">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>40</td>
                                    <td>


                                        <img class="rounded service-img mr-1"
                                             src="assets/giaydemo.jpg"
                                             alt="" />
                                        Sản phẩm số 1
                                    </td>
                                    <td>Danh mục 1</td>
                                    <td>378,000 vnđ</td>
                                    <td>10</td>
                                    <td class="text-right">
                                        <a href="<?php echo Route::name('product.detail')?>"
                                           class="btn btn-sm bg-success-light mr-2">
                                            <i class="far fa-eye mr-1"></i>Chi tiết
                                        </a>
                                        <a href="/product_update"
                                           class="btn btn-sm bg-success-light mr-2">
                                            <i class="far fa-edit mr-1"></i>Sửa
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
                                           data-target="#model-40">
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