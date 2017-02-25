<?php include("include/css.php");?>
    <body class="page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN CONTAINER -->
        <div class="wrapper">
            <!-- BEGIN HEADER -->
             <?php include("include/header.php");?>
            <!-- END HEADER -->
            <div class="container-fluid">
                <div class="page-content">
                    <!-- BEGIN BREADCRUMBS -->
                   
                    <!-- END BREADCRUMBS -->
                    <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
                    <div class="page-content-container">
                        <div class="page-content-row">
                            <!-- BEGIN PAGE SIDEBAR -->
                            <div class="page-sidebar">
                                <nav class="navbar" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <ul class="nav navbar-nav margin-bottom-35">
                                        <li class="active">
                                            <a href="index.html">
                                                <i class="icon-home"></i> Home </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-note "></i> Reports </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-user"></i> User Activity </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-basket "></i> Marketplace </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-bell"></i> Templates </a>
                                        </li>
                                    </ul>
                                    <h3>Quick Actions</h3>
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a href="#">
                                                <i class="icon-envelope "></i> Inbox
                                                <label class="label label-danger">New</label>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-paper-clip "></i> Task </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-star"></i> Projects </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-pin"></i> Events
                                                <span class="badge badge-success">2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- END PAGE SIDEBAR -->
                            <div class="page-content-col">
                                <!-- BEGIN PAGE BASE CONTENT -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tabbable-line boxless tabbable-reversed">
                                          
                                            <div class="tab-content">
                                               <div class="portlet box blue-hoki">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-edit"></i> &nbsp;Add Store Information  
													</div>
													<div class="caption" style="margin-left: 34px;">
                                                    <a href="storeinformation.php" style="text-decoration:none;color:#fff;"><i class="fa fa-list"></i>&nbsp;Store List</a>
													</div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="javascript:;" class="reload"> </a>
                                                    <a href="javascript:;" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                           <form action="#" method="post" id="commentForm">
								<input type="hidden" name="mode" value="storeInfor">
								<input type="hidden" name="StoreId" value="<?php //echo $StoreId;?>">
								<input type="hidden" name="storeId" value="<?php //echo $storeId;?>">
                                                    <div class="form-body">

													<div class="row">
														<?php //if($msg==2){ ?>
                                                       <!--<div class="alert alert-success"><strong>Well done!</strong> Successfully added new store information.</div>-->
													   <?php //} ?>
													   
													      <?php //if($msg==1){ ?>
                                                   <?php   '<div class="alert alert-danger">Please enter all the information for store</div>'; ?>
													   <?php //} ?>
														 <div class="col-md-6">
														 <!------has-error-------->

															<div class="form-group">
                                                                    <label class="control-label col-md-4"> Store Name</label>
                                                                    <div class="col-md-8">
                                                                        <input type="text" class="form-control" id="store_name" name="store_name"type="text" placeholder="" value="<?php //echo $StoreName; ?>" required>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>
															


                                                              
                                                            </div>	
															
                                                            <div class="col-md-6">
                                                               <div class="form-group">
                                                                    <label class="control-label col-md-4">Store Address</label>
                                                                    <div class="col-md-8">
                                                                       <textarea  name="address" class="form-control input-md"id="address"><?php //echo $StoreAddress; ?></textarea>
																	   </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
														  <div class="row">
														 <div class="col-md-6">
                                                                 <div class="form-group " style="">
                                                                    <label class="control-label col-md-4">Select Country </label>
                                                                    <div class="col-md-8">
                                                                        <select name="country" onChange="sourceForm(this.value);" class="form-control">
                                                                            <option value="">Select Country</option>
																			<option value="india">India</option>
                                                                        </select>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>															
                                                            </div>																
                                                            <div class="col-md-6">   
																 <div class="form-group">
                                                                    <label class="control-label col-md-4" style="margin-top: 7%;"> Email ID</label>
                                                                    <div class="col-md-8">
                                                                        <input style="margin-top: 9%;" type="text" class="form-control" id="email" name="email" type="text" placeholder="" value="<?php //echo $StoreEmail; ?>" required>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>                                                              
                                                            </div>
                                                            
                                                      
														
														 <div class="col-md-6">
                                                                 <div class="form-group " style="">
                                                                    <label class="control-label col-md-4" style="">Select state </label>
                                                                    <div class="col-md-8">
                                                                        <select name="state" onChange="sourceForm(this.value);" class="form-control">
                                                                            <option value="">Select State</option>
																			<?php
																					/*foreach($statelist as $stateRow)
																					{?>
																					<option value="<?php echo $stateRow['StateID'];?>" <?php if($stateRow['StateID'] == $state){echo "selected";} ?>><?php echo $stateRow['StateName'];?></option>
																			<?php } */?> 
																			
                                                                            
                                                                        </select>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>															
                                                            </div>																
                                                            <div class="col-md-6">   
																 <div class="form-group">
                                                                    <label class="control-label col-md-4" style="margin-top: 7%;"> Phone No.</label>
                                                                    <div class="col-md-8">
                                                                        <input style="margin-top: 9%;" type="text" class="form-control" id="phone" name="phone"type="text" placeholder="" value="<?php //echo $StorePhone; ?>" required>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>                                                              
                                                            </div>
                                                   
														 
														 <div class="col-md-6">
                                                                 <div class="form-group " style="">
                                                                    <label class="control-label col-md-4" style="margin-top: 4%;">Select City </label>
                                                                    <div class="col-md-8">
                                                                        <select name="city" onChange="sourceForm(this.value);" class="form-control" style="margin-top: 4%;">
                                                                            <option value="">Select City</option>
																			<?php
																			 /* foreach($citylist as $cityRow)
																			{ ?>
																			
                                                                            <option value="<?php echo $cityRow['CityID'];?>" <?php if($cityRow['CityID'] == $City){echo "selected";} ?>><?php echo $cityRow['CityName'];?>
																			</option>                                                     
																			<?php } */?> 
                                                                        </select>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>															
                                                            </div>																
                                                            <div class="col-md-6">   
																 <div class="form-group">
                                                                    <label class="control-label col-md-4" style="margin-top: 7%;"> Store Code</label>
                                                                    <div class="col-md-8">
                                                                        <input style="margin-top: 9%;" type="text" class="form-control" id="office_code" name="office_code"type="text" placeholder="" value="INV<?php /*if($StoreCode!=""){echo $StoreCode;}else{echo 'LTR_'.$orderNo;}*/?>" required readonly>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>                                                              
                                                            </div>
                                                            
                                                        </div>
                                                    
                                                        <!--/row-->
                                                        
                                                        <!--<h3 class="form-section">Address</h3>-->                                                      
                                                        <!--/row-->
                                                    </div>
                                                    <div class="form-actions" style="margin-top: 12px;">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-offset-3 col-md-9">
                                                                        <button type="submit" class="btn green">Submit</button>
                                                                        <button type="reset" class="btn default">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6"> </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                                <div class="tab-pane" id="tab_1">
                                                    <div class="portlet box blue">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-gift"></i>Form Sample </div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="collapse"> </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                <a href="javascript:;" class="reload"> </a>
                                                                <a href="javascript:;" class="remove"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="horizontal-form">
                                                                <div class="form-body">
                                                                    <h3 class="form-section">Person Info</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">First Name</label>
                                                                                <input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
                                                                                <span class="help-block"> This is inline help </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group has-error">
                                                                                <label class="control-label">Last Name</label>
                                                                                <input type="text" id="lastName" class="form-control" placeholder="Lim">
                                                                                <span class="help-block"> This field has error. </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Gender</label>
                                                                                <select class="form-control">
                                                                                    <option value="">Male</option>
                                                                                    <option value="">Female</option>
                                                                                </select>
                                                                                <span class="help-block"> Select your gender </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Date of Birth</label>
                                                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Category</label>
                                                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                                    <option value="Category 1">Category 1</option>
                                                                                    <option value="Category 2">Category 2</option>
                                                                                    <option value="Category 3">Category 5</option>
                                                                                    <option value="Category 4">Category 4</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Membership</label>
                                                                                <div class="radio-list">
                                                                                    <label class="radio-inline">
                                                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option 1 </label>
                                                                                    <label class="radio-inline">
                                                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option 2 </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class="form-section">Address</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-12 ">
                                                                            <div class="form-group">
                                                                                <label>Street</label>
                                                                                <input type="text" class="form-control"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>City</label>
                                                                                <input type="text" class="form-control"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>State</label>
                                                                                <input type="text" class="form-control"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Post Code</label>
                                                                                <input type="text" class="form-control"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Country</label>
                                                                                <select class="form-control"> </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions right">
                                                                    <button type="button" class="btn default">Cancel</button>
                                                                    <button type="submit" class="btn blue">
                                                                        <i class="fa fa-check"></i> Save</button>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-equalizer font-blue-hoki"></i>
                                                                <span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
                                                                <span class="caption-helper">demo form...</span>
                                                            </div>
                                                            <div class="tools">
                                                                <a href="" class="collapse"> </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                <a href="" class="reload"> </a>
                                                                <a href="" class="remove"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="horizontal-form">
                                                                <div class="form-body">
                                                                    <h3 class="form-section">Person Info</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">First Name</label>
                                                                                <input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
                                                                                <span class="help-block"> This is inline help </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group has-error">
                                                                                <label class="control-label">Last Name</label>
                                                                                <input type="text" id="lastName" class="form-control" placeholder="Lim">
                                                                                <span class="help-block"> This field has error. </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Gender</label>
                                                                                <select class="form-control">
                                                                                    <option value="">Male</option>
                                                                                    <option value="">Female</option>
                                                                                </select>
                                                                                <span class="help-block"> Select your gender </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Date of Birth</label>
                                                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Category</label>
                                                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                                    <option value="Category 1">Category 1</option>
                                                                                    <option value="Category 2">Category 2</option>
                                                                                    <option value="Category 3">Category 5</option>
                                                                                    <option value="Category 4">Category 4</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Membership</label>
                                                                                <div class="radio-list">
                                                                                    <label class="radio-inline">
                                                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option 1 </label>
                                                                                    <label class="radio-inline">
                                                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option 2 </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class="form-section">Address</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-12 ">
                                                                            <div class="form-group">
                                                                                <label>Street</label>
                                                                                <input type="text" class="form-control"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>City</label>
                                                                                <input type="text" class="form-control"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>State</label>
                                                                                <input type="text" class="form-control"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Post Code</label>
                                                                                <input type="text" class="form-control"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Country</label>
                                                                                <select class="form-control"> </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions right">
                                                                    <button type="button" class="btn default">Cancel</button>
                                                                    <button type="submit" class="btn blue">
                                                                        <i class="fa fa-check"></i> Save</button>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bg-inverse">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-equalizer font-red-sunglo"></i>
                                                                <span class="caption-subject font-red-sunglo bold uppercase">Form Sample</span>
                                                                <span class="caption-helper">demo form...</span>
                                                            </div>
                                                            <div class="tools">
                                                                <a href="" class="collapse"> </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                <a href="" class="reload"> </a>
                                                                <a href="" class="remove"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="horizontal-form">
                                                                <div class="form-body">
                                                                    <h3 class="form-section">Person Info</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">First Name</label>
                                                                                <input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
                                                                                <span class="help-block"> This is inline help </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group has-error">
                                                                                <label class="control-label">Last Name</label>
                                                                                <input type="text" id="lastName" class="form-control" placeholder="Lim">
                                                                                <span class="help-block"> This field has error. </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Gender</label>
                                                                                <select class="form-control">
                                                                                    <option value="">Male</option>
                                                                                    <option value="">Female</option>
                                                                                </select>
                                                                                <span class="help-block"> Select your gender </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Date of Birth</label>
                                                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Category</label>
                                                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                                    <option value="Category 1">Category 1</option>
                                                                                    <option value="Category 2">Category 2</option>
                                                                                    <option value="Category 3">Category 5</option>
                                                                                    <option value="Category 4">Category 4</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Membership</label>
                                                                                <div class="radio-list">
                                                                                    <label class="radio-inline">
                                                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option 1 </label>
                                                                                    <label class="radio-inline">
                                                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option 2 </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class="form-section">Address</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-12 ">
                                                                            <div class="form-group">
                                                                                <label>Street</label>
                                                                                <input type="text" class="form-control"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>City</label>
                                                                                <input type="text" class="form-control"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>State</label>
                                                                                <input type="text" class="form-control"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Post Code</label>
                                                                                <input type="text" class="form-control"> </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Country</label>
                                                                                <select class="form-control"> </select>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions left">
                                                                    <button type="button" class="btn default">Cancel</button>
                                                                    <button type="submit" class="btn blue">
                                                                        <i class="fa fa-check"></i> Save</button>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_2">
                                                    <div class="portlet box green">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-gift"></i>Form Sample </div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="collapse"> </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                <a href="javascript:;" class="reload"> </a>
                                                                <a href="javascript:;" class="remove"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal">
                                                                <div class="form-body">
                                                                    <h3 class="form-section">Person Info</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">First Name</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control" placeholder="Chee Kin">
                                                                                    <span class="help-block"> This is inline help </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group has-error">
                                                                                <label class="control-label col-md-3">Last Name</label>
                                                                                <div class="col-md-9">
                                                                                    <select name="foo" class="form-control">
                                                                                        <option value="1">Option 1</option>
                                                                                        <option value="1">Option 2</option>
                                                                                        <option value="1">Option 3</option>
                                                                                    </select>
                                                                                    <span class="help-block"> This field has error. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Gender</label>
                                                                                <div class="col-md-9">
                                                                                    <select class="form-control">
                                                                                        <option value="">Male</option>
                                                                                        <option value="">Female</option>
                                                                                    </select>
                                                                                    <span class="help-block"> Select your gender. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Date of Birth</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Category</label>
                                                                                <div class="col-md-9">
                                                                                    <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                                        <option value="Category 1">Category 1</option>
                                                                                        <option value="Category 2">Category 2</option>
                                                                                        <option value="Category 3">Category 5</option>
                                                                                        <option value="Category 4">Category 4</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Membership</label>
                                                                                <div class="col-md-9">
                                                                                    <div class="radio-list">
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <h3 class="form-section">Address</h3>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Address 1</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Address 2</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">City</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">State</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Post Code</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Country</label>
                                                                                <div class="col-md-9">
                                                                                    <select class="form-control">
                                                                                        <option>Country 1</option>
                                                                                        <option>Country 2</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="row">
                                                                                <div class="col-md-offset-3 col-md-9">
                                                                                    <button type="submit" class="btn green">Submit</button>
                                                                                    <button type="button" class="btn default">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-equalizer font-red-sunglo"></i>
                                                                <span class="caption-subject font-red-sunglo bold uppercase">Form Sample</span>
                                                                <span class="caption-helper">some info...</span>
                                                            </div>
                                                            <div class="tools">
                                                                <a href="" class="collapse"> </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                <a href="" class="reload"> </a>
                                                                <a href="" class="remove"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal">
                                                                <div class="form-body">
                                                                    <h3 class="form-section">Person Info</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">First Name</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control" placeholder="Chee Kin">
                                                                                    <span class="help-block"> This is inline help </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group has-error">
                                                                                <label class="control-label col-md-3">Last Name</label>
                                                                                <div class="col-md-9">
                                                                                    <select name="foo" class="form-control">
                                                                                        <option value="1">Abc</option>
                                                                                        <option value="1">Abc</option>
                                                                                        <option value="1">This is a really long value that breaks the fluid design for a select2</option>
                                                                                    </select>
                                                                                    <span class="help-block"> This field has error. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Gender</label>
                                                                                <div class="col-md-9">
                                                                                    <select class="form-control">
                                                                                        <option value="">Male</option>
                                                                                        <option value="">Female</option>
                                                                                    </select>
                                                                                    <span class="help-block"> Select your gender. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Date of Birth</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Category</label>
                                                                                <div class="col-md-9">
                                                                                    <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                                        <option value="Category 1">Category 1</option>
                                                                                        <option value="Category 2">Category 2</option>
                                                                                        <option value="Category 3">Category 5</option>
                                                                                        <option value="Category 4">Category 4</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Membership</label>
                                                                                <div class="col-md-9">
                                                                                    <div class="radio-list">
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <h3 class="form-section">Address</h3>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Address 1</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Address 2</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">City</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">State</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Post Code</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Country</label>
                                                                                <div class="col-md-9">
                                                                                    <select class="form-control">
                                                                                        <option>Country 1</option>
                                                                                        <option>Country 2</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="row">
                                                                                <div class="col-md-offset-3 col-md-9">
                                                                                    <button type="submit" class="btn green">Submit</button>
                                                                                    <button type="button" class="btn default">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bg-inverse">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-equalizer font-green-haze"></i>
                                                                <span class="caption-subject font-green-haze bold uppercase">Form Sample</span>
                                                                <span class="caption-helper">some info...</span>
                                                            </div>
                                                            <div class="tools">
                                                                <a href="" class="collapse"> </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                <a href="" class="reload"> </a>
                                                                <a href="" class="remove"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal">
                                                                <div class="form-body">
                                                                    <h3 class="form-section">Person Info</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">First Name</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control" placeholder="Chee Kin">
                                                                                    <span class="help-block"> This is inline help </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group has-error">
                                                                                <label class="control-label col-md-3">Last Name</label>
                                                                                <div class="col-md-9">
                                                                                    <select name="foo" class="form-control">
                                                                                        <option value="1">Abc</option>
                                                                                        <option value="1">Abc</option>
                                                                                        <option value="1">This is a really long value that breaks the fluid design for a select2</option>
                                                                                    </select>
                                                                                    <span class="help-block"> This field has error. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Gender</label>
                                                                                <div class="col-md-9">
                                                                                    <select class="form-control">
                                                                                        <option value="">Male</option>
                                                                                        <option value="">Female</option>
                                                                                    </select>
                                                                                    <span class="help-block"> Select your gender. </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Date of Birth</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Category</label>
                                                                                <div class="col-md-9">
                                                                                    <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                                        <option value="Category 1">Category 1</option>
                                                                                        <option value="Category 2">Category 2</option>
                                                                                        <option value="Category 3">Category 5</option>
                                                                                        <option value="Category 4">Category 4</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Membership</label>
                                                                                <div class="col-md-9">
                                                                                    <div class="radio-list">
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <h3 class="form-section">Address</h3>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Address 1</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Address 2</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">City</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">State</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Post Code</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text" class="form-control"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Country</label>
                                                                                <div class="col-md-9">
                                                                                    <select class="form-control">
                                                                                        <option>Country 1</option>
                                                                                        <option>Country 2</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="row">
                                                                                <div class="col-md-offset-3 col-md-9">
                                                                                    <button type="submit" class="btn green">Submit</button>
                                                                                    <button type="button" class="btn default">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_3">
                                                    <div class="portlet box blue">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-gift"></i>Form Sample </div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="collapse"> </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                <a href="javascript:;" class="reload"> </a>
                                                                <a href="javascript:;" class="remove"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form class="form-horizontal" role="form">
                                                                <div class="form-body">
                                                                    <h2 class="margin-bottom-20"> View User Info - Bob Nilson </h2>
                                                                    <h3 class="form-section">Person Info</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">First Name:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Bob </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Last Name:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Nilson </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Gender:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Male </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Date of Birth:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> 20.01.1984 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Category:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Category1 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Membership:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Free </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class="form-section">Address</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Address:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> #24 Sun Park Avenue, Rolton Str </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">City:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">State:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Post Code:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> 457890 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Country:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> USA </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="row">
                                                                                <div class="col-md-offset-3 col-md-9">
                                                                                    <button type="submit" class="btn green">
                                                                                        <i class="fa fa-pencil"></i> Edit</button>
                                                                                    <button type="button" class="btn default">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-equalizer font-green-haze"></i>
                                                                <span class="caption-subject font-green-haze bold uppercase">Form Sample</span>
                                                                <span class="caption-helper">some info...</span>
                                                            </div>
                                                            <div class="tools">
                                                                <a href="" class="collapse"> </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                <a href="" class="reload"> </a>
                                                                <a href="" class="remove"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form class="form-horizontal" role="form">
                                                                <div class="form-body">
                                                                    <h2 class="margin-bottom-20"> View User Info - Bob Nilson </h2>
                                                                    <h3 class="form-section">Person Info</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">First Name:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Bob </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Last Name:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Nilson </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Gender:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Male </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Date of Birth:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> 20.01.1984 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Category:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Category1 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Membership:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Free </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class="form-section">Address</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Address:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> #24 Sun Park Avenue, Rolton Str </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">City:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">State:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Post Code:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> 457890 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Country:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> USA </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="row">
                                                                                <div class="col-md-offset-3 col-md-9">
                                                                                    <button type="submit" class="btn green">
                                                                                        <i class="fa fa-pencil"></i> Edit</button>
                                                                                    <button type="button" class="btn default">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bg-inverse">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-equalizer font-red-sunglo"></i>
                                                                <span class="caption-subject font-red-sunglo bold uppercase">Form Sample</span>
                                                                <span class="caption-helper">some info...</span>
                                                            </div>
                                                            <div class="tools">
                                                                <a href="" class="collapse"> </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                <a href="" class="reload"> </a>
                                                                <a href="" class="remove"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form class="form-horizontal" role="form">
                                                                <div class="form-body">
                                                                    <h2 class="margin-bottom-20"> View User Info - Bob Nilson </h2>
                                                                    <h3 class="form-section">Person Info</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">First Name:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Bob </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Last Name:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Nilson </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Gender:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Male </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Date of Birth:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> 20.01.1984 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Category:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Category1 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Membership:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> Free </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <h3 class="form-section">Address</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Address:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> #24 Sun Park Avenue, Rolton Str </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">City:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">State:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> New York </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                    <!--/row-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Post Code:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> 457890 </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Country:</label>
                                                                                <div class="col-md-9">
                                                                                    <p class="form-control-static"> USA </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--/span-->
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="row">
                                                                                <div class="col-md-offset-3 col-md-9">
                                                                                    <button type="submit" class="btn green">
                                                                                        <i class="fa fa-pencil"></i> Edit</button>
                                                                                    <button type="button" class="btn default">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6"> </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_4">
                                                    <div class="portlet box blue">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-gift"></i>Form Sample </div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="collapse"> </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                <a href="javascript:;" class="reload"> </a>
                                                                <a href="javascript:;" class="remove"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal form-row-seperated">
                                                                <div class="form-body">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">First Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="small" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Last Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="medium" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Gender</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="">Male</option>
                                                                                <option value="">Female</option>
                                                                            </select>
                                                                            <span class="help-block"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date of Birth</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Category</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="Category 1">Category 1</option>
                                                                                <option value="Category 2">Category 2</option>
                                                                                <option value="Category 3">Category 5</option>
                                                                                <option value="Category 4">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Multi-Value Select</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control" multiple>
                                                                                <optgroup label="NFC EAST">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC NORTH">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC SOUTH">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC WEST">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC EAST">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC NORTH">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC SOUTH">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC WEST">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Membership</label>
                                                                        <div class="col-md-9">
                                                                            <div class="radio-list">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Street</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">City</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">State</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Post Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group last">
                                                                        <label class="control-label col-md-3">Country</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                            <button type="submit" class="btn green">
                                                                                <i class="fa fa-pencil"></i> 1Edit</button>
                                                                            <button type="button" class="btn default">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bordered form-fit">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-equalizer font-green-haze"></i>
                                                                <span class="caption-subject font-green-haze bold uppercase">Form Sample</span>
                                                                <span class="caption-helper">some info...</span>
                                                            </div>
                                                            <div class="actions">
                                                                <a href="javascript:;" class="btn btn-circle btn-default btn-sm">
                                                                    <i class="fa fa-pencil"></i> Edit </a>
                                                                <a href="javascript:;" class="btn btn-circle btn-default btn-sm">
                                                                    <i class="fa fa-plus"></i> Add </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal form-row-seperated">
                                                                <div class="form-body">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">First Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="small" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Last Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="medium" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Gender</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="">Male</option>
                                                                                <option value="">Female</option>
                                                                            </select>
                                                                            <span class="help-block"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date of Birth</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Category</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="Category 1">Category 1</option>
                                                                                <option value="Category 2">Category 2</option>
                                                                                <option value="Category 3">Category 5</option>
                                                                                <option value="Category 4">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Multi-Value Select</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control" multiple>
                                                                                <optgroup label="NFC EAST">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC NORTH">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC SOUTH">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC WEST">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC EAST">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC NORTH">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC SOUTH">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC WEST">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Membership</label>
                                                                        <div class="col-md-9">
                                                                            <div class="radio-list">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Street</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">City</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">State</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Post Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group last">
                                                                        <label class="control-label col-md-3">Country</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                            <button type="submit" class="btn green">
                                                                                <i class="fa fa-pencil"></i> 1Edit</button>
                                                                            <button type="button" class="btn default">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bg-inverse form-fit">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-equalizer font-green-haze"></i>
                                                                <span class="caption-subject font-green-haze bold uppercase">Form Sample</span>
                                                                <span class="caption-helper">some info...</span>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="portlet-input input-inline input-small">
                                                                    <div class="input-icon right">
                                                                        <i class="icon-magnifier"></i>
                                                                        <input type="text" class="form-control input-circle" placeholder="search..."> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal form-row-seperated">
                                                                <div class="form-body">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">First Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="small" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Last Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="medium" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Gender</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="">Male</option>
                                                                                <option value="">Female</option>
                                                                            </select>
                                                                            <span class="help-block"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date of Birth</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Category</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="Category 1">Category 1</option>
                                                                                <option value="Category 2">Category 2</option>
                                                                                <option value="Category 3">Category 5</option>
                                                                                <option value="Category 4">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Multi-Value Select</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control" multiple>
                                                                                <optgroup label="NFC EAST">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC NORTH">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC SOUTH">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC WEST">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC EAST">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC NORTH">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC SOUTH">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC WEST">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Membership</label>
                                                                        <div class="col-md-9">
                                                                            <div class="radio-list">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Street</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">City</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">State</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Post Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group last">
                                                                        <label class="control-label col-md-3">Country</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                            <button type="submit" class="btn green">
                                                                                <i class="fa fa-pencil"></i> 1Edit</button>
                                                                            <button type="button" class="btn default">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_5">
                                                    <div class="portlet box blue ">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-gift"></i>Form Sample </div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="collapse"> </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                <a href="javascript:;" class="reload"> </a>
                                                                <a href="javascript:;" class="remove"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal form-bordered">
                                                                <div class="form-body">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">First Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="small" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Last Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="medium" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Gender</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="">Male</option>
                                                                                <option value="">Female</option>
                                                                            </select>
                                                                            <span class="help-block"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date of Birth</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Category</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="Category 1">Category 1</option>
                                                                                <option value="Category 2">Category 2</option>
                                                                                <option value="Category 3">Category 5</option>
                                                                                <option value="Category 4">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Multi-Value Select</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control" multiple>
                                                                                <optgroup label="NFC EAST">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC NORTH">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC SOUTH">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC WEST">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC EAST">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC NORTH">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC SOUTH">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC WEST">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Membership</label>
                                                                        <div class="col-md-9">
                                                                            <div class="radio-list">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Street</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">City</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">State</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Post Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group last">
                                                                        <label class="control-label col-md-3">Country</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-md-offset-3 col-md-9">
                                                                                    <button type="submit" class="btn green">
                                                                                        <i class="fa fa-check"></i> Submit</button>
                                                                                    <button type="button" class="btn default">Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bordered form-fit">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-equalizer font-blue-hoki"></i>
                                                                <span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
                                                                <span class="caption-helper">demo form...</span>
                                                            </div>
                                                            <div class="actions">
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-cloud-upload"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-wrench"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal form-bordered">
                                                                <div class="form-body">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">First Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="small" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Last Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="medium" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Gender</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="">Male</option>
                                                                                <option value="">Female</option>
                                                                            </select>
                                                                            <span class="help-block"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date of Birth</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Category</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="Category 1">Category 1</option>
                                                                                <option value="Category 2">Category 2</option>
                                                                                <option value="Category 3">Category 5</option>
                                                                                <option value="Category 4">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Multi-Value Select</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control" multiple>
                                                                                <optgroup label="NFC EAST">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC NORTH">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC SOUTH">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC WEST">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC EAST">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC NORTH">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC SOUTH">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC WEST">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Membership</label>
                                                                        <div class="col-md-9">
                                                                            <div class="radio-list">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Street</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">City</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">State</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Post Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group last">
                                                                        <label class="control-label col-md-3">Country</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                            <button type="submit" class="btn green">
                                                                                <i class="fa fa-check"></i> Submit</button>
                                                                            <button type="button" class="btn default">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bg-inverse form-fit">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-equalizer font-blue-hoki"></i>
                                                                <span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
                                                                <span class="caption-helper">demo form...</span>
                                                            </div>
                                                            <div class="actions">
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-cloud-upload"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-wrench"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal form-bordered">
                                                                <div class="form-body">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">First Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="small" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Last Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="medium" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Gender</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="">Male</option>
                                                                                <option value="">Female</option>
                                                                            </select>
                                                                            <span class="help-block"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date of Birth</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Category</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="Category 1">Category 1</option>
                                                                                <option value="Category 2">Category 2</option>
                                                                                <option value="Category 3">Category 5</option>
                                                                                <option value="Category 4">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Multi-Value Select</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control" multiple>
                                                                                <optgroup label="NFC EAST">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC NORTH">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC SOUTH">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC WEST">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC EAST">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC NORTH">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC SOUTH">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC WEST">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Membership</label>
                                                                        <div class="col-md-9">
                                                                            <div class="radio-list">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Street</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">City</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">State</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Post Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group last">
                                                                        <label class="control-label col-md-3">Country</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                            <button type="submit" class="btn green">
                                                                                <i class="fa fa-check"></i> Submit</button>
                                                                            <button type="button" class="btn default">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_6">
                                                    <div class="portlet box blue ">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-gift"></i>Form Sample </div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="collapse"> </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                <a href="javascript:;" class="reload"> </a>
                                                                <a href="javascript:;" class="remove"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal form-bordered form-row-stripped">
                                                                <div class="form-body">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">First Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="small" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Last Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="medium" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Gender</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="">Male</option>
                                                                                <option value="">Female</option>
                                                                            </select>
                                                                            <span class="help-block"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date of Birth</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Category</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2_category">
                                                                                <option value="Category 1">Category 1</option>
                                                                                <option value="Category 2">Category 2</option>
                                                                                <option value="Category 3">Category 5</option>
                                                                                <option value="Category 4">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Multi-Value Select</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2_sample1" multiple>
                                                                                <optgroup label="NFC EAST">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC NORTH">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC SOUTH">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC WEST">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC EAST">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC NORTH">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC SOUTH">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC WEST">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Membership</label>
                                                                        <div class="col-md-9">
                                                                            <div class="radio-list">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Street</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">City</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">State</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Post Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group last">
                                                                        <label class="control-label col-md-3">Country</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                            <button type="submit" class="btn green">
                                                                                <i class="fa fa-check"></i> Submit</button>
                                                                            <button type="button" class="btn default">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bordered form-fit">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-user font-blue-hoki"></i>
                                                                <span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
                                                                <span class="caption-helper">demo form...</span>
                                                            </div>
                                                            <div class="actions">
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-cloud-upload"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-wrench"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal form-bordered form-row-stripped">
                                                                <div class="form-body">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">First Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="small" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Last Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="medium" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Gender</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="">Male</option>
                                                                                <option value="">Female</option>
                                                                            </select>
                                                                            <span class="help-block"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date of Birth</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Category</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2_category">
                                                                                <option value="Category 1">Category 1</option>
                                                                                <option value="Category 2">Category 2</option>
                                                                                <option value="Category 3">Category 5</option>
                                                                                <option value="Category 4">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Multi-Value Select</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2_sample1" multiple>
                                                                                <optgroup label="NFC EAST">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC NORTH">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC SOUTH">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC WEST">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC EAST">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC NORTH">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC SOUTH">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC WEST">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Membership</label>
                                                                        <div class="col-md-9">
                                                                            <div class="radio-list">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Street</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">City</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">State</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Post Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group last">
                                                                        <label class="control-label col-md-3">Country</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                            <button type="submit" class="btn green">
                                                                                <i class="fa fa-check"></i> Submit</button>
                                                                            <button type="button" class="btn default">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bg-inverse form-fit">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-user font-blue-hoki"></i>
                                                                <span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
                                                                <span class="caption-helper">demo form...</span>
                                                            </div>
                                                            <div class="actions">
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-cloud-upload"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-wrench"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal form-bordered form-row-stripped">
                                                                <div class="form-body">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">First Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="small" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Last Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="medium" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Gender</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="">Male</option>
                                                                                <option value="">Female</option>
                                                                            </select>
                                                                            <span class="help-block"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date of Birth</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Category</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2_category">
                                                                                <option value="Category 1">Category 1</option>
                                                                                <option value="Category 2">Category 2</option>
                                                                                <option value="Category 3">Category 5</option>
                                                                                <option value="Category 4">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Multi-Value Select</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2_sample1" multiple>
                                                                                <optgroup label="NFC EAST">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC NORTH">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC SOUTH">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC WEST">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC EAST">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC NORTH">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC SOUTH">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC WEST">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Membership</label>
                                                                        <div class="col-md-9">
                                                                            <div class="radio-list">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Street</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">City</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">State</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Post Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group last">
                                                                        <label class="control-label col-md-3">Country</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                            <button type="submit" class="btn green">
                                                                                <i class="fa fa-check"></i> Submit</button>
                                                                            <button type="button" class="btn default">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_7">
                                                    <div class="portlet box blue ">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="fa fa-gift"></i>Form Sample </div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="collapse"> </a>
                                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                <a href="javascript:;" class="reload"> </a>
                                                                <a href="javascript:;" class="remove"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal form-bordered form-label-stripped">
                                                                <div class="form-body">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">First Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="small" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Last Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="medium" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Gender</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="">Male</option>
                                                                                <option value="">Female</option>
                                                                            </select>
                                                                            <span class="help-block"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date of Birth</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Category</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2_category">
                                                                                <option value="Category 1">Category 1</option>
                                                                                <option value="Category 2">Category 2</option>
                                                                                <option value="Category 3">Category 5</option>
                                                                                <option value="Category 4">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Multi-Value Select</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2_sample1" multiple>
                                                                                <optgroup label="NFC EAST">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC NORTH">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC SOUTH">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC WEST">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC EAST">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC NORTH">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC SOUTH">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC WEST">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Membership</label>
                                                                        <div class="col-md-9">
                                                                            <div class="radio-list">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Street</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">City</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">State</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Post Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group last">
                                                                        <label class="control-label col-md-3">Country</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                            <button type="submit" class="btn green">
                                                                                <i class="fa fa-check"></i> Submit</button>
                                                                            <button type="button" class="btn default">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bordered form-fit">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-user font-blue-hoki"></i>
                                                                <span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
                                                                <span class="caption-helper">demo form...</span>
                                                            </div>
                                                            <div class="actions">
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-cloud-upload"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-wrench"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal form-bordered form-label-stripped">
                                                                <div class="form-body">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">First Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="small" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Last Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="medium" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Gender</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="">Male</option>
                                                                                <option value="">Female</option>
                                                                            </select>
                                                                            <span class="help-block"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date of Birth</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Category</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2_category">
                                                                                <option value="Category 1">Category 1</option>
                                                                                <option value="Category 2">Category 2</option>
                                                                                <option value="Category 3">Category 5</option>
                                                                                <option value="Category 4">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Multi-Value Select</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2_sample1" multiple>
                                                                                <optgroup label="NFC EAST">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC NORTH">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC SOUTH">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC WEST">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC EAST">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC NORTH">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC SOUTH">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC WEST">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Membership</label>
                                                                        <div class="col-md-9">
                                                                            <div class="radio-list">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Street</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">City</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">State</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Post Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group last">
                                                                        <label class="control-label col-md-3">Country</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                            <button type="submit" class="btn green">
                                                                                <i class="fa fa-check"></i> Submit</button>
                                                                            <button type="button" class="btn default">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bg-inverse form-fit">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-user font-blue-hoki"></i>
                                                                <span class="caption-subject font-blue-hoki bold uppercase">Form Sample</span>
                                                                <span class="caption-helper">demo form...</span>
                                                            </div>
                                                            <div class="actions">
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-cloud-upload"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-wrench"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                    <i class="icon-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body form">
                                                            <!-- BEGIN FORM-->
                                                            <form action="#" class="form-horizontal form-bordered form-label-stripped">
                                                                <div class="form-body">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">First Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="small" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Last Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" placeholder="medium" class="form-control" />
                                                                            <span class="help-block"> This is inline help </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Gender</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="">Male</option>
                                                                                <option value="">Female</option>
                                                                            </select>
                                                                            <span class="help-block"> Select your gender. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Date of Birth</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Category</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2_category">
                                                                                <option value="Category 1">Category 1</option>
                                                                                <option value="Category 2">Category 2</option>
                                                                                <option value="Category 3">Category 5</option>
                                                                                <option value="Category 4">Category 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Multi-Value Select</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control select2_sample1" multiple>
                                                                                <optgroup label="NFC EAST">
                                                                                    <option>Dallas Cowboys</option>
                                                                                    <option>New York Giants</option>
                                                                                    <option>Philadelphia Eagles</option>
                                                                                    <option>Washington Redskins</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC NORTH">
                                                                                    <option>Chicago Bears</option>
                                                                                    <option>Detroit Lions</option>
                                                                                    <option>Green Bay Packers</option>
                                                                                    <option>Minnesota Vikings</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC SOUTH">
                                                                                    <option>Atlanta Falcons</option>
                                                                                    <option>Carolina Panthers</option>
                                                                                    <option>New Orleans Saints</option>
                                                                                    <option>Tampa Bay Buccaneers</option>
                                                                                </optgroup>
                                                                                <optgroup label="NFC WEST">
                                                                                    <option>Arizona Cardinals</option>
                                                                                    <option>St. Louis Rams</option>
                                                                                    <option>San Francisco 49ers</option>
                                                                                    <option>Seattle Seahawks</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC EAST">
                                                                                    <option>Buffalo Bills</option>
                                                                                    <option>Miami Dolphins</option>
                                                                                    <option>New England Patriots</option>
                                                                                    <option>New York Jets</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC NORTH">
                                                                                    <option>Baltimore Ravens</option>
                                                                                    <option>Cincinnati Bengals</option>
                                                                                    <option>Cleveland Browns</option>
                                                                                    <option>Pittsburgh Steelers</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC SOUTH">
                                                                                    <option>Houston Texans</option>
                                                                                    <option>Indianapolis Colts</option>
                                                                                    <option>Jacksonville Jaguars</option>
                                                                                    <option>Tennessee Titans</option>
                                                                                </optgroup>
                                                                                <optgroup label="AFC WEST">
                                                                                    <option>Denver Broncos</option>
                                                                                    <option>Kansas City Chiefs</option>
                                                                                    <option>Oakland Raiders</option>
                                                                                    <option>San Diego Chargers</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Membership</label>
                                                                        <div class="col-md-9">
                                                                            <div class="radio-list">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option1" /> Free </label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" value="option2" checked/> Professional </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Street</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">City</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">State</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Post Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"> </div>
                                                                    </div>
                                                                    <div class="form-group last">
                                                                        <label class="control-label col-md-3">Country</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control"> </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <div class="row">
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                            <button type="submit" class="btn green">
                                                                                <i class="fa fa-check"></i> Submit</button>
                                                                            <button type="button" class="btn default">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- END FORM-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PAGE BASE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END SIDEBAR CONTENT LAYOUT -->
                </div>
                <!-- BEGIN FOOTER -->

      <?php include("include/footer.php");?>