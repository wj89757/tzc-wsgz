<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    /*
    *   about控制器是治水官网-关于页面的显示
    *   没有具体逻辑功能，只是静态页面显示
    */
    public function about(){
        // 判断用户是否登陆
    	if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}
		// 传递title的值
        $this->assign('title','治水官网-关于');
        $this->show();
    }
}
