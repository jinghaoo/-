<?php
namespace Home\Controller;
use Think\Controller;
class CasesController extends Controller {

    public function cases(){
        $model = D('Cases');
        $cases = $model->order('orderby asc')->select();
        // dump($cases);
        // die;
        $this->assign('cases', $cases);
        $this->display();
        
  
    }
    function detail(){
        $navModel = D('Cases');
        $nav = $navModel->find();
        $this->assign('nav',$nav);

        $id = I('get.id');
        // dump($id);die;
        $sql="select * from re_cases where orderby='$id'";
        $data = D('News')->query($sql);
        $this->assign('data',$data);
        //dump($id);
        $this->display();
    }
}
