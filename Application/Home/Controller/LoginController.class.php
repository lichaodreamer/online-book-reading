<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	//首页
    public function index(){
        $this->display();
    }
    //login
    public function login(){
        if(IS_POST){
        	$username=I("username");
        	$password=md5(I("password"));
        	$state=I("_spring_security_remember_me");
        	$userModel=M('user');
        	$result=$userModel->where(array('username'=>$username,'password'=>$password))->select();
        	session("username",$username);
        	// if($state=="on"){
        	// 	session("username",$username);
        	// }else{
        	// 	session("username",null);
        	// }
        	if($result){
        		$this->redirect("Home/Index/index");
        	}
        }
        $this->display();
    }
    
   
}
