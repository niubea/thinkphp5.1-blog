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

// +----------------------------------------------------------------------
// | 会话设置
// +----------------------------------------------------------------------

return [

    //使用服务器保存session
    'type'           => '',

    //使用redis保存session
//    'type'     => 'redis',
//    'host'     => '127.0.0.1',
//    'port'     => 6379,
//    'password' => '',

    //session有效期为24小时
    'expire'         => 86400,
    'prefix'         => 'tpblog_session_',
    'auto_start'     => true,

];
