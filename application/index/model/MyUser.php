<?php
/**
 * Created by PhpStorm.
 * User: yuanzhaofei
 * Date: 2019/1/25
 * Time: 14:42
 */
namespace app\index\model;

use think\Model;

class MyUser extends Model
{
   //自定义初始化
    protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
        //TODO:自定义的初始化
    }

}