<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class NewsController extends Controller {
	/*
    *   咨询-主页面的显示
    */
    public function news(){
        // 判断用户是否登陆
    	if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}
        $newshow = D('Newshow');
		$count = $newshow->count();
		// 每页10条数据
		$page = new Page($count, 10);
		$show = $page->show();
		$list = $newshow->order('message_time desc')->field(array('message_id','message_title','message_time','message_content','message_photo','message_author','message_CTR','message_overview'))->limit($page->firstRow, $page->listRows)->select();

		$hitlist = $newshow->order('message_CTR desc')->field(array('message_id','message_title','message_time','message_author','message_photo'))->limit(5)->select();
		$this->assign('title','治水官网-新闻');
		$this->assign('hitlist', $hitlist);
		$this->assign('list', $list);
		$this->assign('page', $show);
        $this->show();
    }
    /*
    *   咨询-详细文章页面的显示
    */
    public function newshow(){
        // 判断用户是否登陆
    	if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}
        $newshow = D('Newshow');
		$aid = $_GET['id'];
		$map['message_id'] = $aid;
		$list = $newshow->where($map)->field(array('message_id','message_title','message_time','message_content','message_photo','message_author','message_CTR','message_overview'))->select();
		$this->assign('list', $list);
		$this->assign('title','治水官网-新闻【'.$list[0]['message_title'].'】');
		$newshow->where($map)->setInc('message_CTR',1);//每次累加1
        $this->show();
    }
}
