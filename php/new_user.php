<?php
//页面名称赋给模板变量
$page_title='注册';
//引用模板头部
include('../includes/header.inc');

if(isset($_POST['submit'])){
  $error=0;
  $nm=null;
  $pw1=null;
  $pw2=null;
  $pw=null;
  $em=null;
//表单非空验证,js需再加一次验证

if(empty($_POST['username'])){
  echo 'where your name!<br>';
  $error++;
  }else{
  $nm=trim($_POST['username']);
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
//fun check_empty_form
//非空验证完成 下面是相同密码验证
if($error==0){

if($pw1!==$pw2){
  echo 'joking me? your two password not equal!<br>'.' <p><a href="../html/signup.html">点此重新注册</a></p> ';
  $error++;
  }else{
  $pw=$pw1;
  }
  }
//fuc same_pw
//提交的表单没问题
if($error==0){

//引用要求安全性的sql连接文件
  require_once('../../mysql_connect.php');
//检测是否重名
  $rename="SELECT user_nm FROM users WHERE user_nm='$nm'";
  $rename_result=@mysql_query($rename);
  $row = mysql_fetch_row($rename_result);
  if($row[0]==$nm){
    echo 'Your name belongs to other!You are too late!'.' <p><a href="../html/signup.html">点此重新注册</a></p> ';
  }else{
//没啥问题 time函数别忘了默认巴黎时区
  $reg_tm=date('y-m-d h:i:s',time());

  $query="INSERT INTO users(user_nm,user_pw,user_em,reg_time) VALUES('$nm',MD5('$pw'),'$em','$reg_tm')";
  $result=@mysql_query($query);
  /*mail($em,'thanks for reg!', $pw,'From:syau');*/
  echo 'thanks!your name is '.$nm.' and your email is '.$em.' <p><a href="../html/signin.html">点此进入登录</a></p> ';
  exit();
  mysql_close();
//引用模板尾部
  include('../includes/footer.inc');

}//rename_result
}//error=0
}//submit
?>
