<?php
//echo "đây là trang quản lý người dùng";
include 'views/admin/layouts/master.php' ?>

<?php startblock('title') ?>
   Quản lý người dùng
<?php endblock() ?>


<?php startblock('css') ?>

<?php endblock() ?>


<?php startblock('content') ?>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        STT
                    </th>
                    <th>
                        Ảnh đại diện
                    </th>
                    <th>
                        Tên người dùng
                    </th>
                    <th>
                        Tên tài khoản
                    </th>
                    <th>
                        Ngày sinh
                    </th>
                    <th>
                        Liên hệ
                    </th>
                    <th>
                        Tùy chọn
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php ?>
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

                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
<?php endblock() ?>
<?php endblock() ?>


<?php startblock('script') ?>

<?php endblock() ?>
