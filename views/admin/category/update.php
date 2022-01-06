<?php include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
Sửa danh mục
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
                                <h3 class="page-title">Chỉnh sửa danh mục</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="card">
                        <div class="card-body">
                            <!-- Form -->
                            <form method="post" action="/category_admin">
                                <input name="__RequestVerificationToken" type="hidden" value="1az7HhThGpJ3r90anwj-gOFiiydyyN9MCdHm2TALFJ4I5e_v3BPvecs4pv1jXllnJ-ebVxx1tgU2-kbMtvBadN-5-AvTqG0Xr0hXv1weJAU1" />
                                <div class="form-group">
                                    <label>Mã danh mục</label>
                                    <input class="form-control text-box single-line" data-val="true" data-val-number="The field category_id must be a number." data-val-required="The category_id field is required." id="category_id" name="category_id" readonly="readonly" type="number" value="1" />
                                    <label>Tên danh mục</label>
                                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field category_name must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Tên danh mục không được để trống" id="category_name" name="category_name" type="text" value="Giày cao gót" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="category_name" data-valmsg-replace="true"></span>
                                </div>
                                <div class="mt-4">
        <!--                            <input type="submit" name="sub" value="cập nhật">-->
        <!--                            <button class="btn btn-primary" type="submit">-->
        <!--                               Cập nhật-->
        <!--                            </button>-->
                                    <a href="/category_admin" class="btn btn-link">cập nhật</a>
                                    <a href="/category_admin" class="btn btn-link">Huỷ</a>
                                </div>
                            </form>
                            <!-- /Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php endblock() ?>