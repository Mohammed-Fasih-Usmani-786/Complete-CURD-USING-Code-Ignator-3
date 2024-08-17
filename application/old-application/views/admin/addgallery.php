<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>P2p Help</title>

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
                            <h1 class="mdl-card__title-text">Add Gallery  </h1>
                        </div>
                        <div class="mdl-card__supporting-text no-padding">
                        <?php echo form_open_multipart();?>

                        <?php if(!empty($user)){  ?>


                                <div class="mdl-grid">                                    
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <input class="mdl-textfield__input" type="text" id="firstName" name="_title" value="<?=$user[0]['_title'];?>" />
                                        <label class="mdl-textfield__label" for="firstName">Title</label>
                                    </div>
                                </div>
                               
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <input class="mdl-textfield__input" type="file" name="userfile" id="secondName"  />
                                       
                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <img src="_gallery/<?=$user[0]['_img'];?>" alt="" width="300" srcset="">
                                       
                                    </div>
                                </div>


                                <div class="form__action" style="margin:10px">
                                   
                                    <button type="submit" name="save" id="submit_button"
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                        Save
                                    </button>
                                </div>

                            <?php }else{ ?>

                                
                                <div class="mdl-grid">                                    
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <input class="mdl-textfield__input" type="text" id="firstName" name="_title" />
                                        <label class="mdl-textfield__label" for="firstName">Title</label>
                                    </div>
                                </div>
                              

                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <input class="mdl-textfield__input" type="file" name="userfile" id="secondName" />
                                       
                                    </div>
                                </div>
                             

                                <div class="form__action" style="margin:10px">
                                   
                                    <button type="submit" name="save" id="submit_button"
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                        Save
                                    </button>
                                </div>

                                
                           <?php  } ?>

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