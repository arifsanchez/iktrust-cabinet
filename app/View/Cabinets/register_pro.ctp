

	<div class="contentinner"> 
		<div class="row-fluid">
			<div class="span7">  
				<h4 class="widgettitle nomargin shadowed">Register ProVault</h4>
				<div class="widgetcontent bordered shadowed nopadding">
					<?php echo $this->Form->create('User', array('id'=>'registerForm' ,'class' => "stdform stdform2" ,'type' =>'file')); ?>
					<?php  echo $this->Form->input("user_group_id" ,array('type' =>'hidden','label' => false ,'div' => false,'class'=>'input-xlarge' ,'value' => '21')); ?>   

						<p>
							<label>First Name</label>
							<span class="field"><?php echo $this->Form->input("User.first_name" ,array('type' => 'text', 'label' => false,'div' => false,'class'=>"span8" )); ?></span>
						</p>
						
						<p>
							<label>Last Name</label>
							<span class="field"><?php echo $this->Form->input("User.last_name" ,array('type' => 'text', 'label' => false,'div' => false,'class'=>"span8" )); ?></span>
						</p>

						<p>
							<label>Email</label>
							<span class="field"><?php echo $this->Form->input("User.email" ,array('type' => 'email', 'label' => false,'div' => false,'class'=>"span8" )); ?></span>
						</p>

						<p>
							<label>Password</label>
							<span class="field"><?php echo $this->Form->input("User.password" ,array('type' => 'password', 'label' => false,'div' => false,'class'=>"span8" )); ?></span>
						</p>

						<p>
							<label>Confirm Password</label>
							<span class="field"><?php echo $this->Form->input("User.cpassword" ,array('type' => 'password', 'label' => false,'div' => false,'class'=>"span8" )); ?></span>
						</p>
						<p>
							<label>Upload Document</label>
							<br>
							<span class="field">
								<div class="row-fluid">
									<div class="span1">
									</div>

									<div class="span5">	
										<h5>PROOF OF IDENTITY</h5>
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
											<input type="file" class="text-input span2"  id="ProDocDoc1" name="data[ProDoc][doc1]" />
										</div>
									</div>
									
									<div class="span5">									
										<h5>PROOF OF RESIDENCE</h5>
										<br>
										<ul class="list-nostyle">
											<li>
												<ul>
												  <li><span class="icon-check"></span> &nbsp;Utility Bill</li>
												  <li><span class="icon-check"></span> &nbsp;Government Issued Letter</li>
												</ul>
											</li>
										</ul>
										<br>
										<strong>Select File : </strong> 
										<div>
											<i class=" iconsweets-paperclip"></i> &nbsp;  
											<input type="file" class="text-input span2"  id="ProDocDoc2" name="data[ProDoc][doc2]" />
										</div>
									</div>
								</div>
							</span>
							<br>
						
						
						
						<p class="stdformbutton">
							<button class="btn btn-primary">Submit Button</button>
							<button type="reset" class="btn">Reset Button</button>
						</p>
					<?php echo $this->Form->end(); ?>	
				</div>				
			</div>
		
			<div class="span5">
				<div class="widgetcontent">
					<h2><span style="color:red;">ANTI MONEY LAUNDERING&nbsp;</span>&amp; DATA PROTECTION ACT</h2>
					<div class="divider30"></div>	             
					<ul class="list-unordered list-checked">
							<li>
								In order to comply with worldwide financial regulations for the avoidance of money laundering and terrorist financing , we will require you to provide such additional information and documentary proof of identity as we deem necessary.
							</li>
							
							<div class="divider15"></div>	 
							<li>
								We will process your personal data in accordance with our obligations under the Data Protection Act 1998 and other applicable data protection legislation.
							</li>
							
							<div class="divider15"></div>	 
							<li>
								In providing you with our services it may be necessary for us to disclose your personal details to registered by law third parties.
							</li>
							
							<div class="divider15"></div>	 
							<li>
								Full details disclosures are contained in our <strong>Terms</strong> and <strong>Conditions</strong>.	
							</li>
						</ul>              
				</div>
			</div>
		</div>
	   <hr class="invisible">
	   <hr class="invisible">
	   <hr class="invisible">
	</div>	