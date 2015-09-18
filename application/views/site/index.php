<!--======= Registration panel=========-->
<div class="reg_tab_panel">
    <div class="container">
        <div class="tabs-left">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><img src="<?php echo base_url('assets'); ?>/images/lock.png"><span> FREE REGISTRATION</span></a></li>
                <li><a href="#profile" data-toggle="tab"><img src="<?php echo base_url('assets'); ?>/images/search.png"> <span>QUICK SEARCH</span></a></li>

            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active" id="home">
                    <form action="<?php echo base_url('index.php/welcome/register_member');?>" method="post">
                        <ul>

                            <li>
                                <label>Profile for :</label> 
                                <select data-validation="required" name="profile_for">
                                    <option value="" selected="selected">-Select-</option>
                                    <option value="groom">Groom</option>
                                    <option value="bride">Bride</option>
                                </select>
                            </li>

                            <li>
                                <label>Name : </label>
                                <input data-validation="required" name="name"  class="input_text"  type="text">
                            </li>

                            <li>
                                <label>Gender :</label>
                                <input type="radio" checked="" name="gender" value="male"> Male &nbsp;&nbsp;&nbsp; <input type="radio" name="gender" value="female"> Female
                            </li>

                            <li>
                                <label>Date of birth :</label> 
                                <select data-validation="required" id="dob_dd" name="dob_dd" class="dd">
                                    <option selected="selected" value="">DD</option>
                                    <option>1</option>
                                </select> 

                                <select data-validation="required" id="dob_mm" name="dob_mm"  class="mm">
                                    <option selected="selected" value="">MM</option>
                                    <option>1</option>
                                </select> 

                                <select data-validation="required" id="dob_yy" name="dob_yy"  class="yy">
                                    <option selected="selected" value="" >YEAR</option>
                                    <option>1</option>
                                </select>
                            </li>

                            <li>
                                <label>Religion :</label>
                                <select data-validation="required"  name="religion" >
                                    <option selected="selected">-Select-</option>
                                    <option>1</option>
                                </select>
                            </li>


                            <li>
                                <label>Caste / Division :</label> 
                                <select  data-validation="required" name="caste" >
                                    <option selected="selected">-Select-</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </li>

                            <li>
                                <label>Mother Language :</label>
                                <select  data-validation="required" name="mother_language" >
                                    <option selected="selected">-Select-</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </li>

                            <li>
                                <label>Country :</label> 
                                <select  data-validation="required" name="country" >
                                    <option selected="selected">-Select-</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </li>

                            <li>
                                <label>Mobile no :</label> 
                                <input data-validation="required" type="tel" name="mobile" class="input_text">
                            </li>

                            <li>
                                <label>Email  :</label>
                                <input data-validation="email" class="input_text" name="email" type="email">
                            </li>

                            <li>
                                <label>Login Password  :</label>
                                <input data-validation="required" class="input_text"  type="password" name="password">
                            </li>

                            <li>
                                <input type="submit" class="submit_button" value="register">
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="tab-pane" id="profile">
<!--                    <ul>

                        <li>
                            <label>Profile for :</label> 
                            <select name="profile_for">
                                <option value="" selected="selected">-Select-</option>
                                <option value="groom">Groom</option>
                                <option value="bride">Bride</option>
                            </select>
                        </li>

                        <li>
                            <label>Name : </label>
                            <input name="name">
                        </li>

                        <li>
                            <label>Gender :</label>
                            <input type="radio" name="gender" value="male"> Male &nbsp;&nbsp;&nbsp; <input type="radio" name="gender" name="female"> Female
                        </li>

                        <li>
                            <label>Date of birth :</label> 
                            <select class="dd">
                                <option selected="selected" value="">DD</option>
                                <option>1</option>
                            </select> 

                            <select class="mm">
                                <option selected="selected" value="">MM</option>
                                <option>1</option>
                            </select> 

                            <select class="yy">
                                <option selected="selected" value="" >YEAR</option>
                                <option>1</option>
                            </select>
                        </li>

                        <li>
                            <label>Religion :</label>
                            <select>
                                <option selected="selected">-Select-</option>
                                <option>1</option>
                            </select>
                        </li>


                        <li>
                            <label>Caste / Division :</label> 
                            <select>
                                <option selected="selected">-Select-</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </li>

                        <li>
                            <label>Mother Language :</label>
                            <select>
                                <option selected="selected">-Select-</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </li>

                        <li>
                            <label>Country :</label> 
                            <select>
                                <option selected="selected">-Select-</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </li>

                        <li>
                            <label>Mobile no :</label> 
                            <input type="tel" name="mobile" class="input_text">
                        </li>

                        <li>
                            <label>Email  :</label>
                            <input name="email" type="email">
                        </li>

                        <li>
                            <label>Login Password  :</label>
                            <input type="password" name="password">
                        </li>

                        <li>
                            <input type="submit" class="submit_button" value="register">
                        </li>
                    </ul>-->
                </div>

            </div><!-- /tab-content -->
        </div>
    </div>
