

	<div class="maincontent"><!--maincontent open--> 
		<div class="contentinner"><!--contentinner open-->	
		
		<h4 class="widgettitle nomargin shadowed">Traders Application Form</h4>
		<div class="widgetcontent bordered shadowed nopadding">
			<form class="stdform stdform2" method="post" action="forms.html">
			
				<?php echo $this->Form->create('User', array('type' => 'file', 'id'=>'editProfileForm' , 'class' => 'editprofileform')); ?>
				<?php echo $this->Form->input('User.id',array('type' => 'hidden', 'label' => false,'div' => false))?>
				<?php echo $this->Form->input('UserDetail.id',array('type' => 'hidden', 'label' => false,'div' => false))?>

					<p>
						<label>Full Name</label>
						<span class="field"><input class="input-xxlarge" id="disabledInput" type="text"  disabled></span>
					</p>
					
					<p>
						<label>Date Of Birth</label>
						<span class="field"><input class="input-xxlarge" id="disabledInput" type="text"  disabled></span>
					</p>
					
					<p>
						<label>Gender</label>
						<span class="field"><input class="input-xxlarge" id="disabledInput" type="text"  disabled></span>
					</p>
					
					<p>
						<label>Passport/I.C No</label>
						<span class="field"><input class="input-xxlarge" id="disabledInput" type="text"  disabled></span>
					</p>
					
					<p>
						<label>Email Address</label>
						<span class="field"><input class="input-xxlarge" id="disabledInput" type="text"  disabled></span>
					</p>
					
					<p>
						<label>Mobile Number</label>
						<span class="field"><input class="input-xxlarge" id="disabledInput" type="text"  disabled></span>
					</p>
				</form>
			</div>
			
			
			<div class="row-fluid">
				<div class="widgetcontent bordered shadowed nopadding span6">
					<h4 class="widgettitle nomargin shadowed">Bank Details</h4>
					<form class="stdform stdform2" method="post" action="forms.html">
						<p>
							<label>Name of Bank</label>
							<span class="field"><input class="span9" id="disabledInput" type="text"  disabled></span>
						</p>
						
						<p>
							<label>Bank Account Number</label>
							<span class="field"><input class="span9" id="disabledInput" type="text"  disabled></span>
						</p>
						
						<p>
							<label>Bank Account Name</label>
							<span class="field"><input class="span9" id="disabledInput" type="text"  disabled></span>
						</p>
						
						<p>
							<label>IBAN Number</label>
							<span class="field"><input class="span9" id="disabledInput" type="text"  disabled></span>
						</p>
						
						<p>
							<label>SWIFT Number</label>
							<span class="field"><input class="span9" id="disabledInput" type="text"  disabled></span>
						</p>
					</form>
				</div>
				
				<div class="widgetcontent bordered shadowed nopadding span6">
					<h4 class="widgettitle nomargin shadowed">E-Currency Details</h4>
					<form class="stdform stdform2" method="post" action="forms.html">
						<p>
							<label>E-Currency Provider Name</label>
							<span class="field"><input class="span9" id="disabledInput" type="text"  disabled></span>
						</p>
						
						<p>
							<label>E-Currency Account Number</label>
							<span class="field"><input class="span9" id="disabledInput" type="text"  disabled></span>
						</p>
						
						<p>
							<label>E-Currency Account Name</label>
							<span class="field"><input class="span9" id="disabledInput" type="text"  disabled></span>
						</p>
					</form>
				</div>
			</div>
					
			<div class="widgetcontent bordered shadowed nopadding">
				<h4 class="widgettitle nomargin shadowed">Document Attachment</h4>
				<form class="stdform stdform2" method="post" action="forms.html">	
					
					<div class="row-fluid">
						<div class="span12">
							
							<div class="row-fluid">
								<div class="span6 well">
									<h4>PROOF OF IDENTITY :</h4>
									<img  src= "<?php echo $this->Image->resize('#'.IMG_DIR, $user['#']['photo'], 200, null, true) ?>">
								</div>

								<div class="span6 well">
									<h4>PROOF OF RESIDENCE :</h4>
									<img  src= "<?php echo $this->Image->resize('#'.IMG_DIR, $user['#']['photo'], 200, null, true) ?>">
								</div>
							</div>
							
						</div>
					</div>

					<div>
						<label>Application Status</label>
						<span class="field"><select name="selection" id="selection2" class="uniformselect">
							<option value="">Choose One</option>
							<option value="1">Approved Application</option>
							<option value="2">Pending Application</option>
							<option value="3">Reject Application</option>
						</select></span>
					</div>

					<p class="stdformbutton">
						<button class="btn btn-primary">Submit Button</button>
						<button type="reset" class="btn">Reset Button</button>
					</p>
				</form>
			</div><!--widgetcontent-->
			

			
		</div>
	</div>