<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $model = D('Banner');
        $bannerList = $model->order('orderby asc')->select();
        $this->assign('bannerList', $bannerList);

        //头部HTML
        $navModel = D('Nav');
        $nav = $navModel->find();
        $this->assign('nav',$nav);
        //新闻
        $news = D('News');
        $new = $news->order('orderby asc')->limit(4)->select();
        $this->assign('news',$new);
        //案例
        $model = D('Cases');
        $cases = $model->order('orderby asc')->select();
        $this->assign('cases', $cases);
        $this->display();
    }
    function product(){
        $this->display();
    }
     function advantage(){
        $this->display();
    }

}
