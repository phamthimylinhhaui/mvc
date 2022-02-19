<?php

require_once('Controllers/Controller.php');
require_once('Repositories/UserRepository.php');

require_once('Models/User.php');
class UserController extends Controller{

    protected $repository;

    public function __construct(){
        parent::__construct();
        $this->repository = new UserRepository();
    }


    public function user_detail()
    {

        return $this->view('client/user_detail');
    }

    public function user_edit(){
        $user = (new User())->find($this->data['user_id']);
      //  dd($user);
        if(is_null($user)){
            return $this->response([
                'message' => 'Không tìm thấy người dùng'
            ]);
        }

        return $this->view('client/user_edit',compact('user'));

    }


}