<?php
    require("../config.php");

    session_start();
if(isset($_SESSION['id']) && isset($_SESSION['id']) && isset($_SESSION['id'])){
    header('location:index.php');
    exit();
}

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $firstname = mysqli_real_escape_string($conn, test_input($_POST['firstname']));
        $lastname = mysqli_real_escape_string($conn, test_input($_POST['lastname']));
        $email = mysqli_real_escape_string($conn, test_input($_POST['email']));
        $password = mysqli_real_escape_string($conn, test_input($_POST['password']));
        $password = md5($password);
        $role = 0;
        $created = date("Y-m-d");
        // echo $created;
        $sql = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`, `created`) VALUES (NULL, '{$firstname}', '{$lastname}', '{$email}', '{$password}', '{$role}', '{$created}');";
        if(!mysqli_query($conn, $sql)){
            echo "Server facing error";
            exit();
        }else{
            header( "Refresh:3; url=./login.php", true, 303);
            echo "Account created successfully, You can login now. <b>Redirecting in 3 second";
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">


</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7" style="margin: 0 auto;">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form  autocomplete="off" class="user" method="post" action="./register.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="firstname" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="lastname" type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                <input name="password" type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" autocomplete="off" required>
                                </div>
                                <input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                                  

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                            <div class="text-center">
                                <a class="small text-primary" href="../index.php">Go back...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>