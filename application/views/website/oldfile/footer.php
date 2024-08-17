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
                            <h6 class="m-b15 h6 text-uppercase">Our services</h6>
                            <div class="separator bg-white"></div>
                            <ul>
                            <?php 
                                    foreach($snav as $v){?>
                                       <li><a href="View-services/<?=$v['row_id'];?>"><?=$v['_title'];?></a></li>
                                   <?php  }
                                    ?>
							   
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget_getintuch">
                            <h6 class="m-b15 h6 text-uppercase">Contact us</h6>
                            <div class="separator bg-white"></div>
                            <ul>
                                <li><i class="fa fa-map-marker"></i><strong>Roller Pest Control Service</strong> S-17, Second Floor, Dwarika Tower, Central Spine Vidhyadhar Nagar, Jaipur.- 302020, Rajasthan (INDIA)</li>
                                <li><i class="fa fa-phone"></i><strong>phone</strong>9950666197</li>
                                <li><i class="fa fa-envelope"></i><strong>Email</strong>info@rollerpestcontrolservices.com</li>
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
                    <div class="col-lg-6 col-md-6 text-left">
						<span>&copy; Copyright 2021 | All Rights Reserved | rollerpestcontrolservices.com</span>
					</div>
                    <div class="col-lg-6 col-md-6 text-right">
					Design by: <a href="Home" target="_blank" ></a> - Raj Digital Media -9468961629 
					</div>
                </div>
            </div>
        </div>
    </footer>