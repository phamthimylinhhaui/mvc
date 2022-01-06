<?php
	
require_once('Controllers/Controller.php');

class UserController extends Controller{

    public function __construct()
    {
        parent::__construct();
    }



    public function user_detail()
    {

        return $this->view('client/user_detail');
    }
}