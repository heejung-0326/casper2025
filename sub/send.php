<?php
header("Content-Type: text/html; charset=UTF-8");


//값이 잘받아오는지 확인
//$subject = $_POST(['subject']);
//echo $subject . '<br>';

// 빈 필드가 있는지 확인하는 구문
if(empty($_POST['name'])  		|| // post로 넘어온 name값이 비었는지 확인
   empty($_POST['email']) 		|| // email값이 비었는지 확인
   empty($_POST['subject']) 		|| // phone값이 비었는지 확인
   empty($_POST['msg'])	|| // message값이 비었는지 확인
    empty($_POST['mb_type']) || 
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) // 전달된 이메일 값이 유효한 이메일값인지 검증
  {
    echo "인수를 확인해주세요!";
    return false;
  }
  echo "상담 신청이 완료되었습니다. 감사합니다!";
  echo '<button onclick="history.back();">뒤로가기</button>';
    
// Cross-Site Scripting (XSS)을 방지하는 시큐어코딩
// strip_tags() -> 문자열에서 html과 php태그를 제거한다
// htmlspecialchars() -> 특수 문자를 HTML 엔터티로 변환
// 악의적인 특수문자 삽입에 대비하기 위함

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['msg']));
$mb_type = strip_tags(htmlspecialchars($_POST['mb_type']));
	
// 이메일을 생성하고 메일을 전송하는 부분
$to = 'duqwlqdk@naver.com'; // 받는 측의 이메일 주소를 기입하는 부분
$email_subject = "FROM:  $name"; // 메일 제목에 해당하는 부분
$email_body = "본 메일은 홈페이지 폼메일로부터 전송된 이메일입니다.\n\n".
"세부정보는 다음과 같습니다.\n\n".
"문의 유형: $mb_type\n\n". 
"Subject: $subject\n\n".
"Name: $name\n\n".
"Email: $email_address\n\n".
"Message:\n$message";

$headers = "From: $email_address\r\n";
mail($to,'=?UTF-8?B?'.base64_encode($email_subject).'?=',$email_body,$headers);
return true;			
?>