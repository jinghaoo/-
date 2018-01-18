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
     public function detail1(){
       $navModel = D('Cases');
        $nav = $navModel->find();
        $this->assign('nav',$nav);

        $id = I('get.id');
        $type = I('get.type');
        $model = D('Cases');
        $data = $model->order('orderby asc')->select();
        $bid= '';
        if($type == 'before'){
            foreach ($data as $key => $value) {
                if($value['case_id'] == $id){
                    if($bid != ''){
                        $sql="select * from re_cases where case_id='$bid'";
                        $data = D('Case')->query($sql);
                        $this->assign('data',$data);
                        $this->display('detail');
                        return;
                    }else{
                        $sql="select * from re_cases where case_id='$id'";
                        $data = D('Cases')->query($sql);
                        $this->assign('data',$data);
                        $this->display('detail');
                        return;
                    }
                }
                 $bid= $value['case_id'];
            }
        }else{
           $end = '';
            foreach ($data as $key => $value) {
                 if($bid== 'next'){
                        $eid = $value['case_id'];
                      $sql="select * from re_cases where case_id='$eid'";
                        $data = D('Cases')->query($sql);
                        // dump($data);
                        // die;
                        $this->assign('data',$data);
                        $this->display('detail');
                        return;
                    }
                if($value['case_id'] == $id){
                     $bid= 'next';
                }
                $end= $value['case_id'];
            }
            if($end == $id){
                $sql="select * from re_cases where case_id='$id'";
                $data = D('Cases')->query($sql);
                $this->assign('data',$data);
                $this->display('detail');
                return;
            
            }
        }
    }
}
