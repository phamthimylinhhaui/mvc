<?php
require_once('Controllers/Controller.php');

class ProductAdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        return $this->view('admin/product/index');
    }
    public function create()
    {

        return $this->view('admin/product/create');
    }
    public function update()
    {

        return $this->view('admin/product/update');
    }
    public function detail()
    {

        return $this->view('admin/product/detail');
    }
}