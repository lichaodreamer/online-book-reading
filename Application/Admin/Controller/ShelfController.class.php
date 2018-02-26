<?php
namespace Admin\Controller;
use Think\Controller;
class ShelfController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!isLogin())
		{
			$url=U("Admin/Admin/login");
            echo "<script> alert('请先登录！');parent.location.href='$url'; </script>";
		}
	}
    public function allshelf()
    {
        $shelfModel=M("shelf");
        $count=$shelfModel->count();//总数
        $page=new \Think\Page($count,5);
        $show=$page->show();             
        $shelf = $shelfModel->order('username')->limit($page->firstRow, $page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('shelf',$shelf);
    	$this->display();
    }
    public function delshelf(){
        $bid=I("bid");
        $username=I("username");
        $shelfModel=M("shelf");
        $data=array(
            "bid"=>$bid,
            "username"=>$username
        );
        $result=$shelfModel->where($data)->delete();
        $this->ajaxReturn($result);
    }
}