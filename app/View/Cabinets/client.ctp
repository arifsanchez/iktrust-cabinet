
	<?php 
		echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); 
		echo $this->Html->script('jquery.validate.min.js'); 
	?>
		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">STEP 2 : Client Details</h3>		
						
						<div class="row-fluid">
							<div class="span6">
									<?php echo $this->Form->create('User', array('type' => '', 'id'=>'form1' , 'class' => 'stdform')); ?>
									<?php echo $this->Form->input('User.id',array('type' => 'hidden', 'label' => false,'div' => false, 'value' => $user));?>
									<?php echo $this->Form->input('UserDetail.id',array('type' => 'hidden', 'label' => false,'div' => false, 'value' =>$detail));?>
										<p>
											<label>Full Name</label>
											<span class="field"><?php echo $this->Form->input('User.first_name' ,array('label' => false,'div' => false,'class'=>'span6' ));?></span>
										</p>
										
										<p>
											<label>Date Of Birth <br><small>(Ex. 20/02/1970)</small></label>
											<span class="field"><?php echo $this->Form->input('UserDetail.bday' ,array('label' => false,'div' => false,'class'=>'span2' ));?></span>
										</p>
										
										<p>
											<label>Passport / Identity Card Number</label>
											<span class="field"><?php echo $this->Form->input('UserDetail.ic' ,array('label' => false,'div' => false,'class'=>'span6' )); ?></span>
										</p>
										
										<p>
											<!--Transfer data from php/cakephp to database-->
											<label>Gender</label>
											<span class="field">
												<input class="radio" type="radio" name="data[UserDetail][gender]" id="UserDetailGenderMale" value="male" />&nbsp; Male <br>
												<input class="radio" type="radio" name="data[UserDetail][gender]" id="UserDetailGenderFemale" value="female"/>&nbsp; Female
											</span>
										</p>
										
										<p>
											<label>Occupation / Career</label>
											<span class="field"><?php echo $this->Form->input('UserDetail.occupation' ,array('label' => false,'div' => false,'class'=>'span6' )); ?></span>
										</p>

										<p>
											<label>Address</label>
											<span class="field"><?php echo $this->Form->input('UserDetail.address' ,array('label' => false, 'div' => false, 'class'=>'span6' ));?></span>
										</p>
										
										<p>
											<label>Town / City</label>
											<span class="field"><?php echo $this->Form->input('UserDetail.city' ,array('label' => false, 'div' => false, 'class'=>'span6' ));?></span>
										</p>
										
										<p>
											<label>State / Country</label>
											<span class="field"><?php echo $this->Form->input('UserDetail.state' ,array('label' => false, 'div' => false, 'class'=>'span6' ));?></span>
										</p>
										
										<p>
											<label>Postalcode / Zip</label>
											<span class="field"><?php echo $this->Form->input('UserDetail.postal' ,array('label' => false, 'div' => false, 'class'=>'span6' ));?></span>
										</p>
										 
										<p>
											<label>Authorized Mobile Number</label>
											<span class="field"><?php echo $this->Form->input('UserDetail.cellphone' ,array('label' => false, 'div' => false, 'class'=>'span6' ));?></span>
										</p>
							</div>	
						</div>

					</div>
				</div>
				<br>
				<p>
					<?php echo $this->Form->Submit(__('Next'), array('class'=>'btn btn-danger span2'));?>
					<?php echo $this->Form->end(); ?>
				</p>
		</div><!--contentinner close-->
	</div><!--mainconten closet-->