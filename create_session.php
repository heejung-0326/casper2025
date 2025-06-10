<?php 
//세션정보 시작
session_start();

$session_value = '홍길동';
$_SESSION['mysession'] = $session_value;
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1. 세션정보 만들기(create_session.php)</title>
</head>
<body>
  <h2>1. 세션정보 만들기(create_session.php)</h2>
  <p><a href="print_session.php" title="세션정보출력하기">세션정보 출력하기</a></p>
</body>
</html>