<?php
//页面名称赋给模板变量
$page_title='退出';
//引用模板头部
include('../includes/header.inc');

session_start();
$old_user=$_SESSION['user_id'];

unset($_SESSION['user_id']);
unset($_SESSION['user_nm']);
$result_dest = session_destory();

if(empty($old_user)){
	if($result_dest){
		echo 'Logged out.<br />';
	}else{
		echo 'not log out<br />';
	}
}else{
	echo 'you were not login<br />';
}

//引用模板尾部
include('../includes/footer.inc');
?>