
<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
				<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">Account Details</h3>
					</div>
				</div>

				<p>
				<div class="row-fluid">
					<div class="span12">
					
						<?php echo $this->Form->create('#', array('type' => '', 'id'=>'' , 'class' => 'form')); ?>
						<?php echo $this->Form->input('User.id',array('type' => 'hidden', 'label' => false,'div' => false))?>
						<?php echo $this->Form->input('UserDetail.id',array('type' => 'hidden', 'label' => false,'div' => false))?>
					
						<label>Initial Deposit From $10 :</label>
							<div class="span12">
								<label class="radio">	
									<?php
										$options=array(
										'MINI Flex. 5 Decimals'=>'MINI (Flexible Spread , 5 Decimals)',
										'MINI Fix, 4 Decimals'=>'MINI (Fixed Spread , 4 Decimals)'
										);
										$attributes=array('legend'=>false);
										echo $this->Form->radio('deposit',$options,$attributes);
									?>
								</label>
							</div>
					</div>
				</div>
				</p>

				<p>
				<div class="row-fluid">
					<div class="span12">
						<label>Initial Deposit From $100 :</label>
						<div class="span12">
							<label class="radio">	
								<?php
									$options=array(
									'STANDART Flex, 5 Decimals'=>'STANDART (Flexible Spread , 5 Decimals)'
									);
									$attributes=array('legend'=>false);
									echo $this->Form->radio('UserDetail.gender',$options,$attributes);
								?>
							</label>
						</div>
					</div>
				</div>
				</p>
						
				<p>
				<div class="row-fluid">
					<div class="span12">
						<label>Initial Deposit From $1,000 :</label>
						<div class="span12">
							<label class="radio">	
								<?php
									$options=array(
									'Premium Flex, 5 Decimals'=>'PREMIUM (Flexible Spread , 5 Decimals)'
									);
									$attributes=array('legend'=>false);
									echo $this->Form->radio('UserDetail.gender',$options,$attributes);
								?>
							</label>
						</div>
					</div>
				</div>
				</p>
						
				<div class="row-fluid">
					<div class="span12 ">
						<div><strong>IK Trust-i (Islamic & Swap Free Account)</strong></div>

						<?php echo $this->Form->input('islamic', array('label' => false, 'div' => false, 'type' => 'checkbox')); ?>
						I hereby request to be exempt from swaps on my account(s). I confirm that my only reason for
						<div>requesting an Islamic swap free accounts is religiously motivated and not for speculation purposes.</div>
					</div>
				</div>
						
				<div class="row-fluid">
					<div class="span12 ">
						<p>
						<div><strong>Credit Bonus</strong></div>

						<?php echo $this->Form->input('bonus', array('label' => false, 'div' => false, 'type' => 'checkbox')); ?>
						I hereby request to received promotional bonus for my trading account . I agree to accept the terms<div>and conditions of trading account credit bonus stated in the official IK Trust website.</div>
						</p>
					</div>
				</div>

				<p>
					<?php echo $this->Form->Submit(__('Next'), array('class'=>'btn btn-danger span2'));?>
					<?php echo $this->Form->end(); ?>
				</p>
			</div><!--contentinner close-->
		</div><!--mainconten closet-->