<?php
require_once ("Controllers/Controller.php");
require_once ("Models/Category.php");
require_once('Repositories/CategoryRepository.php');



class CategoryAdminController extends Controller
{
    protected $categoryRepository;

    public function __construct()
    {
        $this->categoryRepository= new CategoryRepository();
        parent::__construct();
    }

    public function index()
    {

        $categories=$this->categoryRepository->getAllCategory();
        return $this->view('admin/category/index',compact('categories'));
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