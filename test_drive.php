<?php
include('./sub/header.php');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>시승신청 온라인 예약</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./css/drive.css" type="text/css">

</head>
<body>

  <h2>시승신청 온라인 예약</h2>
  <form name="시승신청" method="post" action="./test_drive_print.php" class="form" >
    <fieldset>
      <legend></legend>
      <h3>시승신청 온라인 예약</h3>
      <p class="form-label"><label>고객명 : </label><input type="text" name="name" required></p>
      <p class="form-label"><label>휴대폰 : </label><input type="text" name="phone" required></p>
      <p class="form-label">SMS수신여부 :
        <label for="s01">수신</label>
        <input type="radio" name="sms" id="s01" value="Y">
        <label for="s02">수신안함</label>
        <input type="radio" name="sms" id="s02" value="N">
      </p>

      <p class="form-label">
        <label>이메일 주소 : </label><input type="email" name="email" required>
      </p>
      <p class="form-label">
        <label>전시장 선택 : </label>
        <select name="region" id="region" repuired>
          <option value="">전시장 선택</option>
          <option value="강남점">강남점</option>
          <option value="송파점">송파점</option>
          <option value="한남점">한남점</option>
        </select>
      </p>
      <p class="form-label">
        <label>차량 선택 :</label>
        <select name="s_car" id="s_car" required>
          <option value="">차량 선택</option>
          <option value="캐스퍼">캐스퍼</option>
          <option value="캐스퍼 인스">캐스퍼 인스퍼레이션</option>
          <option value="소나타">소나타</option>
          <option value="그랜저">그랜저</option>
          <option value="제네시스">제네시스</option>
        </select>
      </p>
      <p class="form-label"><label>보유차종 : </label> <input type="text" name="my_car" required></p>
      <p class="form-label"><label>시승희망일 : </label> <input type="date" name="e_date" required></p>

    <ul class="btn d-flex justify-content-center list-unstyled">
      <li><input type="submit" value="예약하기" class="btn btn-primary "></li>
      <li><input type="reset" value="취소하기" class="btn btn-dark "></li> 
    </ul>

    </fieldset>
  </form>

</body>
</html>

<?php
include('./sub/footer.php');
?>