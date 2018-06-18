<?php
namespace app\index\controller;

class System extends Base
{
    public function home()
    {
        return $this->fetch();
    }

    public function wxapp()
    {
        return $this->fetch();  //渲染小程序主页
    }

    public function mall()
    {
        return $this->fetch();  //渲染小程序商城高级版主页
    }

    public function WechatAccount()
    {
        return $this->fetch();  //渲染微信公众号主页
    }
}
