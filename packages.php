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
    <h2 style="padding-top:30px !important;" id="anchor-photographer">Our Wedding Packages</h2>


    <div class="container py-3">


        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Modern</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$20,000</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Hair and Make Up</li>
                                <li>Photographer</li>
                                <li>Appetizers</li>
                                <li>Decorations</li>
                            </ul>
                            <button type="button" onclick="javascript:location.href='./checkout.php?orderID=1'" class="w-100 btn btn-lg btn-outline-danger">Select this Package</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Elegant</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$39,500</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Decorations</li>
                                <li>DJ & MC Services</li>
                                <li>Wedding Cake</li>
                                <li>& all Modern plan offers</li>
                            </ul>
                            <button type="button" onclick="javascript:location.href='./checkout.php?orderID=2'" class="w-100 btn btn-lg btn-primary">Select this Package</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Professional</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$52,000</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Wedding Cake</li>
                                <li>Centerpieces</li>
                                <li>Photobooth</li> 
                                <li>& all Elegant plan offers </li> 
                            </ul>
                            <button type="button" onclick="javascript:location.href='./checkout.php?orderID=3'" class="w-100 btn btn-lg btn-primary">Select this Package</button>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="display-6 text-center mb-4">Compare Packages</h2>

            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width: 34%;"></th>
                            <th style="width: 22%;">Modern</th>
                            <th style="width: 22%;">Elegant</th>
                            <th style="width: 22%;">Professional</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-start">Hair and Make Up</th>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Photographer</th>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <th scope="row" class="text-start">Appetizers</th>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Decorations</th>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">DJ & MC Services</th>
                            <td></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Wedding Cake</th>
                            <td></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Centerpieces</th>
                            <td></td>
                            <td></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Photobooth</th>
                            <td></td>
                            <td></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>

    </div>

    <!-- FOOTER  -->
    <div class="container">
        <div class="d-flex justify-content-between  mt-4 ">



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
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check" viewBox="0 0 16 16">
        <title>Check</title>
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
</svg>