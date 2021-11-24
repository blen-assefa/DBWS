<html>
<body>
<p>SQL Command:
<?php

require_once "../config.php";
require_once "randkey_foos.php";

$projection_id = generateKey($db);
$movie_id = $_POST["movie"];
$room_id = $_POST["room"];
$date = mysqli_real_escape_string($_POST["date"]);
$time = mysqli_real_escape_string($_POST["time"]);


$sql = "INSERT INTO Projections VALUES ('$projection_id', '$movie_id',
'$room_id', '$date', '$time')";
echo "$sql</p>";

mysqli_query($db, $sql) or die('Error querying database.');

echo "<h3>New record created successfully.</h3>";

mysqli_close($db);
?>
</body>
</html>
