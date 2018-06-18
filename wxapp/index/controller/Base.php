<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Base as BaseModel;

class Base extends Controller
{
    public function test(){
        $action='support';
        $menuList = BaseModel::query('select * from panelmenu order by id');
        return json($menuList);
    }
    public function getMenu($action){
        $title = BaseModel::query('select name from panelmenu where action = :action',[$action]);
        $this -> view -> assign('title', $title[0]['name']);

        $menuList = BaseModel::query('select * from panelmenu order by id');
        $this -> view -> assign('menuList', $menuList);
    }
}
