<br>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo.png" alt="">
        <span class="font-weight-bold fs-3 text-primary" >MCS</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <?php
                if (isset($_SESSION["isloggedin"])) {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                    </li>';
                }
                else {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                    </li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>