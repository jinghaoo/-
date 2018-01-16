<?php
namespace Admin\Controller;
use Think\Controller;
class ContactsController extends BaseController {
	public function contacts(){
		$model = D("Contacts");
		$data = $model->select();
		// dump($data);
		// exit;
		$this->assign('data',$data);
		$this->display();
	}
	function save(){
		$phone1   = I('post.phone');
		$phone = addslashes($phone1);

		$tel1     =I('post.tel');
		$tel     =addslashes($tel1);
		
		$website = I('post.website');
		$email   = I('post.email');
		$qq      = I('post.qq');
		$address = I('post.address');
		$pic     = I('post.pic');

		$info = array(
			'id'      => 1,
			'cont_phone' => $phone,
			'cont_tel'   => $tel,
			'cont_email' => $email,
			'cont_qq'    => $qq,
			'cont_address'=> $address,
			'cont_website'=> $website,
			'cont_pic'   => $pic
		);
	
		$model = D('Contacts');
		
		$data = $model->save($info);
		if($data){
			$this->success('修改成功',U('contacts'));
		}else{
			$this->error('修改失败',U('contacts'));
		}
		
	}
}
