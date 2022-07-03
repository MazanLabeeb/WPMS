<?php
require("../config.php");
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['id']) && isset($_SESSION['id'])){

}else{
    header('location:login.php');
    exit();
}
$updated = false;
// $sql = "SELECT * FROM `packages`";
// $result = mysqli_query($conn, $sql);

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, test_input($_GET['id']));
        $sql = "SELECT * FROM `packages` WHERE `id` = {$id}";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
        } else header('location: ./events.php');
    } else {
        header('location: ./events.php');
        exit();
    }
    if (isset($_GET['updated'])) $updated = true;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = mysqli_real_escape_string($conn, test_input($_POST['id']));
    $plan = mysqli_real_escape_string($conn, test_input($_POST['plan']));
    $bridegroom = mysqli_real_escape_string($conn, test_input($_POST['bridegroom']));
    $bride = mysqli_real_escape_string($conn, test_input($_POST['bride']));
    $description = mysqli_real_escape_string($conn, test_input($_POST['description']));
    $date = mysqli_real_escape_string($conn, test_input($_POST['date']));
    $location = mysqli_real_escape_string($conn, test_input($_POST['location']));
    $created = date("Y-m-d");
    $sql = "UPDATE `packages` SET `plan` = '{$plan}', `Bridegroom` = '{$bridegroom}', `Bride` = '{$bride}', `Description` = '{$description}', `date` = '{$date}', `location` = '{$location}' WHERE `packages`.`id` = {$id};";

    if (!mysqli_query($conn, $sql)) {
        echo "Server facing error";
        exit();
    } else {
        echo "updated";
        header('location: edit.php?id=' . $id . '&updated=true');
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

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        require("./includes/sidebar.php");
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                require("./includes/topbar.php")
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <?php
                                if($updated){
                                    ?>
<h6 class="m-0 font-weight-bold text-primary">Edit Event Details</h6>
                            <div style="z-index:2;max-width: 400px;padding-right:16px;position:absolute; top:0px; opacity:0.8; right:15px;" class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Updated!</strong> Details updated successfully.

                            </div>
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="card-body">
                            <!-- BODYYYYYYYYYYYYYYYYYYYYYYYYYY -->
                            <div style="margin: 0 auto;">
                                <form class="needs-validation" action="edit.php" method="post">
                                    <input type="hidden" value="<?= $row['id'] ?>" name="id">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label for="firstName" class="form-label">Bridegroom Name</label>
                                            <input value="<?= $row['Bridegroom'] ?>" type="text" name="bridegroom" class="form-control" id="firstName" placeholder="" value="" required>
                                            <div class="invalid-feedback">
                                                Valid name is required.
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="lastName" class="form-label">Bride Name</label>
                                            <input value="<?= $row['Bride'] ?>" name="bride" type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                            <div class="invalid-feedback">
                                                Valid last name is required.
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Description</label>
                                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $row['Description'] ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="date" class="form-label">Wedding Date</label><br>
                                            <input value="<?= $row['date'] ?>" type="date" id="date" name="date" required>
                                        </div>


                                        <div class="col-md-5">
                                            <label for="country" class="form-label">Location</label>
                                            <br>
                                            <select name="location" class="form-select" id="country" required>
                                                <option value="<?= $row['location'] ?>"><?= $row['location'] ?></option>
                                                <option>Vintners Resort</option>
                                                <option>Kohenor Marquee</option>
                                                <option>Evergreen Resort</option>
                                                <option>Eden Garden</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid location.
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="plan" class="form-label">Package</label>
                                            <br>
                                            <select name="plan" class="form-select" id="country" required>
                                                <option value="<?= $row['location'] ?>"><?= $row['plan'] ?></option>
                                                <option>Modern</option>
                                                <option>Elegant</option>
                                                <option>Professional</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid location.
                                            </div>
                                        </div>

                                    </div>

                                    <hr class="mt-2">



                                    <button class="w-50 btn btn-primary btn" type="submit">Update Details</button>
                                </form>
                            </div>
                            <!-- BODYYYYYYYYYYYYYYYYYYYYYYYYYY -->
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            require("./includes/footer.php")
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>