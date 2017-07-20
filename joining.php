<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>회원가입</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/project/stylemyhomepage.css">
  </head>
  <body>
    <header>
    <a href = "http://localhost/project/homepage.php"><img src="https://www.justchat.co.uk/wp-content/uploads/2015/12/justchat-og.gif" alt="Just chat"></a>
    <div id="login">
    <link rel="stylesheet" type="text/css" href="http://localhost/project/login1.css">
    <a href='http://localhost/project/homepagelogin.php' class='button'>Log-in</a>
        </div>
  </header>
  <link rel="stylesheet" type="text/css" href="http://localhost/project/menu.css?ver=1">
    <nav>
    <div id="menu2">
    <ul>
      <?php
          echo file_get_contents("beforelogin.txt");
       ?>
      </ul>
    </div>
  </nav>
    <article id="joining">
      <form name="joining" method="post" action="newmember.php">
       <h1>회원가입</h1>
       <table id="jointable" border="1">
         <tr>
          <td>name</td>
          <td><input type="text" size="12" maxlength="10" name="name"></td>
         </tr>
        <tr>
         <td>ID</td>
         <td><input type=text name=ID maxlength=15 id="chk_id1">&nbsp;&nbsp;
           </td>
        </tr>
        <tr>
         <td>Password</td>
         <td><input type="password" size="30" name="PassWord"></td>
        </tr>
        <tr>
         <td>Confirm Password</td>
         <td><input type="password" size="30" name="PassWord2"></td>
        </tr>
        <tr>
         <td>birth day</td>
         <td><input type="text" size="6" maxlength="8" name="birth"></td>
        </tr>
       </table>
       <input type=submit value="작성완료"><input type=reset value="다시쓰기">
     </form>
       <iframe src="" id="ifrm1" scrolling=no frameborder=no width=0 height=0 name="ifrm1"></iframe>
    </article>
  </body>
</html>
