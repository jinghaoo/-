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
        // $type = I('get.type');
    
        // dump($ids);
        // dump($type);

      
        $sql="select * from re_news where new_id='$id'";
        $data = D('News')->query($sql);
        $this->assign('data',$data);

        $beforeInfo = D('News')->where('orderby <= '.$data[0]['orderby'].' and new_id <> '.$data[0]['new_id'])->order('orderby desc')->limit(1)->find();
        $afterInfo = D('News')->where('orderby >= '.$data[0]['orderby'].' and new_id <> '.$data[0]['new_id'])->order('orderby asc')->limit(1)->find();

var_dump($afterInfo);die;
        /*$list = D('News')->order('orderby asc')->select();

        $i = 0;
        foreach ($list as $key => $value) {
            if($list['new_id'] == $data['new_id']){
                $i = 0;
                break;
            }
        }

        if($i>0){
            $before = $list[$i-1];
            $this->assign('before', $before);
        }

        if($i<count($list)-1){
            $after = $list[$i+1];
            $this->assign('after', $after);
        }*/

        // echo $id;
        $this->display();
    }
    public function detail1(){
       $navModel = D('News');
        $nav = $navModel->find();
        $this->assign('nav',$nav);

        $id = I('get.id');
        $type = I('get.type');
        $model = D('News');
        $data = $model->order('orderby asc')->select();
        $bid= '';
        if($type == 'before'){
            foreach ($data as $key => $value) {
                if($value['new_id'] == $id){
                    if($bid != ''){
                        $sql="select * from re_news where new_id='$bid'";
                        $data = D('News')->query($sql);
                        $this->assign('data',$data);
                        $this->display('detail');
                        return;
                    }else{
                        $sql="select * from re_news where new_id='$id'";
                        $data = D('News')->query($sql);
                        $this->assign('data',$data);
                        $this->display('detail');
                        return;
                    }
                }
                 $bid= $value['new_id'];
            }
        }else{
           $end = '';
            foreach ($data as $key => $value) {
                 if($bid== 'next'){
                        $eid = $value['new_id'];
                      $sql="select * from re_news where new_id='$eid'";
                        $data = D('News')->query($sql);
                        // dump($data);
                        // die;
                        $this->assign('data',$data);
                        $this->display('detail');
                        return;
                    }
                if($value['new_id'] == $id){
                     $bid= 'next';
                }
                $end= $value['new_id'];
            }
            if($end == $id){
                $sql="select * from re_news where new_id='$id'";
                $data = D('News')->query($sql);
                $this->assign('data',$data);
                $this->display('detail');
                return;
            
            }
        }
    }
        
    
}
