<?php
namespace app\index\controller;
class Order extends Base
{

    public function orderManage()
    {
        $this ->setSidebar('orderIndex');
        return $this->fetch('orderIndex');  //订单管理
    }

    public function orderIndex()
    {
        $this ->setSidebar('orderIndex');
        return $this->fetch();  //订单列表
    }

    public function orderOffline()
    {
        $this ->setSidebar('orderOffline');
        return $this->fetch();  //自提订单
    }

    public function orderRefund()
    {
        $this ->setSidebar('orderRefund');
        return $this->fetch();  //售后订单
    }

    public function commentManage()
    {
        $this ->setSidebar('commentManage');
        return $this->fetch();  //评价管理
    }
}
