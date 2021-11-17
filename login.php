<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if email is empty
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($email_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT C.customer_id, C.name, C.email, C.password FROM Customers C WHERE C.email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            $param_email = $email;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {

                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $customer_id, $name, $email, $hashed_password);
                    echo $hashed_password;
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["name"] = $name;
                            $_SESSION["customer_id"] = $customer_id;
                            $_SESSION["email"] = $email;

                            // Redirect user to welcome page
                            header("location: index.php");
                        } else {
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid Password or Email";
                        }
                    }
                } else {
                    // email doesn't exist, display a generic error message
                    $login_err = "Email doesn't exit in the database. Please create an account.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 360px;
            padding: 20px;
        }
    </style>
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
                    <a class="nav-link" href="/index.php">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Book</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="/about.php">About us</a>
                </li>
                <li class="nav-item  px-2">
                    <a class="nav-link" href="/contact-us.php">Contact Us</a>
                </li>
                <?php
                // Check if the user is logged in, if not then redirect him to login page
                if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                    echo "<li class=\"nav-item active px-2\"><a class=\"nav-link\" href=\"#\">Log in</a></li>";
                    echo "<li class=\"nav-item px-2 \"><a class=\"nav-link\" href=\"/register.php\">Register</a></li>";
                } else {
                    echo "<li class=\"nav-item px-2\"><a class=\"nav-link\" href=\"/logout.php\">Log out</a></li>";
                }
                ?>
            </ul>
        </div>
    </nav>
<div class="container h-100 d-flex justify-content-center">
    <div class="jumbotron my-auto" >
        
            <div class="wrapper">
                <h2>Login</h2>
                <p>Please fill in your credentials to login.</p>
                <?php
                if (!empty($login_err)) {
                    echo '<div class="alert alert-danger">' . $login_err . '</div>';
                }
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                        <span class="invalid-feedback"><?php echo $email_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        <small id="loginHelp" class="form-text text-muted float-right"><a href="/forgot-password.php">Forgot password</a></small>
                 
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                    <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
                </form>
            </div>
        </div>
    </div>

</body>

</html>