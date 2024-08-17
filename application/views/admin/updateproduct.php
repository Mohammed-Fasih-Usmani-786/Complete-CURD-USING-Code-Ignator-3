<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Product</title>

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
        
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <?php

    if ($m != 1 || $m != "1") {
        echo '<script>alert("' . $m . '");</script>';
    }


    $iarr = json_decode($user[0]['_img'], true);
    ?>

    <style>
        .note-editable {
            background-color: #fff;
        }
    </style>
    <!-- endinject -->
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
        <?php include("header.php"); ?>
        <main class="mdl-layout__content ">

            <div class="mdl-grid ui-tables">

                <div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--3-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-shadow--2dp">

                    </div>
                </div>

                <div class="mdl-cell mdl-cell--9-col-desktop mdl-cell--9-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-shadow--2dp" style="background: #fff;">
                        <div class="mdl-card__title">
                            <h1 class="mdl-card__title-text">Update Product </h1>



                        </div>
                        <div class="mdl-card__supporting-text no-padding">
                            <?php echo form_open_multipart(); ?>



                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label"
                                    style="width: 100%;">
                                    <input class="mdl-textfield__input" type="text" style="color: #000;" id="firstName"
                                        name="name" value="<?= $user[0]['name'] ?>" />
                                    <label class="mdl-textfield__label" for="firstName"> Name</label>
                                </div>
                            </div>


                            <!--<div class="mdl-grid">                                    
                                    <div class="mdl-cell mdl-cell--12-col " style="width: 100%;">   
                                      <select name="_type" id="" onchange="mycate(this.value)" style="display: flex;    flex-direction: row;    font-size: 14px;    width: 100%;    height: 30px;">
                                        
                                        <option value="Residential">Residential</option>
                                        <option value="Commercial">Commercial</option>
                                    </select>
                                    <label class="mdl-textfield__label" for="firstName3a"> Select Services</label>
                                     </div>
                                </div>-->


                            <div class="mdl-grid">


                                <div class="mdl-cell mdl-cell--12-col " style="width: 100%;">
                                    <select name="servicecate" id="servicecate"
                                        style="display: flex;    flex-direction: row;    font-size: 14px;    width: 100%;    height: 30px;">

                                        <?php
                                        foreach ($ss as $v) {

                                            if ($user[0]['servicecate'] == $v['row_id']) {
                                                echo "<option selected value='" . $v['row_id'] . "'>" . $v['name'] . "</option>";
                                            } else {
                                                echo "<option value='" . $v['row_id'] . "'>" . $v['name'] . "</option>";
                                            }

                                        }
                                        ?>
                                    </select>
                                    <label class="mdl-textfield__label" for="firstName3a"> Select Services</label>
                                </div>
                            </div>



                            <!--<div class="mdl-grid">                                    
                                    <div class="mdl-cell mdl-cell--12-col " style="width: 100%;">   
                                        <select name="_gst" style="display: flex;    flex-direction: row;    font-size: 14px;    width: 100%;    height: 30px;">
                                            <option selected disabled>Select GST</option>
                                            <?php
                                            $arr = [5, 10, 12, 18, 24];
                                            foreach ($arr as $v) {

                                                if ($v == $user[0]['_gst']) {
                                                    echo '<option selected value="' . $v . '">' . $v . '</option>';
                                                } else {
                                                    echo '<option  value="' . $v . '">' . $v . '</option>';
                                                }
                                            }
                                            ?>
                                                                           
                                        </select>
                                     </div>
                                </div>

                                
                                <div class="mdl-grid">                                    
                                    <div class="mdl-cell mdl-cell--12-col " style="width: 100%;">   
                                        <select name="wet_type" style="display: flex;    flex-direction: row;    font-size: 14px;    width: 100%;    height: 30px;">
                                            <option  disabled>Select Weight Type</option>
                                            <?php
                                            $arr = ['Liter', 'KG'];
                                            foreach ($arr as $v) {

                                                if ($v == $user[0]['wet_type']) {
                                                    echo '<option selected>Liter</option>';
                                                } else {
                                                    echo '<option>KG</option>';
                                                }
                                            }
                                            ?>
                                           
                                        </select>
                                     </div>
                                </div>

                                <div class="mdl-grid">                                    
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="50%">
                                        <input class="mdl-textfield__input" type="text" id="firstNamez" name="_weight" value="<?= $user[0]['_weight'] ?>" />
                                        <label class="mdl-textfield__label" for="firstNamez"> Weight</label>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="50%">
                                        <input class="mdl-textfield__input" type="text" id="firstName3" name="_price" value="<?= $user[0]['_price'] ?>" />
                                        <label class="mdl-textfield__label" for="firstName3"> Price</label>
                                    </div>
                                </div>


                                <div class="mdl-grid">                                    
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <textarea class="mdl-textfield__input" type="text" id="f3" name="_subtitle" ><?= $user[0]['_subtitle'] ?></textarea>
                                        <label class="mdl-textfield__label" for="f3">Sub Title </label>
                                    </div>
                        </div>-->


                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label"
                                    style="width: 100%;">
                                    <textarea class="mdl-textfield__input" type="text" id="fss" name="_desr"
                                        style="height:100px; color: #000;"><?= $user[0]['_desr'] ?></textarea>
                                    <label class="mdl-textfield__label" for="fss">Desctionpion</label>
                                </div>
                            </div>



                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label"
                                    style="width: 100%;">
                                    <strong>Banner Image</strong>
                                    <img src="_product/<?= $user[0]['_banner']; ?>" width='100' alt="">
                                    <h1>yes</h1>
                                    <input class="" type="file" name="_banner" id="secondName4" />

                                    <!-- <input type="submit" value="Delete"> -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label"
                                        style="width: 100%;">
                                        <strong>Product Image 1</strong>
                                        <img src="_product/<?= @$iarr[0]; ?>" width='100' alt="">
                                        <input class="mdl-textfield__input" type="file" name="img1" id="secondName1" />
                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label"
                                        style="width: 100%;">
                                        <strong>Product Image 2</strong>
                                        <img src="_product/<?= @$iarr[1]; ?>" width='100' alt="">
                                        <input class="mdl-textfield__input" type="file" name="img2" id="secondName2" />
                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label"
                                        style="width: 100%;">
                                        <strong>Product Image 3</strong>
                                        <img src="_product/<?= @$iarr[2]; ?>" width='100' alt="">
                                        <input class="mdl-textfield__input" type="file" name="img3" id="secondName3" />
                                   <br><br>                 
                                <?php foreach($user as $v){ 
                                ?>
                                    <tr>    
                                        <td>
                                            <a href="Adminpanal/Delete?del=<?=$v['_img'];?>" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red">Delete</a>
                                        </td>
                                    </tr>

                                <?php } ?>




                            <!-- <?php foreach ($user as $row) { ?> -->

                                <!-- <tr> -->
                                    <!-- <td class="mdl-data-table__cell--non-numeric">
                                    <?=$row['row_id'];?>
                                        
                                    </td>      -->
                                    <!-- <td>
                                            <a href='<?php echo site_url("Adminpanal/Delete/" . $row->id); ?>'>
                                                <button class='btn btn-danger'>Delete</button>
                                            </a>
                                    </td>         -->
                                <!-- </tr> -->
                            <!-- <?php } ?> -->


                                        <!-- <a href="Adminpanal/Delete?Del=<?=$v['row_id'];?>">
                                                Delete
                                        </a> -->
                                        <!-- <a href="Adminpanal/Delete">
                                            Delete
                                        </a>    -->
                                        
                                        <!-- <a href="<?php echo site_url(''); ?>">
                                            Delete
                                        </a> -->

                                        <!-- <a href='<?php echo site_url("Adminpanal/del/" . $iarr->$iarr[2]); ?>' id="yes">
                                            Delete
                                        </a> -->
                                        <!-- jkshjkfdshfjkshdkjfhsjkdhfkjshdjfsjdhfkjshdjkfhsjkdhfjkshdjkfsdf -->
                                        <!-- sdjaksdjkasdaskdjasdasdhjasdasd -->
                                    </div>
                                </div>
                            </div>



                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield "
                                    style="width: 100%;  display: flex;   flex-direction: column;">
                                    <strong>FEATURES AND BENEFIT</strong>
                                    <textarea class="form-control" name="_feature" readonly id="summernote"
                                        rows="5"><?= $user[0]['_feature']; ?></textarea>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div style="" class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield "
                                    style="width: 100%;width: 100%;   display: flex;   flex-direction: column;">
                                    <strong>TECHNICAL DATA</strong>
                                    <textarea class="form-control" name="_techdata" readonly id="summernote1"
                                        rows="5"><?= $user[0]['_techdata']; ?></textarea>
                                </div>
                            </div>



                            <div class="form__action" style="margin:10px">

                                <button type="submit" name="save" id="submit_button"
                                    class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                    Update
                                </button>
                            </div>




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

    <script>
        $('#summernote').summernote();


        $('#summernote1').summernote();
        function mycate(str) {

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("servicecate").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "Adminpanal/getcate/" + str, true);
            xmlhttp.send();

        }

        // yes.onclick=()=>
        // {
        //     alert("yes");
        // }

    </script>

</body>

</html>