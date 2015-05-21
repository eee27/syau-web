<?php
//页面名称赋给模板变量
$page_title='cookie-test';
session_start();

if( (isset($_SESSION['user_id']) ) && (isset($_SESSION['user_nm']) ) ){

//模板头部
  include('../includes/header.html');

echo 'Welcome '.$_SESSION['user_nm'].' !You are number '.$_SESSION['user_id'].' user!' ;


//引用模板尾部
  include('../includes/footer.html');
}
  ?>
