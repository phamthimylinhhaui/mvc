<?php
//echo "đây là trang quản lý người dùng";
include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
   Quản lý người dùng
<?php endblock() ?>


<?php startblock('css') ?>
    <?php include "views/admin/user/css.php"?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
<?php endblock() ?>


<?php startblock('content') ?>
    <div class="container">
        <table class="table users-table table-hover" id="list-users">
            <thead>
                <tr>
                    <th>
                        STT
                    </th>
                    <th>
                        Ảnh đại diện
                    </th>
                    <th>
                        <input type="text" class="form-control" placeholder="Tên người dùng">
                    </th>
                    <th>
                        <input type="text" class="form-control" placeholder="Tên tài khoản">
                    </th>
                    <th>
                        <input type="text" class="form-control" placeholder="Ngày sinh">
                    </th>
                    <th>
                        <input type="text" class="form-control" placeholder="Liên hệ">
                    </th>
                    <th>
                        Tùy chọn
                    </th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($users as $user){

                ?>

                <tr>
                    <td>

                    </td>
                    <td>
                        <img src="<?php echo $user->getAvatar();?>" class="avatar">
                    </td>
                    <td>
                        <?php echo $user->getFullName();?>
                    </td>
                    <td>
                        <?php echo $user->username;?>
                    </td>
                    <td>
                        <?php echo $user->getDateOfBirth();?>
                    </td>
                    <td>
                        <p>
                            <i class="fa fa-email"></i> <?php echo $user->email;?>
                        </p>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-user"
                        onclick="showFormEdit(<?php echo $user->id; ?>)">
                            Sửa
                        </button>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                </div>
            </div>
        </div>
    </div>
<?php endblock() ?>


<?php startblock('script') ?>
<?php include "views/admin/user/script.php"?>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
<script>
    $(document).ready(function(){
        initDatatable($('#list-users'),true);
    });
</script>
<?php endblock() ?>
