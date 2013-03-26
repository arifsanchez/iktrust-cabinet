
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
									<?php echo $this->Form->create('User', array('type' => '', 'id'=>'' , 'class' => 'stdform')); ?>
									<?php echo $this->Form->input('User.id',array('type' => 'hidden', 'label' => false,'div' => false, 'value' => $user))?>
									<?php echo $this->Form->input('UserDetail.id',array('type' => 'hidden', 'label' => false,'div' => false, 'value' =>$detail))?>
										<p>
											<label>Full Name</label>
											<?php echo $this->Form->input('User.first_name' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
										</p>
										
										<p>
											<label>Date Of Birth (Ex. 20/02/1970)</label>
											<?php echo $this->Form->input('UserDetail.bday' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
										</p>
										
										<p>
											<label>Passport / Identity Card Number</label>
											<?php echo $this->Form->input('UserDetail.ic' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
										</p>
										
										<div class="row-fluid">
											<label>Gender</label>
											<div class="span1>
												<label class="radio">	
													<?php
														$options=array('male'=>'Male','female'=>'Female');
														$attributes=array('legend'=>false);
														echo $this->Form->radio('UserDetail.gender',$options,$attributes);
													?>
												</label>
											</div>
										</div>
										
										<div>
										<p>
											<label>Occupation / Career</label>
											<?php echo $this->Form->input('UserDetail.occupation' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
										</p>
										</div>

										<p>
											<label>Mailing Address</label>
											<?php echo $this->Form->input('UserDetail.address', array('label' => false, 'div' => false, 'type' => 'textarea', 'class'=>'input-xlarge')); ?>
										</p>
										
										<p>
											<label>Authorized Contact Email</label>
											<?php echo $this->Form->input('User.email' ,array('label' => false,'div' => false,'class'=>'input-xlarge' ))?>
										</p>
										 
										<p>
											<label>Authorized Mobile Number</label>
											<?php echo $this->Form->input('UserDetail.cellphone' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
										</p>
							</div>
						</div>
						</p>
						
					</div>
				</div>
				<br>
				<p>
					<?php echo $this->Form->Submit(__('Next'), array('class'=>'btn btn-danger span2'));?>
					<?php echo $this->Form->end(); ?>
				</p>
		</div><!--contentinner close-->
	</div><!--mainconten closet-->