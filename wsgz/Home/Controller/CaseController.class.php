<?php
namespace Home\Controller;
use Think\Controller;
class CaseController extends Controller {
	/*
    *   map控制器是治水官网-数据可视化地图页面的显示
    *   没有具体逻辑功能，只是静态页面显示
    *	其中echart占用的比重较大，导致页面加载较慢
    */
    public function map(){
        // 判断用户是否登陆
    	if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}
        $this->show();
    }
}
