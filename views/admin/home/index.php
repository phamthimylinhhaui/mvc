

<?php include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
Trang chủ Admin
<?php endblock() ?>


<?php startblock('content') ?>
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-12">
                        <h3 class="page-title">Xin chào ADMIN</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-xl-4 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                        <span class="dash-widget-icon bg-primary">
                            <i class="far fa-user"></i>
                        </span>
                                <div class="dash-widget-info">
                                    <h3>2</h3>
                                    <h6 class="text-muted">Người dùng</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                        <span class="dash-widget-icon bg-primary">
                            <i class="fas fa-user-shield"></i>
                        </span>
                                <div class="dash-widget-info">
                                    <h3>40</h3>
                                    <h6 class="text-muted">Sản phẩm</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                        <span class="dash-widget-icon bg-primary">
                            <i class="far fa-credit-card"></i>
                        </span>
                                <div class="dash-widget-info">
                                    <h3>2.606.900 vnđ</h3>
                                    <h6 class="text-muted">Doanh thu</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endblock() ?>


