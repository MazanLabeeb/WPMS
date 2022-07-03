<?php
if (!isset($_SESSION)) {
    session_start();
}
$skip = true;
if (isset($_SESSION['id']) && isset($_SESSION['id']) && isset($_SESSION['id'])) {
    $skip = false;
}
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="./index.php">WPMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php#anchor-photographer" id>Photograpers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./packages.php" id>Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php#anchor-reserve">Reservation</a>
                </li>
                <?php
                if ($skip) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./manage/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./manage/register.php">Register</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./manage/register.php">Control Panel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./manage/logout.php">Log Out</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>