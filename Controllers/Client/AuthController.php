<?php
session_start();

require_once ("Controllers/Controller.php");
require_once ("Models/User.php");
class AuthController extends Controller
{
    public function register()
    {
//       dump($this->data);

        // validate
        //create user
        $user = new User();
//        $check=$this->data['username'];
//
//        $users= (new User())->getList([
//            "username = {$check}"
//        ]);
//
//$_SESSION['error']='';
//        if ($users!=null){
//          echo "tên bị trùng";
//            //  $_SESSION['error']= "<h3 style='text-align: center;color: red;margin: auto'>tên đăng ký bị trùng<br> vui lòng đăng ký lại</h3>";
//        }else{
            $user->create($this->data);
//        }



        //$this->data['last_name']='LINH';
//dd($this->data['username']);
     //  $user->create($this->data);
       // $_SESSION['username']=$this['last_name'];
        //        $user->find(1);
       return $this->view('client/login');
    }

}