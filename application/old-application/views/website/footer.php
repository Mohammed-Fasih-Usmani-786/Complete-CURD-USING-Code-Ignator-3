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
                        <div class="widget widget_services">
                            <h6 class="m-b15 h6 text-uppercase">&nbsp;</h6>
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
                                <li><i class="fa fa-map-marker"></i><strong>address</strong> 68/30, Heera Path, Mansarovar, Behind - ICICI Bank,<br> Jaipur - 302020, Rajasthan (INDIA)</li>
                                <li><i class="fa fa-phone"></i><strong>phone</strong>(+91) 141 2780889, 9694141413</li>
                                <li><i class="fa fa-envelope"></i><strong>Email</strong>usspestcon@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 text-left">
						<span>&copy; Copyright 2021 | All Rights Reserved | Ultimate Service Solutions</span>
					</div>
                    <div class="col-lg-6 col-md-6 text-right">
					Design by: <a href="Home" target="_blank" ></a> - Web Designing Company Jodhpur 
					</div>
                </div>
            </div>
        </div>
    </footer>