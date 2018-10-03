<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
use Org\Net\Http;
use Think\Upload;
header("Content-type:text/html; charset=UTF-8");

class PersonalController extends Controller {
    /**
     * 后台管理登录后显示的首页
     */
	public function index(){
    	// 判断用户是否登陆
    	if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		$this->show();
    }
    /**
     * 投诉界面的显示
     * 判断是否删选过
     * 按照时间顺序排序
     */
	public function noticelist(){
		/*
		 * 判断用户是否登录
		*/
    	if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		$username = session('username');
		$complain = D('Complaintshow');
        $map['Complian_yorn'] = '0';

        $hitlist = $complain->where($map)->order('Complian_time desc')->field(array('Complian_title','Complian_time','Complian_imag','Complian_content','Complian_id'))->limit(15)->select();

        $this->assign('hitlist', $hitlist);

		$this->show();
	}
	/**
     * 通过投诉的逻辑功能的实现
     * 主要是修改Complian_yorn的值为1
     */
	public function passnotice(){
		$complain = M('Complaintshow');
		$data['Complian_yorn'] = '1';
		$map['Complian_id'] = $_GET['id'];
		$complain->where($map)->save($data);
		$this->success("通过成功", U('Personal/noticelist'));
	}
	/**
     * 后台管理新闻页面的显示
     */
	public function articlelist(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		$newshow = D('Newshow');

		$count = $newshow->count();
		if($count == 0)
		{
			$this->assign('nowp',"暂无记录，请点击添加周志添加您的第一篇新闻吧~");
		}
		$page = new Page($count, 10);
		$show = $page->show();
		$list = $newshow->order('message_time desc')->field(array('message_id','message_title','message_time','message_content','message_photo','message_author','message_CTR','message_overview'))->limit($page->firstRow, $page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->show();		
	}
	/**
     * 后台管理新闻增加的显示页面
     * 包括文本编辑器调用public中的editor
     */
	public function articleadd(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
    	$this->show();
	}
	/**
     * 后台管理新闻增加的逻辑功能
     */
	public function articleadd_fun(){
		$newshow = D('Newshow');
		$name = $_POST['taskname'];
		if($newshow->where("message_title = '$name'")->find()){
			echo "<script>alert '文章名已存在';</script>";
		}else{
			$newshow->message_author = $_POST['taskauthor'];
			$newshow->message_title = $name;
			$newshow->message_overview = $_POST['overview'];
			$newshow->message_content = $_POST['container'];
			$newshow->message_time = date("Y-m-d H:i:s");
			//将文章写入数据库
			if($newshow->add()){
				$this->success('新闻添加成功，返回列表页面',U('Personal/articlelist'));
				//echo "<script>alert '公告添加成功';</script>";
			}else{
				$this->success('新闻添加失败，返回添加页面',U('Personal/articleadd'));
				//echo "<script>alert '公告添加失败';</script>";
			}
		}
	}
	/**
     * 后台管理新闻修改的显示页面
     * 也是文本编辑器和数据库数值传输和显示
     */
	public function articleres(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		
		$newshow = D('Newshow');
		$id = $_GET['id'];
		$nowart = $newshow->where("message_id = '$id'")->find();
		$this->assign("nowart", $nowart);
		$this->show();
	}
	/**
     * 后台管理新闻修改的逻辑功能实现
     */
	public function articleres_fun(){
		$newshow = D('Newshow');
		$data['message_title'] = $_POST['name'];
		$data['message_overview'] = $_POST['overview'];
		$data['message_content'] = $_POST['text'];
		$map['message_id'] = $_POST['id'];
		if($newshow->where($map)->save($data)){
			$this->success('新闻信息修改成功，返回列表页面',U('Personal/articlelist'));
		}else{
			$this->success('新闻信息修改失败，返回列表页面',U('Personal/articlelist'));
		}
	}
	/**
     * 后台管理新闻删除的逻辑功能实现
     */
	public function articledel(){
		$newshow = D('Newshow');
		$map['message_id'] = $_GET['id'];
		if($newshow->where($map)->delete()){
			$this->success('新闻删除成功，返回列表页面',U('Personal/articlelist'));
		}else{
			$this->success('新闻删除失败，返回周志列表页面',U('Personal/articlelist'));
		}
	}
	
	function upload(){
		$upload = new Upload();
			$upload->maxSize = 3145728;//3M
			$upload->exts = array('jpg','gif','png','jpeg','rar','zip','doc','docx','txt');
			$upload->savePath = './';
			$upload->subName = array('date','Ymd');
			$info = $upload->upload();
			if(!$info)
			{
				$this->error($upload->getError());
			}
			else
			{
				$this->success('上传成功');
			}
	}
    /*用户修改密码页面显示*/
	public function pwdfix(){
		
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		$user = D('User');
		$condition->name = $username;
		$userinfo = $user->where($condition)->find();
		$findid = $userinfo['id'];
		$findname = $userinfo['name'];
		$findpassword = $userinfo['password'];
		$this->assign("findid",$findid);
		$this->assign("findname",$findname);
		$this->assign("findpassword",$findpassword);
		$this->show();
	}
	/*用户修改密码*/
	public function changepwd()
	{
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		$user = D('User');
		$data['password'] = $_POST['pwd'];
		$data['date'] = date('Y-m-d H:i:s');
		$map['id'] = $_POST['id'];
		if($user->where($map)->save($data))
		{
			$this->success('信息修改成功，返回首页',U('Personal/pwdfix'));
		}
		else
		{
			$this->error('信息修改失败，返回首页',U('Personal/pwdfix'));
		}
	}

	/**
     * 治水项目后台管理的显示
     * 与新闻的功能基本类似，所以以下projectadd等不介绍了
     */
	public function waterproject(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		$project = D('Projectshow');

		$count = $project->count();
		if($count == 0)
		{
			$this->assign('nowp',"暂无记录，请点击添加治水项目添加您的第一篇文章吧~");
		}
		$page = new Page($count, 10);
		$show = $page->show();
		$list = $project->order('project_time desc')->field(array('project_id','project_name','project_content','project_time'))->limit($page->firstRow, $page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->show();		
	}

	public function projectadd(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
    	$this->show();
	}
	public function projectadd_fun(){
		$project = D('Projectshow');
		$name = $_POST['projectname'];
		//$no = $_POST['user_no'];
		if($project->where("project_name = '$name'")->find()){
			echo "<script>alert '该标题名已存在';</script>";
		}else{
			$project->project_name = $name;
			$project->project_content = $_POST['container'];
			$project->project_time = date("Y-m-d H:i:s");
			//将文章写入数据库
			if($project->add()){
				$this->success('治水项目添加成功，返回列表页面',U('Personal/waterproject'));
				//echo "<script>alert '公告添加成功';</script>";
			}else{
				$this->error('治水项目添加失败，返回添加页面',U('Personal/projectadd'));
				//echo "<script>alert '公告添加失败';</script>";
			}
		}
	}
	public function projectres(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		
		$project = D('Projectshow');
		$id = $_GET['id'];
		$nowart = $project->where("project_id = '$id'")->find();
		$this->assign("nowart", $nowart);
		$this->show();
	}
	
	public function projectres_fun(){
		$project = D('Projectshow');
		$data['project_name'] = $_POST['name'];
		$data['project_content'] = $_POST['text'];
		$map['project_id'] = $_POST['id'];
		if($project->where($map)->save($data)){
			$this->success('治水项目信息修改成功，返回列表页面',U('Personal/waterproject'));
		}else{
			$this->success('治水项目信息修改失败，返回列表页面',U('Personal/waterproject'));
		}
	}
	public function projectdel(){
		$project = D('Projectshow');
		$map['project_id'] = $_GET['id'];
		if($project->where($map)->delete()){
			$this->success('治水项目文章删除成功，返回列表页面',U('Personal/waterproject'));
		}else{
			$this->success('治水项目文章删除失败，返回列表页面',U('Personal/waterproject'));
		}
	}
	/**
     * 节水企业后台管理的显示
     * 与新闻的功能基本类似，所以以下projectadd等不介绍了
     */
	public function watercompany(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		$saving = D('Savingshow');

		$count = $saving->count();
		if($count == 0)
		{
			$this->assign('nowp',"暂无记录，请点击添加节水企业添加您的第一篇文章吧~");
		}
		$page = new Page($count, 10);
		$show = $page->show();
		$list = $saving->order('Saving_time desc')->field(array('Saving_id','Saving_name','Saving_content','Saving_time'))->limit($page->firstRow, $page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->show();		
	}

	public function companyadd(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
    	$this->show();
	}
	public function companyadd_fun(){
		$saving = D('Savingshow');
		$name = $_POST['companyname'];
		//$no = $_POST['user_no'];
		if($saving->where("Saving_name = '$name'")->find()){
			echo "<script>alert '该标题名已存在';</script>";
		}else{
			$saving->Saving_name = $name;
			$saving->Saving_content = $_POST['container'];
			$saving->Saving_time = date("Y-m-d H:i:s");
			//将文章写入数据库
			if($saving->add()){
				$this->success('节水企业添加成功，返回列表页面',U('Personal/watercompany'));
				//echo "<script>alert '公告添加成功';</script>";
			}else{
				$this->error('节水企业添加失败，返回添加页面',U('Personal/companyadd'));
				//echo "<script>alert '公告添加失败';</script>";
			}
		}
	}
	public function companyres(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		
		$saving = D('Savingshow');
		$id = $_GET['id'];
		$nowart = $saving->where("Saving_id = '$id'")->find();
		$this->assign("nowart", $nowart);
		$this->show();
	}
	
	public function companyres_fun(){

		$saving = D('Savingshow');
		$data['Saving_name'] = $_POST['name'];
		$data['Saving_content'] = $_POST['text'];
		$map['Saving_id'] = $_POST['id'];
		if($saving->where($map)->save($data)){
			$this->success('节水企业信息修改成功，返回列表页面',U('Personal/watercompany'));
		}else{
			$this->error('节水企业信息修改失败，返回列表页面',U('Personal/watercompany'));
		}
	}
	public function companydel(){
		$saving = D('Savingshow');
		$map['Saving_id'] = $_GET['id'];
		if($saving->where($map)->delete()){
			$this->success('治水项目文章删除成功，返回列表页面',U('Personal/watercompany'));
		}else{
			$this->error('治水项目文章删除失败，返回列表页面',U('Personal/watercompany'));
		}
	}
	/**
     * 节水企业后台管理的显示
     * 与新闻的功能基本类似，所以以下projectadd等不介绍了
     */
	public function waterroad(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		$road = D('Watershow');

		$count = $road->count();
		if($count == 0)
		{
			$this->assign('nowp',"暂无记录，请点击添加治水项目添加您的河道信息吧~");
		}
		$page = new Page($count, 10);
		$show = $page->show();
		$list = $road->order('water_time desc')->field(array('water_id','water_name','water_Introduction','water_time'))->limit($page->firstRow, $page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->show();		
	}

	public function roadadd(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
    	$this->show();
	}
	public function roadadd_fun(){
		$road = D('Watershow');
		$name = $_POST['roadname'];
		//$no = $_POST['user_no'];
		if($road->where("water_name = '$name'")->find()){
			echo "<script>alert '该河道名已存在';</script>";
		}else{
			$road->water_name = $name;
			$road->water_Introduction = $_POST['container'];
			$road->water_time = date("Y-m-d H:i:s");
			//将文章写入数据库
			if($road->add()){
				$this->success('河道信息添加成功，返回列表页面',U('Personal/waterroad'));
				//echo "<script>alert '公告添加成功';</script>";
			}else{
				$this->error('河道信息添加失败，返回添加页面',U('Personal/roadadd'));
				//echo "<script>alert '公告添加失败';</script>";
			}
		}
	}
	public function roadres(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		
		$road = D('Watershow');
		$id = $_GET['id'];
		$nowart = $road->where("water_id = '$id'")->find();
		$this->assign("nowart", $nowart);
		$this->show();
	}
	
	public function roadres_fun(){

		$road = D('Watershow');
		$data['water_name'] = $_POST['name'];
		$data['water_Introduction'] = $_POST['text'];
		$map['water_id'] = $_POST['id'];
		if($road->where($map)->save($data)){
			$this->success('河道信息修改成功，返回列表页面',U('Personal/waterroad'));
		}else{
			$this->error('河道信息修改失败，返回列表页面',U('Personal/waterroad'));
		}
	}
	public function roaddel(){
		$road = D('Watershow');
		$map['water_id'] = $_GET['id'];
		if($road->where($map)->delete()){
			$this->success('河道信息删除成功，返回列表页面',U('Personal/waterroad'));
		}else{
			$this->error('河道信息删除失败，返回列表页面',U('Personal/waterroad'));
		}
	}
	/**
     * 省市简报后台管理的显示
     * 与新闻的功能基本类似，所以以下projectadd等不介绍了
     */
	public function waterprovince(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		$province = D('Provincesshow');

		$count = $province->count();
		if($count == 0)
		{
			$this->assign('nowp',"暂无记录，请点击添加省市简报吧~");
		}
		$page = new Page($count, 10);
		$show = $page->show();
		$list = $province->order('provinces_time desc')->field(array('provinces_id','provinces_title','provinces_content','provinces_time'))->limit($page->firstRow, $page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->show();		
	}

	public function provinceadd(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
    	$this->show();
	}
	public function provinceadd_fun(){
		$province = D('Provincesshow');
		$name = $_POST['provincename'];
		//$no = $_POST['user_no'];
		if($province->where("provinces_title = '$name'")->find()){
			echo "<script>alert '该简报名已存在';</script>";
		}else{
			$province->provinces_title = $name;
			$province->provinces_content = $_POST['container'];
			$province->provinces_time = date("Y-m-d H:i:s");
			//将文章写入数据库
			if($province->add()){
				$this->success('简报信息添加成功，返回列表页面',U('Personal/waterprovince'));
				//echo "<script>alert '公告添加成功';</script>";
			}else{
				$this->error('简报信息添加失败，返回添加页面',U('Personal/provinceadd'));
				//echo "<script>alert '公告添加失败';</script>";
			}
		}
	}
	public function provinceres(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		
		$province = D('Provincesshow');
		$id = $_GET['id'];
		$nowart = $province->where("provinces_id = '$id'")->find();
		$this->assign("nowart", $nowart);
		$this->show();
	}
	
	public function provinceres_fun(){

		$province = D('Provincesshow');
		$data['provinces_title'] = $_POST['name'];
		$data['provinces_content'] = $_POST['text'];
		$map['provinces_id'] = $_POST['id'];
		if($province->where($map)->save($data)){
			$this->success('简报信息修改成功，返回列表页面',U('Personal/waterprovince'));
		}else{
			$this->error('简报信息修改失败，返回列表页面',U('Personal/waterprovince'));
		}
	}
	public function provincedel(){
		$province = D('Provincesshow');
		$map['provinces_id'] = $_GET['id'];
		if($province->where($map)->delete()){
			$this->success('简报信息删除成功，返回列表页面',U('Personal/waterprovince'));
		}else{
			$this->error('简报信息删除失败，返回列表页面',U('Personal/waterprovince'));
		}
	}


	public function waterdocument(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		$document = D('Documentshow');

		$count = $document->count();
		if($count == 0)
		{
			$this->assign('nowp',"暂无记录，请点击添加政策文件吧~");
		}
		$page = new Page($count, 10);
		$show = $page->show();
		$list = $document->order('documents_time desc')->field(array('documents_id','documents_title','documents_content','documents_time'))->limit($page->firstRow, $page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->show();		
	}
	/**
     * 政策文件后台管理的显示
     * 与新闻的功能基本类似，所以以下projectadd等不介绍了
     */
	public function documentadd(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
    	$this->show();
	}
	public function documentadd_fun(){
		$document = D('Documentshow');
		$name = $_POST['documentname'];
		//$no = $_POST['user_no'];
		if($document->where("documents_title = '$name'")->find()){
			echo "<script>alert '该文件名已存在';</script>";
		}else{
			$document->documents_title = $name;
			$document->documents_content = $_POST['container'];
			$document->documents_time = date("Y-m-d H:i:s");
			//将文章写入数据库
			if($document->add()){
				$this->success('文件信息添加成功，返回列表页面',U('Personal/waterdocument'));
				//echo "<script>alert '公告添加成功';</script>";
			}else{
				$this->error('文件信息添加失败，返回添加页面',U('Personal/documentadd'));
				//echo "<script>alert '公告添加失败';</script>";
			}
		}
	}
	public function documentres(){
		/*
		 * 判断用户是否登录
		*/
		if(session('?username')){
			$username = session('username');
			$this->assign('username', $username);
		}else{
			$this->error("请先返回登录", U('Index/login'),1);
		}
		
		$document = D('Documentshow');
		$id = $_GET['id'];
		$nowart = $document->where("documents_id = '$id'")->find();
		$this->assign("nowart", $nowart);
		$this->show();
	}
	
	public function documentres_fun(){

		$document = D('Documentshow');
		$data['documents_title'] = $_POST['name'];
		$data['documents_content'] = $_POST['text'];
		$map['documents_id'] = $_POST['id'];
		if($document->where($map)->save($data)){
			$this->success('文件信息修改成功，返回列表页面',U('Personal/waterdocument'));
		}else{
			$this->error('文件信息修改失败，返回列表页面',U('Personal/waterdocument'));
		}
	}
	public function documentdel(){
		$document = D('Documentshow');
		$map['documents_id'] = $_GET['id'];
		if($document->where($map)->delete()){
			$this->success('文件信息删除成功，返回列表页面',U('Personal/waterdocument'));
		}else{
			$this->error('文件信息删除失败，返回列表页面',U('Personal/waterdocument'));
		}
	}
}