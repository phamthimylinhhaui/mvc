<?php

require_once('Controllers/Controller.php');
require_once ('Models/User.php');

class HomeController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //dd(Auth::checkAuth());
        $_SESSION['save'] = '1';
        return $this->view('client/index');
    }


}