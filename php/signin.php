<?php
//页面名称赋给模板变量
$page_title='req-signin';

if( ($_POST['username']!==null)&&($_POST['password']!==null) ){

//模板头部
include('../includes/header.html');

$nm=$_POST['username'];
$pw=MD5($_POST['password']);

//引用要求安全性的sql连接文件
require_once('../../mysql_connect.php');

$query="SELECT user_pw FROM users WHERE user_nm='$nm'";
$result=@mysql_query($query);
$true_pw=@mysql_result($result,0);
if($true_pw==$pw){
  echo 'OK! Welcome to India!'.'<p><a href=../html/index.html>点此跳转到主页</a></p>';
}else{
  echo 'Are you OK? Wrong password!';
}

exit();
mysql_close();

//引用模板尾部
include('../includes/footer.html');

}
?>
