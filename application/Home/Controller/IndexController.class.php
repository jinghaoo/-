
<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $model = D('Banner');
        $bannerList = $model->order('orderby asc')->select();
        $this->assign('bannerList', $bannerList);

        $navModel = D('Nav');
        $nav = $navModel->find();
        $this->assign('nav',$nav);

        $news = D('News');
        $new = $news->order('orderby asc')->limit(4)->select();
        $this->assign('news',$new);
        
        $model = D('Cases');
        $cases = $model->order('orderby asc')->select();
        $this->assign('cases', $cases);
        $this->display();
    }

    public function product(){
        $this->display();
    }

    public function advantage(){
        $this->display();
    }

}

