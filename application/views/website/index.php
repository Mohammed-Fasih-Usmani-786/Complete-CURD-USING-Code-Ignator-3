<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Roller Pest Control Services in Jaipur, Best Pest control Service near me, Professional Pest control Services, Professional Pest control service, Pest control Jaipur, Pest control in Jaipur, pest control service in Jaipur, pest control service in India, best pest control services in Jaipur, bedbugs control in Jaipur, best pest control in Jaipur, Termite Control Service in Jaipur, Residential Pest Control Service in Jaipur, Commercial pest control Service in Jaipur, Cockroach control Service in Jaipur,  Termite Control Company, Herbal pest control Service in Jaipur, Mosquitoes control service in Jaipur, Industrial pest control service in Jaipur." />
    <meta name="author" content="Roller Pest Control Services" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="We provide the Residential, Commercial, Industrial pest control services in Jaipur, India. Clean your home and workspace with Roller Pest Control Services. Hire Best Roller pest control services experts for Termite Control Service in Jaipur, Cockroach control & Mosquitoes control services." />
    <meta property="og:description" content="We provide the Residential, Commercial, Industrial pest control services in Jaipur, India. Clean your home and workspace with Roller Pest Control Services. Hire Best Roller pest control services experts for Termite Control Service in Jaipur, Cockroach control & Mosquitoes control services." />
    <meta property="og:image" content="assets/images/background/bg6.jpg" />
    <meta name="format-detection" content="telephone=no">
    <!-- FAVICONS ICON -->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
    <!-- PAGE TITLE HERE -->
    <title>IDEAL GROUP OF INDUSTRIES</title>
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <base href="<?= base_url(); ?>">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/css/plugins.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
    <link class="skin" rel="stylesheet" type="text/css" href="assets/css/skin/skin-2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/templete.min.css">

    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700,900|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i|Lato:300,300i,400,400i,700,700i,900,900i');

        .container {
            max-width: 95%;
        }
    </style>

    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/revolution/css/navigation.css">
    <!-- Global site tag (gtag.js) - Google Ads: 10902874697 -->

</head>

