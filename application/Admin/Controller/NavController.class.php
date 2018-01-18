<?php
namespace Admin\Controller;
use Think\Controller;
class NavController extends BaseController{

    public function nav(){
        $model = D('Nav');
        $data = $model->find();
        $this->assign('data',$data);
        $this->display();
    }
    public function save(){
        $nav_header = I('post.nav_header', '');
        $nav_footer = I('post.nav_footer', '');
        $info =array(
            'id'     =>1,
            'header' =>$nav_header,
            'footer' =>$nav_footer,
            );
        $data = D('Nav')->save($info);
        if($data){
            $this->success('修改成功',U('nav'));
        }else{
            $this->error('修改失败',U('nav'));
        }
    }
}
