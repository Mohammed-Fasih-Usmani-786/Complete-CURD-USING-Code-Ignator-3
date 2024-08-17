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
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Contact Us</title>
	
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
	<!-- Global site tag (gtag.js) - Google Ads: 10902874697 -->

    
    <?php 
    
    if($m!=1 || $m!="1"){
        echo '<script>alert("'.$m.'");</script>';    
    }
    ?>


	
</head>
<body id="bg">
<div id="loading-area"></div><div class="page-wraper">
    <!-- header -->
    <?php include("header.php");?> <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="bnr-inr overlay-black-middle" style="background-image:url(assets/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="bnr-inr-entry">
                    <h1 class="text-white">Contact US</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="Home">Home</a></li>
                    <li>Enquire Now</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white contact-style-1">
			<div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-8">
                        <div class="p-a30 bg-gray clearfix m-b30 ">
							<h2>Send Message</h2>
							
							
													
						
							<form method="post"  >
							
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="name" type="text"  required class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="email" type="email" required class="form-control"   placeholder="Your Email Id" >
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="mobile" type="text"  required class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="_sub" type="text" required class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="city" type="text" required class="form-control" placeholder="City">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="_desr" rows="4" required class="form-control"  placeholder="Type Your Message Here..."></textarea>
                                            </div>
                                        </div>
                                    </div>
									
                                    <div class="col-lg-12">
                                        <button name="save" type="submit" class="site-button "> <span>Submit Now</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-lg-4 d-lg-flex">
                        <div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
							<h2 class="m-b10">Quick Contact</h2>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Address</h6>
                                        <p>68/30, Heera Path, Mansarovar, Behind - ICICI Bank,<br> Jaipur - 302020, Rajasthan (INDIA)</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="ti-email"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Email</h6>
                                        <p>usspestcon@gmail.com <br> rakesh.pestcon@gmail.com</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Phone</h6>
                                        <p>(+91) 141 2780889, 9694141413</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Kolkata</h6>
                                        <p>8584857820 / 9830873475</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Patna</h6>
                                        <p>9931332003 / 9934334001</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Delhi - NCR</h6>
                                        <p>8700893598 / 9136275563</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Ahmedabad</h6>
                                        <p>9099013222
                                </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- right part END -->
                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <?php include("footer.php");?> <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
<!-- JavaScript  files ========================================= -->
<script src="assets/js/combining.js"></script><!-- COMBINING JS  -->
</body>

</html>
