

<?php include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
Quản lý Thẻ
<?php endblock() ?>


<?php startblock('content') ?>

    <div class="page-wrapper">

        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Quản lý thẻ</h3>
                    </div>

                </div>
            </div>
            <!-- /Page Header -->


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0 datatable">
                                    <thead class="text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Mã thẻ</th>
                                        <th>Tên thẻ</th>
                                        <th>Ngày tạo</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    <tr>
                                        <td>1</td>
                                        <td>6</td>
                                        <td>Nổi bật</td>
                                        <td>25/12/2021</td>
                                        <td>
                                            Đang hoạt động
                                        </td>
                                        <td>
                                            <a onclick="updateStatus(6)" class="btn btn-sm bg-success-light mr-2" href="/bill_update">
                                                <i class="far fa-edit mr-1"></i>Cập nhật
                                            </a>
                                            <a class="btn btn-sm bg-success-light mr-2"
                                               href="/bill_detail">

                                                <i class="far fa-eye mr-1"></i>Chi tiết
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