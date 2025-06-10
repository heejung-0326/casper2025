<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2_세션정보 출력하기</title>
</head>
<body>
  <h2>2_세션정보 출력하기</h2>
  <p>전달받은 세션값은 : <?php echo $_SESSION ['mysession']; ?>입니다.</p>

  <a href="session_delete.php" title="세션정보삭제하기">세션정보를 삭제합니다.</a>

</body>
</html>