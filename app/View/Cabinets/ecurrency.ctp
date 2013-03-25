
<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">Bank Details</h3>	
						
						<p>
						<div class="row-fluid">
							<div class="span6">
								<?php echo $this->Form->create('Ecr', array('type' => '#', 'id'=>'#' , 'class' => '#')); ?>
								<?php echo $this->Form->input('user_id', array('type' => 'hidden' ,'value' => $user));?>
									<p>
										<div><strong>E-Currency Provider Name</strong></div>
										<?php echo $this->Form->input('pro_name' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
									
									<p>
										<div><strong>E-Currency Account Number</strong></div>
										<?php echo $this->Form->input('acc_no' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
									
									<p>
										<div><strong>E-Currency Account Name</strong></div>
										<?php echo $this->Form->input('acc_name' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
									</p>
										
									<p>
										<div><strong>Authorized E-Currency Account For Withdrawal</strong></div>
										<?php
											echo $this->Form->input('auth_e', array('label' => false, 'div' => false, 'type' => 'checkbox'));
									   ?>
										I hereby agree to allow only e-currency account
										registered above for funds withdrawal purposes.
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