<?php
namespace app\index\controller;
class User extends Base
{

    public function userIndex()
    {
        $this ->setSidebar('userIndex');
        return $this->fetch();  //用户列表
    }

    public function userClerk()
    {
        $this ->setSidebar('userClerk');
        return $this->fetch();  //核销员
    }

    public function userLevel()
    {
        $this ->setSidebar('userLevel');
        return $this->fetch();  //会员等级
    }

    public function userRecharge()
    {
        $this ->setSidebar('userRecharge');
        return $this->fetch();  //余额充值记录
    }

    public function userBuy()
    {
        $this ->setSidebar('userBuy');
        return $this->fetch();  //会员购买记录
    }
}
