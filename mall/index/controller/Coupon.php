<?php
namespace app\index\controller;
class Coupon extends Base
{

    public function couponIndex()
    {
        $this ->setSidebar('couponIndex');
        return $this->fetch();  //优惠券管理
    }

    public function autoSend()
    {
        $this ->setSidebar('autoSend');
        return $this->fetch();  //自动发放设置
    }

    public function card()
    {
        $this ->setSidebar('card');
        return $this->fetch();  //卡券
    }

    public function recharge()
    {
        $this ->setSidebar('recharge');
        return $this->fetch();  //充值
    }

}
