<?php
function checkKeys($db, $randStr) {
  $keySearch = "SELECT * FROM keystring";
  $result = mysqli_query($db, $keySearch);
  while ($row = mysqli_fetch_assoc($result)) {
    if ($row['keystringKey'] == $randStr) {
      $keyExists = true;
      break;
    } else {
      $keyExists = false;
    }
  }
  return $keyExists;
}

function generateKey($db) {
  $keyLength = 5;
  $str = "0123456789";
  $randStr = substr(str_shuffle($str), 0, $keyLength);
  $checkKey = checkKeys($db, $randStr);
  while ($checkKey == true) {
    $randStr = substr(str_shuffle($str), 0, $keyLength);
    $checkKey = checkKeys($db, $randStr);
  }
  return $randStr;
}
?>
