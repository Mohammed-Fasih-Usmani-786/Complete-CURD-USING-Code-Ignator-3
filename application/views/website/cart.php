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
    <title>Product</title>

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
                        <h1 class="text-white">Cart</h1>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="Home">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
            <div class="content-area">
                <div class="container">
                    <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Left part start -->
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SR</th>
                                        <th width=100></th>
                                        <th>Product Name</th>
                                        <th>QTY</th>
                                        <th>Price</th>
                                        <th>GST</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
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
                            $img=json_decode($v['_img'],true);
                            ?>
                            <tr>
                                <th><?=$i++;?></th>
                                <th>  <img class="pic-1" width="100" src="_product/<?=$img[0];?>"></th>
                                <th><?=$v['name'];?></th>
                                <th><?=$v['qty'];?></th>
                                <th><?=$v['_price'];?></th>
                                <th><?=$gst;?>  (<?=$v['_gst']?>%)</th>
                                <th><?=$v['qty']*$v['_price']+$gst;?>.00</th>
                            </tr>

                              
                      
                        <?php } ?>

                        <tr>
                            <th colspan="3"></th>
                            <th><?=$t_qty;?></th>
                            <th>Total</th>
                            <th colspan="2" style="text-align:right"><?=$t_amount;?>.00</th>   
                        </tr>
                        <tr>
                            <th colspan="3"></th>
                            <th></th>
                            <th>GST</th>
                            <th colspan="2" style="text-align:right"><?=$_gst;?>.00</th>   
                        </tr>
                        <tr>
                            <th colspan="3"></th>
                            <th></th>
                            <th>Grand Total</th>
                            <th colspan="2" style="text-align:right"><?=$t_amount+$_gst;?>.00</th>   
                        </tr>
                            <tr>
                            <th colspan="3" class="text-left">
                                <a class="add-to-cart btn btn-primary" href="Product">Shpping</a>
                            </th>
                            <th colspan="4" class="text-right">
                                <a class="add-to-cart btn btn-warning" href="Checkout">Checkout</a>
                            </th>
                            </tr>
                        </tbody>
                            </table>
                        </div>
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