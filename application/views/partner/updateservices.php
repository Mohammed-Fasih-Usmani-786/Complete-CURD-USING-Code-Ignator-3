<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Services</title>

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

select{
    height: 35px;
    font-size: 15px;
    font-weight: 600;
}
    select  > option{
        background: #fff;
        color: #000;
    }
  
    .row{
       
        flex-direction: row;
    display: flex;
    justify-content: space-around;
    padding: 10px 0px;

    }

    .column{
        display: flex;
    flex-direction: column;
    padding: 10px;
    width: 95%;
    }

    input{
        width: 100%;
        border: none;
        height: 30px;
        padding: 0px 7px;
        border-radius: 5px;
        box-shadow: 0px 0px 4px #000;
}

textarea{
        width: 100%;
        border: none;
        height: 35px;
        padding: 0px 7px;
        border-radius: 5px;
        box-shadow: 0px 0px 4px #000;
        resize: none;
        height: 50px;
}

.imgdata{
    width:200px;
    height: 100px;
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
                            <h1 class="mdl-card__title-text">Update Services </h1>

                        </div>
                        <div class="mdl-card__supporting-text no-padding">
                       
                        <form method="post" class="column" enctype='multipart/form-data'>


                        <div class="row">
                               
                               <div class="column">
                                  <strong>Top Banner Image : </strong>
                                  
                                  <div style="flex-direction: row;margin-bottom: 10px;">
                                       <img src="" alt="" class="imgdata" id="img6">
                                       <img src="_services/<?=$service['_img6']?>" alt="" class="imgdata" >
                                  </div>
                                  <input type="file" name="img6"  style="width: 200px;"  accept='image/*' onchange='openFile(event,"img6")'>
                              </div>
                             
                          </div>
                          <hr>


                        <div class="row">                               
                            <div class="column">
                                    <strong>Serivce Title </strong>                                    
                                    <input type="text" name="stitle" value="<?=$service['_title'];?>">
                                    <strong>Serivce Sub Title </strong>                                    
                                    <input type="text" name="subtitle" value="<?=$service['_subtitle'];?>">
                                    <strong>Serivce Sub Title </strong>  
                                    <select name="_type" id="" onchange="mycate(this.value)">
                                        <option value="Residential" <?=$service['_type']=="Residential"?"selected":"";?>>Residential</option>
                                        <option value="Commercial" <?=$service['_type']=="Commercial"?"selected":"";?>>Commercial</option>
                                    </select>
                                    
                                    <strong>Services Category </strong>  
                                    
                                     <select name="servicecate" id="servicecate">
                                       <?php 
                                       foreach($ss as $v){
                                           
                                           if($service['_type']==$v['row_id']){
                                              echo  "<option selected value='".$v['row_id']."'>".$v['name']."</option>";
                                           }else{
                                               echo "<option value='".$v['row_id']."'>".$v['name']."</option>";
                                           }
                                         
                                       }
                                       ?>
                                    </select>
                            </div>
                        </div>
                        <hr>


                            <div class="row">
                                <div class="column">
                                    <strong>Image : </strong>
                                   <div style="flex-direction: row;margin-bottom: 10px;">
                                        <img src="" alt="" class="imgdata" id="img1">
                                        <img src="_services/<?=$service['_img1']?>" alt="" class="imgdata" >
                                   </div>
                                    <input type="file" name="img1" style="width: 200px;" accept='image/*' onchange='openFile(event,"img1")'>
                                </div>
                                <div class="column">
                                     <strong>Title : <span id="title1"> </span></strong>                                    
                                     <input type="text" name="title1" value="<?=$service['title1'];?>" onchange="title1val(this.value,'title1')" id="">
                                     <strong>Desctiption : <span id="des1"> </span></strong>                                    
                                     <textarea type="text" name="des1" onchange="title1val(this.value,'des1')" id=""><?=$service['des1'];?></textarea>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                               
                                <div class="column">
                                     <strong>Title : <span id="title2"> </span></strong>                                    
                                     <input type="text" name="title2" onchange="title1val(this.value,'title2')" id="" value="<?=$service['title2'];?>">
                                     <strong>Desctiption : <span id="des2"> </span></strong>                                    
                                     <textarea type="text" name="des2" onchange="title1val(this.value,'des2')" id=""><?=$service['des2'];?></textarea>
                                </div>
                                <div class="column">
                                    <strong>Image : </strong>
                                   
                                    <div style="flex-direction: row;margin-bottom: 10px;">
                                        <img src="" alt="" class="imgdata" id="img2">
                                        <img src="_services/<?=$service['_img2']?>" alt="" class="imgdata" >
                                   </div>
                                    <input type="file" name="img2"  style="width: 200px;"  accept='image/*' onchange='openFile(event,"img2")'>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                               
                                <div class="column">
                                   <strong>Image : </strong>
                                   
                                   <div style="flex-direction: row;margin-bottom: 10px;">
                                        <img src="" alt="" class="imgdata" id="img3">
                                        <img src="_services/<?=$service['_img3']?>" alt="" class="imgdata" >
                                   </div>
                                   <input type="file" name="img3"  style="width: 200px;"  accept='image/*' onchange='openFile(event,"img3")'>
                               </div>
                               <div class="column">
                                   <strong>Image : </strong>
                                   
                                   <div style="flex-direction: row;margin-bottom: 10px;">
                                        <img src="" alt="" class="imgdata" id="img4">
                                        <img src="_services/<?=$service['_img4']?>" alt="" class="imgdata" >
                                   </div>
                                   <input type="file" name="img4"  style="width: 200px;"  accept='image/*' onchange='openFile(event,"img4")'>
                               </div>
                           </div>
                           <hr>
                           <div class="row">
                               
                                <div class="column">                                     
                                     <strong>Desctiption :<span id="des3"> </span></strong>                                    
                                     <textarea type="text" name="des3" onchange="title1val(this.value,'des3')" id=""><?=$service['des3'];?></textarea>
                                </div>
                              
                            </div>

                            <hr>
                            <div class="row">
                            
                               <div class="column">
                                 
                                   
                                   <div style="flex-direction: row;margin-bottom: 10px;">
                                        <img src="" alt="" class="imgdata" id="img5">
                                        <img src="_services/<?=$service['_img5']?>" alt="" class="imgdata" >
                                   </div>
                                   <input type="file" name="img5"  style="width: 200px;"  accept='image/*' onchange='openFile(event,"img5")'>
                                      <strong>Title : <span id="title3"> </span></strong>                                    
                                     <input type="text" name="title3" onchange="title1val(this.value,'title3')" id="" value="<?=$service['title3'];?>">
                                     <strong>Desctiption : <span id="des4"> </span></strong>                                    
                                     <textarea type="text" name="des4" onchange="title1val(this.value,'des4')" id=""><?=$service['des4'];?></textarea>
                               </div>
                               <div class="column">
                               <div class="mdl-card mdl-shadow--2dp " style="margin-top:8px">
                                        <div class="column">
                                        <strong>Title : <span id="title11"> </span></strong>                                    
                                        <input type="text" name="title11" onchange="title1val(this.value,'title11')" id="" value="<?=$service['title11'];?>">
                                        <p>Desctiption : <span id="des11"> </span></p>                                    
                                        <textarea type="text" name="des11" onchange="title1val(this.value,'des11')" id=""><?=$service['des11'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="mdl-card mdl-shadow--2dp " style="margin-top:8px">
                                        <div class="column">
                                        <strong>Title : <span id="title12"> </span></strong>                                    
                                        <input type="text" name="title12" onchange="title1val(this.value,'title12')" id="" value="<?=$service['title12'];?>">
                                        <p>Desctiption : <span id="des12"> </span></p>                                    
                                        <textarea type="text" name="des12" onchange="title1val(this.value,'des12')" id=""><?=$service['des12'];?></textarea>
                                        </div>
                                    </div>

                                    <div class="mdl-card mdl-shadow--2dp " style="margin-top:8px">
                                        <div class="column">
                                        <strong>Title : <span id="title13"> </span></strong>                                    
                                        <input type="text" name="title13" onchange="title1val(this.value,'title13')" id="" value="<?=$service['title13'];?>">
                                        <p>Desctiption : <span id="des13"> </span></p>                                    
                                        <textarea type="text" name="des13" onchange="title1val(this.value,'des13')" id=""><?=$service['des13'];?></textarea>
                                        </div>
                                    </div>


                               </div>
                           </div>
                           <hr>
                           <div class="row">
                              
                                <div class="column" style="align-items: end;">                                     
                                     <button type="submit" name="save" style="width: 200px;
    /* height: 35px; */
    background: #00bcd4;
    color: #fff;
    font-size: 20px;
    padding: 10px;
    border-radius: 10px;">upload</button>
                                </div>
                              
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
        function title1val(str,id){          
            document.getElementById(id).innerHTML=str;
        }

        var openFile = function(file,id) {
  var input = file.target;
  var reader = new FileReader();
  reader.onload = function(){
    var dataURL = reader.result;
    var output = document.getElementById(id);
    output.src = dataURL;
  };
  reader.readAsDataURL(input.files[0]);
};




function mycate(str){
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("servicecate").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "Partner/getcate/" + str, true);
    xmlhttp.send();
    
}
    </script>


</body>

</html>