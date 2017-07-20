<?session_start();?>
<?php
    include("config.php");  //DB연결을 위한 config.php를 로딩합니다.
    $myusername=($_POST['ID']);
    $mypassword=($_POST['PassWord']);
    $sql="SELECT * FROM member WHERE ID='$myusername' and PassWord='$mypassword'";
    $result=mysql_query($sql) or die (mysql_error());
    $count=mysql_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1)  //count가 1이라는 것은 아이디와 패스워드가 일치하는 db가 하나 있음을 의미합니다.
    {
        $_SESSION['ID']=$myusername;
        echo "<script> alert('로그인 성공!') </script>";
//세션성공
        echo "<meta http-equiv='refresh' content='0; url=http://localhost/project/homepagesuccess.php'>";
    }
    else
    {
        echo "<script> alert('아이디 또는 비밀번호가 틀렸습니다.') </script>";
        echo "<meta http-equiv='refresh' content='0; url=http://localhost/project/homepagelogin.php'>";
    }
?>
