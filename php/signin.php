<?php
//页面名称赋给模板变量
$page_title='注册';

//验证开始
if( ($_POST['username']!==null)&&($_POST['password']!==null) ){

$nm=$_POST['username'];
$pw=MD5($_POST['password']);

//引用要求安全性的sql连接文件
require_once('../../mysql_connect.php');

//查表
$query="SELECT user_id,user_nm,user_pw FROM users WHERE user_nm='$nm'";
$result=@mysql_query($query);
$row=mysql_fetch_array($result,MYSQL_NUM);

$true_pw=$row[2];

//验证成功
if($true_pw==$pw){
//测试 发送cookie
  /*setcookie('user_id',$row[0]);
  setcookie('user_nm',$row[1]);
  */
  session_start();
  $_SESSION['user_id']=$row[0];
  $_SESSION['user_nm']=$row[1];



//引用模板头部
  include('../includes/header.inc');
  echo 'OK! Welcome to India!'.'<p><a href=./test.php>点此跳转到测试页</a></p>';
}else{
//引用模板头部
  include('../includes/header.inc');
  echo 'Are you OK? Wrong password!'.'<p><a href=../html/signin.inc>点此重新登录</a></p>';
}

exit();
mysql_close();

//引用模板尾部
include('../includes/footer.inc');

}
?>
