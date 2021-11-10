<html>
<body>
<?php

$db = mysqli_connect('localhost', 'group14', 'Y2YxSV', 'group14')
or die('Error connecting to MySQL server.');

$sql = "SELECT C.name
FROM Customers C, Members M
WHERE C.customer_id = M.customer_id";

mysqli_query($db, $sql) or die('Error querying database.');

$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
  echo $row['name'] . "<br>";
}

mysqli_close($db);
?>
</body>
</html>