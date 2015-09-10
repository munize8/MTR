
<div class="container">
        <div class="row">
            <div class="col-md-3 error-box">
                <?php echo validation_errors(); ?>
                <?php echo $this->session->flashdata('register_error'); ?>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><img src="<?php echo image2base64('assets/images/flame_favicon.ico'); ?>"> Please Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open_multipart(base_url('index.php/register'),array('id'=>'register_form')); ?>
                        
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="First name" name="firstname" type="text" autofocus value="<?php echo set_value('firstname'); ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last name" name="lastname" type="text"  value="<?php echo set_value('lastname'); ?>">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Address" title="" name="address"  value="<?php echo set_value('address'); ?>"></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="City" name="city" type="text"  value="<?php echo set_value('city'); ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="State" name="state" type="text"  value="<?php echo set_value('state'); ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Country" name="country" type="text"  value="<?php echo set_value('country'); ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Zipcode" name="zipcode" type="text"  value="<?php echo set_value('zipcode'); ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mobile Number" name="mobile" type="text"  value="<?php echo set_value('mobile'); ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="email"  value="<?php echo set_value('email'); ?>">
                                </div>
                                
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Remark(if any)" title="" name="remark"  value="<?php echo set_value('remark'); ?>"></textarea>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value='Join!'>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <button class="btn btn-outline btn-success btn-xs" style='float: right;' onclick='window.location.href="<?php echo base_url('index.php/login');?>"'>Sign in</button>
            </div>
            <a href='<?php echo base_url('index.php/login')?>'>
        </div>
    </div>