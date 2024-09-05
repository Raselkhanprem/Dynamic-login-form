<?php
    session_start();
    
    if (!isset($_SESSION['success'])) {
        header('location: index.php');
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="hand watch, hand watch in bangladesh" />
    <meta name="description" content="we are selling the best quality products and we export all over bangladesh.. " />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>piroll</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style2.css" media="all" />


    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <!-- [if lt ie 9]> <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif] -->
</head>

<body>

    <!--header area start-->
    <header class="header area">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="images/piroll.png" alt="piroll">
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#rasel">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="rasel">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Home</a>
                        </li>
                        <li>
                            <a class="nav-link text-dark" href="#">About</a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link text-dark" href="#">Services</a>
                        </li>
                        <li>
                            <a class="nav-link text-dark" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--header area end-->

    <!--sub-header area srart-->
    <section class="sub-header bg-light text-center py-5">
        <h1 class="mt-5">UI/UX & Graphic Designer</h1>
        <h5 class="mb-5 mt-3 text-secondary">
            I am a Graphic & Web Designer based in New York, specializing <br />
            in User Interface Design and Development.
        </h5>
    </section>
    <!--sub-header area end-->

    <!--portfolio area start-->
    <section class="protfolio">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img class="img-fluid" src="images/girl.jpeg" alt="girl">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img class="img-fluid" src="images/girl2.jpeg" alt="girl">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img class="img-fluid" src="images/girl3.jpeg" alt="girl">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img class="img-fluid" src="images/girl4.jpeg" alt="girl">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img class="img-fluid" src="images/girl5.jpeg" alt="girl">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img class="img-fluid" src="images/girl6.jpeg" alt="girl">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img class="img-fluid" src="images/girl7.jpeg" alt="girl">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img class="img-fluid" src="images/girl8.jpeg" alt="girl">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img class="img-fluid" src="images/girl9.jpeg" alt="girl">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img class="img-fluid" src="images/man1.jpeg" alt="man">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img class="img-fluid" src="images/girl11.jpeg" alt="girl">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <img class="img-fluid" src="images/man2.jpeg" alt="man">
            </div>
        </div>
    </section>
    <!--protfolio area end-->

    <!--footer area start-->
    <footer class="footer-area py-5 text-secondary">
        <div class="container py-2">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 text-sm-left text-center">
                    <h4 class="text-white">Piroll Design, Inc.</h4>
                    <p>&copy; 2017 Piroll. All rights reserved. <br /> Designed by amra.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-sm-left text-center mb-3">
                    <p class="mb-0"><a class="text-secondary" href="mailto:hello@pirolltheme.com">hello@pirolltheme.com</a></p>
                    <p class="mt-0">+44 987 065 908 </p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-3 col-12 text-md-left text-center">
                            <ul class="list-unstyled">
                                <li><a class="text-secondary" href="#">Project</a></li>
                                <li><a class="text-secondary" href="#">About</a></li>
                                <li><a class="text-secondary" href="#">Services</a></li>
                                <li><a class="text-secondary" href="#">Career</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-12 text-md-left text-center">
                            <ul class="list-unstyled">
                                <li><a class="text-secondary" href="#">Project</a></li>
                                <li><a class="text-secondary" href="#">About</a></li>
                                <li><a class="text-secondary" href="#">Services</a></li>
                                <li><a class="text-secondary" href="#">Career</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-12 text-md-left text-center">
                            <ul class="list-unstyled">
                                <li><a class="text-secondary" href="#">Project</a></li>
                                <li><a class="text-secondary" href="#">About</a></li>
                                <li><a class="text-secondary" href="#">Services</a></li>
                                <li><a class="text-secondary" href="#">Career</a></li>
                                <li><a class="text-secondary font-weight-bold" href="logout.php">LOG OUT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
