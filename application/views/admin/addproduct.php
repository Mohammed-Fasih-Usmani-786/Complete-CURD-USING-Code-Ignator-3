<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product</title>

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

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="public/css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="public/css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="public/css/application.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <?php

    if ($m != 1 || $m != "1") {
        echo '<script>alert("' . $m . '");</script>';
    }
    ?>

    <style>
        .note-editable {
            background-color: #fff;
        }
    </style>

    <!-- endinject -->
</head>

<body style="color:red">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
        <?php include("header.php"); ?>
        <main class="mdl-layout__content ">

            <div class="mdl-grid ui-tables">

                <div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--3-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-shadow--2dp">

                    </div>
                </div>

                <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title">
                            <h1 class="mdl-card__title-text">Add Product </h1>

                        </div>
                        <div class="mdl-card__supporting-text no-padding">
                            <?php echo form_open_multipart(); ?>

                            <?php if (!empty($user)) {  ?>


                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <input class="mdl-textfield__input" type="text" id="firstName" name="_title" value="<?= $user[0]['_title']; ?>" />
                                        <label class="mdl-textfield__label" for="firstName"> Name</label>
                                    </div>
                                </div>
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <input class="mdl-textfield__input" type="text" id="firstNamex" name="_subtitle" value="<?= $user[0]['_title']; ?>" />
                                        <label class="mdl-textfield__label" for="firstNamex">Title</label>
                                    </div>
                                </div>


                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <input class="mdl-textfield__input" type="file" name="userfile" id="secondName" />

                                    </div>
                                </div>



                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <img src="upload/<?= $user[0]['_img']; ?>" alt="" width="300" srcset="">

                                    </div>
                                </div>


                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <textarea style="min-height: 200px;" class="mdl-textfield__input" type="text" id="firstNamez" name="_desr"><?= $user[0]['_desr']; ?>"</textarea>
                                        <label class="mdl-textfield__label" for="firstNamez">Description</label>
                                    </div>
                                </div>

                                <div class="form__action" style="margin:10px">

                                    <button type="submit" name="save" id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                        Save
                                    </button>
                                </div>
                            

                            <?php } else { ?>


                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <span class="mdl-list__item-sub-title">ID::::::<?= $_SESSION['_admin']['id']; ?></span>
                                        <strong>Banner Image</strong>

                                        <input class="mdl-textfield__input" type="file" name="_banner" id="secondName4" />
                                    </div>
                                </div>


                                

                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <input class="mdl-textfield__input" type="text" id="firstName" name="name" />
                                        <label class="mdl-textfield__label" for="firstName"> Name</label>
                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <input class="mdl-textfield__input" type="text" id="firstName" name="city" />
                                        <label class="mdl-textfield__label" for="firstName"> City</label>
                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <!-- <input class="mdl-textfield__input" type="text" id="firstName"  name="cosid" value="<?= $_SESSION['_admin']['Row_Id']; ?>"> -->
                                        <input type="hidden" name="client_id" value="<?= $_SESSION['_admin']['id']; ?>">
                                        <!-- <label class="mdl-textfield__label" for="firstName"> Name</label> -->
                                    </div>
                                </div>


                                <!-- <div class="mdl-grid">                                    
                                    <div class="mdl-cell mdl-cell--12-col " style="width: 100%;">   
                                      <select name="_type" id="" onchange="mycate(this.value)" style="display: flex;    flex-direction: row;    font-size: 14px;    width: 100%;    height: 30px;">
                                        <option value="" selected Disabled>Select Category</option>
                                        <option value="Residential">Residential</option>
                                        <option value="Commercial">Commercial</option>
                                    </select>
                                    <label class="mdl-textfield__label" for="firstName3a"> Select Services</label>
                                     </div>
                                </div> -->
                                
                                <!-- <div class="mdl-grid">                                    
                                    <div class="mdl-cell mdl-cell--12-col " style="width: 100%;">   
                                      <select name="servicecate" id="servicecate" style="display: flex; flex-direction: row; font-size: 14px; width: 100%; height: 30px;">
                                       
                                    </select>
                                    <label class="mdl-textfield__label" for="firstName3a"> Category</label>
                                     </div>
                                </div> -->


                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col " style="width: 100%;">
                                        <select name="_gst" style="display: flex;    flex-direction: row;    font-size: 14px;    width: 100%;    height: 30px;">
                                            <option selected disabled>Select GST</option>
                                            <option Value="5">5%</option>
                                            <option Value="10">10%</option>
                                            <option Value="12">12%</option>
                                            <option Value="18">18%</option>
                                            <option Value="24">24%</option>
                                        </select>

                                    </div>
                                </div>

                                <!-- <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col " style="width: 100%;">
                                        <select name="cat_opt" style="display: flex;    flex-direction: row;    font-size: 14px;    width: 100%;    height: 30px;">
                                            <option selected disabled>Select option</option>
                                            <option>Buy</option>
                                            <option>Sale</option>
                                            <option>Lease</option>
                                            <option>Pg</option>
                                        </select>

                                    </div>
                                </div> -->


                                <div class="mdl-grid">
                                    <!-- <div class="col-sm-4"> -->
                                        <div class="mdl-cell mdl-cell--12-col " style="width: 100%;">
                                            <label for="_cate">Catergory</label>
                                            <select name="cat_opt" id="" style="display: flex;    flex-direction: row;    font-size: 14px;    width: 100%;    height: 30px;">
                                            <option selected disabled>Select option</option>
                                                <?php foreach ($cat_opt as $v) {  ?>
                                                    <option value="<?= $v['name']; ?>"> <?= $v['name']; ?></option>  
                                                    <!-- <?= $v['row_id']; ?> -->

                                                <?php }   ?>
                                            </select>
                                        </div>
                                    <!-- </div> -->
                                </div>

                                
                                <div class="mdl-grid">
                                    <!-- <div class="col-sm-4"> -->
                                        <div class="mdl-cell mdl-cell--12-col " style="width: 100%;">
                                            <label for="_cate">Catergory</label>
                                            <select name="c_type" id="" style="display: flex;    flex-direction: row;    font-size: 14px;    width: 100%;    height: 30px;">
                                            <option selected disabled>Select option</option>
                                                <?php foreach ($c_type as $v) {  ?>
                                                    <option value="<?= $v['name']; ?>"> <?= $v['name']; ?></option>  
                                                    <!-- <?= $v['row_id']; ?> -->

                                                <?php }   ?>
                                            </select>
                                        </div>
                                    <!-- </div> -->
                                </div>



                                <div class="mdl-grid">
                                    <div class="col-sm-4">
                                        <div class="mdl-cell mdl-cell--12-col " style="width: 100%;">
                                            <select name="wet_type" style="display: flex;    flex-direction: row;    font-size: 14px;    width: 100%;    height: 30px;">
                                                <option selected disabled>Select Weight Type</option>
                                                <option>1 BHK</option>
                                                <option>2 BHK</option>
                                                <option>3 BHK</option>
                                                <option>4 BHK</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <!-- <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="50%">
                                        <input class="mdl-textfield__input" type="text" id="firstNamez" name="_weight" />
                                        <label class="mdl-textfield__label" for="firstNamez"> Weight</label>
                                    </div> -->
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="50%">
                                        <input class="mdl-textfield__input" type="text" id="firstName3" name="price" />
                                        <label class="mdl-textfield__label" for="firstName3"> Price</label>
                                    </div>
                                </div>


                                <!-- <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <textarea class="mdl-textfield__input" type="text" id="f3" name="_subtitle"></textarea>
                                        <label class="mdl-textfield__label" for="f3">Sub Title </label>
                                    </div>
                                </div> -->
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <textarea class="mdl-textfield__input" type="text" id="fss" name="_desr"></textarea>
                                        <label class="mdl-textfield__label" for="fss">Desctionpion</label>
                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <input class="mdl-textfield__input" type="file" name="img1" id="secondName1" />
                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <input class="mdl-textfield__input" type="file" name="img2" id="secondName2" />
                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                                        <input class="mdl-textfield__input" type="file" name="img3" id="secondName3" />
                                    </div>
                                </div>
                                <!-- include summernote css/js -->



                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield " style="width: 100%;  display: flex;   flex-direction: column;">
                                        <strong>FEATURES AND BENEFIT</strong>
                                        <textarea class="form-control" name="_feature" readonly id="summernote" rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="mdl-grid">
                                    <div style="" class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield " style="width: 100%;width: 100%;   display: flex;   flex-direction: column;">
                                        <strong>TECHNICAL DATA</strong>
                                        <textarea class="form-control" name="_techdata" readonly id="summernote1" rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="form__action" style="margin:10px">
                                    <button type="submit" name="add" id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                        Save
                                    </button>
                                </div>


                            <?php  } ?>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--3-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-shadow--2dp">

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
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    
                    document.getElementById("servicecate").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "Adminpanal/getcate/" + str, true);
            xmlhttp.send();

        }

        function getcate(str, id = 1) {
            alert(str);
            // $.ajax({
            //     url: "Admin/getform/" + str,
            //     type: "post",
            //     data: [],
            //     success: function(d) {
            //         var a = JSON.parse(d);

            //         $("#" + id).html(a['cate']);
            //         $("#formfield").html(a['form']);
            //     }
            // });
        }
        // function mycate1(str) {

        //     var xmlhttp = new XMLHttpRequest();
        //     xmlhttp.onreadystatechange = function() {
        //         if (this.readyState == 4 && this.status == 200) {
        //             document.getElementById("servicecate1").innerHTML = this.responseText;
        //         }
        //     };
        //     xmlhttp.open("GET", "Admin/getcate1/" + str, true);
        //     xmlhttp.send();

        // }
    </script>

</body>

</html>