<html>
<body>
<p>SQL Command:
<?php

$db = mysqli_connect('localhost', 'group14', 'Y2YxSV', 'group14')
or die('Error connecting to MySQL server.');

require_once "../randkey_foos.php";

$seat_id = generateKey($db);
$room_id = $_POST["room"];
$s_num = $_POST["number"];
$s_row = $_POST["row"];


$sql = "INSERT INTO Seats VALUES ('$seat_id', '$room_id', '$s_num', '$s_row')";
echo "$sql</p>";

mysqli_query($db, $sql) or die('Error querying database.');

echo "<h3>New record created successfully.</h3>";

mysqli_close($db);
?>
</body>
</html>
