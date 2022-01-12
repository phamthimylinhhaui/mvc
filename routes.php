<?php

const CONTROLLERS = array(
//  home
    [
      'method'  => 'GET',
      'url'     => '/',
      'name'    => 'home',//không dc trùng
      'use'     => 'Client/HomeController',
      'action'  => 'index'
    ],
    [
        'method'  => 'GET',
        'url'     => '/home',
        'name'    => 'home',
        'use'     => 'Client/HomeController',
        'action'  => 'index'
    ],
    [
        'method'  => 'POST',
        'url'     => '/home_post',
        'name'    => 'home.post',
        'use'     => 'Client/HomeController',
        'action'  => 'index'
    ],
//category
    [
        'method'  => 'GET',
        'url'     => '/category',
        'name'    => 'category',
        'use'     => 'Client/CategoryController',
        'action'  => 'category'
    ],
// product
    [
        'method'  => 'GET',
        'url'     => '/product_detail',
        'name'    => 'product',
        'use'     => 'Client/ProductController',
        'action'  => 'product_detail'
    ],
// cart
    [
        'method'  => 'GET',
        'url'     => '/cart_index',
        'name'    => 'cart',
        'use'     => 'Client/CartController',
        'action'  => 'cart_index'
    ],
//login
    [
        'method'  => 'GET',
        'url'     => '/login',
        'name'    => 'login',
        'use'     => 'Client/LoginController',
        'action'  => 'login'//login
    ],
    [
        'method'  => 'POST',
        'url'     => '/index',
        'name'    => 'login.post',
        'use'     => 'client/LoginController',
        'action'  => 'index'
    ],
// register
    [
        'method'  => 'POST',
        'url'     => '/register',
        'name'    => 'auth.register',
        'use'     => 'Client/AuthController',
        'action'  => 'register'
    ],

//user
    [
        'method'  => 'GET',
        'url'     => '/user_detail',
        'name'    => 'user_detail',
        'use'     => 'Client/UserController',
        'action'  => 'user_detail'
    ],

//test login
    [
        'method'  => 'POST',
        'url'     => '/index',
        'name'    => 'login.home',
        'use'     => 'Client/LoginController',
        'action'  => 'login'//index
    ],
    [
        'method'  => 'POST',
        'url'     => '/login',
        'name'    => 'login',
        'use'     => 'Client/LoginController',
        'action'  => 'index'//login
    ],
//-----------------------ADMIN---------------------

//login admin
    [
        'method'  => 'GET',
        'url'     => '/admin',
        'name'    => 'login.admin',
        'use'     => 'Admin/HomeAdminController',
        'action'  => 'login'
    ],
//home
    [
        'method'  => 'GET',
        'url'     => '/admin_main',
        'name'    => 'home_admin',
        'use'     => 'Admin/HomeAdminController',
        'action'  => 'admin'
    ],
//category
    [
        'method'  => 'GET',
        'url'     => '/category_admin',
        'name'    => 'category',
        'use'     => 'Admin/CategoryAdminController',
        'action'  => 'index'
    ],
    [
        'method'  => 'GET',
        'url'     => '/category_update',
        'name'    => 'category.update',
        'use'     => 'Admin/CategoryAdminController',
        'action'  => 'category_update'
    ],
    [
        'method'  => 'GET',
        'url'     => '/category_create',
        'name'    => 'category.create',
        'use'     => 'Admin/CategoryAdminController',
        'action'  => 'category_create'
    ],
//product
    [
        'method'  => 'GET',
        'url'     => '/product_admin',
        'name'    => 'product_admin',
        'use'     => 'Admin/ProductAdminController',
        'action'  => 'index'
    ],
    [
        'method'  => 'GET',
        'url'     => '/product_create',
        'name'    => 'product.create',
        'use'     => 'Admin/ProductAdminController',
        'action'  => 'create'
    ],
    [
        'method'  => 'GET',
        'url'     => '/product_update',
        'name'    => 'product.update',
        'use'     => 'Admin/ProductAdminController',
        'action'  => 'update'
    ],
    [
        'method'  => 'GET',
        'url'     => '/product_detailAdmin',
        'name'    => 'product.detail',
        'use'     => 'Admin/ProductAdminController',
        'action'  => 'detail'
    ],
//bill
    [
        'method'  => 'GET',
        'url'     => '/bill_admin',
        'name'    => 'bill_admin',
        'use'     => 'Admin/BillAdminController',
        'action'  => 'index'
    ],
    [
        'method'  => 'GET',
        'url'     => '/bill_update',
        'name'    => 'category.update',
        'use'     => 'Admin/BillAdminController',
        'action'  => 'update'
    ],
    [
        'method'  => 'GET',
        'url'     => '/bill_detail',
        'name'    => 'bill.detail',
        'use'     => 'Admin/BillAdminController',
        'action'  => 'detail'
    ],

//user
    [
        'method'  => 'GET',
        'url'     => '/user_admin',
        'name'    => 'user_admin',
        'use'     => 'Admin/UserAdminController',
        'action'  => 'index'
    ],
    [
        'method'  => 'GET',
        'url'     => '/user_create',
        'name'    => 'user.create',
        'use'     => 'Admin/UserAdminController',
        'action'  => 'create'
    ],
    [
        'method'  => 'GET',
        'url'     => '/user_update',
        'name'    => 'user.update',
        'use'     => 'Admin/UserAdminController',
        'action'  => 'edit'
    ],




//    [
//        'method'  => 'GET',
//        'url'     => '/test',/home/test
//        'name'    => 'users',
//        'use'     => 'client_controllers/TestController',
//        'action'  => 'test'
//    ]
); 
