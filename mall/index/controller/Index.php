<?php
namespace app\index\controller;
use app\index\model\Base as BaseModel;
class Index extends Base
{
    public function index()
    {
        $sidebar1 = BaseModel::query('select * from sidebar where level = 1 order by id');
        $this -> view -> assign('sidebar1', $sidebar1);
        $this -> view -> assign('title', '我的商城');
        return $this->fetch();
    }
}
