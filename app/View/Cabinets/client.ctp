
<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">Client Details</h3>	
						
						<p>
						<div class="row-fluid">
							<div class="span6">
									<?php echo $this->Form->create('User', array('type' => '', 'id'=>'' , 'class' => 'form')); ?>
									<?php echo $this->Form->input('User.id',array('type' => 'hidden', 'label' => false,'div' => false, 'value' => $user))?>
									<?php echo $this->Form->input('UserDetail.id',array('type' => 'hidden', 'label' => false,'div' => false, 'value' =>$detail))?>
										<p>
											<div><strong>Full Name</strong></div>
											<?php echo $this->Form->input('User.first_name' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
										</p>
										
										<p>
											<div><strong>Date Of Birth (Ex. 20/02/1970)</strong></div>
											<?php echo $this->Form->input('UserDetail.bday' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
										</p>
										
										<p>
											<div><strong>Passport / Identity Card Number</strong></div>
											<?php echo $this->Form->input('UserDetail.ic' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
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
											<?php echo $this->Form->input('UserDetail.occupation' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
										</p>
										</div>

										<p>
											<div><strong>Mailing Address</strong></div>
											<?php echo $this->Form->input('UserDetail.address', array('address' => false, 'div' => false, 'type' => 'textarea', 'class'=>'input-xlarge')); ?>
										</p>
										
										<p>
											<div><strong>Authorized Contact Email</strong></div>
											<?php echo $this->Form->input('User.email' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
										</p>
										 
										<p>
											<div><strong>Authorized Mobile Number</strong></div>
											<?php echo $this->Form->input('UserDetail.cellphone' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
										</p>
							</div>
						</div>
						</p>
						
					</div>
				</div>
				<p>
					<?php echo $this->Form->Submit(__('Next'), array('class'=>'btn btn-danger span2'));?>
					<?php echo $this->Form->end(); ?>
				</p>
		</div><!--contentinner close-->
	</div><!--mainconten closet-->