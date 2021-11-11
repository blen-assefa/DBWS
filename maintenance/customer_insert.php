<html>
<body>
<p>SQL Commands:</p>
<?php

$db = mysqli_connect('localhost', 'group14', 'Y2YxSV', 'group14')
or die('Error connecting to MySQL server.');




$name = $_POST["name"];
$email = $_POST["email"];
$customer_id = generateKey($db);
$password = $_POST["password"];

$sql = "INSERT INTO Customers VALUES ('$customer_id', '$name', '$email', '$password')";
echo "<p>$sql</p>";
mysqli_query($db, $sql) or die('Error querying database.');
echo "<h3>New record created successfully.</h3>";

if ($_POST["customer_type"] == "Regular") {
  $sql2 = "INSERT INTO Regulars VALUES ('$customer_id')";
  echo "<p>$sql2</p>";
  mysqli_query($db, $sql2) or die('Error querying database.');
  echo "<h3>New record created successfully.</h3>";
}
if ($_POST["customer_type"] == "Member") {
  $membership_id = generateKey($db);
  $sql2 = "INSERT INTO Members VALUES ('$customer_id', '$membership_id')";
  echo "<p>$sql2</p>";
  mysqli_query($db, $sql2) or die('Error querying database.');
  echo "<h3>New record created successfully.</h3>";
}

mysqli_close($db);
?>
</body>
</html>
