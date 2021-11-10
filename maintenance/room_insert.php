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

$r_num = $_POST["number"];
$room_id = generateKey($db);

$sql = "INSERT INTO Rooms VALUES ('$r_num', '$room_id')";
echo "$sql</p>";

mysqli_query($db, $sql) or die('<h4>Error querying database.</h4>');

echo "<h3>New record created successfully.</h3>";

mysqli_close($db);
?>
</body>
</html>
