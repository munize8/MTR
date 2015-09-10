<!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/metisMenu.min.js"></script>
    
<script>
    $(function() {

        $('#side-menu').metisMenu();
        var selectme = $(document).find('#side-menu').find('a[data-selector=<?php echo $this->uri->uri_string();?>]');
        $(selectme).addClass('active').parent().parent('ul.collapse').addClass('in').parent().addClass('active');
        
//        //-------- Static Heading Code -------------
//        $(window).on('scroll',function(){
//            var topOffset = $(window).scrollTop();
////            console.log(topOffset+' : '+$('.nav').height());
//            var headerparent = $('.page-header').parent().parent('.row');
//            if(topOffset > 10){
//                $('.page-header').addClass('static-heading');
//                $(headerparent).css('margin-top',$('.nav').height()+10+'px');
//            }else{
//                $('.page-header').removeClass('static-heading');
//                $(headerparent).css('margin-top','0px');
//            }
////            
//        });
        
    });

    
</script>

    
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.js"></script>
</body>