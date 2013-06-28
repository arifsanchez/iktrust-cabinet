<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN));  ?>

	<div class="contentinner"> 
		<div class="row-fluid">
			<div class="span7">  
				<h4 class="widgettitle nomargin shadowed">Register ProVault</h4>
				<div class="widgetcontent bordered shadowed nopadding">
					<?php echo $this->Form->create('User', array('id'=>'registerForm' ,'class' => "stdform stdform2")); ?>
					<?php  echo $this->Form->input("user_group_id" ,array('type' =>'hidden','label' => false ,'div' => false,'class'=>'input-xlarge' ,'value' => '21')); ?>   

						<p>
							<label>First Name</label>
							<span class="field"><?php echo $this->Form->input("first_name" ,array('type' => 'text', 'label' => false,'div' => false,'class'=>"span8" )); ?></span>
						</p>
						
						<p>
							<label>Last Name</label>
							<span class="field"><?php echo $this->Form->input("last_name" ,array('type' => 'text', 'label' => false,'div' => false,'class'=>"span8" )); ?></span>
						</p>

						<p>
							<label>Email</label>
							<span class="field"><?php echo $this->Form->input("email" ,array('type' => 'email', 'label' => false,'div' => false,'class'=>"span8" )); ?></span>
						</p>

						<p>
							<label>Password</label>
							<span class="field"><?php echo $this->Form->input("password" ,array('type' => 'password', 'label' => false,'div' => false,'class'=>"span8" )); ?></span>
						</p>

						<p>
							<label>Confirm Password</label>
							<span class="field"><?php echo $this->Form->input("cpassword" ,array('type' => 'password', 'label' => false,'div' => false,'class'=>"span8" )); ?></span>
						</p>
						
						  <p class="stdformbutton">
                               <?php echo $this->Form->button(__('Sign Up'), array('name' => 'signup' ,'id'=>'registerSubmitBtn' , 'class' => "btn btn-danger"));?>
                                <?php echo $this->Form->button(__('Reset'), array('type' => 'reset' ,'class' => "btn"));?>
                            </p>
					<?php echo $this->Form->end(); ?>	
				</div>				
			</div>
		
			<div class="span5">
				<div class="widgetcontent">
				  <h2><span style="color:red;">IK Trust</span>&nbsp;Cabinet Benefits</h2>
				  <div class="divider30"></div>	             
				   <ul class="list-unordered list-checked">
							<li>
							<strong>Trade FX with the Fastest Market Data.</strong>
							We are one of the pioneer in enforcing zero requotes policy with Islamic &amp; Syariah complaince trading account with prices streaming from the world's top banks.
							</li>
							 <div class="divider15"></div>	 
							<li>
							<strong>Trade desktop, Web or Mobile.</strong>
							Whatever your style we have a platform option to suit you.
							</li>
						
							 <div class="divider15"></div>	
							<li>
							<strong>Trade Live or unlimited Demo.</strong>
							We offer completely risk-free Demo accounts.
							</li>
							 <div class="divider15"></div>	
							<li>
							<strong>Trade with full support.</strong>
							We have a Customer Support team available 24/5. They're available via email, phone and Live Chat.
							</li>
							 <div class="divider15"></div>	
							<li>
							<strong>Fast and easy payments options.</strong>
							Credit/Debit Cards, Bank Wire and e-Payments.
							</li>
							
						</ul>              
					 </div>
			</div>
		</div>
	   <hr class="invisible">
	   <hr class="invisible">
	   <hr class="invisible">
	</div>	