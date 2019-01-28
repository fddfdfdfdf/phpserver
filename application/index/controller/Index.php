<?php
namespace app\index\controller;
use app\index\model\MyUser;
use think\Db;
use think\db\Query;
use think\Controller;
use Redis\RedisPackage;
class Index extends Controller
{
    public function index()
    {
        return 'test';
    }

    public function hello($name = 'ThinkPHP5')
    {
//        return 'hello,' . $name;\
          $userName = 'ydp';
          $pwd = '123456gd';
          $user = Db::query("select * from my_user where u_name='".$userName."'and u_pwd='".$pwd."'");
          if($user){
              return json_encode(true);
          }else{
              return json_encode(false);
          }
    }

    public function test()
    {
//        $userName = "ydp";
//        $userPwd = "123456";
        $user = new MyUser;
//
//        $userDt = $user -> where('u_name',$userName)
//                        -> find();
//        if(empty($userDt)){
//           $user->u_name   = $userName;
//           $user->u_pwd    = $userPwd;
//           $user->save();
//        }
//        return $userDt['u_name'];
//        return json_encode($userDt);
//          return $user -> ff();
//        $token = $this->request->token('__token__', 'sha1');
//        return json_encode($token);
        $redis=new RedisPackage();
        $redis::set('dede','我就笑笑');
        echo $redis::get('dede');
    }
}
