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
	<title>Enquire Now</title>
	
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
	
	.container {
    max-width: 95%;
    }

	</style>
	<!-- Global site tag (gtag.js) - Google Ads: 10902874697 -->

    <?php 
    
    if($m!=1 || $m!="1"){
        echo '<script>alert("'.$m.'");</script>';    
    }
    ?>



</head>
<body id="bg">

    <!-- header -->
    <?php include("header.php");?> <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="bnr-inr overlay-black-middle" style="background-image:url(assets/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="bnr-inr-entry">
                    <h1 class="text-white">Checkout Now</h1>
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
							<h2>User Details</h2>
						
													
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
                                                <input name="city" type="text"  required class="form-control" placeholder="City">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="_state" type="text"  required class="form-control" placeholder="State">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="_des" type="text"  required class="form-control" placeholder="Your Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="_pincode" type="text"  required class="form-control" placeholder="Your Pincode">
                                            </div>
                                        </div>
                                    </div>
                                   
									
                                    <div class="col-lg-12">
                                        <button name="save" type="submit" class="site-button "> <span>Order Place</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-lg-4 d-lg-flex">
                        <div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
							<h2 class="m-b10">Amount Details</h2>
                            
                            <table class="table table-bordered">
                          
                                <tbody>
                        <?php 
                        $i=1;
                        $t_qty=0;
                        $t_amount=0;
                        $_gst=0;
                        foreach($cartdata as  $v){ 
                            $gst=$v['_price']*$v['_gst']/100;
                            $_gst=$_gst+$gst;

                            $t_amount=$t_amount+$v['qty']*$v['_price'];
                            $t_qty=$t_qty+$v['qty'];
                             } ?>

                        <tr>                          
                            <th>Total AMount</th>
                            <th><?=$t_amount;?></th>   
                        </tr>
                        <tr>
                          
                            <th>GST</th>
                            <th><?=$_gst;?></th>   
                        </tr>
                        <tr>
                            
                            <th>Grand Total</th>
                            <th><?=$t_amount+$_gst;?></th>   
                        </tr>
                           
                        </tbody>
                            </table>

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
