
<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
				<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">STEP 1 : Account Details</h3>
					</div>
				</div>

				<p>
				<div class="row-fluid">
					<div class="span6 well well-small">
					
						<?php echo $this->Form->create('UserAcctypes', array('type' => '', 'id'=>'' , 'class' => 'form')); ?>
						<?php echo $this->Form->input('user_id', array('type' => 'hidden' ,'value' => $user));?>
					
						<label><strong>Individual account type :</strong></label>
							<div class="span12">
								<label class="radio">	
									<?php
										$options=array(
										'MINI Flex. 5 Decimals'=>'MINI (Flexible Spread , 5 Decimals) <span style="font-weight:bold;"> for initial deposit from $10</span>',
										'MINI Fix, 4 Decimals'=>'MINI (Fixed Spread , 4 Decimals) <span style="font-weight:bold;"> for initial deposit from $10</span>',
										'STANDART Flex, 5 Decimals'=>'STANDART (Flexible Spread , 5 Decimals)<span style="font-weight:bold;"> for initial deposit from $1,000 </span>',
										'Premium Flex, 5 Decimals'=>'PREMIUM (Flexible Spread , 5 Decimals)  <span style="font-weight:bold;"> for initial deposit from $10,000 </span>',
										);
										$attributes=array('legend'=>false);
										echo $this->Form->radio('deposit',$options,$attributes);
									?>
								</label>
							</div>
					</div>
				</div>
				</p>

				<div class="row-fluid">
					<div class="span6 well well-small">
						<div><strong>IK Trust-i (Islamic &amp; Swap Free Account)</strong></div>

						<?php echo $this->Form->input('islamic', array('label' => false, 'div' => false, 'type' => 'checkbox')); ?>
						I hereby request to be exempt from swaps on my account(s). I confirm that my only reason for
						<div>requesting an Islamic swap free accounts is religiously motivated and not for speculation purposes.</div>
					</div>
				</div>
						
				<div class="row-fluid">
					<div class="span6 well well-small">
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