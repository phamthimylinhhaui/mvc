<?php
require_once ("Controllers/Controller.php");

class CartController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function cart_index()
    {

        return $this->view('client/cart_index');
    }
}