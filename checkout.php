<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if(isset($_GET['orderID'])){
        $orderID = $_GET['orderID'];
        if($orderID ==1 || $orderID ==2 || $orderID == 3){
            if($orderID == 1) $planname = "Modern";
            if($orderID == 2) $planname = "Elegant";
            if($orderID == 3) $planname = "Professional";
        }else{
            header('location: ./packages.php');
        }
    }
}
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


    <!-- Navigation -->
    <?php
    require("./includes/nav.php");
    ?>



    <!-- Photographers -->
    <h2 style="padding-top:30px !important;" id="anchor-photographer">Checkout</h2>


    <div class="container">
        <main>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>
                        <span class="badge bg-primary rounded-pill">1</span>
                    </h4>
                    <?php
                        if($orderID == 1){
                            ?>
<ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Hair and Make Up</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                            </div>
                            <span class="text-muted">$6000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Photographer</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                            </div>
                            <span class="text-muted">$7000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Appetizers</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                            </div>
                            <span class="text-muted">$3000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Decorations</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                            </div>
                            <span class="text-muted">$4000</span>
                        </li>
                        
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20,000</strong>
                        </li>
                    </ul>
                            <?php
                        }elseif($orderID ==2){
                            ?>
                            <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Decorations</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                            </div>
                            <span class="text-muted">$6000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">DJ & MC Services</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                            </div>
                            <span class="text-muted">$7000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Wedding Cake</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                            </div>
                            <span class="text-muted">$3000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Others</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                            </div>
                            <span class="text-muted">$23,500</span>
                        </li>
                        
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$39,500</strong>
                        </li>
                    </ul>
                            <?php
                        }else{
?>
<ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Hair and Make Up</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                            </div>
                            <span class="text-muted">$6000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Photobooth</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                            </div>
                            <span class="text-muted">$7000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Centerpieces</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                            </div>
                            <span class="text-muted">$3000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Cake</h6>
                                <!-- <small class="text-muted">Brief description</small> -->
                            </div>
                            <span class="text-muted">$4000</span>
                        </li>
                        
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$52,000</strong>
                        </li>
                    </ul>
<?php
                        }
                    ?>


                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Wedding Details</h4>
                    <form class="needs-validation" action="order.php" method="post">
                    <input type="hidden" name="plan" value="<?php
                                echo $planname;
                                ?>" required>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Bridegroom Name</label>
                                <input type="text" name="bridegroom" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Bride Name</label>
                                <input name="bride" type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="date" class="form-label">Wedding Date</label>
                                <input type="date" id="date" name="date" required>
                            </div>


                            <div class="col-md-5">
                                <label for="country" class="form-label">Location</label>
                                <select name="location" class="form-select" id="country" required>
                                    <option value="">Choose ...</option>
                                    <option>Vintners Resort</option>
                                    <option>Kohenor Marquee</option>
                                    <option>Evergreen Resort</option>
                                    <option>Eden Garden</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid location.
                                </div>
                            </div>

                        </div>

                        <hr class="my-4">



                        <button class="w-50 btn btn-primary btn" type="submit">Place your order</button>
                    </form>
                </div>
            </div>
        </main>


    </div>

    <!-- FOOTER  -->
    <div class="container">
        <div class="d-flex justify-content-between  mt-4 ">



            <div class="container">
                <footer class="pt-5">
                    <div class="row ">
                        <div class="col-sm-2" >
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
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check" viewBox="0 0 16 16">
        <title>Check</title>
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
</svg>