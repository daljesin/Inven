<?php include("include/css.php");?>
    <body class="page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN CONTAINER -->
        <div class="wrapper">
            <!-- BEGIN HEADER -->
             <?php include("include/header.php");?>
			 <link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" /> 
		   <link href="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
		    <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
			
		   
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
                                          
                                            <div class="tab-content" style="padding:0px;">
                                               <div class="portlet box blue-hoki">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-edit"></i> &nbsp;Add User Information  
													</div>
													<div class="caption" style="margin-left: 34px;">
                                                    <a href="userlist.php" style="text-decoration:none;color:#fff;"><i class="fa fa-list"></i>&nbsp;User List</a>
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
								<input type="hidden" name="mode" value="userinfo">
								<input type="hidden" name="userId" value="<?php //echo $StoreId;?>">
								<input type="hidden" name="userId" value="<?php //echo $storeId;?>">
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
														 
														 <div class="form-group " style="">
                                                                    <label class="control-label col-md-4">Role </label>
                                                                    <div class="col-md-8">
                                                                        <select name="role" onChange="sourceForm(this.value);" class="form-control">
                                                                            <option value="">Select Role</option>
																			<option value="Admin">Admin</option>
																			<option value="BackOffice">BackOffice</option>
																			<option value="Super Admin">Super Admin</option>
																			<option value="Others">Others</option>
																			<option value="Admin">Admin</option>
																			<option value="Admin">Admin</option>
																			<option value="Admin">Admin</option>-->
                                                                        </select>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>
														 

															<!--<div class="form-group">
                                                                    <label class="control-label col-md-4"> Store Name</label>
                                                                    <div class="col-md-8">
                                                                        <input type="text" class="form-control" id="store_name" name="store_name"type="text" placeholder="" value="<?php //echo $StoreName; ?>" required>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>-->
															


                                                              
                                                            </div>	
															
                                                            <div class="col-md-6">
                                                               <div class="form-group">
                                                                    <label class="control-label col-md-4"> Middle Name</label>
                                                                    <div class="col-md-8">
                                                                        <input type="text" class="form-control" id="mname" name="mname"type="text" placeholder="" value="<?php //echo $mname; ?>" required>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
														  <div class="row">
														 <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label class="control-label col-md-4" style="margin-top: 7%;"> First Name</label>
                                                                    <div class="col-md-8">
                                                                        <input style="margin-top: 9%;margin-bottom: 1%;" type="text" class="form-control" id="fname" name="fname"type="text" placeholder="" value="<?php //echo $fname; ?>" required>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>															
                                                            </div>																
                                                            <div class="col-md-6">   
																 <div class="form-group">
                                                                    <label class="control-label col-md-4" style="margin-top: 7%;"> Last Name</label>
                                                                    <div class="col-md-8">
                                                                        <input style="margin-top: 9%;" type="text" class="form-control" id="lname" name="lname" type="text" placeholder="" value="<?php //echo $StoreEmail; ?>" required>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>                                                              
                                                            </div>
                                                            
														</div>
														
														
														 <div class="row">
														 <div class="col-md-6">
														 <div class="form-group">
                                                                    <label class="control-label col-md-4" style="margin-top: 7%;">Email</label>
                                                                    <div class="col-md-8">
                                                                        <input style="margin-top: 9%;" type="text" class="form-control" id="email" name="email"type="text" placeholder="" value="<?php //echo $StorePhone; ?>" required>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>
                                                                 <!--<div class="form-group " style="">
                                                                    <label class="control-label col-md-4" style="margin-top:7%;">Select state </label>
                                                                    <div class="col-md-8">
																	
                                                                        <select name="state" onChange="sourceForm(this.value);" class="form-control" style="margin-top:9%;">
                                                                            <option value="">Select State</option>
																			<?php
																					/*foreach($statelist as $stateRow)
																					{?>
																					<option value="<?php echo $stateRow['StateID'];?>" <?php if($stateRow['StateID'] == $state){echo "selected";} ?>><?php echo $stateRow['StateName'];?></option>
																			<?php } */?> 
																			
                                                                            
                                                                        </select>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>	-->														
                                                            </div>																
                                                            <div class="col-md-6">   
																 <div class="form-group">
                                                                    <label class="control-label col-md-4" style="margin-top: 7%;"> Password</label>
                                                                    <div class="col-md-8">
                                                                        <input style="margin-top: 9%;" type="text" class="form-control" id="password" name="password"type="password" placeholder="" value="<?php //echo $StorePhone; ?>" required>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>                                                              
                                                            </div>
                                                   
														 </div>
														 
														 
														 <div class="row">
														 <div class="col-md-6">
														 <div class="form-group">
                                                                    <label class="control-label col-md-4" style="margin-top: 7%;">Mobile</label>
                                                                    <div class="col-md-8">
                                                                        <input style="margin-top: 9%;" type="text" class="form-control" id="mobile" name="mobile"type="text" placeholder="" value="<?php //echo $mobile; ?>" required>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>
                                                                 													
                                                            </div>																
                                                            <div class="col-md-6">   
																 <div class="form-group">
                                                                    <label class="control-label col-md-4" style="margin-top: 7%;"> Phone</label>
                                                                    <div class="col-md-8">
                                                                        <input style="margin-top: 9%;" type="text" class="form-control" id="phone" name="phone"type="text" placeholder="" value="<?php //echo $phone; ?>" required>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>                                                              
                                                            </div>
                                                   
														 </div>
														 
														  <div class="row">
														 <div class="col-md-6">
														<div class="form-group " style="">
                                                                    <label class="control-label col-md-4" style="margin-top:7%;">Select City </label>
                                                                    <div class="col-md-8">
																	
                                                                        <select name="city" onChange="sourceForm(this.value);" class="form-control" style="margin-top:9%;">
                                                                            <option value="">Select City</option>
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
                                                                    <label class="control-label col-md-4" style="margin-top: 7%;"> Date Of Birth</label>
                                                                    <div class="col-md-8">
																	<input style="margin-top: 9%;width:100%!important;" class="form-control form-control-inline input-medium date-picker" placeholder="MM/DD/YYYY"  size="16" type="text" name="dob" id="demo3" value=""  required/>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>                                                              
                                                            </div>
                                                   
														 </div>
														 
														 <div class="row">
														 <div class="col-md-6">
														<div class="form-group " style="">
                                                                    <label class="control-label col-md-4" style="margin-top:7%;">Select State </label>
                                                                    <div class="col-md-8">
																	
                                                                        <select name="state" onChange="sourceForm(this.value);" class="form-control" style="margin-top:9%;">
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
																 <div class="form-group " style="">
                                                                    <label class="control-label col-md-4" style="margin-top:7%;">Select Country </label>
                                                                    <div class="col-md-8">
																	
                                                                        <select name="country" onChange="sourceForm(this.value);" class="form-control" style="margin-top:9%;">
                                                                            
																		<option value="">Select Country</option>	
																		<option value="Afganistan">Afghanistan</option>
																		<option value="Albania">Albania</option>
																		<option value="Algeria">Algeria</option>
																		<option value="American Samoa">American Samoa</option>
																		<option value="Andorra">Andorra</option>
																		<option value="Angola">Angola</option>
																		<option value="Anguilla">Anguilla</option>
																		<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
																		<option value="Argentina">Argentina</option>
																		<option value="Armenia">Armenia</option>
																		<option value="Aruba">Aruba</option>
																		<option value="Australia">Australia</option>
																		<option value="Austria">Austria</option>
																		<option value="Azerbaijan">Azerbaijan</option>
																		<option value="Bahamas">Bahamas</option>
																		<option value="Bahrain">Bahrain</option>
																		<option value="Bangladesh">Bangladesh</option>
																		<option value="Barbados">Barbados</option>
																		<option value="Belarus">Belarus</option>
																		<option value="Belgium">Belgium</option>
																		<option value="Belize">Belize</option>
																		<option value="Benin">Benin</option>
																		<option value="Bermuda">Bermuda</option>
																		<option value="Bhutan">Bhutan</option>
																		<option value="Bolivia">Bolivia</option>
																		<option value="Bonaire">Bonaire</option>
																		<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
																		<option value="Botswana">Botswana</option>
																		<option value="Brazil">Brazil</option>
																		<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
																		<option value="Brunei">Brunei</option>
																		<option value="Bulgaria">Bulgaria</option>
																		<option value="Burkina Faso">Burkina Faso</option>
																		<option value="Burundi">Burundi</option>
																		<option value="Cambodia">Cambodia</option>
																		<option value="Cameroon">Cameroon</option>
																		<option value="Canada">Canada</option>
																		<option value="Canary Islands">Canary Islands</option>
																		<option value="Cape Verde">Cape Verde</option>
																		<option value="Cayman Islands">Cayman Islands</option>
																		<option value="Central African Republic">Central African Republic</option>
																		<option value="Chad">Chad</option>
																		<option value="Channel Islands">Channel Islands</option>
																		<option value="Chile">Chile</option>
																		<option value="China">China</option>
																		<option value="Christmas Island">Christmas Island</option>
																		<option value="Cocos Island">Cocos Island</option>
																		<option value="Colombia">Colombia</option>
																		<option value="Comoros">Comoros</option>
																		<option value="Congo">Congo</option>
																		<option value="Cook Islands">Cook Islands</option>
																		<option value="Costa Rica">Costa Rica</option>
																		<option value="Cote DIvoire">Cote D'Ivoire</option>
																		<option value="Croatia">Croatia</option>
																		<option value="Cuba">Cuba</option>
																		<option value="Curaco">Curacao</option>
																		<option value="Cyprus">Cyprus</option>
																		<option value="Czech Republic">Czech Republic</option>
																		<option value="Denmark">Denmark</option>
																		<option value="Djibouti">Djibouti</option>
																		<option value="Dominica">Dominica</option>
																		<option value="Dominican Republic">Dominican Republic</option>
																		<option value="East Timor">East Timor</option>
																		<option value="Ecuador">Ecuador</option>
																		<option value="Egypt">Egypt</option>
																		<option value="El Salvador">El Salvador</option>
																		<option value="Equatorial Guinea">Equatorial Guinea</option>
																		<option value="Eritrea">Eritrea</option>
																		<option value="Estonia">Estonia</option>
																		<option value="Ethiopia">Ethiopia</option>
																		<option value="Falkland Islands">Falkland Islands</option>
																		<option value="Faroe Islands">Faroe Islands</option>
																		<option value="Fiji">Fiji</option>
																		<option value="Finland">Finland</option>
																		<option value="France">France</option>
																		<option value="French Guiana">French Guiana</option>
																		<option value="French Polynesia">French Polynesia</option>
																		<option value="French Southern Ter">French Southern Ter</option>
																		<option value="Gabon">Gabon</option>
																		<option value="Gambia">Gambia</option>
																		<option value="Georgia">Georgia</option>
																		<option value="Germany">Germany</option>
																		<option value="Ghana">Ghana</option>
																		<option value="Gibraltar">Gibraltar</option>
																		<option value="Great Britain">Great Britain</option>
																		<option value="Greece">Greece</option>
																		<option value="Greenland">Greenland</option>
																		<option value="Grenada">Grenada</option>
																		<option value="Guadeloupe">Guadeloupe</option>
																		<option value="Guam">Guam</option>
																		<option value="Guatemala">Guatemala</option>
																		<option value="Guinea">Guinea</option>
																		<option value="Guyana">Guyana</option>
																		<option value="Haiti">Haiti</option>
																		<option value="Hawaii">Hawaii</option>
																		<option value="Honduras">Honduras</option>
																		<option value="Hong Kong">Hong Kong</option>
																		<option value="Hungary">Hungary</option>
																		<option value="Iceland">Iceland</option>
																		<option value="India">India</option>
																		<option value="Indonesia">Indonesia</option>
																		<option value="Iran">Iran</option>
																		<option value="Iraq">Iraq</option>
																		<option value="Ireland">Ireland</option>
																		<option value="Isle of Man">Isle of Man</option>
																		<option value="Israel">Israel</option>
																		<option value="Italy">Italy</option>
																		<option value="Jamaica">Jamaica</option>
																		<option value="Japan">Japan</option>
																		<option value="Jordan">Jordan</option>
																		<option value="Kazakhstan">Kazakhstan</option>
																		<option value="Kenya">Kenya</option>
																		<option value="Kiribati">Kiribati</option>
																		<option value="Korea North">Korea North</option>
																		<option value="Korea Sout">Korea South</option>
																		<option value="Kuwait">Kuwait</option>
																		<option value="Kyrgyzstan">Kyrgyzstan</option>
																		<option value="Laos">Laos</option>
																		<option value="Latvia">Latvia</option>
																		<option value="Lebanon">Lebanon</option>
																		<option value="Lesotho">Lesotho</option>
																		<option value="Liberia">Liberia</option>
																		<option value="Libya">Libya</option>
																		<option value="Liechtenstein">Liechtenstein</option>
																		<option value="Lithuania">Lithuania</option>
																		<option value="Luxembourg">Luxembourg</option>
																		<option value="Macau">Macau</option>
																		<option value="Macedonia">Macedonia</option>
																		<option value="Madagascar">Madagascar</option>
																		<option value="Malaysia">Malaysia</option>
																		<option value="Malawi">Malawi</option>
																		<option value="Maldives">Maldives</option>
																		<option value="Mali">Mali</option>
																		<option value="Malta">Malta</option>
																		<option value="Marshall Islands">Marshall Islands</option>
																		<option value="Martinique">Martinique</option>
																		<option value="Mauritania">Mauritania</option>
																		<option value="Mauritius">Mauritius</option>
																		<option value="Mayotte">Mayotte</option>
																		<option value="Mexico">Mexico</option>
																		<option value="Midway Islands">Midway Islands</option>
																		<option value="Moldova">Moldova</option>
																		<option value="Monaco">Monaco</option>
																		<option value="Mongolia">Mongolia</option>
																		<option value="Montserrat">Montserrat</option>
																		<option value="Morocco">Morocco</option>
																		<option value="Mozambique">Mozambique</option>
																		<option value="Myanmar">Myanmar</option>
																		<option value="Nambia">Nambia</option>
																		<option value="Nauru">Nauru</option>
																		<option value="Nepal">Nepal</option>
																		<option value="Netherland Antilles">Netherland Antilles</option>
																		<option value="Netherlands">Netherlands (Holland, Europe)</option>
																		<option value="Nevis">Nevis</option>
																		<option value="New Caledonia">New Caledonia</option>
																		<option value="New Zealand">New Zealand</option>
																		<option value="Nicaragua">Nicaragua</option>
																		<option value="Niger">Niger</option>
																		<option value="Nigeria">Nigeria</option>
																		<option value="Niue">Niue</option>
																		<option value="Norfolk Island">Norfolk Island</option>
																		<option value="Norway">Norway</option>
																		<option value="Oman">Oman</option>
																		<option value="Pakistan">Pakistan</option>
																		<option value="Palau Island">Palau Island</option>
																		<option value="Palestine">Palestine</option>
																		<option value="Panama">Panama</option>
																		<option value="Papua New Guinea">Papua New Guinea</option>
																		<option value="Paraguay">Paraguay</option>
																		<option value="Peru">Peru</option>
																		<option value="Phillipines">Philippines</option>
																		<option value="Pitcairn Island">Pitcairn Island</option>
																		<option value="Poland">Poland</option>
																		<option value="Portugal">Portugal</option>
																		<option value="Puerto Rico">Puerto Rico</option>
																		<option value="Qatar">Qatar</option>
																		<option value="Republic of Montenegro">Republic of Montenegro</option>
																		<option value="Republic of Serbia">Republic of Serbia</option>
																		<option value="Reunion">Reunion</option>
																		<option value="Romania">Romania</option>
																		<option value="Russia">Russia</option>
																		<option value="Rwanda">Rwanda</option>
																		<option value="St Barthelemy">St Barthelemy</option>
																		<option value="St Eustatius">St Eustatius</option>
																		<option value="St Helena">St Helena</option>
																		<option value="St Kitts-Nevis">St Kitts-Nevis</option>
																		<option value="St Lucia">St Lucia</option>
																		<option value="St Maarten">St Maarten</option>
																		<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
																		<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
																		<option value="Saipan">Saipan</option>
																		<option value="Samoa">Samoa</option>
																		<option value="Samoa American">Samoa American</option>
																		<option value="San Marino">San Marino</option>
																		<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
																		<option value="Saudi Arabia">Saudi Arabia</option>
																		<option value="Senegal">Senegal</option>
																		<option value="Serbia">Serbia</option>
																		<option value="Seychelles">Seychelles</option>
																		<option value="Sierra Leone">Sierra Leone</option>
																		<option value="Singapore">Singapore</option>
																		<option value="Slovakia">Slovakia</option>
																		<option value="Slovenia">Slovenia</option>
																		<option value="Solomon Islands">Solomon Islands</option>
																		<option value="Somalia">Somalia</option>
																		<option value="South Africa">South Africa</option>
																		<option value="Spain">Spain</option>
																		<option value="Sri Lanka">Sri Lanka</option>
																		<option value="Sudan">Sudan</option>
																		<option value="Suriname">Suriname</option>
																		<option value="Swaziland">Swaziland</option>
																		<option value="Sweden">Sweden</option>
																		<option value="Switzerland">Switzerland</option>
																		<option value="Syria">Syria</option>
																		<option value="Tahiti">Tahiti</option>
																		<option value="Taiwan">Taiwan</option>
																		<option value="Tajikistan">Tajikistan</option>
																		<option value="Tanzania">Tanzania</option>
																		<option value="Thailand">Thailand</option>
																		<option value="Togo">Togo</option>
																		<option value="Tokelau">Tokelau</option>
																		<option value="Tonga">Tonga</option>
																		<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
																		<option value="Tunisia">Tunisia</option>
																		<option value="Turkey">Turkey</option>
																		<option value="Turkmenistan">Turkmenistan</option>
																		<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
																		<option value="Tuvalu">Tuvalu</option>
																		<option value="Uganda">Uganda</option>
																		<option value="Ukraine">Ukraine</option>
																		<option value="United Arab Erimates">United Arab Emirates</option>
																		<option value="United Kingdom">United Kingdom</option>
																		<option value="United States of America">United States of America</option>
																		<option value="Uraguay">Uruguay</option>
																		<option value="Uzbekistan">Uzbekistan</option>
																		<option value="Vanuatu">Vanuatu</option>
																		<option value="Vatican City State">Vatican City State</option>
																		<option value="Venezuela">Venezuela</option>
																		<option value="Vietnam">Vietnam</option>
																		<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
																		<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
																		<option value="Wake Island">Wake Island</option>
																		<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
																		<option value="Yemen">Yemen</option>
																		<option value="Zaire">Zaire</option>
																		<option value="Zambia">Zambia</option>
																		<option value="Zimbabwe">Zimbabwe</option>
																		</select>
																			
                                                                            
                                                                        
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>                                                              
                                                            </div>
                                                   
														 </div>
														 
														 <!------------------------------------------->
														 <div class="row">
														 <div class="col-md-6">
														    <div class="form-group">
                                                                    <label class="control-label col-md-4" style="margin-top:7%;">Address</label>
                                                                    <div class="col-md-8">
                                                                       <textarea  name="address" class="form-control input-md"id="address" style="margin-top:7%;"><?php //echo $address; ?></textarea>
																	   </div>
                                                                </div>
                                                                 													
                                                            </div>																
                                                            <div class="col-md-6">   
																 <div class="form-group">
                                                                    <label class="control-label col-md-4" style="margin-top:7%;">Identity Proof</label>
                                                                        <div class="col-md-8">
                                                                          <select class="form-control" name="identity" style="margin-top:7%;">
																		<option value="">Card Type</option>		
																		<option value="Voter ID" <?php //if($identity == 'Voter ID'){echo"selected";}?>>Voter ID</option>		
																		<option value="Passport" <?php //if($identity == 'Passport'){echo"selected";}?>>Passport</option>		
																		<option value="Adhar Card" <?php //if($identity == 'Adhar Card'){echo"selected";}?>>Adhar Card</option>	
																		<option value="SSN" <?php //if($identity == 'SSN'){echo"selected";}?>>SSN</option>															
																		</select>
                                                                        </div>
                                                                    </div> 
																						<!-------------------->	
																	<!--<div class="form-group">
																	<label class="control-label col-md-4" style="margin-top:7%;">Upload Identity Proof</label>
																	<div class="col-md-8">
																		<div class="fileinput fileinput-new" data-provides="fileinput" style="margin-left:12%;margin-top:10px;">
																			<span class="btn green btn-file">
																				<span class="fileinput-new"> Select file </span>
																				<span class="fileinput-exists"> Change </span>
																				<input type="file"  name="idproof" id="idproof" style="margin-top:7%;"> </span>
																			<span class="fileinput-filename"> </span> &nbsp;
																			<a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
																		</div>
																	</div>
																</div> -->                                                           
                                                            </div>
                                                   
														 </div>
														 
														 <!-------------------------------->
														 <div class="row">
														 <div class="col-md-6">
														   <div class="form-group">
																	<label class="control-label col-md-4" style="margin-top:7%;">Card Number</label>
																	<div class="col-md-8">
																		<input style="margin-top:7%;"" type="text" class="form-control" name="cardnumber" value="<?php //echo $cardnumber; ?>" id="cardnumber"placeholder="">
																	</div>
																	
																</div>
																<div class="form-group">
                                                                   <label class="control-label col-md-4" style="">Pan Card Number</label>
                                                                    <div class="col-md-8" style="margin-top:9%;">
                                                                       <input style="" type="text" class="form-control" name="cardnumber" value="<?php //echo $cardnumber; ?>" id="cardnumber"placeholder="">
																	   </div>
                                                                </div>
																
                                                                 													
                                                            </div>
															<div class="col-md-6" >
															<div class="form-group">
																	<label class="control-label col-md-4" style="margin-top:7%;">Upload Identity Proof</label>
																	<div class="col-md-8">
																		<div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                                                    <div>
                                                                        <span class="btn red btn-outline btn-file">
                                                                            <span class="fileinput-new"> Select image </span>
                                                                            <span class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="..."> </span>
                                                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                    </div>
                                                                </div>
																	</div>
																</div>
															
																
															
															</div>
															</div>
														 <!--------------------------------------------->
														 <div class="row">
														 <div class="col-md-6">
														   <div class="form-group">
                                                                    <label class="control-label col-md-4" style="">Pan Card Number</label>
                                                                    <div class="col-md-8">
                                                                       <input style="" type="text" class="form-control" name="cardnumber" value="<?php //echo $cardnumber; ?>" id="cardnumber"placeholder="">
																	   </div>
                                                                </div>
                                                                 													
                                                            </div>
															<div class="col-md-6" >
															
															
															</div>
															</div>
														 <!--------------------------------------------->
														  <!--<div class="row">
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
                                                            
                                                        </div>-->
                                                    
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
	   <?php include("include/js.php");?>
	   
        <!-- END S -->
		<script src="assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        
        <!-- END PAGE LEVEL PLUGINS -->
      
	    <script src="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>