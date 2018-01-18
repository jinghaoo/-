<?php
namespace Admin\Controller;
use Think\Controller;
class BannerController extends BaseController {
    
    public function ban(){
        $model = D('Banner');
        $data = $model->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function add(){
      if(IS_POST){
        $order = I('post.order');
        if(isset($_FILES)){
           if($_FILES['ban_pic']['error'] == '0'){
               $config = array(
                'maxSize' => 104857600,
                'exts' =>array('jpg','png','gif'),
                'rootPath' => './Public/Uploads/',
                );
               $upload = new \Think\Upload($config);
               $info = $upload->uploadOne($_FILES['ban_pic']);
            if(!$info){
              $this->error('图片上传失败！');
           }else{
              $ban_pic   = $config['rootPath'].$info['savepath'].$info['savename'];
              $info = array(
              'id'  =>'',
              'ban_pic' =>$ban_pic,
              'orderby' =>$order
              );
              $model = D('Banner')->add($info);
              if($model){
                $this->success('图片添加成功',U('ban'));
              }else{
                $this->error('图片添加失败');
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
        $model = D('Banner');
        $data = $model->where("id='$id'")->select();
        $this->assign('data',$data);
        $this->display();
    } 

    public function editOk(){
      $order=I('post.order');
      $id    =I('post.id');
        if($_FILES['ban_pic']['error'] == '0'){
          $config = array(
            'maxSize' => 104857600,
            'exts' =>array('jpg','png','gif'),
            'rootPath' => './Public/Uploads/',
            );
          $upload = new \Think\Upload($config);
          $info = $upload->uploadOne($_FILES['ban_pic']);
          if(!$info){
            $this->error('图片上传失败！');
          }else{
            $ban_pic   = $config['rootPath'].$info['savepath'].$info['savename'];
            $info =array(
                'id'   =>$id,
                'ban_pic' =>$ban_pic,
                'orderby' =>$order
              );
            $model = D('Banner')->save($info);
            if($model){
              $this->success('修改成功',U('ban'));
            }else{
              $this->error('修改失败');
            }
          }
        }else{
          $info =array(
                'id'   =>$id,
                'orderby' =>$order
              );
            $model = D('Banner')->save($info);
          if($model){
            $this->success('修改成功',U('ban'));
          }else{
            $this->error('修改失败');
          }    
        }
    }
    
    public function del(){
      $id = I('get.id');
      $data = D('Banner')->where("id='$id'")->delete();     
      if($data){
        $this->success('删除成功',U('ban'));
      }else{
        $this->error('删除失败',U('ban'));
      }
    }
}
