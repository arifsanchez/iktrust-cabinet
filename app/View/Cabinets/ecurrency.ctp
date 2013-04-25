
<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">STEP 4 : E-Currency Details</h3>	
						
						<p>
						<div class="row-fluid"> 
							<div class="span12 well">
								<?php echo $this->Form->create('UserEcr', array('type' => '', 'id'=>'' , 'class' => 'stdform')); ?>
								<?php echo $this->Form->input('user_id', array('type' => 'hidden' ,'value' => $user));?>
									<p>
										<label>E-Currency Provider Name</label>
										<?php echo $this->Form->input('pro_name' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
									
									<p>
										<label>E-Currency Account Number</label>
										<?php echo $this->Form->input('acc_no' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
									
									<p>
										<label>E-Currency Account Name</label>
										<?php echo $this->Form->input('acc_name' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
									
									<br>									
									<p>
										<div><strong>Authorized E-Currency Account For Withdrawal</strong></div>
										<?php
											echo $this->Form->input('auth_e', array('label' => false, 'div' => false, 'type' => 'checkbox'));
									   ?>
										I hereby agree to allow only e-currency account registered above
										<div>for funds withdrawal purposes.</div>
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