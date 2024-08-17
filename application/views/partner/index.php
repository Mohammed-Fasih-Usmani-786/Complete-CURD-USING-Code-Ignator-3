<!doctype html>

<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin- IDEAL GROUP OF INDUSTRIES</title>

    <base href="<?= base_url(); ?>">
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

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="public/css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="public/css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="public/css/application.min.css">
    <!-- endinject -->

</head>

<body  style="color:black;">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
        <?php include("header.php"); ?>
        <main class="mdl-layout__content">

            <div class="mdl-grid mdl-grid--no-spacing dashboard">

                <div
                    class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">



                    <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                        <div class="mdl-card mdl-shadow--2dp trending">
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text">All Enquery</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <ul class="mdl-list">
                                    <li class="mdl-list__item">
                                        <span class="mdl-list__item-primary-content list__item-text">User</span>

                                        <!-- <span class="mdl-list__item-secondary-content trending__percent">
                                            <?= $user ?>
                                        </span> -->
                                    </li>
                                    <!-- <a class="" href="Admin/Product">
                                        <i class="material-icons" role="presentation"></i>
                                        Products
                                    </a> -->
                                </ul>
                            </div>
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