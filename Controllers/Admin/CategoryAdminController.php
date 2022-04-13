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
    public function category_update()
    {

        return $this->view('admin/category/update');
    }
    public function category_create()
    {

        return $this->view('admin/category/create');
    }



    public function index()
    {
        $categories=$this->categoryRepository->getAllCategory();
        return $this->view('admin/category/index',compact('categories'));
    }

    public function category_show_form_edit(){
        $category = (new Category())->find($this->data['category_id']);
        //dd($category);
        if(is_null($category)){
            return $this->response([
                'message' => 'Không tìm thấy chuyên mục'
            ]);
        }
        return $this->view('admin/category/edit',compact('category'));
    }
    public function category_show_form_create()
    {
        return $this->view('admin/category/create_category');
    }


}