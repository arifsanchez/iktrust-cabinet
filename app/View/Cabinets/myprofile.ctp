<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
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
									<a href="#tab3" data-toggle="tab">Upload Documents</a>
								</li>
								
								<li>
									<a href="#tab4" data-toggle="tab">Subscriptions</a>
								</li>
								
								<li>
									<a href="#tab5" data-toggle="tab">Platform Credentials</a>
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
															<a href="">Change Password?</a>
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
										<div class="span8">
											<br>
											<h3>Change Password</h3>
											<br>
											<form class="form-horizontal">
												<div class="control-group">
													<label class="control-label" for="#">*Full Name</label>
													<div class="controls">
													<!--input type="password" id="#" placeholder="Full Name"-->
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'text',
														'placeholder' => 'Full Name',
														'label' => "")); 
													?>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">*Email</label>
													<div class="controls">
													<!--input type="password" id="#" placeholder="Valid Email"-->
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'text',
														'placeholder' => 'Valid Email',
														'label' => "")); 
													?>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">*Enter Current Password</label>
													<div class="controls">
													<!--input type="password" id="#" placeholder="Enter Current Password"-->
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
													<!--input type="password" id="#" placeholder="New Password"-->
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
													<!--input type="password" id="#" placeholder="Re-Enter New Password"-->
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
											<p>
												<h6>Important Notes</h6>
												To reset your Account Password, please enter a new password
											</p>
										</div>
									</div>
								</div>
								
								<!-- UPLOAD DOCUMENTS PANE-->
								<div class="tab-pane" id="tab3">
									<div class="row-fluid">
										<div class="span8">
											<br>
											<h3>Upload Documents</h3>
											<br>
											<form class="form-horizontal">
												<div class="control-group">
													<label class="control-label" for="#">
														<h6>Colour Copy Of Passport Or The Front Of The Id:</h6>
													</label>
													
													<div class="control-group">
														<div class="controls">
															<p><button class="btn btn-mini" type="button">Browse...</button></p>
															<p>
																To open an FxPro account you must provide a full, clear and valid (colour) copy of your international passport or national I.D. card or photocard driving license, in addition to the documents required to verify your address.
															</p>
														</div>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">
														 <h6>Colour Copy Of The Back Of The Id:</h6>
													</label>
													
													<div class="control-group">
														<div class="controls">
															<p><button class="btn btn-mini" type="button">Browse...</button></p>
														</div>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">
														<h6>Proof Of Residence:</h6>
													</label>
													
													<div class="control-group">
														<div class="controls">
															<p><button class="btn btn-mini" type="button">Browse...</button></p>
															<p>
																Recent utility bill dated within the last six months, current local authority tax bill, bank or credit card statement.
															</p>
														</div>
													</div>
													
													<label class="control-label" for="#">
														<h6>Proof Of Signature:</h6>
													</label>
													
													<div class="control-group">
														<div class="controls">
															<p><button class="btn btn-mini" type="button">Browse...</button></p>
															<p>
																If your signature is not contained within your identification documents, you may upload a document to verify your signature here. Alternatively, if you do not have a document containing your signature 
															</p>
														</div>
													</div>
													
													<label class="control-label" for="#">
														<h6>Debit/Credit Card Scan:</h6>
													</label>
													
													<div class="control-group">
														<div class="controls">
															<p><button class="btn btn-mini" type="button">Browse...</button></p>
															<p>
																FxPro reserves the right to request a copy of your credit/debit card and credit/debit card statements for security purposes. If a copy of your card has been requested by our accounting department, please black out the 2nd to 12th numbers on the front (and back if necessary) of your credit/debit card image. Also black out the three digit CVV number on the back of your credit/debit card image. Once uploaded, please allow 24 hours for your card scans to be verified. For more information, please click 
															</p>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								
								<!-- Subsription Pane-->
								<div class="tab-pane" id="tab4">
									<!--TITLE-->
									<div class="row-fluid">
										<div class="span3" align="right">
											<br>
											<h3>Subscriptions Mailing</h3>
											<br>
										</div>
									</div>
									
									<!--LIST OF CHECKBOX-->
									<div class="row-fluid">
										<div class="span5" align="right">
											<label class="chckbox">
												* FxPro Daily Forex Brief and Market Insights
											</label>
										</div>
										
										<!--div class="span7">
											<input type="checkbox" id="inlineCheckbox3" value="option3">
										</div-->
										
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
										
										<!--div class="span7">
											<input type="checkbox" id="inlineCheckbox4" value="option4">
										</div-->
										
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
										
										<!--div class="span7">
											<input type="checkbox" id="inlineCheckbox5" value="option5">
										</div-->
										
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
												* FxPro Company News and Account Updates
											</label>
										</div>
										
										<!--div class="span7">
											<input type="checkbox" id="inlineCheckbox6" value="option6">
										</div-->
										
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
								</div>
								
								<!-- DEMO METATRADER Pane-->
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
											<h6>FxPro MT4 Demo Server:</h6>
										</div>
										
										<div class="span9">
											<p>FxPro.com-Demo2</p>
										</div>
									</div>
								</div>

							</div> <!--Close Tab Content-->
						</div><!--Footer Span10-->
					</div><!--Close ROW-FLUID-->						
				</div>

			</div><!--contentinner close-->
			
		</div><!--mainconten closet-->