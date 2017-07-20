<?php
	require_once("noconfig.php");
	if(isset($_GET['bno'])) {
		$bNo = $_GET['bno'];
	}

	if(isset($bNo)) {
		$sql = 'select b_title, b_content, b_id from noticeboard where b_no = ' . $bNo;
		$result = $db->query($sql);
		$row = $result->fetch_assoc();
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>자유게시판</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/project/stylemyhomepage.css">
	<link rel="stylesheet" href="normalize.css" />
	<link rel="stylesheet" href="board.css" />
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
			<h3>공지사항 글쓰기</h3>
			<div id="boardWrite">
				<form action="nwrite_update.php" method="post">
					<?php
				if(isset($bNo)) {
					echo '<input type="hidden" name="bno" value="' . $bNo . '">';
				}
				?>
					<table id="boardWrite">
						<caption class="readHide">공지사항 글쓰기</caption>
						<tbody>
							<tr>
								<th scope="row"><label for="bID">아이디</label></th>
								<td class="id"><?php
								if(isset($bNo)) {
									echo $row['b_id'];
								} else { ?><input type="text" name="bID" id="bID"><?php } ?></td>
							</tr>
							<tr>
								<th scope="row"><label for="bPassword">비밀번호</label></th>
								<td class="password"><input type="password" name="bPassword" id="bPassword"></td>
							</tr>
							<tr>
								<th scope="row"><label for="bTitle">제목</label></th>
								<td class="title"><input type="text" name="bTitle" id="bTitle" value="<?php echo isset($row['b_title'])?$row['b_title']:null?>"></td>
							</tr>
							<tr>
								<th scope="row"><label for="bContent">내용</label></th>
								<td class="content"><textarea name="bContent" id="bContent"></textarea></td>
							</tr>
						</tbody>
					</table>
					<div class="btnSet">
						<tr>
							<button type="submit" class="btnSubmit btn">
								<?php echo isset($bNo)?'수정':'작성'?>
						</tr>
						<a href="freeboard.php" class="btnList btn">목록</a>
					</div>
				</form>
			</div>
    </article>
  </body>
</html>
