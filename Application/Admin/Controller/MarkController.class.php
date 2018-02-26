<?php
namespace Admin\Controller;
use Think\Controller;
class MarkController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!isLogin())
		{
			$url=U("Admin/Admin/login");
            echo "<script> alert('请先登录！');parent.location.href='$url'; </script>";
		}
	}
    public function allmark()
    {
        $markModel=M("mark");
        $count=$markModel->count();//总数
        $page=new \Think\Page($count,5);
        $show=$page->show();             
        $mark = $markModel->limit($page->firstRow, $page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('mark',$mark);
    	$this->display();
    }
    public function delmark(){
        $bid=I("bid");
        $username=I("username");
        $cid=I("cid");
        $markModel=M("mark");
        $data=array(
            "bid"=>$bid,
            "username"=>$username,
            "cid"=>$cid
        );
        $result=$markModel->where($data)->delete();
        $this->ajaxReturn($data);
    }
}