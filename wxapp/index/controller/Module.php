<?php
namespace app\index\controller;

class Module
{
    public function display()
    {
      return '<span class="top-view">
          <a href="./index.php?c=account&a=display&do=switch&uniacid=322&version_id=29&type=4" title="Hey折扣 1.2" target="_blank">
    <i class="wi wi-wxapp"></i>Hey折扣 1.2		</a>
</span>
<span class="dropdown">
<a href="javascript:;" class="dropdown-icon" data-toggle="dropdown" aria-expanded="false"><i class="wi wi-angle-down"></i></a>
<ul class="dropdown-menu dropdown-menu-right" role="menu">
      <li>
    <a href="./index.php?c=module&a=display&do=switch&uniacid=322&module_name=xfydm_wuzhe&version_id=29">
                      <span><i class="wi wi-wxapp"></i>Hey折扣 1.2</span>			</a>
  </li>
    </ul>
</span>';
    }
}
