<?php
require_once ("Controllers/Controller.php");
require_once ("Repositories/UserRepository.php");
require_once('Models/User.php');

class UserAdminController extends Controller
{
    protected $repository;
    public function __construct()
    {
        parent::__construct();
        $this->repository=new UserRepository();
    }


    public function index1()
    {

        return $this->view('admin/user/index1');
    }
    public function edit()
    {

        return $this->view('admin/user/update');
    }
    public function create()
    {

        return $this->view('admin/user/create');
    }


    public function index()
    {
        $users=$this->repository->getAllUser();
        //dd($users);
        return $this->view('admin/user/index',compact('users'));

    }


}