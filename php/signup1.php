<?php
//页面名称赋给模板变量
$page_title='req-signup';
//模板头部
include('../includes/header.html');
//表单非空验证,js需再加一次验证
$error=0;

if(isset($_POST['submit'])){

if(empty($_POST['username'])){
  echo 'where your name!<br>';
  $error++;
}else{
  $n=trim($_POST['username']);
}

if(empty($_POST['password1'])){
  echo 'where your first password!<br>';
  $error++;
}else{
  $pw1=trim($_POST['password1']);
}

if(empty($_POST['password2'])){
  echo 'where your second password!<br>';
  $error++;
}else{
  $pw2=trim($_POST['password2']);
}

if(empty($_POST['email'])){
  echo 'where your email!<br>';
  $error++;
}else{
  $em=trim($_POST['email']);
}

if($error==0){

if($pw1!==$pw2){
  echo 'joking me? your two password not equal!<br>';
  $error++;
}else{
  $pw=$pw1;
}
}
//无错
if($error==0){
  //引用要求安全性的sql连接文件
  require_once('../../mysql_connect.php');

  $reg_tm=date('y-m-d h:i:s',time());

  $query="INSERT INTO users(user_nm,user_pw,user_em,reg_time) VALUES('$n',MD5('$pw'),'$em','$reg_tm')";
  $result=@mysql_query($query);
  /*mail($em,'thanks for reg!', $pw,'From:syau');*/
  echo 'thanks!your name is '.$n.' and your email is '.$em;
  exit();
  mysql_close();
  //引用模板尾部
  include('../includes/footer.html');
}
}
?>
