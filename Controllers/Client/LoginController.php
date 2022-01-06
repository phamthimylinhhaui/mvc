<?php

require_once ("Controllers/Controller.php");
class LoginController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function login(){//login
        return $this->view('client/login');
    }
    public function index(){//index
        return $this->view('client/index');
    }
}