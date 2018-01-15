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
    function add(){
    if(IS_POST){
      $order = I('post.order');
      // //$news_pic   = I('post.new_pic');
      // $news_content=I('post.new_content');

      //配置文件上传
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
          $sql="insert into re_banner values('','$ban_pic','$order')";
          $model = D('Banner')->execute($sql);

          if($model){
            $this->success('图片添加成功',U('ban'));
          }else{
            $this->error('图片添加失败');
          }
          // dump($model);
          // die;
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
    function edit(){

    $id = I('get.id');
    $model = D('Banner');
    $sql = "select * from re_banner where id='$id' ";
    $data = $model->query($sql);

    $this->assign('data',$data);
    $this->display();
  }
  
  function editOk(){


      //$news_pic   = I('post.new_pic');
      $order=I('post.order');
      //配置文件上传
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
            //('','$news_title','$news_pic','$news_content')
            $sql="update re_banner set ban_pic='$ban_pic',orderby='$order' where id='$id'";
            $model = D('Banner')->execute($sql);

            if($model){
              $this->success('修改成功',U('ban'));
            }else{
              $this->error('修改失败');
            }
            // dump($model);
            // die;
          }
        }else{
          $sql="update re_banner set orderby='$order' where id='$id'";
          $model = D('Banner')->execute($sql);

          if($model){
            $this->success('修改成功',U('ban'));
          }else{
            $this->error('修改失败');
          }
          
        }
  }
  function del(){
    $id = I('get.id');
    $model = D('Banner');
    $sql = "delete from re_banner where id='$id' ";
    $data = $model->execute($sql);
    if($data){
      $this->success('删除成功',U('ban'));
    }else{
      $this->error('删除失败',U('ban'));
    }
    // dump($data);
    // die;
}
}
