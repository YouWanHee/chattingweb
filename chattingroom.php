<? session_start(); ?>
<? include ("lock.php");
include ("session.php");
include ("logincheck.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>채팅방</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/project/stylemyhomepage.css">
  </head>
  <body>
    <header>
    <a href = "http://localhost/project/homepage.php"><img src="https://www.justchat.co.uk/wp-content/uploads/2015/12/justchat-og.gif" alt="Just chat"></a>
    <div id="login">
    <link rel="stylesheet" type="text/css" href="http://localhost/project/login1.css">
    <a href='http://localhost/project/homepagelogin.php' class='button'>Log-out</a>
        </div>
  </header>
  <link rel="stylesheet" type="text/css" href="http://localhost/project/menu.css?ver=1">
    <nav>
    <div id="menu2">
    <ul>
      <?php
          echo file_get_contents("list.txt");
       ?>
      </ul>
    </div>
  </nav>
    <article>
      <div id="contents">
        <h1>채팅방</h1>
        <div class="chat_content">
          <div class="chat_login">
            <div id="chat_login_form" class="chat_login_form">
              <input type="text" name="chat id" class="login_input" placeholder = "ID 입력" onclick = "$(this).val('');"/>
              &nbsp;&nbsp;
              <a href="http://localhost/project/chat/index.html">접속하기</a>
               <!-- 접속하는 url이 필요하다 -->
            </div>
            <div class="now_user_cnt"><strong>현재접속자수</strong> : <span id="now_user_cnt">-</span>
            </div>
          </div>
          <div id="chat_form_no" class="chat_form">
            ID입력 후 접속해 주세요.
          </div>
          <div id="chat_form" class="chat_form" style="display : none;">
            <div class="chat_list">
              <ul id="chat_user_list"></ul>
              </div>
            </div>
            <div class="chat_input">
              <input type="text" id="chat_input" class="chat_input_txt" placeholder="대화 글을 입력하세요." onclick = "$(this).val('');">
            </div>
            <div class="chat_btn">
              <a href="#">입력</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <!-- 들어가는 url -->
              <a href="#">나가기</a>
              <!-- 나가는 url -->
            </div>
          </div>
          <div class="chat_history">
            <div class="chat_history_lists">
              <ul id="chat_logs"></ul>
            </div>
          </div>
        </div>
      </div>
    </article>
  </body>
</html>
