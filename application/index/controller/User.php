<?php
namespace app\index\controller;
use think\Request;
use app\index\model\User as UserModel;
class User extends Base
{
    public function login()
    {
        return $this->fetch();  //渲染登录页面
    }

    //登录验证 $this -> validate($data,$rule,$msq)
    public function checkLogin(Request $request)
    {
      //初始化返回参数
      $status = 1;
      $result = '';
      $data = $request -> param();

      //创建验证规则
      $rule = [
        'name|用户名' => 'require',
        'password|密码' => 'require'
      ];

      //自定义验证失败的提示信息
      $msg = [
        'name' => ['require'=>'用户名不能为空,请检查'],
        'password' => ['require'=>'密码不能为空,请检查']
      ];

      //进行验证
      $result = $this -> validate($data,$rule,$msg);

      //通过验证后,进行数据表查询
      //此处必须全等===才可以,因为验证不通过,$result保存错误信息字符串,返回非零
      if($result === true){
        //查询条件
        $map = [
          'name' => $data['name'],
          'password' => md5($data['password'])
        ];

        //数据表查询,返回模型对象
        $user = UserModel::get($map);
        if(null === $user){
            $result = '没有该用户,请检查';
        }else{
          $status = 0;
          $result = '验证通过,点击[确定]后进入后台';
        }
      }

      return ['status'=>$status, 'message'=>$result,'data'=>$data];
    }


    public function find_password()
    {
        return $this->fetch();  //渲染忘记密码页面
    }

    public function register()
    {
        return $this->fetch();  //渲染注册页面
    }
}
