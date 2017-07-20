<?
    session_start();
    include("config.php");
    $user_check=$_SESSION['ID'];    //세션 uid를 받아서
    $ses_sql=mysqli_query($bd, "SELECT ID from member where ID='$user_check' ");
    $row=mysqli_fetch_array($ses_sql);
    $login_session=$row['ID'];  // 넘어온 값이 db에 있는 지 확인 후
    ?>
