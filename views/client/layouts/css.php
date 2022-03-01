
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Vascara - Website bán giày</title>
<!--datepicker-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css"/>

<link rel="stylesheet" type="text/css" href="assets/client_source/assets/css/jquery.datetimepicker.min.css"/>
<!--    <script src="assets/client/js/vendor/modernizr-2.8.3.min.js"></script>-->

<!--sweetAlert2-->
<link   rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.min.css">

<meta name="robots" content="noindex, follow" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="wwwroot/assets/images/favicon.ico" />

<!-- CSS============================================ -->
<link rel="stylesheet" href="assets/client_source/assets/css/vendor/vendor.min.css">
<link rel="stylesheet" href="assets/client_source/assets/css/plugins/plugins.min.css">
<link rel="stylesheet" href="assets/client_source/assets/css/style.min.css">
<link rel="stylesheet" href="assets/client_source/js/custom/user.css">
<link rel="stylesheet" href="assets/client_source/js/custom/mainnnn.css">
<link rel="stylesheet" href="assets/client_source/js/custom/invoice.css">
<!--        <link rel="stylesheet" href="assets/client_source/js/custom/checkout.css">-->
<!--cart_index-->
<link rel="stylesheet" href="assets/client_source/assets/fonts/icofont/icofont.min.css">

<!--font_someone-->
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<!--SHOW-REGISTER(POPUP)-->
<style>
    #show-login{
        padding: 10px 20px;
        font-size: 15px;
        font-weight: 600;
        color: #222;
        background: #f5f5f5;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }
    #register-form{
        line-height: 1.15;
        position: absolute;
        top: -150%;
        left: 50%;
        opacity: 0;
        transform: translate(-50%,-50%) scale(1.25);
        width: 380px;
        padding: 10px 20px;
        background-color: #fff;
        box-shadow: 2px 2px 5px 5px rgba(0, 0, 0,0,15);
        border-radius: 10px;
        transition: top 0ms ease-in-out 200ms,
        opacity 200ms ease-in-out 0ms,
        transform 200ms ease-in-out 0ms;
    }
    #register-form.active{
        width: 30%;
        top: 100%;
        font-size: 14px;
        opacity: 1;
        transform: translate(-50%,-50%) scale(1.25);
        transition: top 0ms ease-in-out 0ms,
        opacity 200ms ease-in-out 0ms,
        transform 200ms ease-in-out 0ms;
    }
    #register-form .close-btn{
        position: absolute;
        top: 10px;
        left: 10px;
        width: 15px;
        height: 15px;
        background: #888;
        color: #eee;
        text-align: center;
        line-height:15px ;
        border-radius: 15px;
        cursor: pointer;
    }
</style>


<!--category-->
<style>
    .widgets-searchbox .input-field {
        margin-bottom: 30px;
        height: 45px;
        padding-right: 0px;
    }
    .nice-select.form-select.filter-select.wide.rounded-0 {
        border: 1px solid #201d1d1f;
    }
    .nice-select:after{
        display:none;
    }
    .product-item {
        box-shadow: 0px 0px 2px 1px rgb(244 122 132 / 56%);
        border-radius: 10px;
    }


    button.shop-widget-btn {
        background: #ffff;
        border: 1px solid;
        padding: 5px 20px;
        border-radius: 10px;
        color: #bac34e;
    }
    /*validate register*/
    small.help-block {
        color: red;
        font-size: 12px;
    }
    label.input-group-text {
        padding:10px 5px;
        border-radius: 3px;
        background: #F16E79;

        color: white;
    }
/*avatar*/
    img.avatar-header {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius:50% ;
        margin: 10px;
    }
    .input-field{
        width: 70% !important;
    }

</style>