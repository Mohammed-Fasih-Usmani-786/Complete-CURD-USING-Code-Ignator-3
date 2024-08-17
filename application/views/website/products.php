<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Roller Pest Control Services in Jaipur, Best Pest control Service near me, Professional Pest control Services, Professional Pest control service, Pest control Jaipur, Pest control in Jaipur, pest control service in Jaipur, pest control service in India, best pest control services in Jaipur, bedbugs control in Jaipur, best pest control in Jaipur, Termite Control Service in Jaipur, Residential Pest Control Service in Jaipur, Commercial pest control Service in Jaipur, Cockroach control Service in Jaipur,  Termite Control Company, Herbal pest control Service in Jaipur, Mosquitoes control service in Jaipur, Industrial pest control service in Jaipur." />
	<meta name="author" content="Roller Pest Control Services" />
	<meta name="robots" content="product, follow" />
	<meta name="description" content="We provide the Residential, Commercial, Industrial pest control services in Jaipur, India. Clean your home and workspace with Roller Pest Control Services. Hire Best Roller pest control services experts for Termite Control Service in Jaipur, Cockroach control & Mosquitoes control services."/>
	<meta property="og:description" content="We provide the Residential, Commercial, Industrial pest control services in Jaipur, India. Clean your home and workspace with Roller Pest Control Services. Hire Best Roller pest control services experts for Termite Control Service in Jaipur, Cockroach control & Mosquitoes control services." />
	<meta property="og:image" content="assets/images/background/bg6.jpg" />
	<meta name="format-detection" content="telephone=no">
	

    <base href="<?=base_url();?>">
    <!-- FAVICONS ICON -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Product | IDEAL GROUP OF INDUSTRIES</title>

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
    
    
    ._price{
        display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding-top: 8px;
    }
    
    .container {
    max-width: 95%;
    }

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
                        <h1 class="text-white">Product</h1>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="Home">Home</a></li>
                        <li>Product</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <!-- Left part start -->
                        <?php foreach($product as  $v){ 
                            $img=json_decode($v['_img'],true);
                            ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-grid" style="padding: 10px 10px;    box-shadow: 0px 0px 2px #000000b0;    border-radius: 7px;
">
                                <div class="product-image" style="height: 300px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: #fff; overflow: hidden;">
                                    <?php if(!empty($img)){ ?>
                                    <a href="View-product/<?=$v['row_id'];?>">
                                        <img class="pic-1" src="_product/<?=$img[0];?>">
                                    </a>
                                    <?php }else{ ?>
                                        <a href="#">
                                        <img class="pic-1" src="">
                                    </a>
                                   <?php  }?>

                                    
                                </div>
                               

                                <div class="product-content">
                                    <h3 class="title"><a href="View-product/<?=$v['row_id'];?>"><?=$v['name'];?></a></h3>
                                    <span class="product-new-label"><?=$v['_weight'];?> <?=$v['wet_type'];?></span>
                                    <span class="product-discount-label">0%</span>
                                    <div class="_price">
                                        <span>₹ <?=$v['_price'];?></span>
                                        <a class="add-to-cart btn btn-primary" href="<?=current_url()?>?pid=<?=$v['row_id'];?>">+ Add To Cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- Left part END -->
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