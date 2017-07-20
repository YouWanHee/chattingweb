<?
session_start();
include("session.php");
echo ($login_session);
if(!isset($login_session))  // 값이 비었다면 Login 페이지로 이동시킵니다. Session.php를 각 페이지에 include 시킴으로써 세션 구현
{
  echo "<script> alert("잘못된 접근입니다.");</script>";
  echo "<meta http-equiv='refresh' content='0; url=http://localhost/project/homepagelogin.php'>";
}
?>
