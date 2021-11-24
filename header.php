

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand px-5" href="#">CineManics</a>

    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item  px-2">
                <a class="nav-link <?php echo ($current_page === 'index') ? 'active' : ''; ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link <?php echo ($current_page === 'book') ? 'active' : ''; ?> " href="book.php">Book</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link <?php echo ($current_page === 'about') ? 'active' : ''; ?> " href="about.php">About us</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link <?php echo ($current_page === 'contact') ? 'active' : ''; ?> " href="contact-us.php">Contact Us</a>
            </li>
            <?php
            // Check if the user is logged in, if not then redirect him to login page
            if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                echo "<li class=\"nav-item px-2\"><a class=\"nav-link <?php echo ($current_page === 'login') ? 'active' : ''; ?> \"  href=\"login.php\">Log in</a></li>";
                echo "<li class=\"nav-item px-2 \"><a class=\"nav-link <?php echo ($current_page === 'register') ? 'active' : ''; ?> \" href=\"register.php\">Register</a></li>";
            } else {
                echo "<li class=\"nav-item px-2\"><a class=\"nav-link\" href=\"logout.php\">Log out</a></li>";
            }
            ?>
        </ul>
    </div>
</nav>