</div>


<!--======= CALL TO ACTION PANEL =========-->
<div class="call_to_panel">
    <div class="container">
        <div class="col-md-4">
            <div class="call_to_img"><img src="<?php echo base_url('assets'); ?>/images/register.png"> </div>
            <div class="call_to_content">
                <h2>REGISTER</h2>
                <p>Create your matrimonial pofile to receive matches.</p>
                <a href="#"><img src="<?php echo base_url('assets'); ?>/images/black_arrow.png"></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="call_to_img"><img src="<?php echo base_url('assets'); ?>/images/contact.png"> </div>
            <div class="call_to_content">
                <h2>CONTACT</h2>
                <p>Create your matrimonial pofile to receive matches.</p>
                <a href="#"><img src="<?php echo base_url('assets'); ?>/images/black_arrow.png"></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="call_to_img"><img src="<?php echo base_url('assets'); ?>/images/user.png"> </div>
            <div class="call_to_content">
                <h2>NEW USER?</h2>
                <p>Create your matrimonial pofile to receive matches.</p>
                <a href="#"><img src="<?php echo base_url('assets'); ?>/images/black_arrow.png"></a>
            </div>
        </div>
    </div>
</div>



<!--======= Services panel=========-->
<div class="services_panel">
    <div class="container">
        <div class="col-md-4">
            <h3>Success Stories</h3>
            <div class="success_box">
                <div class="success_box_inner">
                    <img src="<?php echo base_url('assets'); ?>/images/img8.jpg">
                    <h2>Success Stories</h2>
                    <p>"Lorem ipsum dolor sit amet,  consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore .”</p>
                    <a href="#"><img src="<?php echo base_url('assets'); ?>/images/red_arrow.png"></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Featured Brides</h3>
            <ul class="featured_list">	
                <li>
                    <div class="featured_box">
                        <div class="featured_img"><img src="<?php echo base_url('assets'); ?>/images/img4.jpg"></div>
                        <div class="featured_content">
                            <h2>Hanusha</h2>
                            <p>26, BA, MA, <br />Hindu, Vishwakara<br />City, State.</p>
                            <a href="#"><img src="<?php echo base_url('assets'); ?>/images/red_arrow.png"></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="featured_box">
                        <div class="featured_img"><img src="<?php echo base_url('assets'); ?>/images/img5.jpg"></div>
                        <div class="featured_content">
                            <h2>Hanusha</h2>
                            <p>26, BA, MA, <br />Hindu, Vishwakara<br />City, State.</p>
                            <a href="#"><img src="<?php echo base_url('assets'); ?>/images/red_arrow.png"></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3>Featured Grooms</h3>
            <ul class="featured_list">	
                <li>
                    <div class="featured_box">
                        <div class="featured_img"><img src="<?php echo base_url('assets'); ?>/images/img2.jpg"></div>
                        <div class="featured_content">
                            <h2>Harish</h2>
                            <p>26, BA, MA, <br />Hindu, Vishwakara<br />City, State.</p>
                            <a href="#"><img src="<?php echo base_url('assets'); ?>/images/red_arrow.png"></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="featured_box">
                        <div class="featured_img"><img src="<?php echo base_url('assets'); ?>/images/img3.jpg"></div>
                        <div class="featured_content">
                            <h2>Harish</h2>
                            <p>26, BA, MA, <br />Hindu, Vishwakara<br />City, State.</p>
                            <a href="#"><img src="<?php echo base_url('assets'); ?>/images/red_arrow.png"></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<script type="text/javascript">

/***********************************************
* Drop Down Date select script- by JavaScriptKit.com
* This notice MUST stay intact for use
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and more
***********************************************/

window.onload=function(){
populatedropdown("dob_dd", "dob_mm", "dob_yy")
}

var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];
var monthnum=['00','01','02','03','04','05','06','07','08','09','10','11','12'];

function populatedropdown(dayfield, monthfield, yearfield){
var today=new Date()
var dayfield=document.getElementById(dayfield)
var monthfield=document.getElementById(monthfield)
var yearfield=document.getElementById(yearfield)
for (var i=1; i<=31; i++)
dayfield.options[i]=new Option(i, i)
//dayfield.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
for (var m=1; m<=12; m++)
monthfield.options[m]=new Option(monthnum[m], monthnum[m])
//monthfield.options[today.getMonth()]=new Option(monthnum[today.getMonth()], monthnum[today.getMonth()], true, true) //select today's month
yearfield.options[0]=new Option('YEAR', '')
var thisyear=today.getFullYear()
for (var j=1,y=1975; y<=thisyear; y++,j++){
yearfield.options[j]=new Option(y, y)
//thisyear+=1
}
//yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
}

</script>