<?php
namespace Admin\Controller;
use Think\Controller;
class CommentController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!isLogin())
		{
			$url=U("Admin/Admin/login");
            echo "<script> alert('请先登录！');parent.location.href='$url'; </script>";
		}
	}
    public function allcomment()
    {
        $commentModel=M("comment");
        $count=$commentModel->count();//总数
        $page=new \Think\Page($count,5);
        $show=$page->show();             
        $comment=$commentModel->limit($page->firstRow, $page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('comment',$comment);
    	$this->display();
    }
    public function delcom(){
        $bid=I("bid");
        $username=I("username");
        $ctime=I("ctime");
        $commentModel=M("comment");
        $data=array(
            "bid"=>$bid,
            "username"=>$username,
            "ctime"=>$ctime
        );
        $result=$commentModel->where($data)->delete();
        $this->ajaxReturn($result);
    }
}