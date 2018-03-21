<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	//首页
    public function index(){
        $username=session("username");
        if($username){
            $userModel=M('user');
            $user=$userModel->where(array('username'=>$username))->select();   
        }
        $bookModel=M('book');
        $book=$bookModel->limit(10)->select();
        $this->assign('user',$user);
        $this->assign('book',$book);
        $this->display();
    }
    // 图书列表页
    public function booklist(){
        import('Think.Page'); 
        $id=I("id");
        if(is_int($id)){
            $data = array(
                "btype"=>$id
            );    
        }else{
            $data['bname|btype']=array('like',"%$id%");
        };
        $bookModel=M('book');
        // 分页
        $count=$bookModel->where($data)->count();//总数
        $page=new \Think\Page($count,5);
        $show=$page->show();             
        $book = $bookModel->where($data)->limit($page->firstRow, $page->listRows)->select();
        $this->assign('book',$book);
        $this->assign('page',$show);
        // dump($book);die;
    	$this->display();
    }
    // 图书内容页，多表联合查询
    public function content(){
        $id=I("id");
        $bookModel=M('book');
        $commentModel=M('comment');
        $charModel=M('charpter');
        $data = array(
            "bid"=>$id,
            "_logic"=>'OR',
            "bname"=>$id
        );
        $book=$bookModel->where($data)->select();//一本书
        $char=$charModel->where($data)->select();//章节信息
        $books=$bookModel->where(array("btype"=>$book[0]["btype"]))->select();//同类型
        $comment=$commentModel->where($data)->select();//评论
        $this->assign('book',$book);
        $this->assign('books',$books);
        $this->assign('char',$char);
        $this->assign('comment',$comment);
    	$this->display();
    }
    // 图书阅读页面
    public function reading(){
        $id=I("id");
        session("username","lichao");
        $username=session("username");
        $charpterModel=M('charpter');
        $markModel=M('mark');
        if(I("cid")==""){
            $data=array(
                "bid"=>$id,
                "username"=>$username
            );
            $newmark=$markModel->where($data)->order('cid desc')->limit(0,1)->field('cid')->select();//判断最新书签
            if(($newmark[0]['cid']==null)||($username="")){
                $charpter=$charpterModel->where(array("bid"=>$id))->limit(0,1)->select();
                $charpter[0]['mark']=0;
            }else{
                $charpter=$charpterModel->where(array("bid"=>$id,"cid"=>$newmark[0]['cid']))->select();
                $charpter[0]['mark']=1;
            };
        }else{
            $cid=I("cid");
            $charpter=$charpterModel->where(array("bid"=>$id,"cid"=>$cid))->select();
        }
        $this->assign('charpter',$charpter);
    	$this->display();
    }
    // 个人页面
    public function person(){
        // 自动验证是否登录
        $id=I("id");//判断是哪个小页签
        session("username","lichao");
        $username=session("username");
        $data=array(
           "username"=>$username
        );
        if(strpos($id,'mycenter')==false){
            $userModel=M("user");//用户
            $user=$userModel->where($data)->select();
            $this->assign('user',$user);
        }
        if(strpos($id,'mymark')==false){
            $markModel=M("mark");//书签
            $markcount=$markModel->where($data)->count();//书签总数
            $page=new \Think\Page($markcount,5);
            $mark=$markModel->where($data)->limit($page->firstRow.','.$page->listRows)->select();
            $markshow=$page->show();
            $this->assign('mark',$mark);
            $this->assign('markpage',$markshow);
        }
        if(strpos($id,'myshelf')==false){
            $shelfModel=M("shelf");//书架
            $shelfcount=$shelfModel->where($data)->count();//书架总数
            $page=new \Think\Page($shelfcount,5);
            $shelf=$shelfModel->where($data)->limit($page->firstRow.','.$page->listRows)->select();
            $shelfshow=$page->show();
            $this->assign('shelf',$shelf);
            $this->assign('shelfpage',$shelfshow);
        }
        if(strpos($id,'mycomment')==false){
            $commentModel=M("comment");//评论
            $commentcount=$commentModel->where($data)->count();//书架总数
            $page=new \Think\Page($commentcount,5);
            $comment=$commentModel->where($data)->limit($page->firstRow.','.$page->listRows)->select();
            $commentshow=$page->show();
            $this->assign('comment',$comment);
            $this->assign('commentpage',$commentshow);
        } 
        $this->display();
    }
    // 网站介绍页面
    public function introduce(){
        $this->display();
    }
    //章节跳转
    public function jumpchar(){
        $bid=I("bid");
        $cid=I("cid");
        $charpterModel=M('charpter');
        $count=$charpterModel->where(array("bid"=>$bid))->count();
        if($cid>=$count){
            $this->ajaxReturn(1);
        }else{
            $data=array(
                "bid"=>$bid,
                "cid"=>$cid
            );
            $charpter=$charpterModel->where($data)->select();
            $this->ajaxReturn($charpter);
        };
        //'callback' => U('Home/index/index')
    }
    // 添加书签
    public function addmark(){
        $bid=I("bid");
        $cid=I("cid");
        $username=session("username");
        $bname=I("bname");
        $cname=I("cname");
        $mname=I("mname");
        $mtime=date("Y-m-d H:m:s");
        $data=array(
            "bid"=>$bid,
            "cid"=>$cid,
            "username"=>$username,
            "bname"=>$bname,
            "cname"=>$cname,
            "mname"=>$mname,
            "mtime"=>$mtime
        );
        $markModel=M('mark');
        if($markModel->where(array("bid"=>$bid,"cid"=>$cid))->select()){
            $result=0;//已经存在
        }else{//不存在书签
            $result=$markModel->data($data)->add();
        }
        $this->ajaxReturn($result);
    }
    // 添加书架
    public function addshelf(){
        $bid=I("bid");
        $username=session("username");
        $bname=I("bname");
        $bauthor=I("bauthor");
        $btype=I("btype");
        $stime=date("Y-m-d H:m:s");
        $data=array(
            "bid"=>$bid,
            "username"=>$username,
            "bname"=>$bname,
            "bauthor"=>$bauthor,
            "btype"=>$btype,
            "stime"=>$stime
        );
        $shelfModel=M("shelf");
        if($shelfModel->where(array("bid"=>$bid,"username"=>$username))->select()){
            $result=0;//已经存在
        }else{//不存在书签
            $result=$shelfModel->data($data)->add();
        }
        $this->ajaxReturn($result);
    }
    // 发表评论
    public function addcomment(){
        $bid=I("bid");
        session("username","lichao");
        $username=session("username");
        $userModel=M("user");
        $nickname=$userModel->where(array("username"=>$username))->select();
        $bname=I("bname");
        $bauthor=I("bauthor");
        $btype=I("btype");
        $comment=I("comment");
        $ctime=date("Y-m-d H:m:s");//2018-01-31 12:01:00
        $data=array(
            "bid"=>$bid,
            "username"=>$username,
            "bname"=>$bname,
            "bauthor"=>$bauthor,
            "btype"=>$btype,
            "nickname"=>$nickname[0]["nickname"],
            "comment"=>$comment,
            "ctime"=>$ctime
        );
        $commentModel=M("comment");
        $hiscomment=$commentModel->where(array("bid"=>$bid,"username"=>$username))->order('ctime desc')->limit(0,1)->field(ctime)->select();
        $diff=strtotime($ctime)-strtotime($hiscomment[0]["ctime"]);
        if($diff<300){
            $result[0]=0;//已经存在
        }else{
            $result[0]=$commentModel->data($data)->add();
            $result[1]=$data;
        }
        $this->ajaxReturn($result);
    }
    // 修改个人信息
    public function editinfo(){
        $nickname=I("nickname");
        $tel=I("tel");
        $email=I("email");
        $username=session("username");
        $data=array(
            "username"=>$username,
            "nickname"=>$nickname,
            "tel"=>$tel,
            "email"=>$email
        );
        $userModel=M("user");
        $result=$userModel->where(array("username"=>$username))->save($data); 
        $this->ajaxReturn($result);
    }
    // 修改书签
    public function editmark(){
        $bid=I("bid");
        $cid=I("cid");
        $username=session("username");
        $mname=I("mname");
        $where=array(
            "bid"=>$bid,
            "cid"=>$cid,
            "username"=>$username
        );
        $data=array(
            "mname"=>$mname
        );
        $markModel=M("mark");
        $result=$markModel->where($where)->save($data); 
        $this->ajaxReturn($result);
    }
    // 删除书签
    public function delmarkurl(){
        $bid=I("bid");
        $cid=I("cid");
        $username=session("username");
        $data=array(
            "bid"=>$bid,
            "cid"=>$cid,
            "username"=>$username
        );
        $markModel=M("mark");
        $result=$markModel->where($data)->delete(); 
        $this->ajaxReturn($result);
    }
    // 删除书架
    public function delshelfurl(){
        $bid=I("bid");
        $username=session("username");
        $data=array(
            "bid"=>$bid,
            "username"=>$username
        );
        $shelfModel=M("shelf");
        $result=$shelfModel->where($data)->delete(); 
        $this->ajaxReturn($result);
    }
   // 注销登录
    public function signout(){
        session("username",null);
        $this->redirect("Home/Index/index");
    }
}
