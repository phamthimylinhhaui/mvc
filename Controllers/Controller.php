<?php

class Controller{
    protected $data;


	public function __construct(){
        $this->data=$this->initData();
	}
	private function initData(){
        $route=new Route();
        $currentRoute=$route->getCurrentRoute();
        $getData=$currentRoute['parameters'];
        return array_merge($getData,$_POST, $_FILES);
    }

	public function view($file, $data = array())
  	{
    	// Kiểm tra file gọi đến có tồn tại hay không?
    	$viewFile = 'views/'.$file.'.php';

    	if (!is_file($viewFile)) {
    		echo "View not found";
    		die();
    	}
      	
      	extract($data);
      	ob_start();
      	$content = ob_get_clean();

      	require_once($viewFile);
      	return true;
	}

    public function response($data=array()){
        echo json_encode($data, false);
        die();
    }

    public function redirect($url){//chuyển trang
        header('Location: '.$url);
        exit();
        session_start();
    }
}