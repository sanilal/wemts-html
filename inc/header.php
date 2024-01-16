<?php
 // $base = "http://localhost/projects/wem";
 // $base = "https://webhostingdubai.net/demo/wemts/v1";
 $base = "https://www.wemts.com";
?>
<!--<div class="preloader">
         <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
         </div>
      </div>-->
      <!--Preloader area end here-->
      <!--Header Start-->
      <header id="rs-header" class="rs-header2">
         <!-- Toolbar Start -->
         <div class="toolbar-top-area hidden-sm hidden-xs">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-sm-7 col-xs-12">
                     <div class="toolbar-contact">
                        <ul>
                           <li><i class="fa fa-phone"></i><a href="tel:+97142666990">Call Us (+971) 42666990</a></li>
                           <li class="hidden-sm"><i class="fa fa-envelope-o"></i><a href="mailto:info@wemts.com">info@wemts.com</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-5 col-xs-12">
                     <div class="toolbar-sl-share">
                        <ul>
                           <li><a href="https://www.facebook.com/wemts/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="https://twitter.com/wemts" target="_blank"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="https://www.instagram.com/wemts" target="_blank"><i class="fa fa-instagram"></i></a></li>
                           <li><a href="https://www.linkedin.com/company/wem-technical-services/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="https://www.youtube.com/channel/UCU0Cd4iWaQgDtCwVBFvHc_w/" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Toolbar End -->
         <!-- Header Menu Start -->
         <div class="menu-area menu-sticky">
            <div class="container">
               <div class="row">
                  <div class="col-sm-3">
                     <div class="logo-area">
                        <a href="<?php echo($base); ?>"><img src="<?php echo($base); ?>/images/logo.png" alt="WEM technical Services Logo" title="WEM Technical Services"></a>
                     </div>
                  </div>
                  <div class="col-sm-9">
                     <div id="logo-sticky" class="text-center">
                        <a href="<?php echo($base); ?>"><img src="<?php echo($base); ?>/images/logo.png" alt="WEM technical Services Logo" title="WEM Technical Services"></a>
                     </div>
                     <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                     <nav class="rs-menu">
                        <ul class="nav-menu">
                           <!-- Home -->
                           <li class="<?php if($active=="home"){ echo "current-menu-item current_page_item"; }?>"> <a href="<?php echo($base); ?>" class="home">Home</a></li>
                           <!-- End Home -->
                         
                           <!--Service Menu Start-->
                           <li class="menu-item-has-children <?php if($active=="services"){ echo "current-menu-item current_page_item"; }?>">
                              <a href="<?php echo($base); ?>/services/">Service</a>
                              <ul class="sub-menu">
                              <li><a href="<?php echo($base); ?>/services/concrete-cutting/" title="Concrete Cutting Dubai">Concrete Cutting</a></li>
                              <li><a href="<?php echo($base); ?>/services/floor-sawing/" title="Floor Sawing Service">Floor Sawing</a></li>
                              <li><a href="<?php echo($base); ?>/services/robotic-demolition/" title="Robotic Demolition UAE">Robotic Breaking</a></li>
                              <li><a href="<?php echo($base); ?>/services/concrete-scanning-works-dubai/" title="Concrete Scanning UAE">Concrete Scanning</a></li>
                              <li><a href="<?php echo($base); ?>/services/core-drilling/" title="Core Drilling">Core Drilling</a></li>
                              <li><a href="<?php echo($base); ?>/services/deep-core-drilling/" title="Deep Core Drilling">Deep Core Drilling</a></li>
                              <li><a href="<?php echo($base); ?>/services/controlled-demolition/" title="Controlled Demolition">Controlled Demolition</a></li>
                             
                                 <!-- <ul class="sub-menu">
                                    <li><a href="#">Slab</a></li>
                                    <li><a href="#">Wall</a></li>
                                 </ul> -->
                              
                             
                              <!-- <li><a href="<?php echo($base); ?>/services/wire-cutting/" title="Wire Cutting Service">Wire Cutting Service</a></li> -->
                              
                              
                              
                              

                                 <!-- <li><a href="<?php // echo($base); ?>/services/decommissioning/" title="Decommissioning in Dubai">Decommissioning</a></li>
                                 
                                 <li><a href="<?php // echo($base); ?>/services/conventional-demolition/" title="Conventional Demolition">Conventional Demolition</a></li> -->
                                 <!-- <li><a href="<?php // echo($base); ?>/services/strip-out-services/" title="Strip Out Services Dubai UAE">Strip Out Services</a></li> -->
								 
                                  
                                 <!-- <li><a href="<?php // echo($base); ?>/services/contemporary-robot-machineries-for-breaking/" title="Contemporary Robot Machineries for Breaking">Contemporary Robot Machineries for Breaking</a></li> -->
                                 <!-- <li><a href="<?php echo($base); ?>/services/removal-of-crane-foundation/" title="Removal of Crane Foundation">Removal of Crane Foundation</a></li>
                                 <li><a href="<?php echo($base); ?>/services/whaler-beam/" title="Whaler Beams">Whaler Beams</a></li> -->
                              </ul>
                           </li>
                           <!--Service Menu End-->
                           <!--Projects Menu Start-->
                           <li class="<?php if($active=="projects"){ echo "current-menu-item current_page_item"; } ?>"> <a href="<?php echo($base); ?>/projects/">Projects</a></li>
                           <!--Projects Menu End-->
                           <!--Rentals Menu Start-->
                           <li class="menu-item-has-children <?php if($active=="rentals"){ echo "current-menu-item current_page_item"; } ?>">
                              <a href="<?php echo($base); ?>/demolition-equipment-rental/" title="Demolition Equipment Rental">Rentals</a>
                              <ul class="sub-menu">
                                 <li><a href="<?php echo($base); ?>/demolition-equipment-rental/Brokk-160/" title="Decommissioning in Dubai">Brokk 160 Robotic Demolition</a></li>
                                 <li><a href="<?php echo($base); ?>/demolition-equipment-rental/husqvarna-dxr-300/" title="Controlled Demolition">Husqvarna DXR 300 Demolition Robots </a></li>
                              </ul>
                           </li>
                           <!--Rentals Menu End-->
                             <!--About Menu Start-->
                             <li class="menu-item-has-children <?php if($active=="about"){ echo "current-menu-item current_page_item"; }?>">
                              <a href="<?php echo($base); ?>/about/">About Us</a>
                              <ul class="sub-menu">
                                 <li><a href="<?php echo($base); ?>/about/" title="About Wem">About WEM</a></li>
                                 <li><a href="<?php echo($base); ?>/about/certificates/" title="Certificates">Certificates</a></li>
<li><a href="<?php echo($base); ?>/about/partners-and-clients/" title="Partners & Clients">Partners & Clients</a></li>
                              </ul>
                           </li>
                           <!--About Menu End-->
                          
                           <!--Contact Menu Start-->
                           <li class="<?php if($active=="contact"){ echo "current-menu-item current_page_item"; } ?>"> <a href="<?php echo($base); ?>/contact/">Contact</a></li>
                           <!--Contact Menu End-->
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <!-- Header Menu End -->
      </header>
      <!--Header End-->
	   