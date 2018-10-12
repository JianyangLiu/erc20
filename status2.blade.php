<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="j7grY1IKblscCSKPlOugJxfCEAGFIhZYsTFuENQh">

    <title>ERC-TWENTY</title>

    <!-- Scripts -->
    <script rel="https://demo.erc20.com.au/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://demo.erc20.com.au/css/app.css" rel="stylesheet">


    <style>

    </style>
</head>
<body>
<div id="app">
    <nav class="fixed-top navbar navbar-expand-md navbar-light border-bottom box-shadow">
        <div class="container">
            <a class="navbar-brand" href="https://demo.erc20.com.au">
                <img src="https://demo.erc20.com.au/images/logo.png" width="78" height="30" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://demo.erc20.com.au/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://demo.erc20.com.au/register">Projects</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="https://demo.erc20.com.au/login">zhaofurenljy@gmail.com</a>
                    </li>
                    <li class="nav-item">
                        <img class="rounded-circle"  src="https://leekico.com/themes/en/ico/images/member/user-logo.jpg"  height="50" style="vertical-align:middle" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="pb-4">
        <div class="pt155 bg-img" style="background-image:url(https://leekico.oss-ap-southeast-1.aliyuncs.com/images/banner4.jpg); height:250px">
            <div class="container" style="max-width:90%">
                <div class="row">
                    <div class="col-8" style="margin-top:80px;">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <img src="https://leekico.com/themes/en/ico/images/member/user-logo.jpg" class="rounded-">
                            </div>
                            <div class="col">
                                <h4 class="text-white">
                                    zhaofurenljy@gmail.com
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="width:400px;margin-top:80px;margin-right:0px;">
                        <div class="col" style="max-width:50%">
                            <div>
                                <h6 class="text-white">
                                    Balance
                                </h6>
                            </div>
                            <div style="margin-top:50px;">
                                    <span>
                                       <span class="text-white">
                                        ETHEREUM(ETH)
                                       </span>
                                       <span class="text-primary">
                                            0.1
                                       </span>
                                    </span>
                            </div>
                            <div class="progress project-progress" style="height:2px;width:90%">
                                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="col" style="max-width:50%;">
                            <div>
                                <h6 class="text-white">
                                    Amount
                                </h6>
                            </div>
                            <div style="margin-top:50px;">
                                    <span>
                                       <span class="text-white">
                                        ETHEREUM(ETH)
                                       </span>
                                       <span class="text-primary">
                                            0
                                       </span>
                                    </span>
                            </div>
                            <div class="progress project-progress" style="height:2px;width:85%">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="25"
                                     aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt155 bg-img" style="background-color:royalblue; height:41px">
            <ul class="nav nav-tabs justify-content-center align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/Finance/balance"><div class="align-items-center">BALANCE</div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/Finance/project">ORDER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/user/moble">SETTINGS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/Finance/profile">PROFILE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/Finance/notification">IDENTITY VERIFICATION</a>
                </li>
            </ul>
        </div>
        <div style="margin-top:100px"></div>
        <center>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <a href="/Finance/project" class="btn text-dark" style="border-radius:20px; width:140px;background-color: white;">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> All
                </a>
                <a  href="/Finance/project/status/1" class="btn text-dark" style="background-color: white;border-radius:20px; width:140px;" >
                    Complete
                </a>
                <a class="btn text-white active" style="background-color: royalblue;border-radius:20px; width:140px;" href="/Finance/project/status/2">
                    <input type="radio" name="options" id="option3" autocomplete="off"> Active
                </a>
            </div>
        </center>
        <div style="margin-top:60px"></div>
        <div class="container">
            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Project name</th>
                    <th scope="col">Token Amount</th>
                    <th scope="col">收到金额</th>
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                    <th scope="col">qita</th>
                </tr>
                </thead>
            </table>
        </div>
    </main>
    <div id="footer">

        <!-- Footer Top Section -->
        <div class="footer-top-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">

                        <!-- Footer Rows Container -->
                        <div class="footer-rows-container">

                            <!-- Left Side -->
                            <div class="footer-rows-left">
                                <div class="footer-row">
                                    <div class="footer-row-inner footer-logo">
                                        <img src="https://demo.erc20.com.au/images/logo-footer.png" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Footer Rows Container / End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top Section / End -->

        <!-- Footer Middle Section -->
        <div class="footer-middle-section">
            <div class="container">
                <div class="row">

                    <!-- Links -->
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                            <h3>For Investors</h3>
                            <ul>
                                <li><a href="#"><span>Browse Icos</span></a></li>
                                <li><a href="#"><span>Sign In/Sign Up</span></a></li>
                                <li><a href="#"><span>Support</span></a></li>
                            </ul>
                        </div>
                    </div>


                    <!-- Links -->
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                            <h3>Links</h3>
                            <ul>
                                <li><a href="#"><span>Contact</span></a></li>
                                <li><a href="#"><span>Privacy Policy</span></a></li>
                                <li><a href="#"><span>Terms of Use</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Links -->
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                            <h3>Links</h3>
                            <ul>
                                <li><a href="#"><span>Contact</span></a></li>
                                <li><a href="#"><span>Privacy Policy</span></a></li>
                                <li><a href="#"><span>Terms of Use</span></a></li>
                            </ul>
                        </div>
                    </div>


                    <!-- Links -->
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="footer-links">
                            <h3>Account</h3>
                            <ul>
                                <li><a href="#"><span>Log In</span></a></li>
                                <li><a href="#"><span>My Account</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <h3><i class="fa fa-envelope-open"></i> Sign Up For a Newsletter</h3>
                        <p>News on new ICOs.</p>
                        <form action="#" method="get" class="newsletter">
                            <input type="text" name="fname" placeholder="Enter your email address">
                            <button type="submit"><i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Middle Section / End -->

        <!-- Footer Copyrights -->
        <div class="footer-bottom-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        © 2018 <strong>ERC-TWENTY</strong>. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyrights / End -->

    </div></div>
</body>
</html>