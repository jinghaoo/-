<?php



//获取密码的加密形式
function getPwd($pwd){
    $key = 'redefine';   //加密key
    return sha1(sha1($key) . $pwd);    //最终的密码
}

