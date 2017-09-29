<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Add extends Controller 
{
    public function index()
    {
        return $this -> fetch();
    }

    public function add()
    {
        if (request() -> isPost()) {
            $data = [
                'catename' => input('title'),
            ];
            if (Db::name('cate') -> insert($data)) {
                return $this -> success('添加成功','lst/lst');
            }else{
                return $this -> error('添加失败');
            }
            return;
        }
        return $this -> fetch();
    }
}