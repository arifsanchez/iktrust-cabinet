<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
				
				<?php echo $this->element('newsticker'); ?>
				<!--FIRST TTLE/HEADER-->
				<br>
				<h3 class="widgettitle nomargin">Account Details</h3>				
					<?php echo $this->Form->create('User', array('type' => 'file', 'id'=>'editProfileForm' , 'class' => 'editprofileform')); ?>
					<?php echo $this->Form->input('User.id',array('type' => 'hidden', 'label' => false,'div' => false))?>
					<?php echo $this->Form->input('UserDetail.id',array('type' => 'hidden', 'label' => false,'div' => false))?>
				<br>

						<div class="row-fluid">
							<div class="span12">
								<div><strong>Initial Deposit From $10 :</strong></div>
								<label class="radio">	
									<input type="radio" name="acc_type" value="MINI - 5 Decimals" checked>
									MINI (Flexible Spread , 5 Decimals)
								</label>

								<label class="radio">	
									<input type="radio" name="acc_type" value="MINI - 4 Decimals" checked>
									MINI (Fixed Spread , 4 Decimals)
								</label>
							</div>
						</div>
						
						<div class="row-fluid">
							<div class="span12">
								<p>
								<div><strong>Initial Deposit From $100 :</strong></div>
								<label class="radio">
									<input type="radio" name="acc_type" value="STANDART - 5 Decimals" checked>
									STANDART (Flexible Spread , 5 Decimals)
								</label>
								</p>
							</div>
						</div>
						
						<div class="row-fluid">
							<div class="span12">
								<p>
								<div><strong>Initial Deposit From $1,000 :</strong></div>
									<label class="radio">	
										<input type="radio" name="acc_type" value="PREMIUM - 5 Decimals" checked>
										PREMIUM (Flexible Spread , 5 Decimals)
									</label>
								</p>
							</div>
						</div>
						
						<div>
							<p>
							<div><strong>IK Trust-i (Islamic & Swap Free Account)</strong></div>
							<?php
								echo $this->Form->input('#', array('label' => false, 'div' => false, 'type' => 'checkbox'));
						   ?>
							I hereby request to be exempt from swaps on my account(s). I confirm that my only reason for
							<div>requesting an Islamic swap free accounts is religiously motivated and not for speculation purposes.</div>
							</p>
						</div>

					
					<?php echo $this->Form->end(); ?>
			</div><!--contentinner close-->
		</div><!--mainconten closet-->