<?
  session_start();
  include "config.php";
  include "session.php";

  $max_thread_result=mysql_query("select max(thread) from $board",$bd);
  $max_thread_fetch=mysql_fetch_array($max_thread_result);

  $name=$_POST['name'];
  $pass=$_POST['pass'];
  $title=$_POST['title'];
  $comment=$_POST['comment'];
  $REMOTE_ADDR=$_SERVER["REMOTE_ADDR"];

  $max_thread=ceil($max_thread_fetch[0]/1000)*1000+1000;
  $query="insert into $board(thread,depth,name,pass,title,see,wdate,ip,comment) values($max_thread,0,'$name','$pass','$title',0,now(),'$REMOTE_ADDR','$comment')";
  $result=mysql_query($query,$bd);
  mysql_close($bd);
  echo "<meta http-equiv='refresh' content='1; URL=list.php'>";
  ?>
