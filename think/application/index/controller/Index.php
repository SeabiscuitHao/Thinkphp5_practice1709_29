<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\index\model\Index as IndexModel;
class Index extends Controller  
{
    public function index()
    {
        return $this -> fetch();
    }

    public function lst()
    {
    	$list = IndexModel::paginate(3);
    	$this -> assign('list', $list);//assgin将变量从控制器 assgin到模板
    	return $this -> fetch();
    }
}