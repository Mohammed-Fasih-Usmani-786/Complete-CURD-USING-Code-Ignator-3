<?php //include("header.php"); ?>

<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <main class="form-signin w-100 m-auto">
                <form action="Signin" method="post">
                    <h1 class=" mb-3 fw-bold text-center my-5">Cilent Sign in</h1>

                    <div class="form-floating my-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="Name">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="text" class="form-control" id="floatingEmail" placeholder="Email" name="Email">
                        <label for="floatingEmail">Email</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                            name="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <input type="submit" class="btn btn-warning w-100 py-2 my-3" name="register">
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5"><a href="Log">I Have Already Account</a></div>
                        <div class="col-sm-1">
                            
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                </form>
            </main> -->
<!-- <a href="<?php //echo site_url("MainController/reg"); ?>" class="fs-3">Signup</a> -->
<!-- </div>
        <div class="col-sm-4"></div>
    </div>
</div> -->


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | IDEAL GROUP OF INDUSTRIES</title>
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

    <!-- <?php

    if ($m != 1 || $m != "1") {
        echo '<script>alert("' . $m . '");</script>';
    }
    ?> -->

</head>

<body>

    <div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
        <main class="mdl-layout__content">
            <div class="mdl-card mdl-card__login mdl-shadow--2dp">
                <form action="Sign-In" method="post">
                    <div class="mdl-card__supporting-text color--dark-gray">
                        <div class="mdl-grid">

                            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                                <h2>Sign-in</h2>

                            </div>
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                    <input class="mdl-textfield__input" type="text" id="e-mail" name="Name">
                                    <label class="mdl-textfield__label" for="e-mail">Name</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                    <input class="mdl-textfield__input" type="text" id="e-mail" name="Email">
                                    <label class="mdl-textfield__label" for="e-mail">Email</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                    <input class="mdl-textfield__input" type="text" id="password" name="Password">
                                    <label class="mdl-textfield__label" for="password">Password</label>
                                </div>
                                <a href="Sign-in" class="login-link">Forgot password?</a>
                            </div>
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                                <a href="Sign-up" class="login-link">Don't have account?</a>
                                <div class="mdl-layout-spacer"></div>

                                <button type="submit" name="register"
                                    class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                                    SIGN IN
                                </button>

                            </div>
                        </div>
                    </div>
                </form>
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