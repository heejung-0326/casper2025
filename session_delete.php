<?php
session_start();

unset($_SESSION['mysession']);
session_unset();

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>세션정보 삭제하기(session_delete.php)</title>
</head>
<body>
  <h2>세션정보 삭제하기(session_delete.php)</h2>
</body>
</html>