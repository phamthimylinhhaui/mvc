<?php
require_once ("Controllers/Controller.php");

class BillAdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        return $this->view('admin/bill/index');
    }

    public function update()
    {

        return $this->view('admin/bill/update');
    }
    public function detail()
    {

        return $this->view('admin/bill/detail');
    }
}