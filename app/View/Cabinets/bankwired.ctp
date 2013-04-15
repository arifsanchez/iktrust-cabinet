

		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">Deposit Form</h3>	
						
						<p>
						<div class="row-fluid">
							<div class="span12 well">
								<?php echo $this->Form->create('Deposit', array('type' => '', 'id'=>'' , 'class' => 'stdform')); ?>
								<?php echo $this->Form->input('id', array('type' => 'hidden' ));?>
								
									<p>
										<label>Name Of Bank : </label>
										<?php echo $this->Form->input('name' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
									</p>
									
									<p>
										<label>Bank Account Number  : </label>
										<?php echo $this->Form->input('acc_no' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
									</p>
									
									<p>
										<label>Bank Account Name  : </label>
										<?php echo $this->Form->input('acc_name' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
									</p>
									
									<p>
										<label>*IBAN Number  : </label>
										<?php echo $this->Form->input('iban_no' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
									</p>
									
									<p>
										<label>*Swift Number  : </label>
										<?php echo $this->Form->input('swift_no' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
									</p>

									<br>
									<p>
										<div><strong>Authorized Bank Account For Withdrawal : </strong></div>
										<?php echo $this->Form->input('auth_val', array('label' => false, 'div' => false, 'type' => 'checkbox')); ?>
										I hereby agree to allow only bank account registered above for
										<div>funds withdrawal purposes.</div>
									</p> 
								<?php echo $this->Form->Submit(__('Next'), array('class'=>'btn btn-danger span2'));?>
							</div>
						</div>
						</p>
					</div>
				</div>
				<p>
					<?php echo $this->Form->end(); ?>
				</p>
		</div><!--contentinner close-->
	</div><!--mainconten closet-->