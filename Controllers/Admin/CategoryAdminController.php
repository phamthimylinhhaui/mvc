<?php
require_once ("Controllers/Controller.php");

class CategoryAdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        return $this->view('admin/category/index');
    }
    public function category_update()
    {

        return $this->view('admin/category/update');
    }
    public function category_create()
    {

        return $this->view('admin/category/create');
    }

}