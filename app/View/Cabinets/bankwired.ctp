

		
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
								<?php echo $this->Form->input('id', array('type' => 'hidden' ));?>
								
									<p>
										<label>Logun Id : </label>
										<?php echo $this->Form->input('login' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
									</p>
									
									<p>
										<label>Prefered IKTrust Bank  : </label>
										<?php echo $this->Form->input('ikbank' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
									</p>
									
									<p>
										<label>Currency  : </label>
										<?php echo $this->Form->input('eccurency' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
									</p>
									
									<p>
										<label>Deposit Amount  : </label>
										<?php echo $this->Form->input('amount' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
									</p>
									
									<p>
										<label>Your Bank Name : </label>
										<?php echo $this->Form->input('userbank' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
									</p>
									
									<p>
										<label>Full Name : </label>
										<?php echo $this->Form->input('name' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
									</p>
									
									<p>
										<label>Email : </label>
										<?php echo $this->Form->input('email' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
									</p>
									
									<p>
										<label>Important Notes : </label>
										<?php echo $this->Form->input('notes' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
									</p>
								
								<?php echo $this->Form->Submit(__('Submit'), array('class'=>'btn btn-danger span2'));?>
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