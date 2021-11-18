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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand px-5" href="#">CineManics</a>

    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item  px-2">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="#">Book</a>
        </li>
        <li class="nav-item active px-2">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="contact-us.php">Contact Us</a>
        </li>
        <?php
        // Check if the user is logged in, if not then redirect him to login page
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
          echo "<li class=\"nav-item px-2\"><a class=\"nav-link\" href=\"login.php\">Log in</a></li>";
          echo "<li class=\"nav-item px-2 \"><a class=\"nav-link\" href=\"register.php\">Register</a></li>";
        } else {
          echo "<li class=\"nav-item px-2\"><a class=\"nav-link\" href=\"logout.php\">Log out</a></li>";
        }
        ?>
      </ul>
    </div>
  </nav>
 
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
    <footer class="footer bg-dark text-white font-small pt-4 px-5">

      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-6 mt-md-0 mt-3">

            <!-- Content -->
            <h5 class="text-uppercase">Footer Content</h5>
            <p>Here you can use rows and columns to organize your footer content.</p>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none pb-3">

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2021 Copyright:
        Group 14
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
