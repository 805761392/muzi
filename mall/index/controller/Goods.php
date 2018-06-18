<?php
namespace app\index\controller;
class Goods extends Base
{

    public function goodsManage()
    {
        $this ->setSidebar('goodsIndex');
        return $this->fetch('goodsManage');  //商品管理
        // return json($sidebar2);
    }

    public function classification()
    {
        $this ->setSidebar('classification');
        return $this->fetch();  //分类
    }


}
