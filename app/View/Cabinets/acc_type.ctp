
	<?php 
		echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); 
		echo $this->Html->script('jquery.chained');
	?>

	<script>
		jQuery(document).ready(function(){
			jQuery("#leverage").chained("#type"); 
		});
	</script>
			
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

			<br>
			<div class="row-fluid">
				<div class="span6 well well-small">
					<?php echo $this->Form->create('UserAcctypes', array('type' => '', 'id'=>'' , 'class' => 'stdform')); ?>
					<?php echo $this->Form->input('user_id', array('type' => 'hidden' ,'value' => $user));?>
				
					<h3>Trading Account</h3></legend>
					<br>
					<div>
						<label>Select Account Type </label>
						<span class="field"><select id="type" name="data[UserAcctypes][type]" id="UserDetailType">
							<option value="">-----</option>
							<option value="IK-Mini-Flex">MINI (Flexi)</option>
							<option value="IK-iMini-Flex">MINI (Flexi Islamic)</option>
							
							<option value="IK-Mini-Fix">MINI (Fix)</option>
							<option value="IK-iMini-Fix">MINI (Fix Islamic)</option>
							
							<option value="IK-Standard-Flex">STANDARD</option>
							<option value="IK-iStandard-Flex">STANDARD (Islamic)</option>
							
							<option value="IK-PREMIUM-Flex">PREMIUM</option>
							<option value="IK-iPREMIUM-Flex">PREMIUM (Islamic)</option>
						</select></span>
					</div>
					
					<br>
					<div>
						<label>Laverage Amount </label>
						<span class="field"><select id="leverage" name="data[UserAcctypes][leverage]" id="UserDetailLeverage">
							<option value="">-----</option>
							<option value="100" class="IK-Mini-Flex">1:100</option>
							<option value="200" class="IK-Mini-Flex">1:200</option>
							<option value="500" class="IK-Mini-Flex">1:500</option>
							<option value="1000" class="IK-Mini-Flex">1:1000</option>
							
							<option value="100" class="IK-iMini-Flex">1:100</option>
							<option value="200" class="IK-iMini-Flex">1:200</option>
							<option value="500" class="IK-iMini-Flex">1:500</option>
							<option value="1000" class="IK-iMini-Flex">1:1000</option>
							
							
							<option value="100" class="IK-Mini-Fix">1:100</option>
							<option value="200" class="IK-Mini-Fix">1:200</option>
							<option value="500" class="IK-Mini-Fix">1:500</option>
							<option value="1000" class="IK-Mini-Fix">1:1000</option>
							
							<option value="100" class="IK-iMini-Fix">1:100</option>
							<option value="200" class="IK-iMini-Fix">1:200</option>
							<option value="500" class="IK-iMini-Fix">1:500</option>
							<option value="1000" class="IK-iMini-Fix">1:1000</option>
							
							
							<option value="100" class="IK-Standard-Flex">1:100</option>
							<option value="200" class="IK-Standard-Flex">1:200</option>
							<option value="500" class="IK-Standard-Flex">1:500</option>
							
							<option value="100" class="IK-iStandard-Flex">1:100</option>
							<option value="200" class="IK-iStandard-Flex">1:200</option>
							<option value="500" class="IK-iStandard-Flex">1:500</option>
							
							
							<option value="100" class="IK-PREMIUM-Flex">1:100</option>
							<option value="200" class="IK-PREMIUM-Flex">1:200</option>
							
							<option value="100" class="IK-iPREMIUM-Flex">1:100</option>
							<option value="200" class="IK-iPREMIUM-Flex">1:200</option>
						</select></span>
					</div>
					
					<p>
						<label>IK Trust-i <br><strong>(Islamic &amp; Swap Free Account)</strong></label>
						<span class="field"><?php echo $this->Form->input('islamic', array('label' => false, 'div' => false, 'type' => 'checkbox')); ?> &nbsp; I hereby request to be exempt from swaps on my account(s). I confirm that my only reason for requesting an Islamic swap free accounts is religiously motivated and not for speculation purposes.</span>
					</p>
					
					<p>
						<label>Credit Bonus </label>
						<span class="field"><?php echo $this->Form->input('bonus', array('label' => false, 'div' => false, 'type' => 'checkbox')); ?> &nbsp; I hereby request to received promotional bonus for my trading account . I agree to accept the terms and conditions of trading account credit bonus stated in the official IK Trust website.</span>
					</p>
					
					<hr class="invisible">
					<p>
						<?php echo $this->Form->Submit(__('Next'), array('class'=>'btn btn-danger span2'));?>
						<?php echo $this->Form->end(); ?>
					</p>
				</div>
			</div>

		</div>
	</div>