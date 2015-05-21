<?php
//页面名称赋给模板变量
$page_title='cookie-test';

if( (isset($_COOKIE['user_id']) ) && (isset($_COOKIE['user_nm']) ) ){

//模板头部
  include('../includes/header.html');

echo 'Welcome '.$_COOKIE['user_nm'].' !You are number '.$_COOKIE['user_id'].' user!' ;


//引用模板尾部
  include('../includes/footer.html');
}
  ?>
