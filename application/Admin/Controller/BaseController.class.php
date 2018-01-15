<?php
namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller
{
  
    function _initialize()
    {
        if(!session('?id')){

            $this->error('用户未登录，请先登录', U('Index/login'));
        }
    }
}

