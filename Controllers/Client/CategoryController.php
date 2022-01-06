<?php
require_once('Controllers/Controller.php');

class CategoryController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function category()
    {

        return $this->view('client/category');
    }
}