<html>
<body>
<p>SQL Commands:</p>
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

$snack_id = generateKey($db);
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$description = $_POST["description"];
$cost = $_POST["cost"];


$sql = "INSERT INTO Snacks VALUES ('$snack_id', '$name', '$description', '$cost')";
echo "<p>$sql</p>";
mysqli_query($db, $sql) or die('Error querying database.');
echo "<h3>New record created successfully.</h3>";

$quantity = $_POST["quantity"];
if ($_POST["snack_type"] == "Drink") {
  $sql2 = "INSERT INTO Drinks VALUES ('$snack_id', '$quantity')";
  echo "<p>$sql2</p>";
  mysqli_query($db, $sql2) or die('Error querying database.');
  echo "<h3>New record created successfully.</h3>";
}
if ($_POST["snack_type"] == "Food") {
  $sql2 = "INSERT INTO Foods VALUES ('$snack_id', '$quantity')";
  echo "<p>$sql2</p>";
  mysqli_query($db, $sql2) or die('Error querying database.');
  echo "<h3>New record created successfully.</h3>";
}

mysqli_close($db);
?>
</body>
</html>
