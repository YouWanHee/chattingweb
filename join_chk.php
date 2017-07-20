<!-- <?
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "dhksgml";
$mysql_database = "joining";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");
mysql_select_db($mysql_database, $bd) or die("db connect error");

 $id=$_POST['ID'];

 $query="SELECT count(*) from member where ID='$id'";
 $result=mysql_query($query,$bd);
 $row=mysql_fetch_array($result);


 mysql_close($bd);

?>
<script>
 var row="<?=$row[0]?>";
 if(row==1){
 parent.document.getElementById("chk_id2").value="0";
 parent.alert("이미 사용중인 아이디입니다.");
 }
 else{
 parent.document.getElementById("chk_id2").value="1";
 parent.alert("사용 가능합니다.");
 }
</script> -->
