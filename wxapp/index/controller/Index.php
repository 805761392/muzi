<?php
namespace app\index\controller;

class Index extends Base
{
    public function platform()
    {
        $this -> getMenu('support');
        $this -> view -> assign('title', '大毛科技管理平台');
        return $this->fetch();  //应用入口
    }

    public function setting()
    {
        $this -> getMenu('support');
        $this -> view -> assign('title', '参数设置');
        return $this->fetch();  //参数设定
    }

    public function support()
    {
        $this -> getMenu('support');
        return $this->fetch();  //技术支持
    }

    public function pointMall()
    {
        $this -> getMenu('pointMall');
        return $this->fetch();  //积分商城
    }

    public function busEnter()
    {
        $this -> getMenu('busEnter');
        return $this->fetch();  //商家入驻
    }

    public function settlement()
    {
        $this -> getMenu('settlement');
        return $this->fetch();  //结算统计
    }

    public function indexSetting()
    {
        $this -> getMenu('indexSetting');
        return $this->fetch();  //首页设置
    }

    public function cardManage()
    {
        $this -> getMenu('cardManage');
        return $this->fetch();  //卡片管理
    }

    public function Statistics()
    {
        $this -> getMenu('Statistics');
        return $this->fetch();  //业务统计
    }

    public function busManage()
    {
        $this -> getMenu('busManage');
        return $this->fetch();  //商家管理
    }

    public function typeManage()
    {
        $this -> getMenu('typeManage');
        return $this->fetch();  //分类管理
    }

    public function memberManage()
    {
        $this -> getMenu('memberManage');
        return $this->fetch();  //会员管理
    }
}
