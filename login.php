<?php
include('./sub/header.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인페이지</title>
    <!-- 1. 부트스트랩 css주소 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- 2. 부트스트랩 JS주소 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body{
      background-color: #ccc;
    }
    fieldset{
      width: 350px;
      border:none;
      margin: 20% auto;
  }
  legend{
      font-weight:bold;
      text-align:center;
    padding-bottom:20px;}
    .btn{
      width: 100%;
    }
    #id,#pw{
      width: 100%;
      padding:10px;
    }
    .bottom{
      display:flex;
      text-decoration: none;
      list-style: none;
      padding-top:10px;
    }
    .bottom > li{
    line-height:20px;
    border-right: 1px solid #000; 
    }
    
    .bottom li>a{
      text-decoration: none;
      color:#000;
      font-size:12px;
      padding:0px 10px 0px 10px;
    }
    .bottom li:last-child{border:none;}
  </style>
</head>
<body>
  <form name="" method="post" action="" class="form">
    <fieldset>
      <legend>로그인</legend>
      <p class="form-label">
        <input type="text" id="id" placeholder="아이디를 입력해주세요">
        <label for="id" ></label>
      </p>    
      <p class="form-label">
        <input type="password" id="pw" placeholder="비밀번호를 입력해주세요">
        <label for="id" ></label>
      </p>
      <p>
        <input type="checkbox" id="c_box">
        <label for="c_box">아이디 저장</label>
        </p>
        <button type="submit" class="btn btn-primary">로그인</button> 
      </div>
      <ul class="bottom">
        <li><a href="#" title="아이디찾기">아이디 찾기</a></li>
        <li><a href="#" title="비밀번호 찾기">비밀번호 찾기</a></li>
        <li><a href="#" title="회원가입">회원가입</a></li>

      </ul>
    </fieldset>
  </form>
</body>
</html>


<?php
include('./sub/footer.php');
?>