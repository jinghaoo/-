<?php
namespace Admin\Controller;
use Think\Controller;
class MainController extends BaseController {
	
	public function index(){
		$this->display();
	}
	public function savepass(){
		if(IS_POST){
			$pass = I('post.pass');
			$user_pass = getPwd($pass);
			$new_pass = I('post.new_pass');
			$user_name = $_SESSION['name'];
			$user_id   = $_SESSION['id'];	
			$model = D('User');
			$data = $model->where("user_id='$user_id' and user_name='$user_name'")->find();
			if(!empty($data)){
				if(!empty($new_pass)){
					$new_pass1 = getPwd($new_pass);
					$arr = array(
						'user_id'   =>$user_id,
						'user_pass' =>$new_pass1,
					);
					$info = $model->save($arr);
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
