<?php
namespace app\index\controller;
class Mall extends Base
{

    public function mallManage()
    {
        $this ->setSidebar('wechatSetting');
        return $this->fetch('wechatSetting');  //商城管理
        // return json($sidebar2);
    }

    public function wechatSetting()
    {
        $this ->setSidebar('wechatSetting');
        return $this->fetch();  //微信设置
    }

    public function mallSetting()
    {
        $this ->setSidebar('mallSetting');
        return $this->fetch();  //商城设置
    }

    public function tplSetting()
    {
        $this ->setSidebar('tplSetting');
        return $this->fetch();  //模板设置
    }

    public function sms()
    {
        $this ->setSidebar('sms');
        return $this->fetch();  //短信通知
    }

    public function mail()
    {
        $this ->setSidebar('mail');
        return $this->fetch();  //邮件通知
    }

    public function postageRules()
    {
        $this ->setSidebar('postageRules');
        return $this->fetch();  //运费规则
    }

    public function freeDeliveryRules()
    {
        $this ->setSidebar('freeDeliveryRules');
        return $this->fetch();  //包邮规则
    }

    public function express()
    {
        $this ->setSidebar('express');
        return $this->fetch();  //单面打印规则
    }

    public function ticket()
    {
        $this ->setSidebar('ticket');
        return $this->fetch();  //小票打印
    }

    public function regionLimitation()
    {
        $this ->setSidebar('regionLimitation');
        return $this->fetch();  //区域购买限制
    }

    public function slide()
    {
        $this ->setSidebar('slide');
        return $this->fetch();  //轮播图
    }

    public function homeNav()
    {
        $this ->setSidebar('homeNav');
        return $this->fetch();  //导航图标
    }

    public function homeBlock()
    {
        $this ->setSidebar('homeBlock');
        return $this->fetch();  //图片魔方
    }

    public function navbar()
    {
        $this ->setSidebar('navbar');
        return $this->fetch();  //导航栏
    }

    public function homePage()
    {
        $this ->setSidebar('homePage');
        return $this->fetch();  //页面布局
    }

    public function userCenter()
    {
        $this ->setSidebar('userCenter');
        return $this->fetch();  //用户中心
    }

    public function orderForm()
    {
        $this ->setSidebar('orderForm');
        return $this->fetch();  //下单表单
    }

    public function wxappPages()
    {
        $this ->setSidebar('wxappPages');
        return $this->fetch();  //小程序页面
    }

    public function copyright()
    {
        $this ->setSidebar('copyright');
        return $this->fetch();  //版权设置
    }

    public function orderMessage()
    {
        $this ->setSidebar('orderMessage');
        return $this->fetch();  //消息管理
    }


}
