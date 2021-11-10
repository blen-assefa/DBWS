<html>
<body>
<?php

$db = mysqli_connect('localhost', 'group14', 'Y2YxSV', 'group14')
or die('Error connecting to MySQL server.');

$payment = $_POST["payment"];

$sql = "SELECT R.reservation_id
FROM Reservations R
WHERE R.payment > '$payment'";

mysqli_query($db, $sql) or die('Error querying database.');

$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
  echo $row['reservationID'] . "<br>";
}

mysqli_close($db);
?>
</body>
</html>
