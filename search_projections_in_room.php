<html>
<body>
<?php

$db = mysqli_connect('localhost', 'group14', 'Y2YxSV', 'group14')
or die('Error connecting to MySQL server.');

$r_num = $_POST["number"];

$sql = "SELECT M.name, P.p_date, P.p_time
FROM Projections P, Movies M, Rooms R
WHERE M.movie_id = P.movie_id AND
	P.room_id = R.room_id AND
	R.r_num = '$r_num'
ORDER BY P.p_date ASC, P.p_time ASC;";

mysqli_query($db, $sql) or die('Error querying database.');

$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
  echo $row['name'] . "<br>";
}

mysqli_close($db);
?>
</body>
</html>
