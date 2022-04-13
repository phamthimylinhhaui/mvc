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
// post
    [
        'method'  => 'GET',
        'url'     => '/product_detail',
        'name'    => 'post_detail',
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
//user
    [
        'method'  => 'GET',
        'url'     => '/user_detail',
        'name'    => 'user_detail',
        'use'     => 'Client/UserController',
        'action'  => 'user_detail'
    ],
//login
    [
        'method'  => 'POST',
        'url'     => '/index',
        'name'    => 'login.post',
        'use'     => 'client/LoginController',
        'action'  => 'index'
    ],

    [
        'method'  => 'GET',
        'url'     => '/show-login',
        'name'    => 'auth.show-login',
        'use'     => 'client/AuthController',
        'action'  => 'showLogin'
    ],


    [
        'method'  => 'POST',
        'url'     => '/index',
        'name'    => 'login.home',
        'use'     => 'Client/LoginController',
        'action'  => 'login'//index
    ],

    [
        'method'  => 'GET',
        'url'     => '/users/{user_id}/edit',
        'name'    => 'users.edit',
        'use'     => 'Client/UserController',
        'action'  => 'user_edit'
    ],
    [
        'method'  => 'POST',
        'url'     => '/login',
        'name'    => 'auth.login',
        'use'     => 'Client/AuthController',
        'action'  => 'login'
    ],
    [
        'method'  => 'GET',
        'url'     => '/edit-profile',
        'name'    => 'edit-profile',
        'use'     => 'Client/AuthController',
        'action'  => 'editProfile'
    ],
//profile
    [
        'method'  => 'POST',
        'url'     => '/update-profile',
        'name'    => 'update-profile',
        'use'     => 'Client/AuthController',
        'action'  => 'updateProfile'
    ],
//logout
    [
        'method'  => 'GET',
        'url'     => '/logout',
        'name'    => 'logout',
        'use'     => 'Client/AuthController',
        'action'  => 'logout'
    ],
// register
    [
        'method'  => 'POST',
        'url'     => '/register',
        'name'    => 'auth.register',
        'use'     => 'Client/AuthController',
        'action'  => 'register'
    ],
    [
        'method'  => 'POST',
        'url'     => '/check-username',
        'name'    => 'auth.check-duplicate-username',
        'use'     => 'Client/AuthController',
        'action'  => 'checkUsername'
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

//post
    [
        'method'  => 'GET',
        'url'     => '/product_admin',
        'name'    => 'product_admin',
        'use'     => 'Admin/PostAdminController',
        'action'  => 'index'
    ],
    [
        'method'  => 'GET',
        'url'     => '/product_create',
        'name'    => 'post.create',
        'use'     => 'Admin/PostAdminController',
        'action'  => 'create'
    ],
    [
        'method'  => 'GET',
        'url'     => '/product_update',
        'name'    => 'post.update',
        'use'     => 'Admin/PostAdminController',
        'action'  => 'update'
    ],
    [
        'method'  => 'GET',
        'url'     => '/product_detailAdmin',
        'name'    => 'post.detail',
        'use'     => 'Admin/PostAdminController',
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
        'url'     => '/admin-user',
        'name'    => 'adminUser',
        'use'     => 'Admin/UserAdminController',
        'action'  => 'index1'
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
//----manger users
    [
        'method'  => 'GET',
        'url'     => '/admin_users',
        'name'    => 'admin.users',
        'use'     => 'Admin/UserAdminController',
        'action'  => 'index'
    ],
    [
        'method'  => 'POST',
        'url'     => '/admin_users/show-form-edit',
        'name'    => 'admin.users.show-form-edit',
        'use'     => 'Admin/UserAdminController',
        'action'  => 'showFormEdit'
    ],

    [
        'method'  => 'POST',
        'url'     => '/admin_user/edit-user',
        'name'    => 'admin.user.edit-user',
        'use'     => 'Admin/UserAdminController',
        'action'  => 'editUser'
    ],


    [
        'method'  => 'POST',
        'url'     => '/admin_user/show-form-create',
        'name'    => 'admin.users.show-form-create',
        'use'     => 'Admin/UserAdminController',
        'action'  => 'showFormCreate'
    ],
    [
        'method'  => 'POST',
        'url'     => '/admin_user/create-user',
        'name'    => 'admin.users.create-user',
        'use'     => 'Admin/UserAdminController',
        'action'  => 'createUser'
    ],
    [
        'method'  => 'POST',
        'url'     => '/admin_user/delete-user',
        'name'    => 'admin.users.delete',
        'use'     => 'Admin/UserAdminController',
        'action'  => 'deleteUser'
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
    [
        'method'  => 'POST',
        'url'     => '/category_edit',
        'name'    => 'admin.category.show-form-edit',
        'use'     => 'Admin/CategoryAdminController',
        'action'  => 'category_show_form_edit'
    ],
    [
        'method'  => 'POST',
        'url'     => '/category_create',
        'name'    => 'admin.category.show-form-create',
        'use'     => 'Admin/CategoryAdminController',
        'action'  => 'category_show_form_create'
    ],


//    [
//        'method'  => 'GET',
//        'url'     => '/test',/home/test
//        'name'    => 'users',
//        'use'     => 'client_controllers/TestController',
//        'action'  => 'test'
//    ]
); 
