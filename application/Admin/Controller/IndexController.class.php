<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
    	echo 123;
    }
   
    function login(){
     	if(IS_POST){
     		$name1  = I('post.user_name');
            $name  = addslashes($name1);

     		$password =  I('post.user_pass');
     		$model = D('User');
     		$pass = getPwd($password);
     		//die($pass);

     		if($model->checkLogin($name,$pass)){
     			$this->success('登陆成功',U('Main/index'));
     		}else{
     			$this->error('用户名或密码错误',U('Index/login'));
     		}
        }else{
         	$this->display();
        }
    }
    function loginout(){
        session(null);  
        $this->redirect('Index/login'); 

    }
}
