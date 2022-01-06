<?php
require_once('Controllers/Controller.php');

class HomeAdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function admin()
    {

        return $this->view('admin/home/index');
    }
    public function login()
    {

        return $this->view('admin/home/login');
    }
}