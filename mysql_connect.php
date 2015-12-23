<?php
//连接数据库 置于根目录的上层 其他php通过引用此 来与数据库对话

DEFINE ('DB_USER','root');
DEFINE ('DB_PASSWORD','19950810');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','user');

$dbc =@mysql_connect (DB_HOST,DB_USER,DB_PASSWORD) OR die('can not connect to mysql: '. mysql_error());

@mysql_select_db (DB_NAME) OR die ('can not select the datebase: '. mysql_error());

?>
