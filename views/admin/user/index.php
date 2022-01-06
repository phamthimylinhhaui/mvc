<?php include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
Quản lý tài khoản
<?php endblock() ?>


<?php startblock('content') ?>
        <div class="page-wrapper">

            <div class="content container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Quản lý tài khoản</h3>
                        </div>
                        <div class="col-auto text-right">
                            <a href="/user_create"
                               class="btn btn-primary ml-3">
                                <i class="fas fa-plus"></i> Thêm tài khoản
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
                                            <th>#</th>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>SĐT</th>

                                            <th>Địa chỉ</th>
                                            <th>Trạng thái</th>
                                            <th>Quyền</th>

                                            <th class="text-right">Hành động</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Họ Và Tên</td>
                                            <td><a href="mailto:nhom2user@gmail.com">Email.com.vn</a></td>
                                            <td>0866136920</td>

                                            <td>Địa chỉ</td>
                                            <td><label>Đã kích hoạt</label></td>
                                            <td><label>Người dùng</label></td>

                                            <td class="text-right">
                                                <a href="/user_update"
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
                                                   data-target="#model-2">
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
