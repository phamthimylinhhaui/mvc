<?php require_once 'libs/phpti/ti.php' ?>
<!DOCTYPE html>
<html lang="en"> <meta charset="UTF-8">
    <title>
        <?php startblock('title') ?>
        <?php endblock() ?>
    </title>
    <?php require_once 'views/client/layouts/css.php' ?>
    <?php startblock('css') ?>
    <?php endblock() ?>

    <body>

    <?php include 'views/client/layouts/header.php' ?>

    <div class="row" >
        <?php startblock('content') ?>
        <?php endblock() ?>
    </div>

    <?php include 'views/client/layouts/footer.php' ?>
    <?php include 'views/client/layouts/script.php' ?>
    <?php startblock('script') ?>
    <?php endblock() ?>
    </body>
</html>