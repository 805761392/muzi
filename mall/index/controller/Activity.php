<?php
namespace app\index\controller;
class Activity extends Base
{
  // 秒杀设置  ##################################################################
  public function openTime()
  {
      $this ->setSidebar('openTime');
      return $this->fetch();  //开放时间
  }

  public function SecKillIndex()
  {
      $this ->setSidebar('SecKillIndex');
      return $this->fetch();  //秒杀设置
  }

  public function goodsManage()
  {
      $this ->setSidebar('goodsManageSecKill');
      return $this->fetch();  //商品管理
  }

  public function goodsSetting()
  {
      $this ->setSidebar('goodsSettingSecKill');
      return $this->fetch();  //商品设置
  }

  public function orderList()
  {
      $this ->setSidebar('orderListSecKill');
      return $this->fetch();  //订单列表
  }

  public function orderOffline()
  {
      $this ->setSidebar('orderOfflineSecKill');
      return $this->fetch();  //自提订单
  }

  public function orderRefund()
  {
      $this ->setSidebar('orderRefundSecKill');
      return $this->fetch();  //售后订单
  }

  public function comment()
  {
      $this ->setSidebar('commentSecKill');
      return $this->fetch();  //评价管理
  }


}
