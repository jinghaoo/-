<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {

    public function news(){
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
        $data = D('News')->where("new_id='$id'")->find();
        if(!$data){
            $this->redirect('news');
        }else{ 
        $beforeInfo = D('News')->where('orderby <= '.$data['orderby'].' and new_id <> '.$data['new_id'])->order('orderby desc')->limit(1)->find();
        if($beforeInfo){
            $this->assign('beforeInfo', $beforeInfo);
        }
        $afterInfo = D('News')->where('orderby >= '.$data['orderby'].' and new_id <> '.$data['new_id'])->order('orderby asc')->limit(1)->find();
        if($afterInfo){
            $this->assign('afterInfo', $afterInfo);
        }
        $this->assign('detail', $data);
        $this->display('detail');
        }
    }
}
