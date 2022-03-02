<?php require_once 'libs/phpti/ti.php' ?>
<!DOCTYPE html>
<html lang="en"> <meta charset="UTF-8">
<head>
<title>
    <?php startblock('title') ?>
    <?php endblock() ?>
</title>
<?php require_once 'views/admin/layouts/css.php' ?>
<?php startblock('css') ?>
<?php endblock() ?>
</head>
<body>
<div class="main-wrapper">
    <?php include 'views/admin/layouts/menu.php' ?>


        <?php startblock('content') ?>
        <?php endblock() ?>

</div>

<?php include 'views/admin/layouts/script.php' ?>
<?php startblock('script') ?>
<?php endblock() ?>
</body>
</html>