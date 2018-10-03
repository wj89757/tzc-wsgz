<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
class IndexController extends Controller {
    /*
    *   治来水官网-主页面的显示
    *   各个链接的跳转显示
    *   首页投诉信息展示，综合信息会展，治水百科逻辑功能的实现(包括数据库的读取)
    */
    public function index(){
        // 判断用户是否登陆
        if(session('?username')){
            $username = session('username');
            $this->assign('username', $username);
        }
        // 用大D方法连接think_newshow数据库
        $newshow = D('Newshow');
        // 获取点击量前十二的文章title和文章id
        $hitlist = $newshow->order('message_CTR desc')->field(array('message_title','message_id'
            ))->limit(12)->select();
        // 将从数据库按特定条件取出的值传到view显示
        $this->assign('hitlist', $hitlist);
        // 页面显示
        $this->show();
    }
    /*
    *   投诉信息展示
    *   用户在线投诉后经过后台筛选通过的投诉的展示
    */
    public function comshow(){
    	// 判断用户是否登陆
        if(session('?username')){
            $username = session('username');
            $this->assign('username', $username);
        }

        $complain = D('Complaintshow');
        // 判断是否后台已经通过
        $map['Complian_yorn'] = '1';

        $hitlist = $complain->where($map)->order('Complian_time desc')->field(array('Complian_title','Complian_time','Complian_imag','Complian_content'))->limit(15)->select();

        $this->assign('title','治水官网-投诉信息展示');
        $this->assign('hitlist', $hitlist);

    	$this->show();
    }
    /*
    *   综合信息会展
    *   后台管理上传的河道信息、节水企业、治水项目的显示
    */
    public function infoshow(){
    	// 判断用户是否登陆
        if(session('?username')){
            $username = session('username');
            $this->assign('username', $username);
        }
        // 将模块中title名字传值，因为页面是用的public中layout的模板定义
        $this->assign('title','治水官网-综合信息会展');
    	$project = D('Projectshow');
        // 通过时间降序来找出id，name，content，time
        $list = $project->order('project_time desc')->field(array('project_id','project_name','project_content','project_time'))->select();
        // 将list键值对传过去
        $this->assign('list', $list);
        // 河道信息
        $road = D('Watershow');
        $rist = $road->order('water_time desc')->field(array('water_id','water_name','water_Introduction','water_time'))->select();
        $this->assign('rist', $rist);
        // 节水企业
        $saving = D('Savingshow');
        $sist = $saving->order('Saving_time desc')->field(array('Saving_id','Saving_name','Saving_content','Saving_time'))->select();
        $this->assign('sist', $sist);


        $this->show();
    }
    /*
    *   治水百科
    *   后台管理上传的省市政府文件、省市简报、联系方式的显示
    */
    public function pediashow(){
    	// 判断用户是否登陆
        if(session('?username')){
            $username = session('username');
            $this->assign('username', $username);
        }
        $this->assign('title','治水官网-治水百科');

        $province = D('Provincesshow');
        $list = $province->order('provinces_time desc')->field(array('provinces_id','provinces_title','provinces_content','provinces_time'))->select();
        $this->assign('list', $list);

        $document = D('Documentshow');
        $dist = $document->order('documents_time desc')->field(array('documents_id','documents_title','documents_content','documents_time'))->select();
        $this->assign('dist', $dist);


    	$this->show();
    }
    /*
    *   管理员登录
    *   判断管理员的账号密码是否正确
    */
    public function login()
    {
        if(IS_POST)
        {
            $username = I('username');
            $password = I('password');
            $user = D('User');
            $condition['name']=$username;
            $pd = $user->where($condition)->getField('password');
            if($pd == $password)
            {
                session('username',$username);
                $this->success('管理员登录成功',U('Personal/index'));
            }
            else
            {
                $this->error('密码错误',$this->site_url,1);
            }
        }
        else
        {
            $this->display();
        }
    }
    /*
    *   管理员登录后注销
    *   通过点击注销按钮，将username的session值清空
    */
    public function logout()
    {
        $result = session('username', null);
        if($result)
        {
            $this->error("注销失败，返回首页");
        }
        else
        {
            $this->success("注销成功，返回首页", U('Index/index'));
        }
    }
    /*
    *   在线投诉的图片上传
    *   以及其他内容的提交
    *   添加到数据库
    */
    public function upload()
    {
        $upload = new Upload();
        $upload->maxSize = 3145728; // 3M
        $upload->exts = array('jpg','gif','png','jpeg','rar','zip','doc','docx','txt');
        $upload->savePath = '/';
        $upload->subName = array('date','Ymd');
        $info = $upload->upload();
        if(!$info)
        {
            $this->error($upload->getError());
        }
        // 保存表单数据 包括附件数据
        $complain = D("Complaintshow"); 
        foreach($info as $file){
            $complain->Complian_imag = '/wsgz/Uploads'.$file['savepath'].$file['savename'];
        } 
        $complain->Complian_title = $_POST['upriver'].'的污染情况'; 
        $complain->Complian_choose = $_POST['upreason'];
        $complain->Complian_content = $_POST['upcontent']; 
        $complain->Complian_time = date("Y-m-d H:i:s"); 
        $complain->Complian_name = $_POST['upname'];
        $complain->Complian_tele = $_POST['uptel'];
        $complain->Complian_place = $_POST['upriver'];
        $complain->add(); // 写入用户数据到数据库
        $this->success('添加成功',U('Index/comshow'));
    }
}
