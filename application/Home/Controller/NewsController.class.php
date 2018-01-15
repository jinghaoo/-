<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {

    public function news(){
        // $navModel = D('News');
        // $nav = $navModel->find();
        // $this->assign('nav',$nav);
        
        $model = D('News');
        $news = $model->order('orderby asc')->select();
        $this->assign('news', $news);
        $this->display();
    }

    public function detail(){
        $navModel = D('News');
        $nav = $navModel->find();
        $this->assign('nav',$nav);

        $id = I('get.id');
        $sql="select * from re_news where new_id='$id'";
        $data = D('News')->query($sql);
        $this->assign('data',$data);
        // echo $id;
        $this->display();
    }
}
