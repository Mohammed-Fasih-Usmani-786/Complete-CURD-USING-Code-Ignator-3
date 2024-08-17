<head>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    @media only screen and (min-width: 600px) {
        .supernav:hover .supersub {
            visibility: visible;
        }

        .supersub {
            visibility: hidden;
            display: block;
            position: absolute;
            width: 100%;
            background: #fff;
            list-style: none;
            margin-left: 220px;
            margin-top: -85px;
        }
    }


    @media only screen and (max-width: 600px) {
        .supernav:hover .supersub {
            visibility: visible;
            visibility: visible;
            position: static;
            display: block;
            margin-left: 20px;
        }

        .supersub {
            visibility: hidden;
            display: block;
            position: relative;
            width: 100%;
            background: #fff;
            list-style: none;
            margin-left: 220px;
            margin-top: 10px;
        }
    }
</style>

<header class="site-header header-style-2 mo-left">
    <!-- top bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="topbar-left">
                    <ul class="social-line text-center pull-right">

                        <li><a href="tel:9983340360"><i class="fa fa-phone"></i> <span>+91-9983340360</span> </a></li>
                        <li><a href="tel:9828037360"><i class="fa fa-whatsapp"></i> <span>+91-9828037360</span> </a></li>
                        <li><a href="mailto:info@idealcoating.com"><i class="fa fa-envelope-o"></i> <span>info@idealcoating.in</span></a></li>




                        <?php if (!empty($_SESSION['_admin']['Name'])) {  ?>
                            <li>
                                <!-- <form action="<?php //echo site_url("WebsiteCon/Search") 
                                                    ?>" method="post"> -->
                                <form method="post" action="search">
                                    <input type="text" name="val">
                                    <button type="submit" name="sub" class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                                        Search
                                    </button>
                                </form>
                            </li>
                        <?php } else { ?>
                            <li><a href="Sign-up">Sign</a></li>
                            <li><a href="Admin/Login">Login</a></li>
                            <li>

                                <form method="post" action="search">
                                    <input type="text" name="val">
                                    <button type="submit" name="sub" class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                                        Search
                                    </button>
                                </form>
                            </li>
                        <?php  } ?>

                    </ul>
                </div>
                <div class="topbar-right">
                    <ul class="social-line text-center pull-right">
                        <li><a href="https://www.facebook.com/profile.php?id=100078296028638" target="_blank" class="fa fa-facebook"></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a></li>
                        <?php if (!empty($_SESSION['_admin']['Name'])) {  ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Welcome:
                                    <span><?= $_SESSION['_admin']['Name']; ?></span>
                                    <span><?= $_SESSION['_admin']['u_type']; ?></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="Adminpanal/Log-out" style="color:red">Logout</a>
                                    <a class="dropdown-item" href="#" style="color:red">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" style="color:red">Something else here</a>
                                </div>
                            </li>
                        <?php } ?>
                        <!--<li><a href="Cart">Cart (<?= count($cart); ?>)</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>





    <!-- top bar END-->
    <!-- main header -->
    <div class="sticky-header header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion"><a href="Home"><img src="assets/images/logo.png" alt=""></a></div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="extra-nav disnone-md hidden-md">
                    <div class="extra-cell">
                        <a href="Enquery" class="site-button white skew-secondry">Enquire Now</a>
                    </div>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <ul class=" nav navbar-nav">
                        <li class="active"> <a href="Home">Home</a></li>
                        <li><a href="About">About Us</a></li>
                        <!--<li><a href="Our-team">Our Team</a></li>-->
                        <li>
                            <a href="javascript:;">Our Product<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <?php
                                foreach ($snav as $v) {
                                    if ($v['_type'] == "Residential") { ?>
                                        <li class="supernav"><a href="javascript:;"><?= $v['name']; ?></a>
                                            <ul class="supersub ">
                                                <?php foreach ($v['data'] as $vc) { ?>
                                                    <li><a href="View-product/<?= $vc['row_id']; ?>"><?= $vc['name']; ?></a></li>
                                                <?php } ?>
                                            </ul>

                                        </li>
                                <?php  }
                                }
                                ?>

                            </ul>
                        </li>

                        <!--<li> 
								<a href="javascript:;">Commercial<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
                                    <?php
                                    foreach ($snav as $v) {
                                        if ($v['_type'] == "Commercial") { ?>
                                       <li><a href="View-services/<?= $v['row_id']; ?>"><?= $v['_title']; ?></a></li>
                                   <?php  }
                                    }
                                    ?>								

								</ul>
							</li>-->

                        <!--<li> 
								<a href="javascript:;">Cities<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
                                    <?php
                                    foreach ($cnav as $v) { ?>
                                       <li><a href="View-cities/<?= $v['row_id']; ?>"><?= $v['_title']; ?></a></li>
                                   <?php  }
                                    ?>								

								</ul>
							</li>-->

                        <!--<li><a href="Product">Product</a></li>-->

                        <li>
                            <a href="Blogs">blogs</a>
                            <!-- <a href="javascript:;">Blogs<i class="fa fa-chevron-down"></i></a> -->

                            <!-- <ul class="sub-menu">
                                    <?php
                                    foreach ($bnav as $v) { ?>
                                       <li><a href="View-blogs/<?= $v['row_id']; ?>"><?= $v['_title']; ?></a></li>
                                   <?php  }
                                    ?>								

								</ul> -->
                        </li>
                        <li><a href="Gallery">Gallery</a></li>

                        <li><a href="career">Career</a></li>


                        <li><a href="Contact">Contact Us</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="assets/engine1/style.css" />
    <script type="text/javascript" src="assets/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->


    <!-- main header END -->
</header>