        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-th-large"></i> Categories</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Categories
                            <div class="pull-right">
                                <a class="btn btn-xs btn-success" data-toggle="modal" href="#add_category_modal">Add More</a>
                            </div>
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <th>Validity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($categories as $key => $value) { ?>
                                            <tr class="odd gradeX category-row-<?php echo $value['id'];?>">
                                                <td><?php echo $value['id'];?></td>
                                                <td class="cat-title"><?php echo $value['title'];?></td>
                                                <td class="cat-validity"><?php echo $value['validity'];?></td>

                                                <td class="center"><a href="#edit_category_modal" data-toggle="modal" onclick="javascript:category_edit(<?php echo $value['id']; ?>);">edit</a></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
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
    
        <div class="modal fade" id="edit_category_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/categories/save');?>" id="edit_category_form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Edit</h4>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <div class="form-group">
                            <input name="id" type="text" hidden="" value="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Title" name="title" type="text"  value="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Validity" name="validity" type="text"  value="">
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Save changes"/>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
    
        <div class="modal fade" id="add_category_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/categories/add');?>" id="add_category_form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Add</h4>
                </div>
                <div class="modal-body">
                    <fieldset>
                        
                        <div class="form-group">
                            <input class="form-control" placeholder="Title" name="title" type="text"  value="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Validity" name="validity" type="text"  value="">
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Save changes"/>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    
    function category_edit(id){
        $('#edit_category_form').find('[name=id]').val(id);
        $('#edit_category_form').find('[name=title]').val($('.category-row-'+id+' .cat-title').html());
        $('#edit_category_form').find('[name=validity]').val($('.category-row-'+id+' .cat-validity').html());
    }
    </script>