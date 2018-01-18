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
			$text = mb_substr($contents, 0, 65, "utf-8");  
			$arr['case_content'] =  $text.'....';
			$array[]=$arr;
		}
		$this->assign('data',$array);
		$this->display();	
	}
	public function add(){
		if(IS_POST){
			$_title = I('post.case_title');
			$cases_title = addslashes($title);
			$order  =I('post.order');

			$case_header = I('post.header');
			$case_footer =I('post.footer');
			$header  = addslashes($case_header);
			$footer  = addslashes($case_footer);

			$content=I('post.case_content');
			$cases_content = addslashes($content);

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
					$info = array(
			    		'case_id'=>'',
			    		'case_title' =>$cases_title,
			    		'case_pic' =>$cases_pic,			   
			    		'case_content' =>$cases_content,
			    		'header'   =>$header,
			    		'footer'   =>$footer,
			    		'orderby' =>$order
			    	);
					$model = D('Cases')->add($info);
					if($model){
						$this->success('案例添加成功',U('Cases/cases'));
					}else{
						$this->error('案例添加失败');
					}					
				}
			}else{
				$this->error('请上传图片');
			}
		}else{
			$this->error('请上传图片');
		}

		}else{
			$this->display();
		}
	}

	public function edit(){
		$id = I('get.id');
		$model = D('Cases');
		$data = D('Cases')->where("case_id='$id'")->select();
		$this->assign('data',$data);
		// dump($data);
		// die;
		$this->display();
	}


	public function editOk(){
		$title = I('post.case_title');
		$cases_title = addslashes($title);
		$order1  = I('post.order');
		$order   =addslashes($order1);		

		$case_header = I('post.header');
		$case_footer =I('post.footer');
		$header  = addslashes($case_header);
		$footer  = addslashes($case_footer);

		$content=I('post.case_content');
		$cases_content = addslashes($content);
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
						$info = array(
				    		'case_id' =>$cases_id,
				    		'case_title' =>$cases_title,
				    		'case_pic' =>$cases_pic,
				    		'case_content' =>$cases_content,
				    		'header'   =>$header,
				    		'footer'   =>$footer,
				    		'orderby' =>$order
				    	);
						$model = D('Cases')->save($info);
						if($model){
							$this->success('修改成功',U('Cases/cases'));
						}else{
							$this->error('修改失败');
						}
					}
				}else{
					$info = array(
				    		'case_id' =>$cases_id,
				    		'case_title' =>$cases_title,
				    		'case_content' =>$cases_content,
				    		'header'   =>$header,
				    		'footer'   =>$footer,
				    		'orderby' =>$order
				    	);
						$model = D('Cases')->save($info);

					if($model){
						$this->success('修改成功',U('Cases/cases'));
					}else{
						$this->error('修改失败');
					}				
				}
	}	
	public function del(){
		$id = I('get.id');
		$model = D('Cases');
		$data = D('Cases')->where("case_id='$id'")->delete();
		if($data){
			$this->success('删除成功',U('cases'));
		}else{
			$this->error('删除失败',U('cases'));
		}
	}
	
}
