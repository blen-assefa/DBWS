<html>
<body>
<p>SQL Command:
<?php

require_once "../../config.php";
require_once "../../randkey_foos.php";

$name = mysqli_real_escape_string($_POST["name"]);
$duration = $_POST["duration"];
$desc = mysqli_real_escape_string($_POST["description"]);
$movie_id = generateKey($db);

$sql = "INSERT INTO Movies VALUES ('$movie_id', '$name', '$desc', '$duration')";
echo "$sql</p>";

mysqli_query($db, $sql) or die('Error querying database.');

echo "<h3>New record created successfully.</h3>";

mysqli_close($db);
?>
</body>
</html>
