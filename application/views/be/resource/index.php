<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->    
    <head>
        <meta charset="utf-8" />
        <title>NAC Philotechnics | Resources</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- BEGIN GLOBAL STYLES -->
        <?php $this->load->view('be/layout/styles'); ?>
        <!-- END GLOBAL STYLES -->

        <link href="<?php echo base_url('assets/css/pages/be/about-us.css');?>" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo base_url('favicon.png');?>" /> </head>
     </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-boxed">     
        <!-- BEGIN HEADER -->           
        <?php 
            $menu['parent'] = 'resources';
            $menu['current'] = 'resources';
            $this->load->view('be/layout/header', $menu);
            ?>
        <!-- END HEADER -->

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Resources
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->                       
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <span href="#">Resources</span>  
                            </li>                            
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PORTLET-->
                                    <div class="portlet light form-fit ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-social-dribbble font-green"></i>
                                                <span class="caption-subject font-green bold uppercase">Resources Content</span>
                                            </div>                                         
                                        </div>
                                        <div class="portlet-body form">
                                            <!-- BEGIN FORM-->
                                            <form action="#" class="form-horizontal form-bordered ">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Our Resources</label>
                                                        <div class="col-md-9">
                                                            <div class='new-core-value'>
                                                                <button type="button" class="btn green btn-sm" id='btnAddNewModal'><i class='icon-plus'></i>&nbsp;&nbsp;ADD NEW</button>   
                                                            </div>
                                                            <?php 
                                                                foreach ($documents as $document) {
                                                                    ?>
                                                                        <div class='core-value'>                                                                
                                                                            <a href="<?php echo base_url('assets/resources/'.$document['Attach']);?>" target='blank'><?php echo $document['Title'];?></a>
                                                                            <div class='core-value-buttons'>                                                                    
                                                                                <button type="button" class="btn blue btn-sm btn-circle" onclick='editService(<?php echo $document["ID"];?>)'><i class='icon-pencil'></i></button>&nbsp;
                                                                                <button type="button" class="btn red btn-sm btn-circle" onclick='deleteService(<?php echo $document["ID"];?>)'><i class='icon-trash'></i></button>
                                                                            </div>
                                                                        </div>
                                                                    <?php
                                                                }
                                                            ?>                                                            
                                                        </div>
                                                    </div>                                                                                                                                          
                                                </div>
                                            </form>
                                            <!-- END FORM-->
                                        </div>
                                    </div>
                                    <!-- END PORTLET-->
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->

                <!-- BEGIN MODAL CONTENT BODY -->
                <!-- BEGIN ADD MODAL CONTENT BODY -->
                <div class="modal fade" id="AddNewModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Add New</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-horizontal form-bordered" id='newDocumentForm' enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class='form-group'>
                                            <label class='control-label col-md-3'>Title</label>
                                            <div class='col-md-9'>
                                                <input class='form-control' type='text' name='Title' id='Title' required>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label class='control-label col-md-3'>Description</label>
                                            <div class='col-md-9'>
                                                <textarea class='form-control' type='text' name='Description' id='Description' required></textarea>
                                            </div>
                                        </div>                                         
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Document</label>
                                            <div class='col-md-9'>
                                                <input type='hidden' name='Type' value='document'>
                                                <input type='file' name='resource' id='resource' accept=".pdf,.docx" required>
                                            </div>
                                        </div>                                                                                               
                                    </div>                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                <button type="button" class="btn green" id='btnAddNew'>Add</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END ADD MODAL CONTENT BODY -->

                <!-- BEGIN EDIT MODAL CONTENT BODY -->
                <div class="modal fade" id="editModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Edit</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-horizontal form-bordered" id='updateDocumentForm' enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class='form-group'>
                                            <label class='control-label col-md-3'>Title</label>
                                            <div class='col-md-9'>
                                                <input class='form-control' type='text' name='Title' id='Title_Edit' required>
                                            </div>
                                        </div>
                                        <div class='form-group'>
                                            <label class='control-label col-md-3'>Description</label>
                                            <div class='col-md-9'>
                                                <textarea class='form-control' type='text' name='Description' id='Description_Edit' required></textarea>
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Portfolio</label>
                                            <div class='col-md-9'>
                                                <input type='file' id='Portfolio_Edit' name='resource' accept=".pdf,.docx">
                                            </div>
                                        </div>           
                                        <div class="form-group">
                                            <input type='hidden' id='ID_Edit' name='ID'>
                                        </div>                                                                                               
                                    </div>                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                <button type="button" class="btn green" id='btnUpdate'>Update</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END EDIT MODAL CONTENT BODY -->

                <!-- BEGIN DEELTE MODAL CONTENT BODY -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Delete</h4>
                            </div>
                            <div class="modal-body">
                                Are  you really going to delete this?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">NO</button>
                                <button type="button" class="btn green" id='btnDelete'>YES</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- END DELETE MODAL CONTETN BODY -->
                <!-- END DELETE MODAL CONTETN BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php $this->load->view('be/layout/footer'); ?>
        <!-- END FOOTER -->
        <!-- BEGIN GLOBAL SCRIPTS -->
        <?php $this->load->view('be/layout/scripts'); ?>
        <!-- END GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url('assets/layouts/layout3/scripts/pages/resources/index.js');?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
    </body>

</html>