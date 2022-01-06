

<?php include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
Quản lý hóa đơn
<?php endblock() ?>


<?php startblock('content') ?>

    <div class="page-wrapper">

        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Quản lý hoá đơn</h3>
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
                                        <th>Mã đơn hàng</th>
                                        <th>Người mua</th>
                                        <th>Số tiền</th>
                                        <th>Ngày tạo</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    <tr>
                                        <td>1</td>
                                        <td>6</td>
                                        <td>Khách hàng 1</td>
                                        <td>320,000 vnđ</td>
                                        <td>10/4/2021 12:15:51 AM</td>
                                        <td>
                                            <select id="6-status" class="form-control select select2-hidden-accessible" aria-label="Default select example">
                                                <option value="Đang giao">Đang giao</option>
                                                <option value="Đang giao" selected>Đã nhận hàng</option>
                                                <option value="Đã huỷ">Đã huỷ</option>
                                            </select>
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