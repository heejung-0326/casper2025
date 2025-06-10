<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fruit 데이터베이스 자료 출력하기</title>
  <!-- 1. 부트스트랩 css주소 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- 2. 부트스트랩 JS주소 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

  <?php

  $mysql_host = 'localhost';
  $mysql_user = 'heejung0326';
  $mysql_password = 'wlgmlwjd1!';
  $mysql_db = 'heejung0326';

  $conn = mysqli_connect($mysql_host, $mysql_user,$mysql_password,$mysql_db);

  if(!$conn){
    die('연결실패:'.mysqli_connect_error());
  }

  $query = 'select * from test_drive';
  $result = mysqli_query($conn,$query);

  print "<form name='신청화면' method='post' action='test_drive_search.php'>";
  print "<table class=table tabel-striped table-bordered table-hover text-center>
  <h3 style='text-align:center'>현대 자동차 시승신청 예약현황</h3>
  <caption></caption>
  <thead>
  <tr>
  <th class='table-dark'>code</th>
  <th class='table-dark'>name</th>
  <th class='table-dark'>phone</th>
  <th class='table-dark'>sms</th>
  <th class='table-dark'>email</th>
  <th class='table-dark'>region</th>
  <th class='table-dark'>s_car</th>
  <th class='table-dark'>my_car</th>
  <th class='table-dark'>e_date</th>
  </tr>
  <thead>
  <tbody>";

  while($row= mysqli_fetch_row($result)){
    print
    '<tr>
    <td>'.$row[0].'</td>'.
    '<td>'.$row[1].'</td>'.
    '<td>'.$row[2].'</td>'.
    '<td>'.$row[3].'</td>'.
    '<td>'.$row[4].'</td>'.
    '<td>'.$row[5].'</td>'.
    '<td>'.$row[6].'</td>'.
    '<td>'.$row[7].'</td>'.
    '<td>'.$row[8].'</td>
    </tr>';
  }
  print "</tbody></table>";
  print "<div class=text-center mt-3>
  <p><a href='test_drive.html' title='시승신청 예약하기' class='btn btn-success btn-center'>시승신청 예약하기</a></p>
  
  <input type='search' placeholder='검색어 입력' name='search' class='form-control w-50 d-inline'>
  <input type='submit' value='예약조회하기' class='btn btn-primary'>
  </div>";


  mysqli_close($conn);

  ?>

</body>
</html>