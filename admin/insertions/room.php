<html>
<body>
<p>SQL Command:
<?php

$db = mysqli_connect('localhost', 'group14', 'Y2YxSV', 'group14')
or die('Error connecting to MySQL server.');

require_once "../randkey_foos.php";

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
