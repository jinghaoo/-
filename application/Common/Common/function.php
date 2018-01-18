<?php



//获取密码的加密形式
function getPwd($pwd){
    $key = 'redefine';   //加密key
    return sha1(sha1($key) . $pwd);    //最终的密码
}
function subtext($text, $length)
{
    if(mb_strlen($text, 'utf8') > $length) 
    return mb_substr($text, 0, $length, 'utf8').'...';
    return $text;
}

