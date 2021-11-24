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


<body">
    <?php
    $current_page = "book";
    include "header.php";
    ?>

    <div class="container h-100 d-flex justify-content-center ">
        <div class="wrapper">
            <div class="row align-self-start">
                <div class="col-3 align-self-start m-5">
                    <div class="booking-panel-section booking-panel-section1">
                        <h1>Reserve your ticket</h1>
                    </div>
                </div>

            </div>
            <div class="row align-self-start">
                <div class="col-3 align-self-start ml-5">

                    <div class="booking-panel-section booking-panel-section3">
                        <div class="movie-box">
                            <?php
                            echo '<img src="' . $row['movieImg'] . '" alt="">';
                            ?>
                        </div>
                    </div>

                </div>


                <div class="col">
                    <div class="booking-panel-section booking-panel-section4">
                        <div class="title"><?php echo $row['movieTitle']; ?></div>
                        <div class="container">
                            <table>
                                <tr>
                                    <td>Genre</td>
                                    <td><?php echo $row['movieGenre']; ?></td>
                                </tr>
                                <tr>
                                    <td>Duration</td>
                                    <td><?php echo $row['movieDuration']; ?></td>
                                </tr>
                                <tr>
                                    <td>Release date</td>
                                    <td><?php echo $row['movieRelDate']; ?></td>
                                </tr>
                                <tr>
                                    <td>Director</td>
                                    <td><?php echo $row['movieDirector']; ?></td>
                                </tr>
                                <tr>
                                    <td>Actors</td>
                                    <td><?php echo $row['movieActors']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="booking-form-container">
                            <form action="verify.php" method="POST">


                                <select name="theatre" required>
                                    <option value="" disabled selected>THEATRE</option>
                                    <option value="main-hall">Main Hall</option>
                                    <option value="vip-hall">VIP Hall</option>
                                    <option value="private-hall">Private Hall</option>
                                </select>

                                <select name="type" required>
                                    <option value="" disabled selected>TYPE</option>
                                    <option value="3d">3D</option>
                                    <option value="2d">2D</option>
                                    <option value="imax">IMAX</option>
                                    <option value="7d">7D</option>
                                </select>

                                <select name="date" required>
                                    <option value="" disabled selected>DATE</option>
                                    <option value="12-3">March 12,2019</option>
                                    <option value="13-3">March 13,2019</option>
                                    <option value="14-3">March 14,2019</option>
                                    <option value="15-3">March 15,2019</option>
                                    <option value="16-3">March 16,2019</option>
                                </select>

                                <select name="hour" required>
                                    <option value="" disabled selected>TIME</option>
                                    <option value="09-00">09:00 AM</option>
                                    <option value="12-00">12:00 AM</option>
                                    <option value="15-00">03:00 PM</option>
                                    <option value="18-00">06:00 PM</option>
                                    <option value="21-00">09:00 PM</option>
                                    <option value="24-00">12:00 PM</option>
                                </select>

                                <input placeholder="First Name" type="text" name="fName" required>

                                <input placeholder="Last Name" type="text" name="lName">

                                <input placeholder="Phone Number" type="text" name="pNumber" required>
                                <input placeholder="email" type="email" name="email" required>
                                <input type="hidden" name="movie_id" value="<?php echo $id; ?>">



                                <button type="submit" value="save" name="submit" class="form-btn">Book a seat</button>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>

    <!-- Footer -->
    <?php
    include "footer.php";
    ?>
    <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="scripts/script.js "></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    </body>

</html>