<?php
require_once ("Controllers/Controller.php");
require_once ("Models/User.php");
require_once('libs/Auth.php');
require_once('Repositories/UserRepository.php');
require_once('Repositories/Authenticate.php');

class UserAdminController extends Controller
{
    protected $userRepository;
    protected $authenticate;
    //protected $repository;
    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->authenticate= new Authenticate();
    }


    public function index1()
    {

        return $this->view('admin/user/index1');
    }
    public function edit()
    {

        return $this->view('admin/user/update');
    }
    public function create()
    {

        return $this->view('admin/user/create');
    }


    public function index()
    {
        $users=$this->userRepository->getAllUser();
        //dd($users);
        return $this->view('admin/user/index',compact('users'));

    }

    public function showFormEdit(){
        $user = (new User())->find($this->data['user_id']);
        //  dd($user);
        if(is_null($user)){
            return $this->response([
                'message' => 'Không tìm thấy người dùng'
            ]);
        }
        return $this->view('admin/user/edit_user',compact('user'));
    }


    public function editUser(){
        //TODO SOMETHING: validate data
        $name=$this->userRepository->analysisName($this->data['fullname']);
        // nối mảng
        $this->data=array_merge($this->data,$name);
        $user = (new User())->find($this->data['id']);

        $user=$this->userRepository->updateUser($user, $this->data);

        // chuyển về trang index
        //$users=$this->userRepository->getAllUser();
        //return $this->view('admin/user/thanhcong');
        //index();
    }

    public function showFormCreate(){
       // dd($this->data);
        $user= new User();
        return $this->view('admin/user/create_user',compact('user'));
    }

    public function createUser(){
       //dd($this->data);
        $user=$this->userRepository->createUser2($this->data) ;
        return $this->view('admin/user/create_user');
    }

    public function deleteUser(){
        $user = (new User())->find($this->data['user_id']);

        if(is_null($user)){
            return $this->response([
                'message' => 'Không tìm thấy người dùng',
            ]);
        }

       // $user->delete();
        return $this->response([
            'code'=>200,
            'message'=>"Xóa người dùng thành công",
        ]);

    }


}