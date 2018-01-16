<?php
namespace Admin\Model;
use Think\Model;

class UserModel extends Model{
    
   
    function checkLogin($name, $pass){
        // 根据用户名查询数据表
        $info = $this->where("user_name='$name'")->find();
        if(empty($info)){
            return false;
        }
        // 判断info中的密码是否和传入的密码一致
        if($info['user_pass'] == $pass){
            // 登录成功,记录session
            session('id', $info['user_id']);
            session('name', $info['user_name']);
            return true;
        } else {
            return false;
        }
    }
}


