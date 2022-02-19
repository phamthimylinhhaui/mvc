<?php

class Authenticate{
    public function login($username,$password){
        $password=md5($password);//password_hash($password,PASSWORD_BCRYPT);
        $users=(new User())->getList([
            "username='{$username}'",
            "password='{$password}'",
        ]);
        //dd($users);
        if (empty($users)){
            return false;
        }
        //TODO: LƯU LẠI NGƯỜI DÙNG VỪA ĐĂNG NHẬP
       return Auth::setUser($users[0]);


    }


}