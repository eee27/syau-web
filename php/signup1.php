<?php
$page_title='reg!';
/*
$warn_text='your name is '.$_POST['username'].' and <br>your email is '.$_POST['email'];
*/
include('../includes/header.html');
//shoudong
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

if($error==0){
  require_once('../../mysql_connect.php');

  $reg_tm=time();

  $query="INSERT INTO users(user_nm,user_pw,user_em,reg_time) VALUES('$n',SHA('$pw'),'$em','$reg_tm')";
  $result=@mysql_query($query);
  /*mail($em,'thanks for reg!', $pw,'From:syau');*/
  echo 'thanks!your name is '.$n.' and your email is '.$em;
  exit();
  mysql_close();
  include('../includes/footer.html');
}
}
?>
