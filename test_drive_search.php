<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>시승신청 리스트만들기</title>
  <!-- 2. 부트스트랩 JS주소 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
//test_drive_input.php

$search = $_POST['search'];


print $search;

$mysql_host = 'localhost';
$mysql_user = 'heejung0326';
$mysql_password = 'wlgmlwjd1!';
$mysql_db = 'heejung0326';

$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);

if(!$conn){
  die('연결실패:'.mysqli_connect_error());
}
echo '연결성공';

$query = 'select * from test_drive where name"'.$search.'"';
$result = mysqli_query($conn,$query);

print "<table class=table tabel-striped table-bordered table-hover text-center>
<caption>시승예약 리스트</caption>
<thead>
<tr>
<th class='table-dark'>code</th>
<th class='table-dark'>name</th>
<th class='table-dark'>phone</th>
<th class='table-dark'>sms</th>
<th class='table-dark'>email</th>
<th class='table-dark'>region/th>
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

echo "<input type = 'button' onclick = 'history.back()' value='이전페이지로' class='btn btn-success'>";

mysqli_free_result($result);

mysqli_close($conn);


?>

</body>
</html>

