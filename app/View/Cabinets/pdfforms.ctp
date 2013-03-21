
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				<!--FIRST TTLE/HEADER-->
				<br>
  
				<!--HEADER INTRO-->
				<div class="row-fluid">
					<div class="span11">
						<h2>INDIVIDUAL TRADING ACCOUNT APPLICATION</h2>
						<p><strong>Welcome to IK Trust Brokerage Firm</strong></p>
							<p>IK Trust is registered New Zealand Companies Registrar with service address 300 Richmond Road Grey Lynn, Auckland 1021, New Zealand.</p>
								
							<div>
								You should read & understand this Account Opening Application Form and the Terms and Conditions carefully before signing them. If you have any questions or do not understand any point please contact us on (+64) 9352 2046 or by email at support@iktrust.com and a member of our friendly and experienced Customer Services team will be happy to assist you with this application.

								IK Trust is a Forex Broker that offers a wide range of trading technologies and services. Our STP
							</div>
							
							<div>
								(Straight Through Processing) business model allows our clients to take advantage of transparent real-time pricing. All our clients have access to a unique Forex Trading environment that offers sophisticated STP liquidity, execution and trading functionality.
							</div>
							
							<div>
								By completing this Account Opening Application Form, you are making an offer to enter into a binding contract with IK Trust.
							</div>
							
							<p>
								For more information , please visit our official website at 
									<a href=www.iktrust.co.nz>www.iktrust.com</a> /
									<a href=www.iktrust.co.nz>www.iktrust.co.nz</a>
							</p>
					</div>
				</div>

                <div class="row-fluid">	
					<div class="span11">
						<!-- START OF TABBED WIZARD -->
						<form class="stdform" method="post" action="wizards.html">
						<div id="wizard2" class="wizard tabbedwizard">
							
							<ul class="tabbedmenu">
								<li>
									<a href="#pdfform1">
										<span class="h2">STEP 1</span>
										<span class="label">Account Details</span>
									</a>
								</li>
								<li>
									<a href="#pdfform2" class="active">
										<span class="h2">STEP 2</span>
										<span class="label">Client Details</span>
									</a>
								</li>
								<li>
									<a href="#pdfform3">
										<span class="h2">STEP 3</span>
										<span class="label">Bank Details</span>
									</a>
								</li>
								
								<li>
									<a href="#pdfform4">
										<span class="h2">STEP 4</span>
										<span class="label">E-Currency Details</span>
									</a>
								</li>
								
								<li>
									<a href="#pdfform5">
										<span class="h2">STEP 5</span>
										<span class="label">Supporting Documents</span>
									</a>
								</li>
								
								<li>
									<a href="#pdfform6">
										<span class="h2">STEP 6</span>
										<span class="label">Acknowledgement</span>
									</a>
								</li>
								
								<li>
									<a href="#pdfform7">
										<span class="h2">STEP 7</span>
										<span class="label">Authorized Signature</span>
									</a>
								</li>
							</ul>
							
							
							<!--Tabbed Content-->
							<div id="pdfform1" class="formwiz">
								<h4>Step 1: Account Details</h4>
	
									<p>
										<div><strong>Initial Deposit From $10 :</strong></div>
										<div class="row-fluid">
											<div class="span10">
													<?php echo $this->Form->create('User', array('type' => 'file', 'id'=>'editProfileForm' , 'class' => 'editprofileform')); ?>
													<label class="radio">	
														<input type="radio" name="acc_type" value="MINI - 5 Decimals" checked>
														MINI (Flexible Spread , 5 Decimals)
													</label>
											</div>
										</div>
										
										<div class="row-fluid">
											<div class="span10">
													<label class="radio">	
														<input type="radio" name="acc_type" value="MINI - 4 Decimals" checked>
														MINI (Fixed Spread , 4 Decimals)
													</label>
											</div>	
										</div>
									</p>

									<p>
										<div class="row-fluid">
											<div class="span10">
												<p>
												<div><strong>Initial Deposit From $100 :</strong></div>
													<label class="radio">
														<input type="radio" name="acc_type" value="STANDART - 5 Decimals" checked>
														STANDART (Flexible Spread , 5 Decimals)
													</label>
												</p>
											</div>
										</div>
									</p>

									<p>
										<div class="row-fluid">
											<div class="span10">
												<p>
												<div><strong>Initial Deposit From $1,000 :</strong></div>
													<label class="radio">	
														<input type="radio" name="acc_type" value="PREMIUM - 5 Decimals" checked>
														PREMIUM (Flexible Spread , 5 Decimals)
													</label>
												</p>
											</div>
										</div>
									</p>
								
									<p>
										<div class="row-fluid">
											<div class="span10">
												<p>
													<div><strong>IK Trust-i (Islamic & Swap Free Account)</strong></div>
													<?php
														echo $this->Form->input('#', array('label' => false, 'div' => false, 'type' => 'checkbox'));
												   ?>
													I hereby request to be exempt from swaps on my account(s). I confirm that my only reason for
													<div>requesting an Islamic swap free accounts is religiously motivated and not for speculation purposes.</div>
												</p>
											</div>
										</div>
									</p>
							</div>
				<!--------------------------------------------------------------------------------------------------------------------------------------->
							<div id="pdfform2" class="formwiz active">
								<h4>Step 2: Client Details</h4>
								<?php echo $this->Form->create('User', array('type' => '#', 'id'=>'#' , 'class' => '#')); ?>
								<?php echo $this->Form->input('User.id',array('type' => 'hidden', 'label' => false,'div' => false))?>
								<?php echo $this->Form->input('UserDetail.id',array('type' => 'hidden', 'label' => false,'div' => false))?>
									<p>
										<div><strong>Full Name</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
									</p>
									
									<p>
										<div><strong>Date Of Birth (Ex. 20/02/1970)</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
									</p>
									
									<p>
										<div><strong>Passport / Identity Card Number</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
									</p>
									
									<p>
									<div class="row-fluid">
										<div><strong>Gender</strong></div>
										
										<div class="span1 align="left">
											<label class="radio">	
												<input type="radio" name="gender" id="genderM" value="male" checked>
												Male
											</label>
										</div>

										<div class="span1">
											<label class="radio">
												<input type="radio" name="gender" id="genderF" value="female">
												Female
											</label>
										</div>
									</div>
									</p>
									
									<div>
									<p>
										<div><strong>Occupation / Career</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
									</p>
									</div>
									
									<p>
										<div><strong>Mailing Address</strong></div>
										<?php echo $this->Form->input('#', array('label' => false, 'div' => false, 'type' => 'textarea', 'class'=>'input-xlarge')); ?>
									</p>
									
									<p>
										<div><strong>Authorized Contact Email</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
									</p>
									 
									<p>
										<div><strong>Authorized Mobile Number</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
									<?php echo $this->Form->end(); ?>
							</div>
				<!--------------------------------------------------------------------------------------------------------------------------------------->			
							<div id="pdfform3" class="formwiz">
								<h4>Step 3: Bank Details</h4> 
								<?php echo $this->Form->create('User', array('type' => '#', 'id'=>'#' , 'class' => '#')); ?>
									<p>
										<div><strong>Name Of Bank</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
								
									<p>
										<div><strong>Bank Account Number</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
									
									<p>
										<div><strong>Bank Account Name</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
									
									<p>
										<div><strong>* IBAN Number</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>

									<p>
										<div><strong>* Swift Number</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
										
									<p>
										<div><strong>Authorized Bank Account For Withdrawal</strong></div>
										<?php
											echo $this->Form->input('#', array('label' => false, 'div' => false, 'type' => 'checkbox'));
									   ?>
										I hereby agree to allow only bank account registered above for funds withdrawal purposes.
									</p> 
									<?php echo $this->Form->end(); ?>
							</div>
				<!--------------------------------------------------------------------------------------------------------------------------------------->				
							<div id="pdfform4" class="formwiz">
								<h4>Step 4: E-Currency Details</h4> 		
								<?php echo $this->Form->create('User', array('type' => '#', 'id'=>'#' , 'class' => '#')); ?>
									<p>
										<div><strong>E-Currency Provider Name</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
									
									<p>
										<div><strong>E-Currency Account Number</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
									
									<p>
										<div><strong>E-Currency Account Name</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
										
									<p>
										<div><strong>Authorized E-Currency Account For Withdrawal</strong></div>
										<?php
											echo $this->Form->input('#', array('label' => false, 'div' => false, 'type' => 'checkbox'));
									   ?>
										I hereby agree to allow only e-currency account
										registered above for funds withdrawal purposes.
									</p> 
								<?php echo $this->Form->end(); ?>
							</div>
				<!--------------------------------------------------------------------------------------------------------------------------------------->				
							<div id="pdfform5" class="formwiz">
								<h4>Step 5: Supporting Documents</h4> 
								<?php echo $this->Form->create('User', array('type' => '#', 'id'=>'#' , 'class' => '#')); ?>
									<p>
										<div>For each individual account registration, you must provide one item from list A and another item from list B below :</div>	
									</p>
									
									<p><strong>
										By signing this Individual Account Opening Application Form, you agree and understand the following acknowledgement :
									</strong></p>
										
											
										<div class="row-fluid">	
											<div class="span10">
											<?php echo $this->Form->create('User', array('type' => '#', 'id'=>'#' , 'class' => '#')); ?>
												<?php
													$options 	= array(
																		'M'=>'Male',
																		'F'=>'Female',
																		);
													
													$attributes	= array('legend'=>false);
													echo $this->Form->radio('gender',$options,$attributes);
												?>
											<?php echo $this->Form->end(); ?>
											</div>
										</div>
							</div>
				<!--------------------------------------------------------------------------------------------------------------------------------------->				
							<div id="pdfform6" class="formwiz">
								<h4>Step 6: Acknowledgement</h4>
									<div class="row-fluid">
										<div class="span9">
											<p>
												<i class="icon-chevron-right"></i>
												confirmed that you have read, understood and agree to be bound by the provisions of this Account Opening Application Form;
	 										</p>
											
											<p>
												<i class="icon-chevron-right"></i>
												confirmed that you have read, understood and agree to be bound by the IK TRUST Terms & Conditions which have been provided to you;
											</p>

											<p>
												<i class="icon-chevron-right"></i>
												confirmed that the information you have provided in this Account Opening Application Form is complete and accurate and you accept that your failure to provide accurate information may affect adversely IK Trust's ability to assess the suitability of your chosen mandate against your personal and financial circumstances;
											</p> 

											<p>					
												<i class="icon-chevron-right"></i>
												authorise IK TRUST to rely on the instructions set out in the Account Opening Application Form;
											</p>
											
											<p>
												<i class="icon-chevron-right"></i>
												consent to IK TRUST's order execution policy;
											</p>
											
											<p>				
												<i class="icon-chevron-right"></i>
												aconsent to receipt of statements and other communications from IK TRUST by email;
											</p>
											
											<p>
												<i class="icon-chevron-right"></i>
												understand that if my account has been introduced by an introducing broker (IB), the IB may receive a commission / rebate from IK TRUST
											</p>
											
											<p>				
												<i class="icon-chevron-right"></i>
												understand that by properly completing and signing the Account Opening Application Form, account opening are subject for IK TRUST management approval;
											</p>
											
											<p>				
												<i class="icon-chevron-right"></i>
												understand the financial risks associated with leveraged foreign exchange and bullion trading, including the risk that you can lose more money than you deposit;
											</p> 
										</div>
									</div>
									
									<strong>
										<div>Your use of the services will be treated as your informed acknowledgement that you have carefully read and are prepared to accept the provisions of this Account Opening Application Form and the Terms and Conditions regardless of whether or not you have returned a signed copy to us.</div>
									</strong>   
							</div>
				<!--------------------------------------------------------------------------------------------------------------------------------------->				
							<div id="pdfform7" class="formwiz">
								<h4>Step 7: Authorized Signature</h4> 
								<?php echo $this->Form->create('User', array('type' => '#', 'id'=>'#' , 'class' => '#')); ?>
									<p>
										<div><strong>Main Account Holder Name</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
									
									<p>
										<div><strong>Account Holder Passport / I.D Number</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
									
									<p>
										<div><strong>Date Of Signature</strong></div>
										<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>

									<p>
										<div><strong>SIGNATURE SPECIMEN</strong></div>
										<?php echo $this->Form->input('#', array('label' => false, 'div' => false, 'type' => 'textarea', 'class'=>'input-xlarge')); ?>
									</p>
									
									<p>
										<div>I, Hereby offer to open a trading account with IK TRUST on the terms set</div>
										<div>out in the various official released documents that constitute this</div>
										<div>Account Opening Application Form.</div>
									</p>

									<p>
										<div>I, understand that if IK TRUST accepts my application to use its services,</div>
										<div>it will confirm acceptance by issuing me with written confirmation either by</div>
										<div> post, email or other electronic means, using the details contained in the</div>
										<div> relevant Particulars section of the IK Trust Individual Account Opening</div>
										<div>Application Form.</div>
									</p> 
								<?php echo $this->Form->end(); ?>
							</div>
						</div><!--#wizard-->
						</form>
						<!-- END OF TABBED WIZARD -->
						
                    </div>
                </div>

			</div><!--contentinner close-->
		</div><!--mainconten closet-->
	
		
<script type="text/javascript">
	jQuery(document).ready(function(){
		// Smart Wizard 	
      	jQuery('#wizard2').smartWizard({onFinish: onFinishCallback});
		
		function onFinishCallback(){
			alert('Succesfully Save! You can now print as PDF file.');
		} 
		
		jQuery(".inline").colorbox({inline:true, width: '60%', height: '500px'});
		
		jQuery('select, input:checkbox').uniform();
	});
</script>