

		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
		
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
									<div class="row-fluid" align="horizontal">
										<div class="span12">
											<div class="media"><!-- Header Align -->
												<!-- Avatar Icon-->
												<div class="media-body">
							  <!-- START CONTENT --><div>
													<a class="pull-left" href="#">
													<?php 
														echo $this->Html->image('icon/avatar.gif', array('class'=>'' , 'alt'=>'photo'));
													?>
													</a>
													
													<p>
													<button type="button" class="btn btn-default span3">
														Browse...
													</button> 

													<button type="button" class="btn btn-default span3">
														Remove Avatar
													</button> 
													</p>
								<!-- END CONTENT --></div>
												</div>
											</div>
										</div>
									</div>
									
									
									<!-- Form Details -->
									<br>
									<div class="row-fluid">
										<div class="span12">
											<form class="form-horizontal">
											
	
												
												<div class="control-group">
													<label class="control-label" for="#" id="">*Name :</label>
													<div class="controls">
													<!--input type="text" id="#" placeholder="Full Name" name=""-->
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'text',
														'placeholder' => 'Name',
														'label' => "")); 
													?>
												</div>
												</div>
											
												<div class="control-group">
													<label class="control-label" for="#">*Surname :</label>
													<div class="controls">
													<!--input type="text" id="#" placeholder="Surname"-->
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'text',
														'placeholder' => 'Surname',
														'label' => "")); 
													?>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">*Address :</label>
													<div class="controls">
													<!--input type="text" id="#" placeholder="Address"-->
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'text',
														'placeholder' => 'Address',
														'label' => "")); 
													?>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">*City :</label>
													<div class="controls">
													<!--input type="text" id="#" placeholder="City"-->
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'text',
														'placeholder' => 'City',
														'label' => "")); 
													?>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">*State/Province :</label>
													<div class="controls">
													<!--input type="text" id="#" placeholder="State/Province"-->
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'text',
														'placeholder' => 'State/Province',
														'label' => "")); 
													?>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">*Postal/Zip Code :</label>
													<div class="controls">
													<!--input type="text" id="#" placeholder="Postal/Zip Code"-->
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'text',
														'placeholder' => 'Postal/Zip Code',
														'label' => "")); 
													?>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">*Telephone Number(+) :</label>
													<div class="controls">
													<!--input type="text" id="#" placeholder="Telephone Number(+)"-->
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'text',
														'placeholder' => 'Telephone Number(+)',
														'label' => "")); 
													?>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">*Email :</label>
													<div class="controls">
													<!--input type="text" id="#" placeholder="Email"-->
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'text',
														'placeholder' => 'Email',
														'label' => "")); 
													?>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">*Country :</label>
													<div class="controls">
													<?php
														echo $this->Form->input('P.edit', array(
															'label' => "",'options' => array(
															'title'=> '-- Select Country --',
															'opt1' => 'Russia', 
															'opt2' => 'Malaysia', 
															'opt3' => 'Indonesia', 
															'opt4' => 'United State', 
															'opt5' => 'Saudi Arabia')
														));
													?>
													<!--select>
														<option>-- Country --</option>
														<option>Russia</option>
														<option>Malaysia</option>
														<option>Indonesia</option>
														<option>United State</option>
														<option>Saudi Arabia</option>
													</select-->
													</div>
												</div>
												
												<div class="control-group">
													<div class="controls">
														<button type="submit" class="btn">Submit</button>
													</div>
												</div>
												

											</form>
										</div>
									</div>
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