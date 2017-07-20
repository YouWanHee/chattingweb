<?
session_start();
include("session.php");

if(isset($login_session))  // 값이 비었다면 Login 페이지로 이동시킵니다. Session.php를 각 페이지에 include 시킴으로써 세션 구현
{
  echo "<meta http-equiv='refresh' content='0; url=http://localhost/project/homepagesuccesss.php'>";
}
?>
