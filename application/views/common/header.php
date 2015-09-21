<!--======= header top=========-->
    
    <div class="top_header_inner">
    	<div class="container">
    	<div class="col-sm-4">
        	<a href="tel:800001231245" class="tel_no"><i class="fa fa-phone"></i> 800001231245</a>
        </div>
        <div class="col-sm-4 text-center">
        	• Nakoda Bherva Namaha •
        </div>
        <div class="col-sm-4">
        	<ul class="social_icon">
            	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>      
            <div class="profile_name">
            	<img src="<?php echo base_url(); ?>/assets/images/user_pic.png"><span>Abhi (D406197)</span> <a href="#" class="log_out_btn"><img src="<?php echo base_url(); ?>/assets/images/services.png"></a>
                <ul>
                	<li><a href="#">Edit Profile</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="<?php echo base_url('index.php/welcome/logout');?>">Logout</a></li>
                </ul>
            </div> 
         </div>
    </div>
    </div>
    <!--======= header bottom=========-->
    <div class="bottom_header_inner">
    	<div class="container">
            <div class="col-sm-5">
                <a href="#"><img src="<?php echo base_url(); ?>/assets/images/logo.png"></a>
            </div>
            <div class="col-sm-7">
            
            	<div class="watch_img"><a href="#"><img src="<?php echo base_url(); ?>/assets/images/watch.png"></a></div>
            	<ul>
            	<li><a href="#"><i class="fa fa-long-arrow-right"></i> Jito Member</a>
                	<ul class="member_form">
                    	<li>
                        		<label>JITO ID or Mobile Number or E-mail</label>
                                <input type="text" name="name">
                                <label>Password</label>
                                <input type="password" name="password">
                                <input type="checkbox">Keep me logged in
                                <div class="btn_panel">
                                	<a href="#"><img src="<?php echo base_url(); ?>/assets/images/fb_login_btn.jpg"></a> <span>or</span>
                                    <a href="#"><img src="<?php echo base_url(); ?>/assets/images/login.jpg"></a>
                                </div>
                                <a href="#" class="for_grt">Forgot password?</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Member login</a>
                	<ul class="member_form">
                        <!--<mark><?php //echo  $this->session->flashdata('sessinfo'); ?></mark>-->
                        <form action="<?php echo base_url('index.php/welcome/login_member');?>" method="post">
                    	<li>
                        		<label>Matrimony ID or Mobile Number or E-mail</label>
                                <input data-validation="required" type="text" name="name">
                                <label>Password</label>
                                <input data-validation="required" type="password" name="password">
                                <input type="checkbox">Keep me logged in
                                <div class="btn_panel">
                                	<a href="#"><img src="<?php echo base_url(); ?>/assets/images/fb_login_btn.jpg"></a> <span>or</span>
                                    <!--<a href="#"></a>-->
                                    <button  type="submit"><img src="<?php echo base_url(); ?>/assets/images/login.jpg"></button>
                                </div>
                                <a href="#" class="for_grt">Forgot password?</a>
                        </li>
                        </form>
                    </ul>
                
                
                </li>
            </ul>
            	
            </div>
        </div>
    </div>
    <!--======= Navigation =========-->
    <div class="navigation_outer">
    	<div class="container">
        <div role="navigation" class="navbar  navbar-static-top">
            <div class="navbar-header">
              <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url('index.php/aboutus');?>">About us   </a></li> 
                <li><a >Search  </a>
                	<ul>
                    	<li>Regular search</li>
                        <li>Advance search</li>
                        <li>Keyword search</li>
                        <li>Recently viewed profile</li>
                        <li>Search by ID</li>
                    </ul>
                </li> 
                <li><a href="<?php echo base_url('index.php/aboutus');?>">Media & Events  </a></li>   
                <li><a href="<?php echo base_url('index.php/aboutus');?>">Contact us </a></li> 
              </ul>
              
              
            </div>
          </div>
        </div>
    </div>
     <!--======= Navigation =========-->
    <div id="outer_banner" class="banner_outer">
    	<div class="container">
        	<div class="banner_box_outer">
        		<div class="banner_box">   </div>
            </div>
        </div>
    </div>
     
     <script>
         $(document).ready(function(){
             
             var loginHTML = $('#login_section').html();
             $('#login_button').popover({
                 content:loginHTML,
                 html:true,
                 placement:'bottom'
             });
             
             $('#login_section').remove();
         });
     </script>