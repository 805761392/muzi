<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Base as BaseModel;

class Base extends Controller
{
  public function test(){
    $actionId = 'goodsManage';
    $name = BaseModel::query('select name from sidebar where actionId = :actionId',['actionId'=>$actionId]);
    return $name[0]['name'];
  }

  public function setSidebar($actionId){
      //1.根据$actionId获取pId和bId
      $idList = BaseModel::query('select pId,baseId,actionId from sidebar where actionId = :actionId',['actionId'=>$actionId]);

      //1.生成sidebar1
      $sidebar1 = BaseModel::query('select * from sidebar where level = 1 order by id');
      for($i=0;$i<count($sidebar1);$i++)
      {
        if($sidebar1[$i]['actionId'] == $idList[0]['baseId']){
          $sidebar1[$i]['class'] = 'nav-item active';
        }
      }
      $this -> view -> assign('sidebar1', $sidebar1);

      //2.生成sidebar2
      $sidebar2 = BaseModel::query('select * from sidebar where level = 2 and baseId = :bId order by id',['bId'=>$idList[0]['baseId']]);

      for($i=0;$i<count($sidebar2);$i++)
      {
        $id = $sidebar2[$i]['actionId'];
        $item = BaseModel::query('select * from sidebar where level = 3 and pId = :id',['id'=>$id]);
        $sidebar2[$i]['itemList'] = $item;
        if($sidebar2[$i]['actionId'] == $idList[0]['pId']){
          $sidebar2[$i]['class'] = 'nav-item active';
        }
        if(count($item)!=0){
          $sidebar2[$i]['url'] = 'javascript:;';
          for($j=0;$j<count($sidebar2[$i]['itemList']);$j++){
            if($sidebar2[$i]['itemList'][$j]['actionId'] == $idList[0]['actionId']){
              $sidebar2[$i]['itemList'][$j]['class'] = 'nav-item active';
            }
          }
        }

      }
      $this -> view -> assign('sidebar2', $sidebar2);

      $baseName = BaseModel::query('select name from sidebar where actionId = :actionId',['actionId'=>$idList[0]['baseId']]);
      $this -> view -> assign('baseName', $baseName[0]['name']);
      $title = BaseModel::query('select name from sidebar where actionId = :actionId',['actionId'=>$actionId]);
      $this -> view -> assign('title', $title[0]['name']);
  }
}
