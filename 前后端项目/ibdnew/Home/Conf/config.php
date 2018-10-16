<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING' => array(
        '__PUBLIC__' => __ROOT__ . '/assets'
    ),
    'SHOW_PAGE_TRACE' =>true,
	'URL_CASE_INSENSITIVE' =>true,
    //'TMPL_EXCEPTION_FILE'   =>  'Public:Exception',
	'DB_TYPE' => 'mysqli',
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'ibdnew',
	'DB_USER' => 'root',
	'DB_PWD'  => 'BUAA1506buaa',
	'DB_PORT' => '3306',
	'DB_PREFIX'  => '',
	'DB_CONF1' => 'mysqli://root:123456@localhost:3306/ibd',
	'DB_CONF2' => 'mysqli://visitor:123456@localhost:3306/ibd'
);
?>