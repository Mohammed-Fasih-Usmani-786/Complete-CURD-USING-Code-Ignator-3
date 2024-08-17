<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="" />
	<meta property="og:title" content=""/>
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	

    <base href="<?=base_url();?>">
	<!-- FAVICONS ICON -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Gallery</title>
	
    <base href="<?=base_url();?>">
    
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="assets/css/plugins.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="assets/css/templete.min.css">
	
	<!-- Google Font -->
	<style>
	@import url('https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700,900|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i|Lato:300,300i,400,400i,700,700i,900,900i');
	</style>
	
</head>
<body id="bg">
<div id="loading-area"></div><div class="page-wraper">
    <!-- header -->
    <?php include("header.php");?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="bnr-inr overlay-black-middle" style="background-image:url(assets/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="bnr-inr-entry">
                    <h1 class="text-white">Gallery</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="Home">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->

        
        <div class="section-full content-inner">
            <!-- Left & right section start -->
            <div class="container">
                <!-- Gallery -->
                <div class="clearfix">
                    <ul id="masonry" class="row gallery-listing gallery-grid-4 mfp-gallery">
                        
                    <?php 
                    
                    foreach($gallery as $v) { ?>
                    
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="_gallery/<?=$v['_img'];?>"  alt="<?=$v['_title'];?>"> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="_gallery/<?=$v['_img'];?>" class="mfp-link" title="Image-1"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php } ?>



                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal2.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal2.jpg" class="mfp-link" title="Image-2"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal3.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal3.jpg" class="mfp-link" title="Image-3"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal4.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal4.jpg" class="mfp-link" title="Image-4"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal5.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal5.jpg" class="mfp-link" title="Image-5"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal6.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal6.jpg" class="mfp-link" title="Image-6"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal7.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal7.jpg" class="mfp-link" title="Image-7"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal8.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal8.jpg" class="mfp-link" title="Image-8"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal9.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal9.jpg" class="mfp-link" title="Image-9"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal10.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal10.jpg" class="mfp-link" title="Image-10"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal1.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal1.jpg" class="mfp-link" title="Image-11"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal12.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal12.jpg" class="mfp-link" title="Image-12"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal13.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal13.jpg" class="mfp-link" title="Image-13"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal14.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal14.jpg" class="mfp-link" title="Image-14"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal15.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal15.jpg" class="mfp-link" title="Image-15"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal16.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal16.jpg" class="mfp-link" title="Image-16"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal17.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal17.jpg" class="mfp-link" title="Image-17"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal18.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal18.jpg" class="mfp-link" title="Image-18"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal19.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal19.jpg" class="mfp-link" title="Image-19"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal20.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal20.jpg" class="mfp-link" title="Image-20"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal21.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal21.jpg" class="mfp-link" title="Image-21"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal22.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal22.jpg" class="mfp-link" title="Image-22"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal23.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal23.jpg" class="mfp-link" title="Image-23"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal24.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal24.jpg" class="mfp-link" title="Image-24"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal25.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal25.jpg" class="mfp-link" title="Image-25"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal26.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal26.jpg" class="mfp-link" title="Image-26"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal27.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal27.jpg" class="mfp-link" title="Image-27"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal28.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal28.jpg" class="mfp-link" title="Image-28"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal29.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal29.jpg" class="mfp-link" title="Image-29"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal30.png"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal30.png" class="mfp-link" title="Image-30"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal31.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal31.jpg" class="mfp-link" title="Image-31"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="box gallery-box">
                                <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="assets/images/gal32.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="assets/images/gal32.jpg" class="mfp-link" title="Image-32"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Gallery END -->
            </div>
            <!-- Left & right section  END -->
        </div>
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <?php include("footer.php")?>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
<!-- JavaScript  files ========================================= -->
<script src="assets/js/combining.js"></script><!-- COMBINING JS  -->
</body>

</html>
