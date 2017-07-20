<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "dhksgml";
$mysql_database = "joining";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");
mysql_select_db($mysql_database, $bd) or die("db connect error");

 $j_id=$_POST["ID"];
 $j_pw=$_POST['PassWord'];
 $j_pw2=$_POST['PassWord2'];
 $j_bir=$_POST['birth'];


 if(!$j_id||!$j_pw||!$j_pw2||!$j_bir){
  echo"<script>alert('빈칸없이 작성해 주세요.');history.back();</script>";
 }

 if($j_pw!=$j_pw2){
  echo"<script>alert('비밀번호를 정확히 입력해주세요.');history.back();</script>";
 }


 $query="insert into member(ID,PassWord,birth) values('$j_id','$j_pw','$j_bir')";
 $result=mysql_query($query,$bd);
 echo "<script>alert('회원가입을 축하드립니다.');</script>";
 echo "<meta http-equiv='refresh' content='1; URL=homepagelogin.php'>";

?>
