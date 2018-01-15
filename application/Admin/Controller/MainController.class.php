<?php
namespace Admin\Controller;
use Think\Controller;
class MainController extends BaseController {
	public function index(){
		$this->display();
	}
	function savepass(){
		if(IS_POST){
			$pass = I('post.pass');
			$user_pass = getPwd($pass);
			// dump($user_pass);
			// die;

			$new_pass = I('post.new_pass');
			// $user_pass = getPwd($new_pass);
			$user_name = $_SESSION['name'];
			$user_id   = $_SESSION['id'];
			
			$model = D('User');
			$sql= "select * from re_user where user_id='$user_id' and user_pass='$user_pass'";
			$data = $model->query($sql);
			// dump($data);
			// die;
			if(!empty($data)){
				if(!empty($new_pass)){
					$new_pass1 = getPwd($new_pass);
					
					$sql="update re_user set user_pass='$new_pass1' where user_id='$user_id'";
					$info = $model->Execute($sql);
					if($info){
						$this->success('修改成功',U('savepass'));
					}
				}else{
					$this->error('密码不能为空！');
				}
			}else{
				$this->error('输入的原密码错误');
			}
			
	

		}else{
		$this->display();
	}
	}

	
}
