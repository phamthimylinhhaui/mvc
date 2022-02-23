<?php

require_once ("Controllers/Controller.php");
require_once ("Models/User.php");
require_once('libs/Validator.php');
require_once('Repositories/UserRepository.php');
require_once('Repositories/Authenticate.php');
class AuthController extends Controller
{
    protected $userRepository;
    protected $authenticate;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->authenticate= new Authenticate();
    }

    public function showLogin(){
//        if (Auth::checkAuth()){
//            return $this->redirect(Route::name('home'));
//        }
        $_SESSION['test_session']='TEST SESSION';
        return $this->view('client/auth/login');
    }

    public function login(){
        //dd($this->data);
        $validate = Validator::validateEmpty($this->data, [
            'username','password'
        ]);
        $_SESSION['test_session_2']='TEST SESSION 2';

        if(!$validate['valid']){
            return $this->response([
                'message' => $validate['message']
            ]);
        }
        $loginResult=$this->authenticate->login($this->data['username'],$this->data['password']);
        if (!$loginResult){
            return $this->response([
               'message'=>"sai_ten_tai_khoan_hoac_mat_khau"
            ]);
        }
//       $_SESSION['save'] = '1';
//        echo '<br/>session id: '.session_id().'<br/>';
//        print_r($_SESSION);
        return $this->redirect(Route::name('home'));
    }

    public function register(){
        //dd($this->data);
        $validate = Validator::validateEmpty($this->data, [
            'username','password','re_password','fullname','date_of_birth'
        ]);
//dd($validate);
        if(!$validate['valid']){
            return $this->response([
                'message' => $validate['message']
            ]);
        }

        // tạo tài khoản
        $user = $this->userRepository->createUser($this->data);
       //dd($user);
        // chuyển trang sửa thông tin người dùng
        // kèm báo luôn kết quả : bạn đã tạo người dùng thành công

        return $this->redirect(Route::name('users.edit',['user_id' => $user->id]));// chuyển trang
    }

    public function checkUsername(){
        $users = (new User())->getList(["username='{$this->data['username']}'"]);
        if(count($users) == 0){
            return $this->response(['valid' => true]);
        }

        return $this->response(['valid' => false]);
    }

    public function editProfile(){
//        dd($_FILES);
        $user=Auth::user();

        return $this->view('client/profile',compact('user'));
    }

    public function logout(){
        Auth::logout();
        return $this->redirect(Route::name('auth.show-login'));
    }

    public function updateProfile(){
        //dd($this->data);
        $user = Auth::user();
        // TODO SOMETHING validate data
        $name=$this->userRepository->analysisName($this->data['fullname']);

        $this->data=array_merge($this->data,$name);
        $user = $this->userRepository->updateUser($user, $this->data);
        Auth::setUser($user);
        //dd($_FILES);
        return $this->editProfile();
    }
}