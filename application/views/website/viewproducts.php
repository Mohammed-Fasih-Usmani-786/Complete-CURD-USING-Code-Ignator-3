<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords"
        content="Roller Pest Control Services in Jaipur, Best Pest control Service near me, Professional Pest control Services, Professional Pest control service, Pest control Jaipur, Pest control in Jaipur, pest control service in Jaipur, pest control service in India, best pest control services in Jaipur, bedbugs control in Jaipur, best pest control in Jaipur, Termite Control Service in Jaipur, Residential Pest Control Service in Jaipur, Commercial pest control Service in Jaipur, Cockroach control Service in Jaipur,  Termite Control Company, Herbal pest control Service in Jaipur, Mosquitoes control service in Jaipur, Industrial pest control service in Jaipur." />
    <meta name="author" content="Roller Pest Control Services" />
    <meta name="robots" content="service, follow" />
    <meta name="description"
        content="We provide the Residential, Commercial, Industrial pest control services in Jaipur, India. Clean your home and workspace with Roller Pest Control Services. Hire Best Roller pest control services experts for Termite Control Service in Jaipur, Cockroach control & Mosquitoes control services." />
    <meta property="og:description"
        content="We provide the Residential, Commercial, Industrial pest control services in Jaipur, Rajasthan. Clean your home and workspace with Roller Pest Control Services. Hire Best Roller pest control services experts for Termite Control Service in Jaipur, Cockroach control & Mosquitoes control services." />
    <meta property="og:image" content="assets/images/background/bg6.jpg" />
    <meta name="format-detection" content="telephone=no">

    <base href="<?=base_url();?>">
    <!-- FAVICONS ICON -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title><?=$product[0]['name'];?></title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/css/xzoom.css" media="all" />
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
	
	
	.overlay-black-middle:after {
    opacity: -0.5;
}

    </style>

</head>

<body id="bg">
    <div id="loading-area"></div>
    <div class="page-wraper">
        <!-- header -->
        <?php include("header2.php");?>
        <!-- header END -->
        <!-- Content -->
        <div class="page-content">
            <!-- inner page banner -->
            <div class="bnr-inr overlay-black-middle"
                style="background-image:url(_product/<?=$product[0]['_banner'];?>);background-position: center;height:300px;">
                <div class="container">
                    
                </div>
            </div>
            <!-- inner page banner END -->
            <!-- Breadcrumb row 
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="Home">Home</a></li>
                        <li><?=$product[0]['name'];?></li>
                    </ul>
                </div>
            </div>-->
            <!-- Breadcrumb row END -->
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        

                        <?php 
                            $img=json_decode($product[0]['_img'],true);
                            ?>
                        <!-- Side bar END -->
						
						<div class="bnr-inr-entry">
                            <h1 class="text-white" style="color:#4c86c1;padding: 1px 20px 1px 25px;font-family: ui-sans-serif;"><?=$product[0]['name'];?></h1>
						</div>

                        <div class="col-lg-12 col-md-7 col-sm-12 m-b30">
                            <div class="row">
								
								<div class="col-lg-12 col-md-7 col-sm-12 m-b30" style="color:#4c86c1;padding: 1px 20px 1px 25px;">
								<p><?=$product[0]['_desr'];?></p>
								</div>
							
                                <div class="col-sm-4">
                                    <img class="xzoom" id="main_image" src="_product/<?=$img[0];?>"
                                        xoriginal="_product/<?=$img[0];?>" />

                                    <div class="xzoom-thumbs" style="margin: -1px; text-align: center;">
                                        <?php 
                                        $i=0;
                                         foreach( $img as $v){        
                                            
                                            if($i==0){
                                        ?>
                                        <a href="_product/<?=$v;?>">
                                            <img class="xzoom-gallery" width="80" src="_product/<?=$v;?>"
                                                xpreview="_product/<?=$v;?>">
                                        </a>
                                        <?php 
                                        }else{ ?>
                                        <a href="_product/<?=$v;?>">
                                            <img class="xzoom-gallery" width="80" src="_product/<?=$v;?>">
                                        </a>

                                        <?php }
                                    
                                    } ?>


                                    </div>

                                </div>

                                <!-- <div class="col-sm-6">
                                   <h2  style="font-size: 25px;"><?=$product[0]['_subtitle'];?></h2>
                                   <p><?=$product[0]['_subtitle'];?></p>

                                   <h3>
                                    <strong>Weight :  <?=$product[0]['_weight']*1000;?>
                                    <?php if($product[0]['_weight']*1000<=1000){

                                        if($product[0]['wet_type']=="Liter"){
                                            echo "ML";
                                        }else{
                                            echo "Gram";
                                        }
                                     
                                    }else{
                                        echo $product[0]['wet_type'];
                                    }
                                    
                                    ?> </strong>
                                   </h3>
                                   <h3>
                                    <strong>Price :  <?=$product[0]['_price'];?> </strong>
                                   </h3>
                                 
                                   <hr>
                                   <a class="add-to-cart btn btn-warning" href="<?=current_url()?>?pid=<?=$product[0]['row_id'];?>">+ Add To Cart</a>
                                 </div> -->

                                <div class="col-sm-4" style="border-style: ridge; padding:10px;">
								<h3 style="color:#4c86c1;">FEATURES AND BENEFIT : </h3>
                                <?=$product[0]['_feature'];?>
                                </div>

                                <div class="col-sm-4"style="border-style: ridge; padding:10px;" >
								<h3 style="color:#4c86c1;">TECHNICAL DATA : </h3>
                                <?=$product[0]['_techdata'];?>
                                </div>

                            </div>
                        </div>



                        
                        <div class="col-lg-12 col-md-7 col-sm-12 m-b30">
                            <hr>

                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="<?=base_url("assets/images/logo.png");?>" alt="" srcset="">
                                </div>

                                <div class="col-sm-6">
                                    <div class="p-a30 bg-gray clearfix m-b30 ">
                                        <h2>Send Message</h2>


                                        <form method="post">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input name="name" type="text" required class="form-control"
                                                                placeholder="Your Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input name="email" type="email" required
                                                                class="form-control" placeholder="Your Email Id">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input name="mobile" type="text" required
                                                                class="form-control" placeholder="Phone">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input name="_sub" type="text" required class="form-control"
                                                                placeholder="Subject">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input name="city" type="text" required class="form-control"
                                                                placeholder="City">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <textarea name="_desr" rows="4" required
                                                                class="form-control"
                                                                placeholder="Type Your Message Here..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <button name="save" type="submit" class="site-button "> <span>Submit
                                                            Now</span> </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>

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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script type="text/javascript" src="assets/js/xzoom.min.js"></script>

    <script>
    $("#main_image, .xzoom-gallery").xzoom();
    </script>
    <script src="assets/js/combining.js"></script><!-- COMBINING JS  -->





    <!-- CSS STYLE-->


    <!-- XZOOM JQUERY PLUGIN  -->


</body>

</html>