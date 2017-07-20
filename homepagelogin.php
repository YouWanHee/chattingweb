<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
  </head>
  <body>
      <link rel="stylesheet" type="text/css" href="http://localhost/project/login.css?ver=1">
    <div>
      <div class="wrapper_body">
     <div class="cbm_wrap ">
     <h1>Log-In</h1>
     <img src="http://da-v4-mbl.digitalbrandsinc.netdna-cdn.com/wp-content/uploads/2012/11/online-chatting-612x320.jpg">
     <p></br></br>안녕하세요!! 잘오셨습니다. 로그인을 해주십시오~~!!
     <a href = "http://localhost/project/homepage.php">http://localhost/project/homepage.php</a></p>
     <form action="logining.php" method="post">
	<table style='margin:0 auto; margin-top:5%;'>
		<tr>
      <th colspan='2'>로그인</th>
		</tr>
		<tr>
			<td><input type="text" name="ID" placeholder='아이디'/></td>
		</tr>
		<tr>
			<td><input type="password" name="PassWord" placeholder='비밀번호' /></td>
		</tr>
		<tr>
			<td><a href = "http://localhost/project/joining.php">회원가입</a></td>
		</tr>
	</table>
     <br/>
     <link rel="stylesheet" type="text/css" href="http://localhost/project/login2.css">
     <input type="submit" value="Log-in" class='button'/>
   </form>
     </div>
  </body>
</html>
