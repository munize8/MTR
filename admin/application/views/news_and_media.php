        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa"></i>  News And Media</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add News And Media
                            
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form enctype="multipart/form-data" method="post" action="<?php echo base_url('index.php/news-media/store'); ?>">
                                
                                <div class="row">
                                    <div class="col-md-2"><label>News Title</label></div>
                                    <div class=" form-group col-md-6">
                                        <input id="news_title" name="news_title" class="form-control"/>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-2"><label>News Text</label></div>
                                    <div class=" form-group col-md-6">
                                        <textarea id="news_body" name="news_body" class="max-100 form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <label><i class="fa fa-file-o"></i> Media</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <span class="btn btn-success fileinput-button">
                                            <i class="glyphicon glyphicon-plus"></i>
                                            <span>Select files...</span>
                                            <!-- The file input field used as target for the file upload widget -->
                                            <input id="fileupload" type="file" name="files" >
                                        </span>
                                        <br>
                                        <br>
                                        <!-- The global progress bar -->
                                        <div id="progress" class="progress">
                                            <div class="progress-bar btn-success progress-bar-success" role="progressbar"
                                            aria-valuenow="" aria-valuemin="0" aria-valuemax="100">
                                              
                                            </div>
                                          </div>
                                        <!-- The container for the uploaded files -->
                                        <div id="files" class="files">
                                            <ul>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class=" form-group col-md-offset-2 col-md-6">
                                        <input type="submit" class="btn btn-primary" value="Send">
                                    </div>
                                </div>
                                <!-- /.table-responsive -->
                            </form>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <link href="<?php echo base_url('assets/blueimp');?>/css/jquery.fileupload.css">
    <script src="<?php echo base_url('assets/blueimp');?>/js/vendor/jquery.ui.widget.js"></script>
    <!--<script src="<?php echo base_url('assets/blueimp');?>/js/jquery.iframe-transport.js"></script>-->
    <!--<script src="<?php echo base_url('assets/blueimp');?>/js/jquery.fileupload-video.js"></script>-->
    <script src="<?php echo base_url('assets/blueimp');?>/js/jquery.fileupload.js"></script>
    
    

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    
/*jslint unparam: true, regexp: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = '<?php echo base_url('index.php/news-media/upload');?>';
         $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        maxFileSize: 40000000, // 40 MB
        done: function (e, data) {
            setTimeout(function(){
                $('#progress .progress-bar').css(
                    'width',
                    '0%'
                ).html('');
            },1000);
            if(data.result.success == true){
                var file = '<li><input name="media[]" value="'+data.result.file+'" type="hidden" ><p>'+data.result.file+'</p></li>';
                $('#files ul').append(file);
            }else{
                noty({timeout:"5000" ,layout: "topCenter",type: "error",text: data.result.message});
            }
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            ).html(progress + '%');
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
    </script>
    <style>
        .max-100{
            max-width: 100%;
        }
        .fileinput-button input {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            opacity: 0;
            -ms-filter: 'alpha(opacity=0)';
            font-size: 200px;
            direction: ltr;
            cursor: pointer;
        }
        .fileinput-button {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
    </style>