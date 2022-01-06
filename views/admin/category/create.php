<?php include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
Thêm mới danh mục
<?php endblock() ?>


<?php startblock('content') ?>



<div class="page-wrapper">

    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Thêm danh mục</h3>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="card">
                    <div class="card-body">
                        <!-- Form -->
                        <form method="post" action="/category_admin">
                            <input name="__RequestVerificationToken" type="hidden" value="feqvghcQSB-dZD1J-_XeHle2jPYlMNQmU0PJC7ukbbD1gismtgO-1Gi0Qb33ObqSAf23UzYtppX7Ei_tdviw0GDx25t0scv1J9mmQYd_tjg1" />
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field category_name must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Tên danh mục không được để trống" id="category_name" name="category_name" type="text" value="" />
                                <span class="field-validation-valid text-danger" data-valmsg-for="category_name" data-valmsg-replace="true"></span>
                            </div>
                            <div class="mt-4">
<!--                                <button class="btn btn-primary" type="submit">-->
<!--                                    Thêm-->
<!--                                </button>-->
                                <a href="/category_admin" class="btn btn-link">Thêm</a>
                                <a href="/category_admin" class="btn btn-link">Huỷ</a>
                            </div>
                        </form>
                        <!-- Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endblock() ?>