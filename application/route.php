<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;
// 注册路由到index模块的News控制器的read操作
Route::get('/blogs/dds',function(){
    return 'Hello,world!dds';
});

Route::get('/blogs/dd',function(){
    return 'Hello,world!dd';
});


//return [
//    '/'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//    ]
//];
