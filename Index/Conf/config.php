<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING' => array(
	'__PUBLIC__' => __ROOT__.'/'.APP_NAME.'/Public',
	'DB_TYPE'   => 'mysql', // 数据库类型
        'DB_HOST'   => 'localhost', // 服务器地址
        'DB_NAME'   => 'think', // 数据库名
        'DB_USER'   => 'root', // 用户名
        'DB_PWD'    => '', // 密码
        'DB_PORT'   => 3306, // 端口
        'DB_PREFIX' => 'hd_', // 数据库表前缀
	'APP_STATUS' => 'debug', //应用调试模式状态
	)
);
?>
