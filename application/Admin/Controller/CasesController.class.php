<?php
namespace Admin\Controller;
use Think\Controller;
class CasesController extends BaseController {
	public function cases(){
		$model = D('Cases');
		$data = $model->select();
		$array = array();
		foreach ($data as $key => $value) {
			$arr = array();
			$arr['case_id'] = $value['case_id'];
			$arr['case_title'] = $value['case_title'];
			$arr['case_pic'] = $value['case_pic'];
			$arr['orderby'] = $value['orderby'];
			//把一些预定义的 HTML 实体转换为字符  
			$html_string = htmlspecialchars_decode($value['case_content']);  
			//将空格替换成空  
			$content = str_replace(" ", "", $html_string);  
			//函数剥去字符串中的 HTML、XML 以及 PHP 的标签,获取纯文本内容  
			$contents = strip_tags($content);  
			  
			//返回字符串中的前80字符串长度的字符  
			$text = mb_substr($contents, 0, 20, "utf-8");  
  
			$arr['case_content'] =  $text.'....';
			$array[]=$arr;
		}

		$this->assign('data',$array);
		$this->display();

		
	}
	function add(){
		if(IS_POST){
			$cases_title = I('post.case_title');
			$header = I('post.header');
			$order  =I('post.order');
			$footer =I('post.footer');
			//$news_pic   = I('post.new_pic');
			$cases_content=I('post.case_content');

			//配置文件上传
			if(isset($_FILES)){
				
			if($_FILES['case_pic']['error'] == '0'){

				$config = array(

					'maxSize' => 104857600,
					'exts' =>array('jpg','png','gif'),
					'rootPath' => './Public/Uploads/',
					);

				$upload = new \Think\Upload($config);
				$info = $upload->uploadOne($_FILES['case_pic']);

				if(!$info){
					$this->error('图片上传失败！');
				}else{
					$cases_pic   = $config['rootPath'].$info['savepath'].$info['savename'];
					$sql="insert into re_cases values('','$cases_title','$cases_pic','$cases_content','$header','$footer','$order')";
					$model = D('Cases')->execute($sql);

					if($model){
						$this->success('案例添加成功',U('Cases/cases'));
					}else{
						$this->error('案例添加失败');
					}
					
				}
			}else{
				$this->error('请上传图片1');
			}
		}else{
			$this->error('请上传图片');
		}

		}else{
			$this->display();
		}
	}

	function edit(){
		$id = I('get.id');
		$model = D('Cases');
		$sql = "select * from re_cases where case_id='$id' ";
		$data = $model->query($sql);
		$this->assign('data',$data);
		// dump($data);
		// die;
		$this->display();
	}

	function editOk(){
		$cases_title = I('post.case_title');
		$order  = I('post.order');
		$header = I('post.header');
			$footer =I('post.footer');
			//$news_pic   = I('post.new_pic');
			$cases_content=I('post.case_content');
			//配置文件上传
			$cases_id    =I('post.id');

				if($_FILES['case_pic']['error'] == '0'){
					$config = array(

						'maxSize' => 104857600,
						'exts' =>array('jpg','png','gif'),
						'rootPath' => './Public/Uploads/',
						);

					$upload = new \Think\Upload($config);
					$info = $upload->uploadOne($_FILES['case_pic']);

					if(!$info){
						$this->error('图片上传失败！');
					}else{
						$cases_pic   = $config['rootPath'].$info['savepath'].$info['savename'];
						//('','$news_title','$news_pic','$news_content')
						$sql="update re_cases set case_title='$cases_title',case_pic='$cases_pic',case_content='$cases_content',header='$header',footer='$footer',orderby='$order' where case_id='$cases_id'";
						$model = D('Cases')->execute($sql);

						if($model){
							$this->success('修改成功',U('Cases/cases'));
						}else{
							$this->error('修改失败');
						}
						// dump($model);
						// die;
					}
				}else{
					$sql="update re_cases set case_title='$cases_title',case_content='$cases_content',header='$header',footer='$footer',orderby='$order' where case_id='$cases_id'";
					$model = D('Cases')->execute($sql);

					if($model){
						$this->success('修改成功',U('Cases/cases'));
					}else{
						$this->error('修改失败');
					}
					
				}
	}


	
	function del(){
		$id = I('get.id');
		$model = D('Cases');
		$sql = "delete from re_cases where case_id='$id' ";
		$data = $model->execute($sql);
		if($data){
			$this->success('删除成功',U('cases'));
		}else{
			$this->error('删除失败',U('cases'));
		}
		// dump($data);
		// die;
}
	

}



