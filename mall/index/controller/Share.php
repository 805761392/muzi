<?php
namespace app\index\controller;
class Share extends Base
{

    public function shareIndex()
    {
        $this ->setSidebar('shareIndex');
        return $this->fetch();  //分销商
    }

    public function shareOrder()
    {
        $this ->setSidebar('shareOrder');
        return $this->fetch();  //分销订单
    }

    public function shareCash()
    {
        $this ->setSidebar('shareCash');
        return $this->fetch();  //分销提现
    }

    public function basicSetting()
    {
        $this ->setSidebar('basicSetting');
        return $this->fetch();  //基础设置
    }

    public function moneySetting()
    {
        $this ->setSidebar('moneySetting');
        return $this->fetch();  //佣金设置
    }

    public function shareCustom()
    {
        $this ->setSidebar('shareCustom');
        return $this->fetch();  //自定义设置
    }
}
