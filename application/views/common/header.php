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
        </div>
    </div>
    </div>
     <!--======= header bottom=========-->
    <div class="bottom_header_inner">
    	<div class="container">
            <div class="col-sm-6">
            	<a href="#"><img src="<?php echo base_url('assets'); ?>/images/logo.png"></a>
            </div>
            <div class="col-sm-6">
            	<div class="watch_img"><a href="#"><img src="<?php echo base_url('assets'); ?>/images/watch.png"></a></div>
            	<ul>
            	<li><a href="#"><i class="fa fa-long-arrow-right"></i> Jito Member</a></li>
                <li><a id="login_button" href="javascript:void(0);" role="button" data-toggle="popover">Member login</a></li>
                <section hidden id="login_section">
                    <div class="row">
                        <div class="col-lg-12">
                            <label><small>Matrimony ID or Mobile Number or E-mail</small></label>
                            <input data-validation="required" class="popover-input" type="text" name="username">
                        </div>
                    </div>
                    <div class="row">    
                        <div class="col-lg-12">
                            <label><small>Password</small></label>
                            <input  data-validation="required" class="popover-input" type="password" name="password">
                        </div>
                    </div>
                    <div class="row">
                        <br>
                        <div class="col-lg-12 margin-top-5">
                            <input type="button" value="Login" class="btn btn-sm btn-danger">
                        </div>
                    </div>
                </section>
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
                <li><a href="#">Search </a></li>  
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