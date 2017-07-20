<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>저스트쳇</title>
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
    <article>
    </article>
  </body>
</html>
