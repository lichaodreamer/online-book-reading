<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller{
	public function login(){
		if (IS_POST) {
            $userModel = M('user');
            $data = array(
                "username" => I("username"),
                "password" => I("password")
            );
            // dump($data);die;
            $result = $userModel->where($data)->count();
            if ($result > 0) {
                session("username", I("username"));
                $this->success("登录成功！", U("Admin/index/index"));
            }
            else {
                $this->error("用户名或密码不正确");
            }
        }
        else {
            $this->display();   
        }		
	}
	public function logout()
	{
		if(session_destroy())
		{
			$url=U("Admin/Admin/login");
       		echo "<script> alert('退出成功！');parent.location.href='$url'; </script>";
		}

	}
	public function password_edit()
	{
		if(IS_POST)
		{
			if(I("spassword")==I("repassword"))
			{
				//$shopname=$_SESSION['shopname'];
				$adminModel=M("sellertab");
				if($adminModel->create())
				{
					$sid=I("sid");
					if($adminModel->where("sid=$sid")->save())
					{
						$url=U("Admin/Index/index");
       					echo "<script> alert('修改成功！');parent.location.href='$url'; </script>";
					}
				}
			}
			else
			{
				echo <<<STR
				                <script>
				                alert("密码与确认密码不一致！");
				                window.history.go(-1);
				                </script>
STR;
			}
		}
		else
		{
			$susername=$_SESSION['susername'];
			$adminModel=M("sellertab");
			$condition['susername']=$susername;
			$data=$adminModel->where($condition)->find();
			$this->assign("sellertab",$data);
			$this->display();
		}
		
	}
}
