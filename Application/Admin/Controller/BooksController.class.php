<?php
namespace Admin\Controller;
use Think\Controller;
class BooksController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!isLogin())
		{
			$url=U("Admin/Admin/login");
            echo "<script> alert('请先登录！');parent.location.href='$url'; </script>";
		}
	}
    public function allbook()
    {
        $bookModel=M("book");
        $count=$bookModel->count();//总数
        $page=new \Think\Page($count,5);
        $show=$page->show();             
        $book = $bookModel->limit($page->firstRow, $page->listRows)->select();
        $this->assign('page',$show);
        $this->assign('book',$book);
    	$this->display();
    }
    //删除图书
    public function delbook(){
        $bid=I("bid");
        $bookModel=M("book");
        $charpterModel=M("charpter");
        $data=array(
            "bid"=>$bid
        );
        $result=$bookModel->where($data)->delete();
        $result=$charpterModel->where($data)->delete();
        $this->ajaxReturn($bid);
    }
    //编辑图书
    public function editbook(){
        if(IS_POST){
            $bid=I("bid");
            $bname=I("bname");
            $bauthor=I("bauthor");
            $btype=I("btype");
            $bpress=I("bpress");
            $bnum=I("bnum");
            $bscore=I("bscore");
            $bintroduction=I("bintroduction");
            $btime=date("Y-m-d");
            $bphoto=I("bimage");
            $data = array(
                "bname"=>$bname,
                "bauthor"=>$bauthor,
                "btype"=>$btype,
                "bpress"=>$bpress,
                "bnumword"=>$bnum,
                "bscore"=>$bscore,
                "bintroduction"=>$bintroduction,
                "btime"=>$btime,
                "bphoto"=>$bphoto
            );
            $bookModel=M("book");
            $result=$bookModel->where(array("bid"=>$bid))->save($data); 
            // dump($result);die;
            $this->redirect('Admin/books/allbook');
        }else{
            $bid=I("id");
            $bookModel=M("book");
            $data=array(
                "bid"=>$bid
            );
            $book=$bookModel->where($data)->select();
            $this->assign("book",$book);
            // dump($book);die;
            $this->display();
        }
    }
   
}