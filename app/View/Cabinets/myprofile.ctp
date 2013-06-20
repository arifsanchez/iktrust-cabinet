<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
<script src="../js//jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
	jQuery(document).ready(function(){
		// binds form submission and fields to the validation engine
		jQuery("#img_valid").validationEngine();
	});
</script> 

		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h2>My Profile</h2>
					</div>
				</div>
				
				<!--TABLE DOWNLOAD PLATFORM-->				
				<br>
				<br>
				<div class="tabbable"> <!-- Only required for left/right tabs -->
					<div class="row-fluid"> 
						<div class="span10">
							<ul class="nav nav-tabs">
							<!--TAB TITLE ONLY-->
								<li class="active">
									<a href="#tab1" data-toggle="tab">Edit Profile</a>
								</li>
								
								<li>
									<a href="#tab2" data-toggle="tab">Change Password</a>
								</li>
								
								<li>
									<a href="#tab3" data-toggle="tab">Pending Verification</a>
								</li>								
							</ul>
							
		<!-----------------TAB SEPERATER ------------------ TAB SEPERATER -----------------TAB SEPERATER -------------------->
							
							<div class="tab-content">
								<!--TAB CONTENT ONLY-->
								<div class="tab-pane active" id="tab1">
									<!-- Form Details -->
										<h4 class="widgettitle nomargin">Edit Profile</h4>
										<div class="widgetcontent bordered">
											<div class="row-fluid">
												<div class="span3 profile-left">
												
													<h4>Your Profile Photo</h4>
													<div class="profilethumb">
														<img  src= "<?php echo $this->Image->resize('img/'.IMG_DIR, $user['UserDetail']['photo'], 200, null, true) ?>">
														
														
													</div><!--profilethumb-->
												
												</div><!--span3-->
												<div class="span9">
												
													<?php echo $this->Form->create('User', array('type' => 'file', 'id'=>'editProfileForm' , 'class' => 'editprofileform')); ?>
													<?php echo $this->Form->input('User.id',array('type' => 'hidden', 'label' => false,'div' => false))?>
													<?php echo $this->Form->input('UserDetail.id',array('type' => 'hidden', 'label' => false,'div' => false))?>
														
														<h4>Login Information</h4>
														<p>
															<label>Email:</label>
															<?php echo $this->Form->input('User.email' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
														</p>
														<p>
															<label style="padding:0">Password</label>
															<a href="myprofile#tab2" id="myprofile#tab2">Change Password?</a>
														</p>
														
														<br />
														
														<h4>Personal Information</h4>
														<p>
															<label>Firstname:</label>
															<?php echo $this->Form->input('User.first_name' ,array('label' => false,'div' => false,'class'=>'input-xlarge',))?>
															
														</p>
														<p>
															<label>Lastname:</label>
															<?php echo $this->Form->input('User.last_name' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
														</p>
														<p>
															<label>Location:</label>
															<?php echo $this->Form->input('UserDetail.location' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
														</p>
														<p>
															<label>Address</label>
															<?php echo $this->Form->input('UserDetail.address' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
														</p>
														<p>
															<label>City</label>
															<?php echo $this->Form->input('UserDetail.city' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
														</p>
														<p>
															<label>State/Province</label>
															<?php echo $this->Form->input('UserDetail.state' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
														</p>
														<p>
															<label>Postal/Zip Code</label>
															<?php echo $this->Form->input('UserDetail.postal' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
														</p>
														<p>
															<label>Country</label>
															<?php	echo $this->Form->input('P.edit', array(
																	'label' => "",'class' =>'input-xlarge','options' => array(
																	'title'=> '-- Select Country --',
																	'opt1' => 'Russia', 
																	'opt2' => 'Malaysia', 
																	'opt3' => 'Indonesia', 
																	'opt4' => 'United State', 
																	'opt5' => 'Saudi Arabia')
																));
															?>
														</p>
														<p>
															<label>Telephone No#</label>
															<?php echo $this->Form->input('UserDetail.cellphone' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
														</p>
														<p>
															<label>photo</label>
															<?php echo $this->Form->input('UserDetail.photo' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ))?>
														</p>
														
														<br/>
														<br />
														<p>
															<?php echo $this->Form->Submit(__('Update Profile'), array('class'=>'btn btn-primary'));?>
														</p>
													<?php echo $this->Form->end(); ?>
													
												</div><!--span9-->
											</div><!--row-fluid-->
										</div><!--widgetcontent-->
									</div>
								

								<!-- CHANGE PASSWORD PANE-->
								<div class="tab-pane" id="tab2">
									<div class="row-fluid">
										<div class="span1">
										</div>
										
										<div class="span7">
											<br>
											<h3>Change Password</h3>
											<br>
											<form class="form-horizontal">
												<div class="control-group">
													<label class="control-label" for="#">*Enter Current Password</label>
													<div class="controls">
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'text',
														'placeholder' => 'Current Password',
														'label' => "")); 
													?>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">*New Password</label>
													<div class="controls">
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'text',
														'placeholder' => 'New Password',
														'label' => "")); 
													?>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">*Re-Enter New Password</label>
													<div class="controls">
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'text',
														'placeholder' => 'Re-Enter New Password',
														'label' => "")); 
													?>
													</div>
												</div>
												
												<div class="control-group">
													<div class="controls">
														<button type="submit" class="btn">Submit</button>
													</div>
												</div>
											</form>
										</div>
									
										<div class="span4">
											<br>
											<blockquote>
												<p>Important Notes</p>
												<small>To reset your Account Password, please enter a new password</small>
											</blockquote>
										</div>
									</div>
								</div>
								
								<!-- UPLOAD DOCUMENTS PANE-->
								<div class="tab-pane" id="tab3">
									<div class="row-fluid">
										<div class="span1">
										</div>
										
										<div class="span10 alert alert-error" align="center">
											<p>
												<h3 style="color: #F26F6F;">ANTI MONEY LAUNDERING & DATA PROTECTION ACT</h3>
												<p style="color: #D36767;">
												<small>
													In order to comply with worldwide financial regulations for the avoidance of money laundering and terrorist financing , we will require you to provide such additional information and documentary proof of identity as we deem necessary.
												</small>
												</p>
												
												<p style="color: #D36767;">
												<small>
													We will process your personal data in accordance with our obligations under the Data Protection Act 1998 and other applicable data protection legislation. In providing you with our services it may be necessary for us to disclose your personal details to registered by law third parties. Full details disclosures are contained in our Terms and Conditions.
												</small>
												</p>
											</p>
										</div>
									</div>
									
									<hr class="invisible">
									
									<div class="row-fluid">
										<div class="span1">
										</div>
										
										<div class="span5">
											<?php echo $this->Form->create('UserDoc', array('type' => 'file', 'id'=>'img_valid' , 'class' => 'stdform')); ?>
											<h3>PROOF OF IDENTITY</h3>
											<br>
											<ul class="list-nostyle">
												<li>
													<ul>
													  <li><span class="icon-check"></span> &nbsp;National Passport</li>
													  <li><span class="icon-check"></span> &nbsp;National Identity Card</li>
													  <li><span class="icon-check"></span> &nbsp;Driver License</li>
													  <li><span class="icon-check"></span> &nbsp;Others Government Issued Photo ID</li>
													  <li><span class="icon-check"></span> &nbsp;Signed &amp; Notarised Financial Statement</li>
													</ul>
												</li>
											</ul>
											<br>
											<strong>Select File : </strong> 
											<div>
												<i class=" iconsweets-paperclip"></i> &nbsp;  
												<input type="file" class="validate[required] text-input span2"  id="UserDocDoc1" name="data[UserDoc][doc1]"/>
											</div>
										</div>
										
										<div class="span5">
											<h3>PROOF OF IDENTITY</h3>
											<br>
											<ul class="list-nostyle">
												<li>
													<ul>
													  <li><span class="icon-check"></span> &nbsp;Utility Bill</li>
													  <li><span class="icon-check"></span> &nbsp;Government Issued Letter</li>
													  <li><br></li>
													  <li><br></li>
													  <li><br></li>
													</ul>
												</li>
											</ul>
											<br>
											<strong>Select File : </strong> 
											<div>
												<i class=" iconsweets-paperclip"></i> &nbsp;  
												<input type="file" class="validate[required] text-input span2"  id="UserDocDoc2" name="data[UserDoc][doc2]"/>
											</div>
										</div>
									</div>
									
									<hr>
									
									<div class="row-fluid">
										<div class="span1">
										</div>
										
										<div class="span10">
											<h3 class="widgettitle">Upload history</h3>
											<table class="table table-striped">
												<colgroup>
													<col class="con0" />
													<col class="con1" />
													<col class="con0" />
													<col class="con1" />
													<col class="con0" />
												</colgroup>
												<thead>
													<tr>
														<th>Rendering engine</th>
														<th>Browser</th>
														<th>Platform(s)</th>
														<th>Engine version</th>
														<th>CSS grade</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Trident</td>
														<td>Internet Explorer 4.0</td>
														<td>Win 95+</td>
														<td class="center">4</td>
														<td class="center">X</td>
													</tr>
													
													<tr>
														<td>Trident</td>
														<td>Internet Explorer 4.0</td>
														<td>Win 95+</td>
														<td class="center">4</td>
														<td class="center">X</td>
													</tr>
												</tbody>
											</table>
											<hr class="invisible">
										</div>
									</div>
								</div>

								<!-- Subsription Pane>
								<div class="tab-pane" id="tab4">
									<!--TITLE>
									<div class="row-fluid">
										<div class="span3" align="right">
											<br>
											<h3>Subscriptions Mailing</h3>
											<br>
										</div>
									</div>
									
									<!--LIST OF CHECKBOX>
									<div class="row-fluid">
										<div class="span5" align="right">
											<label class="chckbox">
												* IKTrust Daily Forex Brief and Market Insights
											</label>
										</div>
										
										<div class="span7">
											<div id="sub_chck" class="checker">
												<span class="unchecked">
													<input type="checkbox" checked="checked" name="check2" style="opacity: 0;">
												</span>
											</div>
										</div>
									</div>
									
									<div class="row-fluid">
										<div class="span5" align="right">
											<label class="chckbox">
												* Daily Technical Analysis - Pre EU Open
											</label>
										</div>
										
										<div class="span7">
											<div id="sub_chck" class="checker">
												<span class="unchecked">
													<input type="checkbox" checked="checked" name="check3" style="opacity: 0;">
												</span>
											</div>
										</div>
									</div>
									
									<div class="row-fluid">
										<div class="span5" align="right">
											<label class="chckbox">
												* Daily Technical Analysis - Pre US Open
											</label>
										</div>
										
										<div class="span7">
											<div id="sub_chck" class="checker">
												<span class="unchecked">
													<input type="checkbox" checked="checked" name="check4" style="opacity: 0;">
												</span>
											</div>
										</div>
									</div>
									
									<div class="row-fluid">
										<div class="span5" align="right">
											<label class="chckbox">
												* IKTrust Company News and Account Updates
											</label>
										</div>
										
										<div class="span7">
											<div id="sub_chck" class="checker">
												<span class="unchecked">
													<input type="checkbox" checked="checked" name="check5" style="opacity: 0;">
												</span>
											</div>
										</div>
										
									</div>
									
									<div class='row-fluid'>
										<div class="span2" align="right">
											<div class="control-group">
												<div class="controls">
													<button type="submit" class="btn">Submit</button>
												</div>
											</div>
										</div>
									</div>
								</div-->
								
								<!-- DEMO METATRADER Pane>
								<div class="tab-pane" id="tab5">
									<div class="row-fluid">
										<div class="span12">
											<br>
											<h3>Demo MetaTrader 4</h3>
										</div>
									</div>
									
									<br>
									<div class="row-fluid">
										<div class="span3">
											<h6>Your MT4 Login:</h6>
										</div>
										
										<div class="span9">
											<p>4102730</p>
										</div>
									</div>
									
									<div class="row-fluid">
										<div class="span3">
											<h6>Your MT4 Password:</h6>
										</div>
										
										<div class="span9">
											<p>a3Ae3Db7</p>
										</div>
									</div>
									
									<div class="row-fluid">
										<div class="span3">
											<h6>IKTrust MT4 Demo Server:</h6>
										</div>
										
										<div class="span9">
											<p>IKTrust.com-Demo2</p>
										</div>
									</div>
								</div-->

							</div> <!--Close Tab Content-->
						</div><!--Footer Span10-->
					</div><!--Close ROW-FLUID-->						
				</div>

			</div><!--contentinner close-->
			
		</div><!--mainconten closet-->