<?php


// Initialize the session
$status = "Not Logged In";
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  $status = "Not Logged In";
} else {
  $status = "Logged In";
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <title>About us</title>
</head>

<body>

  <?php
  $current_page = "about";
  include "header.php";
  ?>

  <header class="jumbotron">
    <div class="container">
      <div class="row row-header">
        <div class="col-12 col-sm-6">
          <h1>CineManics</h1>
          <p>CineManics is a cinema booking website that will make reserving of cinema seats
            with or without accommodations effortless, easy, and fast.</p>
        </div>

      </div>
    </div>
  </header>
  <div class="container">


    <div class="row marketing my-5">
      <div class="col-lg-6">
        <h4>Member 1</h4>
        <p>blassefa at jacobs-university.de</p>

        <h4>Member 2</h4>
        <p>jgjorgjevski at jacobs-university.de</p>

      </div>

      <div class="col-lg-6">
        <h4>Member 3</h4>
        <p>dmutambara at jacobs-university.de</p>

        <h4>Member 4</h4>
        <p>vterziev at jacobs-university.de</p>

      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php
    include "footer.php";
    ?>
  <!-- Footer -->
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>