	<div class="maincontent"><!--maincontent open--> 
		<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				
			<!--FIRST TTLE/HEADER-->
			<br>
			<div class="row-fluid">
				<div class="span12">
					<h3 class="widgettitle nomargin">Check Balance</h3>	

					<div class="row-fluid"> 
						<div class="span12 well">
						<?php echo $this->Form->create('Mt4User', array('class' => 'form')); ?>
							<fieldset>
								<label>Account No :</label>
								<?php echo $this->Form->input('username', array('label' =>'','div' => false,'placeholder' => 'Account Number'));?>
								
								<p>
									<label>Email :</label>	
									<?php echo $this->Form->input('email', array('label' =>'','div' => false,'placeholder' => 'Email'));?>
								</p>	
							</fieldset>
							<p>
							<?php echo $this->Form->Submit(__('Submit'), array('class'=>'btn btn-danger span2'));?>
							<?php echo $this->Form->end(); ?>
						</div>
					</div>

				</div>
			</div>
				
		</div><!--contentinner close-->
	</div><!--mainconten closet-->