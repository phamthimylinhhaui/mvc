<?php
require_once('Controllers/Controller.php');



class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function product_detail(){
        return $this->view("client/productdetail");
    }
}