<footer class="site-footer">
        <div class="footer-top section-full bg-img-fix content-inner overlay-black-dark slety" style="background-image:url(images/background/bg7.jpg); margin-top:-1px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_services">
                            <h6 class="m-b15 h6 text-uppercase">Useful Links</h6>
                            <div class="separator bg-white"></div>
                            <ul>
                                <li><a href="Home">Home</a></li>
                                <li><a href="About">About Us</a></li>
                                <li><a href="Gallery">Gallery</a></li>
                                <li><a href="Contact">Contact Us</a></li>
                                <li><a href="Enquery">Enquire Now</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_services">
                            <h6 class="m-b15 h6 text-uppercase">Our Products</h6>
                            <div class="separator bg-white"></div>
                            <ul>
                            <?php 
                                    foreach($snav as $v){ if($v['_type']=="Residential"){?>
                                       <li><a href="Home"><?=$v['name'];?></a></li>
                                   <?php } }
                                    ?>
							   
                            </ul>
                        </div>
                    </div>
                    <!--<div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_services">
                            <h6 class="m-b15 h6 text-uppercase">&nbsp;</h6>
                            <div class="separator bg-white"></div>
                            <ul>
                            <?php 
                                    foreach($snav as $v){ if($v['_type']!="Residential"){?>
                                       <li><a href="View-services/<?=$v['row_id'];?>"><?=$v['_title'];?></a></li>
                                   <?php } }
                                    ?>
                            </ul>
                        </div>
                    </div>-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_getintuch">
                            <h6 class="m-b15 h6 text-uppercase">Contact us</h6>
                            <div class="separator bg-white"></div>
                            <h3>Head Office </h3>
							<ul>
                                <li><i class="fa fa-map-marker"></i><strong>IDEAL COATING INDUSTRIES</strong> Boranada Industrial Area, Jodhpur.- 342001, Rajasthan (INDIA)</li>
                                <li><i class="fa fa-phone"></i><strong>phone</strong>9983340360</li>
                                <li><i class="fa fa-envelope"></i><strong>Email</strong>info@idealcoating.in</li>
                            </ul>
							
                        </div>
                    </div>
					
					 <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_getintuch">
                            <h6 class="m-b15 h6 text-uppercase">Manufacturing Unit</h6>
                            <div class="separator bg-white"></div>
                            <h3>Rajasthan Unit</h3>
							<ul>
                                <li><i class="fa fa-map-marker"></i><strong>IDEAL COATING INDUSTRIES</strong> G-75,76,77, RIICO IND. Area, Behind SBI Bank, Jhanwar Fanta, Boranada, Jodhpur.- 342012, Rajasthan (INDIA)</li>
                                <li><i class="fa fa-phone"></i><strong>phone</strong>9983340360</li>
                                <!--<li><i class="fa fa-envelope"></i><strong>Email</strong>info@idealcoating.in</li>-->
                            </ul>
							<h3>Gujarat Unit</h3>
							<ul>
                                <li><i class="fa fa-map-marker"></i><strong>IDEAL COLOURS AND PAINTS PRIVATE LIMITED</strong>Survey No.503, Palika 1, Khata Number 2562, Near Radhe Estate, Tajpur Road, Changodar Gidc, Ahmedabad, Gujarat - 382213, (INDIA)</li>
                                <li><i class="fa fa-phone"></i><strong>phone</strong>9828037360</li>
                                <!--<li><i class="fa fa-envelope"></i><strong>Email</strong>info@idealcoating.in</li>-->
                            </ul>
                        </div>
                    </div>
					
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom" style="background-color: #025c23;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 text-left">
						<span>&copy; Copyright 2021 | All Rights Reserved | IDEAL COLOURS AND PAINTS PRIVATE LIMITED</span>
					</div>
                    <div class="col-lg-4 col-md-4 text-right">
					Design by: <a href="Home" target="_blank" ></a> - Raj Digital Media -9468961629 
					</div>
                </div>
            </div>
        </div>
    </footer>