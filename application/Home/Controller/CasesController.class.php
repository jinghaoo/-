<?php
namespace Home\Controller;
use Think\Controller;
class CasesController extends Controller {

    public function cases(){
        $model = D('Cases');
        $cases = $model->order('orderby asc')->select();
        $this->assign('cases', $cases);
        $this->display();
    }

    public function detail(){
        $navModel = D('Cases');
        $nav = $navModel->find();
        $this->assign('nav',$nav);

        $id = I('get.id');
        $data = D('Cases')->where("case_id='$id'")->find(); 
        if(!$data){
            $this->redirect('Index/index');
        }else{ 
            $this->assign('detail',$data);
            $beforeInfo = D('Cases')->where('orderby <= '.$data['orderby'].' and case_id <> '.$data['case_id'])->order('orderby desc')->limit(1)->find();
            if($beforeInfo){
                $this->assign('beforeInfo', $beforeInfo);
            }
            $afterInfo = D('Cases')->where('orderby >= '.$data['orderby'].' and case_id <> '.$data['case_id'])->order('orderby asc')->limit(1)->find();
            if($afterInfo){
                $this->assign('afterInfo', $afterInfo);
            }
            $this->display();
       }
    }
}
