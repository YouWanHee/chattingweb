<?session_start();?>
<?php
include('lock.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>로그인성공 </title>
</head>
<body>
<h1>로그인을 환영합니다. <?php echo $login_session; ?></h1>
<h2><a href="logout.php">로그아웃</a></h2>
</body>

</html>
