<html>
<body>
<p>SQL Command:
<?php

require_once "../config.php";
require_once "randkey_foos.php";

$name = mysqli_real_escape_string($db, $_POST["name"]);
$duration = $_POST["duration"];
$desc = mysqli_real_escape_string($db, $_POST["description"]);
$movie_id = generateKey($db);

// My hope is that this is so bad I'm never allowed to write PHP code again
if (!isset($_POST['genre1']) && !isset($_POST['genre2']) && !isset($_POST['genre3']) && !isset($_POST['genre4'])) {
  die('Invalid input.');
}
if (isset($_POST['genre1']) && !isset($_POST['genre2']) && !isset($_POST['genre3']) && !isset($_POST['genre4'])) {
  $genre = $_POST["genre1"];
} elseif (!isset($_POST['genre1']) && isset($_POST['genre2']) && !isset($_POST['genre3']) && !isset($_POST['genre4'])) {
  $genre = $_POST["genre2"];
} elseif (!isset($_POST['genre1']) && !isset($_POST['genre2']) && isset($_POST['genre3']) && !isset($_POST['genre4'])) {
  $genre = $_POST["genre3"];
} elseif (!isset($_POST['genre1']) && !isset($_POST['genre2']) && !isset($_POST['genre3']) && isset($_POST['genre4'])) {
  $genre = $_POST["genre4"];
} else {
  $first = true;
  if (isset($_POST['genre1'])) {
    if ($first) {
      $first = false;
      $genre = $_POST['genre1'];
    } else {
      $genre = $genre . "/" . $_POST['genre1'];
    }
  }
  if (isset($_POST['genre2'])) {
    if ($first) {
      $first = false;
      $genre = $_POST['genre2'];
    } else {
      $genre = $genre . "/" . $_POST['genre2'];
    }
  }
  if (isset($_POST['genre3'])) {
    if ($first) {
      $first = false;
      $genre = $_POST['genre3'];
    } else {
      $genre = $genre . "/" . $_POST['genre3'];
    }
  }
  if (isset($_POST['genre4'])) {
    if ($first) {
      $first = false;
      $genre = $_POST['genre4'];
    } else {
      $genre = $genre . "/" . $_POST['genre4'];
    }
  }
}

$sql = "INSERT INTO Movies VALUES ('$movie_id', '$name', '$genre', '$desc', '$duration')";
echo "$sql</p>";

mysqli_query($db, $sql) or die('Error querying database.');

echo "<h3>New record created successfully.</h3>";

mysqli_close($db);
?>
</body>
</html>
