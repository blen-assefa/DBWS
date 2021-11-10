<html>
<body>
<?php

$db = mysqli_connect('localhost', 'group14', 'Y2YxSV', 'group14')
or die('Error connecting to MySQL server.');

$date = $_POST["date"];

$sql = "SELECT DISTINCT M.name, M.time
  FROM Movies M, Projections P
  WHERE M.movie_id = P.projection_id AND P.p_date '$date'";

mysqli_query($db, $sql) or die('Error querying database.');

$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
  echo $row['name'] . "<br>";
}

mysqli_close($db);
?>
</body>
</html>
