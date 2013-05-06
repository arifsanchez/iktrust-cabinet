
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
							<option value="MINIFlex">MINI (Flex)</option>
							<option value="MINIFix">MINI (Fix)</option>
							<option value="STANDARDFlex">STANDARD</option>
							<option value="PREMIUMFlex">PREMIUM</option>
						</select></span>
					</div>
					
					<br>
					<div>
						<label>Laverage Amount </label>
						<span class="field"><select id="leverage" name="data[UserAcctypes][leverage]" id="UserDetailLeverage">
							<option value="">-----</option>
							<option value="1:10" class="MINIFlex">1:10</option>
							<option value="1:100" class="MINIFlex">1:100</option>
							<option value="1:200" class="MINIFlex">1:200</option>
							<option value="1:500" class="MINIFlex">1:500</option>
							<option value="1:1000" class="MINIFlex">1:1000</option>
							
							<option value="1:10" class="MINIFix">1:10</option>
							<option value="1:100" class="MINIFix">1:100</option>
							<option value="1:200" class="MINIFix">1:200</option>
							<option value="1:500" class="MINIFix">1:500</option>
							<option value="1:1000" class="MINIFix">1:1000</option>
							
							<option value="1:10" class="STANDARDFlex">1:10</option>
							<option value="1:100" class="STANDARDFlex">1:100</option>
							<option value="1:200" class="STANDARDFlex">1:200</option>
							<option value="1:500" class="STANDARDFlex">1:500</option>
							
							<option value="1:10" class="PREMIUMFlex">1:10</option>
							<option value="1:100" class="PREMIUMFlex">1:100</option>
							<option value="1:200" class="PREMIUMFlex">1:200</option>
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