<?php include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
Sửa sản phẩm
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
                                <h3 class="page-title">Sửa sản phẩm</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="card">
                        <div class="card-body">
                            <!-- Form -->
                            <form method="post" action="?controller_ad=managerproduct" enctype="multipart/form-data">
                                <input name="__RequestVerificationToken" type="hidden" value="hMxDMgDwoxYnFQWHJxqJsfx60u3aLyQOf4q6hAJ1pGgGRY4E9xKMqbL1yHuSHle1LgZtmYxhkm-APonWibQ5QSgFZP0OmsIP7iDJ_aPL2oo1" />
                                <div class="form-group">
                                    <label>Mã sản phẩm</label>
                                    <input class="form-control text-box single-line" data-val="true" data-val-number="The field product_id must be a number." data-val-required="The product_id field is required." id="product_id" name="product_id" readonly="readonly" type="number" value="1" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="product_id" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field product_name must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Tên sản phẩm không được để trống" id="product_name" name="product_name" type="text" value="giày vans" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="product_name" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Ảnh</label>
                                    <img id="output" class="img-rounded" width="200" height="200" src="assets/giaydemo.jpg" alt="Ảnh" />
                                    <p class="text-center"><label for="ufile" style="cursor:pointer;">Chọn file ảnh</label></p>
                                    <input name="product_image" id="ufile" type="file" style="display:none;" onchange="loadFile(event)" />
                                    <input data-val="true" data-val-length="The field product_image must be a string with a maximum length of 50." data-val-length-max="50" id="product_image" name="product_image" type="hidden" value="4850402bi-do-giong-nhat.jpg" />
                                </div>
                                <div class="form-group">
                                    <label>Giá bán</label>
                                    <input class="form-control text-box single-line" data-val="true" data-val-number="The field product_price must be a number." data-val-required="Giá không được để trống" id="product_price" name="product_price" type="text" value="37000.00" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="product_price" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label>Kiểu gót và độ cao gót:</label>
                                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field product_source must be a string with a maximum length of 100." data-val-length-max="100" id="product_source" name="product_source" type="text" value="đế vuông, 2cm" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="product_source" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label>Loại mũi và chất liệu:</label>
                                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field product_weight must be a string with a maximum length of 100." data-val-length-max="100" id="product_weight" name="product_weight" type="text" value="da" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="product_weight" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label>Số lượng trong kho</label>
                                    <input class="form-control text-box single-line" data-val="true" data-val-number="The field product_amount must be a number." data-val-required="Số lượng sản phẩm không được để trống" id="product_amount" name="product_amount" type="number" value="100" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="product_amount" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select class="form-control" id="category_id" name="category_id"><option value="1">Giày sandals</option>
                                        <option selected="selected" value="2">giày lười</option>
                                        <option value="3">Giày cao gót</option>
                                        <option value="4">Giày boot</option>
                                        <option value="5">Giày bata</option>
                                    </select>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="category_id" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="">Phù hợp sử dụng:</label>

                                    <input class="form-control text-box single-line" data-val="true" data-val-required="Mô tả không được để trống" id="product_description" name="product_description" type="text" value="Phù hợp đi làm đi chơi"/>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="product_description" data-valmsg-replace="true"></span>
                                </div>

                                <div class="mt-4">
<!--                                    <button class="btn btn-primary" type="submit">-->
<!--                                        Cập nhật-->
<!--                                    </button>-->
                                    <a href="/product_admin" class="btn btn-link">Cập nhật</a>
                                    <a href="/product_admin" class="btn btn-link">Huỷ</a>
                                </div>
                            </form>
                            <!-- /Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        var loadFile = function (event) {
            var image = document.getElementById("output");
            image.src = URL.createObjectURL(event.target.files[0])
        }
    </script>
<?php endblock() ?>