<?php
	require_once("./noconfig.php");
	$bno = $_GET['bno'];
  if(!empty($bNo) && empty($_COOKIE['noticeboard_' . $bNo])) {
  		$sql = 'update board_free set b_hit = b_hit + 1 where b_no = ' . $bNo;
  		$result = $db->query($sql);
  		if(empty($result)) {
  			?>
  			<script>
  				alert('오류가 발생했습니다.');
  				history.back();
  			</script>
  			<?php
  		} else {
  			setcookie('noticeboard_' . $bNo, TRUE, time() + (60 * 60 * 24), '/');
  		}
  	}
	$sql = 'select b_title, b_content, b_date, b_hit, b_id from noticeboard where b_no = ' . $bno;
	$result = $db->query($sql);
	$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/project/stylemyhomepage.css">
	<link rel="stylesheet" href="normalize.css" />
	<link rel="stylesheet" href="board.css" />
  <script src="./js/jquery-2.1.3.min.js"></script>
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
		<div id="boardView">
			<h3 id="boardTitle">제목: <?php echo $row['b_title']?></h3>
			<div id="boardInfo">
				<span id="boardID">작성자: <?php echo $row['b_id']?></span>
				<span id="boardDate">작성일: <?php echo $row['b_date']?></span>
				<span id="boardHit">조회: <?php echo $row['b_hit']?></span>
			</div>
			<div id="boardContent">내용: <?php echo $row['b_content']?></div>
      <div class="btnSet">
	<button type="submit"><a href="./nwritefreeboard.php?bno=<?php echo $bno?>">수정</a>
	<button type="submit"><a href="./nfreedelete.php?bno=<?php echo $bNo?>">삭제</a>
	<button type="submit"><a href="./notice.php">목록</a>
</div>
		</div>
	</article>
</body>
</html>
