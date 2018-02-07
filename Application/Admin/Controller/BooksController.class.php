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
   
}