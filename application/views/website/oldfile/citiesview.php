<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords"
        content="Termite Pest Control services, Termicon Services, Termite Pest Control Service in India" />
    <meta name="author" content="" />
    <meta name="robots" content="index, follow" />
    <meta name="description"
        content="We provide professional Termite pest control services for your home and business. We are offering Termite Pest Control services, Termicon Services, Termite Pest Control Service in Jaipur, Kolkata, Hyderabad, Patna, India " />
    <meta property="og:title" content="Termite Pest Control Services in Jaipur, Kolkata, Hyderabad, Patna, India" />
    <meta property="og:description"
        content="We provide professional Termite pest control services for your home and business. We are offering Termite Pest Control services, Termicon Services, Termite Pest Control Service in Jaipur, Kolkata, Hyderabad, Patna, India " />
    <meta property="og:image" content="assets/images/service3.png" />
    <meta name="format-detection" content="telephone=no">

    <base href="<?=base_url();?>">
    <!-- FAVICONS ICON -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title><?=$viewserives['_title'];?></title>

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
    <div id="loading-area"></div>
    <div class="page-wraper">
        <!-- header -->
        <?php include("header.php");?>
        <!-- header END -->
        <!-- Content -->
        <div class="page-content">
            <!-- inner page banner -->
            <div class="bnr-inr overlay-black-middle" style="background-image:url(assets/images/banner/bnr1.jpg);">
                <div class="container">
                    <div class="bnr-inr-entry">
                        <h1 class="text-white"><?=$viewserives['_title'];?></h1>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="Home">Home</a></li>
                        <li><?=$viewserives['_title'];?></li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <!-- Left part start -->
                        <div class="col-lg-8 col-md-7 col-sm-12 m-b30">
                            <!-- blog start -->
                            <div class="blog-post blog-single">

                                <div class="post-media img-effect zoom-slow"> <a href="#"><img
                                            src="upload/<?=$viewserives['_img'];?>" alt="<?=$viewserives['_title'];?>" title="<?=$viewserives['_title'];?>"></a> </div>
                                <div class="post-text">
                                    <h2>
                                        <?=$viewserives['_title'];?>
                                    </h2>
                                    <h5><?=$viewserives['_subtitle'];?></h5>
                                    

                                </div>
                            </div>
                            <!-- blog END -->
                        </div>
                        <!-- Left part END -->
                        <!-- Side bar start -->
                        <div class="col-lg-4 col-md-5 col-sm-12">
                            <aside class="side-bar">
                                <div class="widget widget_categories">
                                    <h4 class="widget-title">Other Cities</h4>
                                    <ul>
                                        <?php 
                                    foreach($cnav as $v){?>
                                        <li><a href="View-services/<?=$v['row_id'];?>"><?=$v['_title'];?></a>&nbsp;</li>
                                        <?php  }
                                    ?>

                                        <!-- <li><a href="termicon-services.html">Termicon Services</a> &nbsp;</li>
									<li><a href="ratcon-solutions.html">RatCon Solutions</a> &nbsp;</li>
                                    <li><a href="bugcon-services.html">BugCon Services</a> &nbsp;</li>
                                    <li><a href="woodborercon-services.html">WoodborerCon Services</a> </li>
                                    <li><a href="flycon-services.html">FlyCon Services</a> &nbsp;</li>
                                    <li><a href="mosquitocon-services.html">MosquitoCon Service</a> &nbsp;</li>
                                    <li><a href="fumicon-services.html">FumiCon Services</a> &nbsp;</li>
                                    <li><a href="housekeeping-services.html">Housekeeping Services</a> &nbsp;</li>
                                    <li><a href="security-services.html">Security Guards Services</a> &nbsp;</li>
                                    <li><a href="disinfection-services.html">Disinfection Services</a> &nbsp;</li> -->
                                    </ul>
                                </div>




                            </aside>
                        </div>

                        <!-- Side bar END -->

                        <div class="col-lg-12 col-md-7 col-sm-12 m-b30">
                           
                           
                            <?=$viewserives['_desr'];?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content END-->
        <!-- Footer -->
        <?php include("footer.php");?>
        <!-- Footer END-->
        <!-- scroll top button -->
        <button class="scroltop fa fa-arrow-up"></button>
    </div>
    <!-- JavaScript  files ========================================= -->
    <script src="assets/js/combining.js"></script><!-- COMBINING JS  -->
</body>

</html>