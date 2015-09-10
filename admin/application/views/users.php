        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-users"></i> Users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Users
                            <div class="pull-right">
                                <a class="btn btn-xs btn-success" data-toggle="modal" href="#add_user_modal">Add More</a>
                            </div>
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class='row'>
                                <!--search drop down to append in datatable-->
                                <div id="search_by_container" class="z-ind-90 col-md-offset-4 col-md-4">
                                    <label class='pull-left'>Select Category
                                        
                                        <select id='search_by' class="pull-right form-control">
                                            <option value=''>Select</option>
                                            <?php foreach ($all_categories as $key => $value) { ?>
                                                <option value='<?php echo $value['title']?>'><?php echo $value['title']?></option>
                                            <?php } ?>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="table-responsive z-ind-80 margin-top-5">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Zipcode</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Country</th>
                                            <th>Mobile</th>
                                            <th>Remark</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $key => $value) { ?>
                                            <tr class="odd gradeX user-row-<?php echo $value['user_id'];?>">
                                                <td><?php echo $value['user_id'];?></td>
                                                <td class="u-firstname"><?php echo $value['firstname'];?></td>
                                                <td class="u-lastname"><?php echo $value['lastname'];?></td>
                                                <td class="u-email"><?php echo $value['email'];?></td>
                                                <td class="u-address"><?php echo $value['address'];?></td>
                                                <td class="u-zipcode"><?php echo $value['zipcode'];?></td>
                                                <td class="u-city"><?php echo $value['city'];?></td>
                                                <td class="u-state"><?php echo $value['state'];?></td>
                                                <td class="u-country"><?php echo $value['country'];?></td>
                                                <td class="u-mobile"><?php echo $value['mobile'];?></td>
                                                <td class="u-remark"><?php echo $value['remark'];?></td>
                                                <td class="u-category"><?php echo $value['category_name'];?></td>

                                                <td class="center"><a href="#edit_user_modal" data-toggle="modal" onclick="javascript:user_edit(<?php echo $value['user_id']; ?>);">edit</a></td>
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
    
        <div class="modal fade" id="edit_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/users/save');?>" id="edit_user_form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Edit</h4>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <input hidden="" name="id">
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
                        
                        <div class="form-group">
                            <select class="form-control" name="category">
                                <?php foreach ($all_categories as $key => $value){?>
                                    <option  data-text="<?php echo $value['title']; ?>" value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
                                <?php } ?>
                            </select>
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
    
        <div class="modal fade" id="add_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/users/add');?>" id="add_user_form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Add</h4>
                </div>
                <div class="modal-body">
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
                        
                        <div class="form-group">
                            <select class="form-control" name="category">
                                <?php foreach ($all_categories as $key => $value){?>
                                    <option data-text="<?php echo $value['title']; ?>" value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
                                <?php } ?>
                            </select>
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
<script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/fnFilterClear.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    var table;
    $(document).ready(function() {
        table = $('#dataTables-example').DataTable();
                        
        $('body').find('#search_by').on('change',function(){
            table = search_by(table);
        });
        
        $('body').find('.dataTables_filter input').on('keyup',function(){
            table = search_by(table);
        });
    });
    
    
    
    function search_by(table){
        var query = $('body').find('.dataTables_filter input').val();
        if($('body').find('#search_by').val() != '')
            table.column(11)
            .search('^' + $('body').find('#search_by').val() + '$', true, false)
            .draw();
        if($('body').find('#search_by').val() == ''){
            var search_by = $('#search_by_container');
            table.destroy();
            table = $('#dataTables-example').DataTable();
            
            $('body').find('.dataTables_filter input').val(query);
            table
                .search( query )
                .draw();
        }
        return table;
    }
    
    function user_edit(id){
        $('#edit_user_form').find('[name=id]').val(id);
        $('#edit_user_form').find('[name=firstname]').val($('.user-row-'+id+' .u-firstname').html());
        $('#edit_user_form').find('[name=lastname]').val($('.user-row-'+id+' .u-lastname').html());
        $('#edit_user_form').find('[name=email]').val($('.user-row-'+id+' .u-email').html());
        $('#edit_user_form').find('[name=address]').val($('.user-row-'+id+' .u-address').html());
        $('#edit_user_form').find('[name=zipcode]').val($('.user-row-'+id+' .u-zipcode').html());
        $('#edit_user_form').find('[name=city]').val($('.user-row-'+id+' .u-city').html());
        $('#edit_user_form').find('[name=state]').val($('.user-row-'+id+' .u-state').html());
        $('#edit_user_form').find('[name=country]').val($('.user-row-'+id+' .u-country').html());
        $('#edit_user_form').find('[name=mobile]').val($('.user-row-'+id+' .u-mobile').html());
        $('#edit_user_form').find('[name=remark]').val($('.user-row-'+id+' .u-remark').html());
        $('#edit_user_form').find('[name=category] option[data-text="'+$('.user-row-'+id+' .u-category').html()+'"]').prop('selected',true);
    }
    </script>
    <style>
        #search_by{
            width: 200px;
        }
        #search_by_container{
            position: absolute;
        }
        .margin-top-5{
            margin-top:5px;
        }
        .z-ind-90{
            z-index: 90;
        }
        
        .z-ind-80,.dataTables_length,.dataTables_filter{
            z-index: 80;
        }
    </style>