<body id="bg">

    <!-- <div id="loading-area"></div> -->
    <div class="page-wraper">

        <!-- header -->
        <?php include("header.php") ?>
        <!-- header END -->

        <!-- Content -->
        <div class="page-content" style="width: 100%;">

            <!-- Slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="slider/18d07e54794d96e94235fb0588e71843.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="slider/4aaaeedc6cffd041f54f8d9cae622c1c.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="slider/b257c40aa79d358a3fd1adad397abc0f.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Slider END -->
            <!-- <center>
                <video width="500" height="500" muted autoplay loop controls> 
                    <source src="slider/infinia_ultra.mp4" type="video/mp4">
                    
                </video>
            </center> -->

            <!-- search option form start ------------------------------------ -->
            <br>
            <form method="post">
                <div class="container">
                    <div class="row bg-success">
                        <div class="col-3 text-center">City</div>
                        <div class="col-3 text-center">Category</div>
                        <div class="col-3 text-center">Option</div>
                        <div class="col-3 text-center"></div>
                    </div>
                    <div class="row bg-primary">
                        <div class="col-3 text-center">
                            <div class="input-group">

                                <select name="city" id="" style="display: flex;    flex-direction: row;    font-size: 14px;    width: 100%;    height: 30px;">
                                    <option selected disabled>Select option</option>
                                    <?php foreach ($products2 as $v) {  ?>
                                        <option value="<?= $v['city']; ?>"> <?= $v['city']; ?></option>
                                        <!-- <?= $v['row_id']; ?> -->

                                    <?php }   ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 text-center">
                            <div class="input-group">

                                <select name="c_type" id="" style="display: flex;    flex-direction: row;    font-size: 14px;    width: 100%;    height: 30px;">
                                    <option selected disabled>Select option</option>
                                    <?php foreach ($products2 as $v) {  ?>
                                        <option value="<?= $v['c_type']; ?>"> <?= $v['c_type']; ?></option>
                                        <!-- <?= $v['row_id']; ?> -->

                                    <?php }   ?>
                                </select>
                            </div>
                        </div>


                        <div class="col-3 text-center">
                            <div class="input-group">

                                <select name="cat_opt" id="" style="display: flex;    flex-direction: row;    font-size: 14px;    width: 100%;    height: 30px;">
                                    <option selected disabled>Select option</option>
                                    <?php foreach ($cat_opt as $v) {  ?>
                                        <option value="<?= $v['name']; ?>"> <?= $v['name']; ?></option>
                                        <!-- <?= $v['row_id']; ?> -->

                                    <?php }   ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 text-center">
                            <div class="input-group">
                                <button type="submit" name="data" class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- search option form end ------------------------------------ -->

            <!-- search option result start ------------------------------------ -->

            <?php if (!empty($r)) {  ?>
                <div class="container">
                    <div class="row">
                        <div class="con-4">
                            <table>
                                <?php foreach ($r as $v) {  ?>
                                    <tr>
                                        <td><?= $v['c_type']; ?></td>
                                        <td><?= $v['cat_opt']; ?></td>
                                        <td><?= $v['row_id']; ?></td>
                                        <td><?= $v['city']; ?></td>
                                        <td>
                                            <img src="_mypro/<?= $v['_banner'] ?>" alt="" height="50px" width="100px">
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>

                    </div>
                </div>
            <?php } ?>

            <!-- search option result start ------------------------------------ -->

            <!-- Our Services -->
            <div class="section-full bg-white content-inner-2 sr-providers">
                <div class="container" style="max-width: 95%;">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 text-center d-md-none d-sm-none d-lg-block">
                            <div class="worker"> <img src="assets/images/logo.png" alt="" /> </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-md-12 col-sm-12">
                            <h6>Our Product Best Quality</h6>
                            <h2>IDEAL GROUP OF INDUSTRIES</h2>
                            <!--<h3>Product uses</h3>-->
                            <p>At IDEAL, we understand the diverse needs of each sector and strive to provide tailored
                                solutions that go beyond expectations. Explore our product range and discover how our
                                paints
                                and coatings can add value to your industrial, commercial, institutional, or residential
                                projects. Elevate surfaces, enhance durability, and create lasting impressions – Where
                                Quality Meets Innovation.</p>
                            <h3>Product uses</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 m-b30">
                                    <div class="icon-bx-wraper left sr-box">
                                        <div class="icon-lg"> <a href="#" class="icon-cell"><img src="assets/images/icon/01.jpg" alt="" /></a> </div>
                                        <div class="icon-content">
                                            <h4 class="tilte">Industrial Prowess:</h4>
                                            <p>Experience cutting-edge solutions tailored for the industrial landscape.
                                                Our
                                                coatings are meticulously formulated to safeguard heavy machinery and
                                                structural components from corrosion, abrasion, and environmental
                                                challenges. Elevate the longevity and performance of your industrial
                                                assets
                                                with the trusted expertise of IDEAL.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 m-b30">
                                    <div class="icon-bx-wraper left sr-box">
                                        <div class="icon-lg"> <a href="#" class="icon-cell"><img src="assets/images/icon/02.jpg" alt="" /></a> </div>
                                        <div class="icon-content">
                                            <h4 class="tilte">Commercial Distinction:</h4>
                                            <p>Leave a lasting mark in the commercial sector with our coatings that
                                                seamlessly blend aesthetics with durability. Whether it's office spaces,
                                                retail outlets, or commercial establishments, our extensive color
                                                palette
                                                and finishes not only enhance visual appeal but also withstand the
                                                rigors of
                                                high-traffic areas. Redefine commercial spaces with the unmatched
                                                quality of
                                                IDEAL.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 m-b30">
                                    <div class="icon-bx-wraper left sr-box">
                                        <div class="icon-lg"> <a href="#" class="icon-cell"><img src="assets/images/icon/03.jpg" alt="" /></a> </div>
                                        <div class="icon-content">
                                            <h4 class="tilte">Institutional Durability:</h4>
                                            <p>Trust our coatings to uphold the standards of institutions and public
                                                spaces.
                                                From educational facilities to healthcare environments, our products
                                                offer
                                                reliable protection while maintaining a clean and welcoming appearance.
                                                Experience peace of mind knowing that our coatings contribute to a safe
                                                and
                                                durable environment in institutions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 m-b30">
                                    <div class="icon-bx-wraper left sr-box">
                                        <div class="icon-lg"> <a href="#" class="icon-cell"><img src="assets/images/icon/04.jpg" alt="" /></a> </div>
                                        <div class="icon-content">
                                            <h4 class="tilte">Residential Elegance:</h4>
                                            <p>Transform residences into timeless havens with our premium wood and
                                                decorative coatings. Our extensive range of colors and finishes reflects
                                                personal style. Our formulations are not just about aesthetics; they
                                                also
                                                provide durability and easy maintenance, ensuring that homes stay
                                                beautiful
                                                for years to come.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Services END-->
            <!-- Why Choose Us -->
            <div class="section-full bg-img-fix content-inner-2 overlay-gradient-dark choose-us style-1" style="background-image:url(assets/images/background/bg2.jpg);">
                <div class="container" style="max-width: 95%;">
                    <div class="section-head text-center text-white">
                        <h2>Why Choose Us</h2>
                        <div class="separator text-primary style-icon border-white "></div>
                        <p>We aspire to be the undisputed leader in the coatings industry, delivering unparalleled value
                            to
                            our customers through cutting-edge products and services. Our commitment is to make IDEAL
                            GROUP
                            the trusted choice for discerning individuals, businesses, and industries seeking excellence
                            in
                            coatings,</p>
                    </div>
                    <div class="row choose-design">
                        <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                            <div class="icon-bx-wraper choose-bx">
                                <div class="icon-md text-primary m-b15"><span class="icon-cell text-white"><img src="assets/images/logo.png" alt="" /></span> </div>
                                <div class="icon-content">
                                    <h4 class="tilte  m-b0">WOOD & METAL COATINGS<br />Products</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                            <div class="icon-bx-wraper choose-bx">
                                <div class="icon-md text-primary m-b15"><span class="icon-cell text-white"><img src="assets/images/logo.png" alt="" /></span> </div>
                                <div class="icon-content">
                                    <h4 class="tilte m-b0">THINNERS, POLISHES & PAINT REMOVERS<br />Products</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                            <div class="icon-bx-wraper choose-bx">
                                <div class="icon-md text-primary m-b15"><span class="icon-cell text-white"><img src="assets/images/logo.png" alt="" /></span> </div>
                                <div class="icon-content">
                                    <h4 class="tilte m-b0">AQUABASE EMULSION & PRIMERS<br />Products</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                            <div class="icon-bx-wraper choose-bx">
                                <div class="icon-md text-primary m-b15"><span class="icon-cell text-white"><img src="assets/images/logo.png" alt="" /></span> </div>
                                <div class="icon-content">
                                    <h4 class="tilte m-b0">WATERPROOFING & CONSTRUCTION CHEMICALS<br />Products</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                            <div class="icon-bx-wraper choose-bx">
                                <div class="icon-md text-primary m-b15"><span class="icon-cell text-white"><img src="assets/images/logo.png" alt="" /></span> </div>
                                <div class="icon-content">
                                    <h4 class="tilte  m-b0">PROTECTIVE COATINGS<br />Products</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                            <div class="icon-bx-wraper choose-bx">
                                <div class="icon-md text-primary m-b15"><span class="icon-cell text-white"><img src="assets/images/logo.png" alt="" /></span> </div>
                                <div class="icon-content">
                                    <h4 class="tilte m-b0">ENAMELS<br />Products</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Why Choose Us End -->

            <!-- About Section -->
            <div class="section-full bg-img-fix p-tb40 overlay-black-dark slety get-a-quote" style="background-image:url(assets/images/background/apointment.jpg);>
			<div class=" container"style="max-width: 95%;">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="pull-left m-b0 text-white">“ GET PESTS OUT OF YOUR HOME AND OFFICE WITH THE BEST
                            IDEAL
                            COLOURS AND PAINTS PRODUCTS ”</h2>
                        <div class="pull-right"><a href="Contact" class="site-button white radius-sm">Get In Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <div class="section-full bg-white content-inner-1">
            <div class="container" style="max-width: 95%;">
                <div class="section-head text-center ">
                    <h2 class="text-uppercase h2">Top Most Products</h2>
                    <div class="separator bg-primary"></div>
                </div>
                <div class="section-content ">
                    <div class="blog-carousel owl-carousel owl-btn-center-lr">
                        <div class="item">
                            <div class="box">
                                <div class="media" style="height:300px;">
                                    <a href="termicon-services.html"><img src="assets/images/topmost/Wood and metal coating 2.jpeg" alt=""></a>
                                </div>
                                <div class="info p-a20 border-1">
                                    <ul class="blog-info text-primary">
                                        <li><a href="termicon-services.html" class="comments-link">WOOD & METAL COATINGS
                                                PRODUCTS &raquo;</a> </li>
                                    </ul>
                                    <p class="m-a0">Welcome to IDEAL world of premium Wood and Metal Coatings! Elevate
                                        your
                                        surfaces with our exquisite range of coatings designed to enhance and protect.
                                        Our
                                        formulations are crafted with precision, marrying aesthetics with durability.
                                        Whether you're refinishing furniture, decking, or metalwork, our coatings
                                        provide a
                                        seamless blend of style and resilience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="media" style="height:300px;">
                                    <a href="fumicon-services.html"><img src="assets/images/topmost/thinner and polsih 2.jpeg" alt=""></a>
                                </div>
                                <div class="info p-a20 border-1">
                                    <ul class="blog-info text-primary">
                                        <li><a href="fumicon-services.html" class="comments-link">THINNERS, POLISHES &
                                                PAINT
                                                REMOVERS PRODUCTS&raquo;</a> </li>
                                    </ul>
                                    <p class="m-a0">Revitalize your woodworking with our essential trio: Thinner, Wood
                                        Polish, and Paint Remover. Thinner ensures a smooth application for stains and
                                        paints. Wood Polish adds brilliance, nourishing and protecting surfaces. Paint
                                        Remover efficiently strips away old layers for a clean slate. Elevate your
                                        craftsmanship with precision, enhance brilliance, and start anew with this
                                        essential
                                        trio. Make every project a masterpiece with our Thinner, Wood Polish, and Paint
                                        Remover. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="media" style="height:300px;">
                                    <a href="disinfection-services.html"><img src="assets/images/topmost/emulsion 3.jpeg" alt=""></a>
                                </div>
                                <div class="info p-a20 border-1">
                                    <ul class="blog-info text-primary">
                                        <li><a href="disinfection-services.html" class="comments-link">AQUABASE EMULSION
                                                &
                                                PRIMERS PRODUCTS &raquo;</a> </li>
                                    </ul>
                                    <p class="m-a0">A fusion of innovation and color for a superior painting experience.
                                        Dive into a palette of vibrant hues that seamlessly blend aesthetics with
                                        eco-friendliness. Our water-based emulsions offer easy application, quick
                                        drying,
                                        and a durable finish. Whether you're revamping interiors or adding a touch of
                                        freshness to exteriors, this range ensures a smooth and long-lasting
                                        transformation.
                                        Embrace the beauty of sustainable painting with formulations designed for both
                                        style
                                        and environmental consciousness. Elevate your spaces effortlessly with our
                                        Water-Based Emulsion Range—where color meets sustainability, and every
                                        brushstroke
                                        tells a story of modern, mindful living,</p>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="media" style="height:300px;">
                                    <a href="disinfection-services.html"><img src="assets/images/topmost/enamel 2.jpeg" alt=""></a>
                                </div>
                                <div class="info p-a20 border-1">
                                    <ul class="blog-info text-primary">
                                        <li><a href="disinfection-services.html" class="comments-link">WATERPROOFING &
                                                CONSTRUCTION CHEMICALS PRODUCTS &raquo;</a> </li>
                                    </ul>
                                    <p class="m-a0">Explore a world of resilience and longevity with our IDEAL CARE
                                        range of
                                        Waterproofing & Construction Chemical solutions. Our range is designed to
                                        safeguard
                                        structures from the elements, ensuring durability and strength. From
                                        high-performance waterproofing solutions that shield against moisture to
                                        construction chemicals enhancing concrete strength, we redefine reliability.
                                        Dive
                                        into innovation that protects and fortifies, providing a solid foundation for
                                        your
                                        projects. Elevate construction standards with our expert formulations, where
                                        every
                                        application signifies a commitment to lasting integrity. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="media" style="height:300px;">
                                    <a href="disinfection-services.html"><img src="assets/images/topmost/protective coatings 1.jpeg" alt=""></a>
                                </div>
                                <div class="info p-a20 border-1">
                                    <ul class="blog-info text-primary">
                                        <li><a href="disinfection-services.html" class="comments-link">PROTECTIVE
                                                COATINGS &
                                                ENAMELS PRODUCTS&raquo;</a> </li>
                                    </ul>
                                    <p class="m-a0">Engineered to shield surfaces from wear, corrosion, and the
                                        elements,
                                        our coatings redefine durability. Whether safeguarding metal, wood, or concrete,
                                        our
                                        formulations offer a robust defense without compromising aesthetics. Explore our
                                        RustPro range designed for diverse applications, from industrial settings to
                                        residential projects. Enhance longevity and resilience with coatings that stand
                                        the
                                        test of time, ensuring your surfaces remain pristine in the face of challenges.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimoniyal -->
        <div class="section-full bg-img-fix content-inner overlay-black-dark slety" style="background-image:url(assets/images/background/bg6.jpg); margin-top:-1px">
            <div class="container">
                <div class="section-head text-center text-white ">
                    <h2 class="h2 text-uppercase">Our Testimonial</h2>
                    <div class="separator bg-primary"></div>
                </div>
                <div class="section-content">
                    <div class="testimonial-five owl-carousel owl-none">

                        <div class="item">
                            <div class="testimonial-6">
                                <div class="testimonial-text bg-white quote-left quote-right">
                                    <p>I got Best Paint Product my home ideal home done by them and it was good. For
                                        today i
                                        cannot see any other company products. Very well done by the team ideal, thanks.
                                    </p>
                                </div>
                                <div class="testimonial-detail clearfix bg-primary text-white">
                                    <h4 class="testimonial-name m-tb0">Aman Agrawal, Jaipur</h4>
                                    <span class="testimonial-position">PROTECTIVE COATINGS & ENAMELS PRODUCTS</span>
                                    <div class="testimonial-pic radius"><img src="assets/images/testimonials/pic1.jpg" alt="" width="100" height="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial-6">
                                <div class="testimonial-text bg-white quote-left quote-right">
                                    <p>I got Best Paint Product my home ideal home done by them and it was good. For
                                        today i
                                        cannot see any other company products. Very well done by the team ideal, thanks.
                                    </p>
                                </div>
                                <div class="testimonial-detail clearfix bg-primary text-white">
                                    <h4 class="testimonial-name m-tb0">Anil Sharma, Ahmedabad</h4>
                                    <span class="testimonial-position">AQUABASE EMULSION & PRIMERS PRODUCTS</span>
                                    <div class="testimonial-pic radius"><img src="assets/images/testimonials/pic1.jpg" alt="" width="100" height="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial-6">
                                <div class="testimonial-text bg-white quote-left quote-right">
                                    <p>I got Best Paint Product my home ideal home done by them and it was good. For
                                        today i
                                        cannot see any other company products. Very well done by the team ideal, thanks.
                                    </p>
                                </div>
                                <div class="testimonial-detail clearfix bg-primary text-white">
                                    <h4 class="testimonial-name m-tb0">Deepak Kumar, Surat</h4>
                                    <span class="testimonial-position">WOOD & METAL COATINGS PRODUCTS</span>
                                    <div class="testimonial-pic radius"><img src="assets/images/testimonials/pic1.jpg" alt="" width="100" height="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial-6">
                                <div class="testimonial-text bg-white quote-left quote-right">
                                    <p>Good quality of products with resnable price of all types. I am using their
                                        services
                                        since last 5 years and absolutely satisfied with them.</p>
                                </div>
                                <div class="testimonial-detail clearfix bg-primary text-white">
                                    <h4 class="testimonial-name m-tb0">Rajesh Bhandari, Jodhpur</h4>
                                    <span class="testimonial-position">THINNERS, POLISHES & PAINT REMOVERS PRODUCTS
                                        etc.</span>
                                    <div class="testimonial-pic radius"><img src="assets/images/testimonials/pic1.jpg" alt="" width="100" height="100"></div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <!-- Testimoniyal End -->

    </div>
    <!-- Content END-->
    <!-- Footer -->
    <?php include("footer.php") ?>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up"></button>
    </div>
    <!-- JavaScript  files ========================================= -->
    <script src="assets/js/combining.js"></script><!-- COMBINING JS  -->
    <!-- revolution JS FILES -->
    <script src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/rev.slider.js"></script>
    <script>
        jQuery(document).ready(function() {
            'use strict';
            dz_rev_slider_2();
        }); /*ready*/
    </script>
</body>

</html>