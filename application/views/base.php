<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <!-- Font Awesome Icons -->
 <link href="<?php echo base_url('assets'); ?>/css/font-awesome.min.css" rel="stylesheet"> 
<link href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/bootstrap-theme.min.css">
<link href="<?php echo base_url('assets'); ?>/css/style.css" rel="stylesheet">

<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/modernizr.custom.17475.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/js/form-validator/form-validator/jquery.form-validator.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function(){
        $.validate();
    });
</script>

</head>

<body>
<div class="top_header_outer home">
    <header>
        <?php echo $header;?>
    </header>
</div>

<?php echo $content;?>

 <!--======= FOOTER =========-->
 
<footer>
    <?php echo $footer;?>
</footer>
</body>   
</html>
