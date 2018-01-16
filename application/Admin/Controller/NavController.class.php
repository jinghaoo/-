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
    function save(){
        $header = I('post.nav_header', '');
        $footer = I('post.nav_footer', '');

        $nav_header = addslashes($header);
        $nav_footer = addslashes($footer);

        $sql = "update re_nav set header='$nav_header',footer='$nav_footer' where id = 1";
        $data = D('Nav')->execute($sql);

        if($data){
            $this->success('修改成功',U('nav'));
        }else{
            $this->error('修改失败',U('nav'));
        }
    }
}
