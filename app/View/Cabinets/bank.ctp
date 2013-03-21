
<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">Bank Details</h3>	
					</div>
				</div>

			<div class="row-fluid">
				<div class="span6">
					<?php echo $this->Form->create('User', array('type' => '#', 'id'=>'#' , 'class' => '#')); ?>
					<?php echo $this->Form->input('User.id',array('type' => 'hidden', 'label' => false,'div' => false)); ?>
					<?php echo $this->Form->input('UserDetail.id',array('type' => 'hidden', 'label' => false,'div' => false)); ?>
					
						<p>
							<div><strong>Name Of Bank</strong></div>
							<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
						</p>
					
						<p>
							<div><strong>Bank Account Number</strong></div>
							<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
						</p>
						
						<p>
							<div><strong>Bank Account Name</strong></div>
							<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
						</p>
						
						<p>
							<div><strong>* IBAN Number</strong></div>
							<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
						</p>

						<p>
							<div><strong>* Swift Number</strong></div>
							<?php echo $this->Form->input('#' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
						</p>
							
						<p>
							<div><strong>Authorized Bank Account For Withdrawal</strong></div>
							<?php echo $this->Form->input('#', array('label' => false, 'div' => false, 'type' => 'checkbox')); ?>
							I hereby agree to allow only bank account registered above for funds withdrawal purposes.
						</p> 
						
						<p>
							<?php echo $this->Form->Submit(__('Next'), array('class'=>'btn btn-primary span2')); ?>
						</p>
					<?php echo $this->Form->end(); ?>
				</div>
			</div>
		</div><!--contentinner close-->
	</div><!--mainconten closet-->