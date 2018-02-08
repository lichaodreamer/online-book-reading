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
    public function newuser()
    {
        $colId=I("colId");
        $nickname=I("nickname");
        $username=I("username");
        $password=I("password");
        $sex=I("sex");
        $tel=I("tel");
        $email=I("email");
        $colId=($colId==0)?"用户":"管理员";
        $data = array(
            "identity"=>$colId,
            "nickname"=>$nickname,
            "username"=>$username,
            "password"=>$password,
            "usex"=>$sex,
            "tel"=>$tel,
            "email"=>$email
        );
        $userModel=M("user");
        $result=$userModel->add($data);
        if($result){
            $this->redirect('Admin/user/alluser');
        }
    }
}