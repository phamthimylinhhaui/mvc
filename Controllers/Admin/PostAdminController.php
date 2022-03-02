<?php
require_once('Controllers/Controller.php');

class PostAdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        return $this->view('admin/post/index');
    }
    public function create()
    {

        return $this->view('admin/post/create');
    }
    public function update()
    {

        return $this->view('admin/post/update');
    }
    public function detail()
    {

        return $this->view('admin/post/detail');
    }
}