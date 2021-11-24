<html>
<body>
<p>SQL Command:
<?php

$db = mysqli_connect('localhost', 'group14', 'Y2YxSV', 'group14')
or die('Error connecting to MySQL server.');

require_once "../randkey_foos.php";

$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$duration = $_POST["duration"];
$desc = $_POST["description"];
$movie_id = generateKey($db);

$sql = "INSERT INTO Movies VALUES ('$movie_id', '$name', '$desc', '$duration')";
echo "$sql</p>";

mysqli_query($db, $sql) or die('Error querying database.');

echo "<h3>New record created successfully.</h3>";

mysqli_close($db);
?>
</body>
</html>
