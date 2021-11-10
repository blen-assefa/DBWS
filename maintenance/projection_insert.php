<html>
<body>
<p>SQL Command:
<?php

$db = mysqli_connect('localhost', 'group14', 'Y2YxSV', 'group14')
or die('Error connecting to MySQL server.');

function checkKeys($db, $randStr) {
  $keySearch = "SELECT * FROM keystring";
  $result = mysqli_query($db, $keySearch);
  while ($row = mysqli_fetch_assoc($result)) {
    if ($row['keystringKey'] == $randStr) {
      $keyExists = true;
      break;
    } else {
      $keyExists = false;
    }
  }
  return $keyExists;
}

function generateKey($db) {
  $keyLength = 5;
  $str = "0123456789";
  $randStr = substr(str_shuffle($str), 0, $keyLength);
  $checkKey = checkKeys($db, $randStr);
  while ($checkKey == true) {
    $randStr = substr(str_shuffle($str), 0, $keyLength);
    $checkKey = checkKeys($db, $randStr);
  }
  return $randStr;
}

$projection_id = generateKey($db);
$movie_id = $_POST["movie"];
$room_id = $_POST["room"];
$date = $_POST["date"];
$time = $_POST["time"];


$sql = "INSERT INTO Projections VALUES ('$projection_id', '$movie_id',
'$room_id', '$date', '$time')";
echo "$sql</p>";

mysqli_query($db, $sql) or die('Error querying database.');

echo "<h3>New record created successfully.</h3>";

mysqli_close($db);
?>
</body>
</html>
