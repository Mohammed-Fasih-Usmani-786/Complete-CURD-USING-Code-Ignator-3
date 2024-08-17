<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Customer Order</title>

    <base href="<?=base_url();?>">



    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="public/css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="public/css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="public/css/application.min.css">
    <?php 
    
    if($m!=1 || $m!="1"){
        echo '<script>alert("'.$m.'");</script>';    }
    ?>


<style>
    table{
        width: 90%!important;
    margin: auto;
    border-collapse: collapse;
   
    }
    table td,th{
        border-left:1px solid;
        border-top:1px solid;
    }
    table tr{
        border-right:1px solid;
        border-bottom:1px solid;
    }
</style>



    <!-- endinject -->
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
        <?php include("header.php");?>
        <main class="mdl-layout__content ">

            <div class="mdl-grid ui-tables">

                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title">
                            <h1 class="mdl-card__title-text">View Order :   </h1>
                        </div>
                        <div class="mdl-card__supporting-text no-padding">
                         <form  method="post" style="padding: 50px 0px;">
                         <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="3" style="text-align:left;width:50%">
                                            Order Date: <?=date("d-m-Y",strtotime($order[0]['o_date']));?>
                                        </th>
                                       
                                        <th colspan="3" style="text-align:left;width:50%">
                                            Invoice No. :  <input type="text" required value="<?=$order[0]['bill_no'];?>" name="bill_no">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3" style="text-align:left;">
                                            Name: <?=$order[0]['name'];?>
                                        </th>
                                       
                                        <th colspan="3" rowspan="3" style="text-align: left;  vertical-align: top;">
                                        <strong> Selling By:</strong>
                                        <br>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3" style="text-align:left;">
                                            Mobile: <?=$order[0]['mobile'];?>
                                        </th>
                                       
                                      
                                    </tr>
                                    <tr>
                                        <th colspan="3" style="text-align:left;">
                                        <strong> Billing Address</strong>
                                        <br>
                                            City: <?=$order[0]['_city'];?><br>
                                            State: <?=$order[0]['_state'];?><br>
                                            Address: <?=$order[0]['_address'];?><br>
                                        </th>
                                       
                                        
                                    </tr>
                                    <tr>
                                        <th style="width: 25px;">SR</th>
                                        <th width=100></th>
                                        <th>Product Name</th>
                                        <th>QTY</th>
                                        <th>Price</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php 
                        $i=1;
                        $t_qty=0;
                        $t_amount=0;
                        $cartdata=json_decode($order[0]['item'],true);
                        foreach($cartdata as  $v){ 

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
                                <th><?=$v['qty']*$v['_price'];?></th>
                            </tr>

                              
                      
                        <?php } ?>

                        <tr>
                            <th colspan="3" style="text-align:left">
                                <strong>Payment : <?=$order[0]['_pay_mode'];?> </strong>
                            </th>
                            <th><?=$t_qty;?></th>
                            <th>Total</th>
                            <th><?=$t_amount;?></th>   
                        </tr>
                        <tr>
                        <th colspan="3" style="text-align:left">
                            <strong>Order Status : <?=$order[0]['_status'];?>

                            <select name="status" id="">
                            <?php 
                            
                            $xarr=['Pending','Confirm','Dispatch','Delivered','Cancel'];
                                foreach($xarr as $x){
                                    if($x==$order[0]['_status']){
                                        echo '<option selected>'.$x.'</option>';
                                    }else{
                                        echo '<option>'.$x.'</option>';
                                    }
                                    
                                    
                                }
                            ?></select>
                        
                        </strong>
                            </th>
                            <th></th>
                            <th>GST(18%)</th>
                            <th><?=$t_amount*18/100;?></th>   
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align:left"></th>
                            <th></th>
                            <th>Grand Total</th>
                            <th><?=$t_amount+($t_amount*18/100);?></th>   
                        </tr>
                            <tr>
                            <th colspan="3" class="text-left">
                            <button type="submit" name="update" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red">Update</button>
                            </th>
                            <th colspan="3" class="text-right">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-green">Print</button>
                            </th>
                            </tr>
                        </tbody>
                            </table>        

                        </form>
                        </div>
                    </div>
                </div>




            </div>
        </main>
    </div>

    <!-- inject:js -->
    <script src="public/js/d3.min.js"></script>
    <script src="public/js/getmdl-select.min.js"></script>
    <script src="public/js/material.min.js"></script>
    <script src="public/js/nv.d3.min.js"></script>
    <script src="public/js/layout/layout.min.js"></script>
    <script src="public/js/scroll/scroll.min.js"></script>
    <script src="public/js/widgets/charts/discreteBarChart.min.js"></script>
    <script src="public/js/widgets/charts/linePlusBarChart.min.js"></script>
    <script src="public/js/widgets/charts/stackedBarChart.min.js"></script>
    <script src="public/js/widgets/employer-form/employer-form.min.js"></script>
    <script src="public/js/widgets/line-chart/line-charts-nvd3.min.js"></script>
    <script src="public/js/widgets/map/maps.min.js"></script>
    <script src="public/js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
    <script src="public/js/widgets/table/table.min.js"></script>
    <script src="public/js/widgets/todo/todo.min.js"></script>
    <!-- endinject -->

</body>

</html>