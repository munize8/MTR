
<div class="container">
        <div class="row">
            <div class="col-md-3 error-box">
                <?php echo validation_errors(); ?>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><img src="<?php echo image2base64('assets/images/flame_favicon.ico'); ?>"> Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open(base_url('index.php/login'),array('id'=>'login_form')); ?>
                        
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus value="<?php echo set_value('username'); ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password"  value="<?php echo set_value('password'); ?>">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value='Login'>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <button class="btn btn-outline btn-info btn-xs" style='float: right;' onclick='window.location.href="<?php echo base_url('index.php/register');?>"'>Sign up</button>
            </div>
        </div>
    </div>