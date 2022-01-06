<?php
require_once ("Controllers/Controller.php");

class UserAdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        return $this->view('admin/user/index');
    }
    public function edit()
    {

        return $this->view('admin/user/update');
    }
    public function create()
    {

        return $this->view('admin/user/create');
    }

}