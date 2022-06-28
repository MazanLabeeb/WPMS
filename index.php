<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./src/css/main.css">
</head>

<body>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">WPMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#anchor-photographer" id>Photograpers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#anchor-reserve">Reserve</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('./src/img/1.jpg')">
                    <div class="carousel-caption animate__animated animate__pulse">
                        <h1 class="display-1 ">Modern</h1>
                        <a class="btn btn-sm btn-light " href="#about">Select the Package</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('./src/img/2.jpg')">
                    <div class="carousel-caption animate__animated animate__pulse">
                        <h1 class="display-1 ">Elegant</h1>
                        <a class="btn btn-sm btn-light " href="#about">Select the Package</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('./src/img/3.jpg')">
                    <div class="carousel-caption animate__animated animate__pulse">
                        <h1 class="display-1">Professional</h1>
                        <a class="btn btn-sm btn-light " href="#about">Select the Package</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </header>

    <!-- Photographers -->

    <h2 class="mt-5" id="anchor-photographer">Photographers</h2>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm 2"></div>
            <div class="col-sm-3" style="text-align: center;">
                <!-- <h2 class="my-5 h2">With shadow</h2> -->

                <img class="rounded-circle z-depth-2" width="220px" height="220px" alt="100x100" src="./src/img/photographer/1.jpeg" data-holder-rendered="true">

            </div>
            <div class="col-sm-5">
                <div class="row">
                    <h1 class="display-3 text-danger" style="text-align: center;">Usama Ali</h1>
                    <p style="color: grey;">Editorial / Architectural Skills</p>
                    <div>
                        <span class="fa fa-star checked text-warning"></span>
                        <span class="fa fa-star checked text-warning"></span>
                        <span class="fa fa-star checked text-warning"></span>
                        <span class="fa fa-star checked text-warning"></span>
                        <span class="fa fa-star text-warning"></span>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis id vitae possimus tenetur earum mollitia, quos fugit nostrum commodi. Dicta.</p>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm 2"></div>
            <div class="col-sm-3" style="text-align: center;">
                <!-- <h2 class="my-5 h2">With shadow</h2> -->

                <img class="rounded-circle z-depth-2" width="220px" height="220px" alt="100x100" src="./src/img/photographer/3.jpeg" data-holder-rendered="true">

            </div>
            <div class="col-sm-5">
                <div class="row">
                    <h1 class="display-3 text-danger" style="text-align: center;">Zaid Alvi</h1>
                    <p style="color: grey;">Fashion/Sports Skills</p>
                    <div>
                        <span class="fa fa-star checked text-warning"></span>
                        <span class="fa fa-star checked text-warning"></span>
                        <span class="fa fa-star checked text-warning"></span>
                        <span class="fa fa-star checked text-warning"></span>
                        <span class="fa-solid fa-star-half-stroke text-warning"></span>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis id vitae possimus tenetur earum mollitia, quos fugit nostrum commodi. Dicta.</p>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm 2"></div>
            <div class="col-sm-3" style="text-align: center;">
                <!-- <h2 class="my-5 h2">With shadow</h2> -->

                <img class="rounded-circle z-depth-2" width="220px" height="220px" alt="100x100" src="./src/img/photographer/2.jpg" data-holder-rendered="true">

            </div>
            <div class="col-sm-5">
                <div class="row">
                    <h1 class="display-3 text-danger" style="text-align: center;">Olivia Emma</h1>
                    <p style="color: grey;">Portrait / Fashion Skills</p>
                    <div>
                        <span class="fa fa-star checked text-warning"></span>
                        <span class="fa fa-star checked text-warning"></span>
                        <span class="fa fa-star checked text-warning"></span>
                        <span class="fa fa-star checked text-warning"></span>

                        <span class="fa fa-star text-muted"></span>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis id vitae possimus tenetur earum mollitia, quos fugit nostrum commodi. Dicta.</p>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <div class="divider"></div>

    <h2 id="anchor-reserve">Reserve</h2>
    <div class="bg-img">
        <form action="/action_page.php" class="container-bgimg">
            <h1 style="text-align: center;">Reserve a Date</h1>

            <label for="name"><b>Name</b></label>
            <input type="text" id="name" placeholder="Enter name" name="name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" id="email" placeholder="Enter Email" name="email" required>

            <label for="number"><b>Number</b></label>
            <input type="text" id="number" placeholder="Enter number" name="number" required>

            <label for="foto"><b>Select Photographer</b></label>

            <select name="foto" id="foto">
                <option value="volvo">Usama Ali</option>
                <option value="saab">Zaid Alvi</option>
                <option value="mercedes">Olivia Emma</option>
            </select>
            <label for="date"><b>Select a date:</b></label>
            <input type="date" id="date" name="date">


            <button type="submit" class="btn">Reserve</button>
        </form>
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

                    <div class="d-flex justify-content-between pt-4 border-top">
                        <p>&copy; 2022 WPMS Company, Inc. All rights reserved.</p>
                    </div>
                </footer>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>