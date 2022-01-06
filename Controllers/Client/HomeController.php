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
       // dump(Route::name('home'));
       // $user= (new User())->find(10);

        // data change
        /*$user->update([
            'username'=>'ptlinh',
            'email'=>'ptl@gmail.com'
        ]);*/
      //  dd($user->getFullName());

        //delete forever
       /* $deleteResult= $user->deleteForever();
        dd($deleteResult);*/

        //delete
       // $deleteResult=$user->delete();
        //dd($deleteResult);
        //dd($user);

        // lấy ds các users
//        $check='123123';
//        $users = (new User())->getList([
//            "username = $check"
//        ]);
//dd($check);
  //      if ($users==null) echo "k có user này";


        return $this->view('client/index');
    }


}