
	<div class="maincontent">
		<div class="contentinner">
				
			<div class="container">
				<h3 class="widgettitle nomargin shadowed">Register Pro Account</h3>
                <div class="widgetcontent bordered shadowed nopadding">
                    <?php echo $this->Form->create('User', array('id'=>'registerForm' ,'class' => "stdform stdform2")); ?>
					<?php  echo $this->Form->input("user_group_id" ,array('type' =>'hidden','label' => false ,'div' => false,'class'=>'input-xlarge' ,'value' => '21')); ?>   
					<?php echo $this->Form->input('ProDoc', array('type' => 'hidden', 'label' => false,'div' => false))?>
						
						<div class="row-fluid">
							<div class="span12 alert alert-error" align="center">
								<h3 style="color: #EE2F36;">ANTI MONEY LAUNDERING &amp; DATA PROTECTION ACT</h3>
								<br>
								
								<p style="color: #D84E4E; border-top:none; background:none;">
									<small><strong>
										In order to comply with worldwide financial regulations for the avoidance of money laundering and terrorist financing , we will require you to provide such additional information and documentary proof of identity as we deem necessary.
									</strong></small>
								</p>
								
								<p style="color: #D84E4E; border-top:none; background:none;">
									<small><strong>
										We will process your personal data in accordance with our obligations under the Data Protection Act 1998 and other applicable data protection legislation. In providing you with our services it may be necessary for us to disclose your personal details to registered by law third parties. Full details disclosures are contained in our Terms and Conditions.
									</strong></small>
								</p>
							</div>
						</div>
						
						<p>
							<label>First Name</label>
							<span class="field"><?php echo $this->Form->input("first_name" ,array('type' => 'text', 'label' => false,'div' => false,'class'=>"input-xxlarge" )); ?></span>
						</p>
						
						<p>
							<label>Last Name</label>
							<span class="field"><?php echo $this->Form->input("last_name" ,array('type' => 'text', 'label' => false,'div' => false,'class'=>"input-xxlarge" )); ?></span>
						</p>

						<p>
							<label>Email</label>
							<span class="field"><?php echo $this->Form->input("email" ,array('type' => 'email', 'label' => false,'div' => false,'class'=>"input-xxlarge" )); ?></span>
						</p>

						<p>
							<label>Password</label>
							<span class="field"><?php echo $this->Form->input("password" ,array('type' => 'password', 'label' => false,'div' => false,'class'=>"input-xxlarge" )); ?></span>
						</p>

						<p>
							<label>Confirm Password</label>
							<span class="field"><?php echo $this->Form->input("salt" ,array('type' => 'password', 'label' => false,'div' => false,'class'=>"input-xxlarge" )); ?></span>
						</p>
                            
						<hr>
						
						<div class="row-fluid">
							<div class="span1">
								<p></p>
							</div>
							
							<div class="span6">
								<?php #echo $this->Form->create('UserDoc', array('type' => 'file', 'id'=>'img_valid' , 'class' => 'stdform')); ?>
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
									<input type="file" class="text-input span2"  id="ProDocDoc1" name="data[ProDoc][doc1]"/>
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
									<input type="file" class="text-input span2"  id="ProDocDoc2" name="data[ProDoc][doc2]"/>
								</div>
							</div>
						</div>
						<br>
                            <p class="stdformbutton">
                                <button class="btn btn-primary">Submit Button</button>
                                <button type="reset" class="btn">Reset Button</button>
                            </p>
					<?php echo $this->Form->end(); ?>	
				</div>
			</div>
		
		
		
		</div>
	</div>