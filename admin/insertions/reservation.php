<html>
<body>
<p>SQL Command:
<?php

$db = mysqli_connect('localhost', 'group14', 'Y2YxSV', 'group14')
or die('Error connecting to MySQL server.');

require_once "../randkey_foos.php";

$reservation_id = generateKey($db);
$customer_id = $_POST["customer"];
$projection_id = $_POST["projection"];
$payment = floatval($_POST['payment']);


$sql = "INSERT INTO Reservations VALUES ('$reservation_id', '$customer_id', '$projection_id', '$payment')";
echo "$sql</p>";

mysqli_query($db, $sql) or die('Error querying database.');

echo "<h3>New record created successfully.</h3>";

mysqli_close($db);
?>
</body>
</html>
