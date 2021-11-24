<html>
<body>
<p>SQL Command:
<?php

require_once "../../config.php";
require_once "../../randkey_foos.php";

$room_id = $_POST["room"];
$s_num = $_POST["number"];
$s_row = $_POST["row"];
$seat_id = generateKey($db);


$sql = "INSERT INTO Seats VALUES ('$seat_id', '$room_id', '$s_num', '$s_row')";
echo "$sql</p>";

mysqli_query($db, $sql) or die('Error querying database.');

echo "<h3>New record created successfully.</h3>";

mysqli_close($db);
?>
</body>
</html>
