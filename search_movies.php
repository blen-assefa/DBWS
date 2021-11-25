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



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>


    <title>Search Movies</title>
</head>

<body>

    <?php
    $current_page = "search_movies";
    include "header.php";
    ?>

    <header class="jumbotron">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto">
                    <div class="input-group">
                    <input type="text" name="movies" id="autocomplete" placeholder="Type to search..." class="form-control">
                        <span class="input-group-btn mx-3">
                            <button class="btn btn-secondary" type="button">Search</button>
                        </span>
                    </div>
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

    <script type="text/javascript">
        $("#autocomplete").autocomplete({
            source: 'js_search.php'
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
</body>

</html>