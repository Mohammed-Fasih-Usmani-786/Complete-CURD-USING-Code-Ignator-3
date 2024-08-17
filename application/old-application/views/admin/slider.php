<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Enquery</title>

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
    <!-- endinject -->

    <?php 
    
    if($m!=1 || $m!="1"){
        echo '<script>alert("'.$m.'");</script>';    
    }
    ?>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
        <?php include("header.php");?>
        <main class="mdl-layout__content ">

            <div class="mdl-grid ui-tables">

                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title"  style="display: flex;    flex-direction: row;    justify-content: space-between;">
                            <h1 class="mdl-card__title-text">All Slider </h1>

                            <a href="Admin/Add-slider" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red">Add</a>

                        </div>
                        <div class="mdl-card__supporting-text no-padding">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                    <tr>
                                        <th class="mdl-data-table__cell--non-numeric">#</th>
                                        <th class="mdl-data-table__cell--non-numeric">Image</th>
                                        <th class="mdl-data-table__cell--non-numeric">Title</th>
                                      
                                        <th class="mdl-data-table__cell--non-numeric">
                                            Action
                                        </th>
                                       

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                             
                                    $data=[];
                                    $i=1;
                                    foreach($user as $v){ 
                                ?>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric"><?=$i++;?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><img src="slider/<?=$v['_img'];?>" alt="" width="60" srcset=""></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?=$v['_title'];?></td>                                      
                                        <td>
                                            <a href="Admin/Update-slider/<?=$v['row_id'];?>" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal">Edit</a>
                                            <a href="Admin/Slider?del=<?=$v['row_id'];?>" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red">Delete</a>
                                        </td>
                                    </tr>

                                    <?php } ?>

                                </tbody>
                            </table>
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