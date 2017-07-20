<?php
	require_once("./hconfig.php");

	//$_GET['bno']이 있어야만 글삭제가 가능함.
	if(isset($_GET['bno'])) {
		$bNo = $_GET['bno'];
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>개선사항</title>
		<link rel="stylesheet" type="text/css" href="http://localhost/project/stylemyhomepage.css">
    <link rel="stylesheet" href="./normalize.css" />
  	<link rel="stylesheet" href="./board.css" />
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
      <article class="boardArticle">
        <h3>개선사항 글삭제</h3>
        <?php
          if(isset($bNo)) {
            $sql = 'select count(b_no) as cnt from board_help where b_no = ' . $bNo;
            $result = $db->query($sql);
          }

            $sql = 'select b_title from board_help where b_no = ' . $bNo;
            $result = $db->query($sql);
        ?>
        <div id="boardDelete">
          <form action="./hfreedelete_update.php" method="post">
            <input type="hidden" name="bno" value="<?php echo $bNo?>">
            <table>
              <caption class="readHide">자유게시판 글삭제</caption>
              <thead>
                <tr>
                  <th scope="col" colspan="2">글삭제</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">글 제목</th>
                  <td><?php echo $row['b_title']?></td>
                </tr>
                <tr>
                  <th scope="row"><label for="bPassword">비밀번호</label></th>
                  <td><input type="password" name="bPassword" id="bPassword"></td>
                </tr>
              </tbody>
            </table>

            <div class="btnSet">
              <button type="post" class="btnSubmit btn">삭제</button>
              <a href="./help.php" class="btnList btn">목록</a>
            </div>
          </form>
        </div>
        <script>
          alert('정상적인 경로를 이용해주세요.');
          history.back();
        </script>
      <?php
          exit;
      ?>
    </article>
  </body>
</html>
