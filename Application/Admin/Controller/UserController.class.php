<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!isLogin())
		{
			$url=U("Admin/Admin/login");
            echo "<script> alert('请先登录！');parent.location.href='$url'; </script>";
		}
	}
    public function alluser()
    {
        $userModel=M("user");
        $count=$userModel->count();//总数
        $page=new \Think\Page($count,5);
        $show=$page->show();             
        $user = $userModel->limit($page->firstRow, $page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('user',$user);
    	$this->display();
    }
    //添加账号
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
        $this->redirect('Admin/user/alluser');
    }
    //删除账号
    public function deluser(){
        $username=I("username");
        $userModel=M("user");
        $data=array(
            "username"=>$username
        );
        $result=$userModel->where($data)->delete();
        $this->ajaxReturn($result);
    }
    // 编辑账号
    public function edituser(){
        if(IS_POST){
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
            $result=$userModel->where(array("username"=>$username))->save($data); 
            $this->redirect('Admin/user/alluser');
        }else{
            $username=I("user");
            $userModel=M("user");
            $data=array(
                "username"=>$username
            );
            $user=$userModel->where($data)->select();
            $this->assign("user",$user);
            $this->display();
        }
    }
}