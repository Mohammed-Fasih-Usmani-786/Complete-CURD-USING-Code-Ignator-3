<header class="site-header header-style-2 mo-left">
        <!-- top bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="topbar-left">
                        <ul class="social-line text-center pull-right">
                            <li><a href="tel:9950666197"><i class="fa fa-phone"></i> <span>+91-9950666197</span> </a><a href="tel:8696666197"><span>+91-8696666197</span> </a></li>
							<li><a href="tel:9461750111"><i class="fa fa-whatsapp"></i> <span>+91-9461750111</span> </a></li>
                            <li><a href="mailto:info@pestcontrolservices.com"><i class="fa fa-envelope-o"></i> <span>info@pestcontrolservices.com</span></a></li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <ul class="social-line text-center pull-right">
                            <li><a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- top bar END-->
        <!-- main header -->
        <div class="sticky-header header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion"><a href="Home"><img src="assets/images/logo.png" alt=""></a></div>
                    <!-- nav toggle button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <div class="extra-nav disnone-md hidden-md">
                        <div class="extra-cell">
                            <a href="Enquery" class="site-button white skew-secondry">Enquire Now</a>
                        </div>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class=" nav navbar-nav">
							<li class="active"> <a href="Home">Home</a></li>
							<li><a href="About">About Us</a></li>
                            <!--<li><a href="Our-team">Our Team</a></li>-->
							<li> 
								<a href="javascript:;">Residential<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
                                    <?php 
                                    foreach($snav as $v){ if($v['_type']=="Residential") { ?>
                                       <li><a href="View-services/<?=$v['row_id'];?>"><?=$v['_title'];?></a></li>
                                   <?php  } } 
                                    ?>								

								</ul>
							</li>
							<li> 
								<a href="javascript:;">Commercial<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
                                    <?php 
                                    foreach($snav as $v){ if($v['_type']=="Commercial") { ?>
                                       <li><a href="View-services/<?=$v['row_id'];?>"><?=$v['_title'];?></a></li>
                                   <?php  } }
                                    ?>								

								</ul>
							</li>
							<!--<li> 
								<a href="javascript:;">Cities<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
                                    <?php 
                                    foreach($cnav as $v){?>
                                       <li><a href="View-cities/<?=$v['row_id'];?>"><?=$v['_title'];?></a></li>
                                   <?php  }
                                    ?>								

								</ul>
							</li>-->
							<li> 
								<a href="javascript:;">Blogs<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
                                    <?php 
                                    foreach($bnav as $v){?>
                                       <li><a href="View-blogs/<?=$v['row_id'];?>"><?=$v['_title'];?></a></li>
                                   <?php  }
                                    ?>								

								</ul>
							</li>
							<li><a href="Gallery">Gallery</a></li>
							<!-- <li><a href="clientele.html">Clientele</a></li> -->
                            <li><a href="Contact">Contact Us</a></li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
		
		
		<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="assets/engine1/style.css" />
<script type="text/javascript" src="assets/engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->


        <!-- main header END -->
    </header>