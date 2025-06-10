<!-- create_cookie.php -->

<?php
//쿠키 변수에 값 입력
$cookie_name = 'myCookie';
$cookie_value = '홍길동';

//쿠키정보 생성
setCookie($cookie_name, $cookie_value, time()+86400*30);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>쿠키 생성하기 예제</title>
</head>
<body>
  <h2>쿠키 생성하기 예제</h2>
  <p>쿠기를 만듭니다. <br> 쿠키 내용은 <a href="result.cookie.php" title="쿠키정보보기">여기</a>를 클릭하시면 됩니다.</p>

  
</body>
</html>