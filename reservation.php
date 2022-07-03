<?php
require("./config.php");

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['firstname']) && isset($_SESSION['role'])) {
} else {
    header( "Refresh:5; url=./manage/", true, 303);
    ?>
<h2><center>You are not logged in. <b></b>Login now to place your order.</center></h2>
<p><center><b>Redirecting you to login page in 5 seconds...</b></center></p>
    <?php
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = mysqli_real_escape_string($conn, test_input($_POST['name']));
    $email = mysqli_real_escape_string($conn, test_input($_POST['email']));
    $number = mysqli_real_escape_string($conn, test_input($_POST['number']));
    $photographer = mysqli_real_escape_string($conn, test_input($_POST['photographer']));
    $date = mysqli_real_escape_string($conn, test_input($_POST['date']));
    $created = date("Y-m-d");
    $status = 0;
    $sql = "INSERT INTO `reservations` (`id`,`status`, `userid` , `name`, `email`, `number`, `photographer`, `date`, `created`) VALUES (NULL, '{$status}', '{$_SESSION['id']}','{$name}', '{$email}', '{$number}', '{$photographer}', '{$date}', '{$created}');";
    if (!mysqli_query($conn, $sql)) {
        echo "Server facing error";
        exit();
    }
} else header('location: ./');

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WPMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./src/css/main.css">
</head>

<body>

    <?php
    require("./includes/nav.php");
    ?>



    <!-- Photographers -->

    <div class="mt-5"></div>
    <div class="container">
        <div class="row">
            <div class="card mt-5" style="width: 18rem; margin: 0 auto;">
                <h1 style="text-align: center;"> <i class="fa-solid fa-circle-check text-success"></i></h1>
                <div class="card-body" style="margin-top: -20px  !important;">
                    <p class="card-text">Your order has been placed successfully! <br></p>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER  -->
    <div class="container">
        <div class="d-flex justify-content-between  mt-4 border-top">



            <div class="container">
                <footer class="pt-5">
                    <div class="row">
                        <div class="col-sm-2">
                            <h5 class="text-danger">Quick Links</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" style="color:red;" class="nav-link p-0 text-muted">Home</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-3">
                            <h5 class="text-danger">Contact Info</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa fa-phone text-danger"></i> +91123928239</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-whatsapp text-danger"></i> +91328938299</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-envelope text-danger"></i> admin@wpms.com</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-solid fa-location-dot text-danger"></i> Bobcat Lane, St. Robert, MO 65584-5678</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-2">
                            <h5 class="text-danger">Follow Us</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="text-danger fa-brands fa-facebook"></i> facebook</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-instagram-square text-danger"></i> Instagram</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-twitter-square text-danger"></i> Twitter</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-linkedin text-danger"></i> Linkedin</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa-brands fa-github text-danger"></i> Github</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-4 mb-2">
                            <form>
                                <h5 class="text-danger">Subscribe to our newsletter</h5>
                                <p>Monthly digest of whats new and exciting from us.</p>
                                <div class="d-flex w-100 gap-2">
                                    <label for="newsletter1" class="visually-hidden">Email address</label>
                                    <input id="newsletter1" type="text" class="" placeholder="Email address">
                                    <button class="btn btn-outline-danger" type="button">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </footer>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>