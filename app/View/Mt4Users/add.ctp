

<div class="maincontent">
	<div class="contentinner">
	
		<div class="row-fluid">
			<h4 class="widgettitle nomargin shadowed">Add Mt4 User</h4>
			
			<div class="widgetcontent bordered shadowed nopadding">
				<?php echo $this->Form->create('Mt4User', array('class' => "stdform stdform2")); ?>
			
				<div class="row-fluid">
					<div class="span6"> 
						<p>
							<label>LOGIN</label>
							<span class="field"><?php echo $this->Form->input('LOGIN', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>GROUP</label>
							<span class="field"><?php echo $this->Form->input('GROUP', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>ENABLE</label>
							<span class="field"><?php	echo $this->Form->input('ENABLE', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>ENABLE CHANGE PASS</label>
							<span class="field"><?php echo $this->Form->input('ENABLE_CHANGE_PASS', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>ENABLE READONLY</label>
							<span class="field"><?php echo $this->Form->input('ENABLE_READONLY', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>PASSWORD PHONE</label>
							<span class="field"><?php echo $this->Form->input('PASSWORD_PHONE', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>NAME</label>
							<span class="field"><?php echo $this->Form->input('NAME', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>COUNTRY</label>
							<span class="field"><?php  echo $this->Form->input('COUNTRY', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>CITY</label>
							<span class="field"><?php  echo $this->Form->input('CITY', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>STATE</label>
							<span class="field"><?php echo $this->Form->input('STATE', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>ZIPCODE</label>
							<span class="field"><?php echo $this->Form->input('ZIPCODE', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>ADDRESS</label>
							<span class="field"><?php echo $this->Form->input('ADDRESS', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>PHONE</label>
							<span class="field"><?php echo $this->Form->input('PHONE', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>EMAIL</label>
							<span class="field"><?php echo $this->Form->input('EMAIL', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>COMMENT</label>
							<span class="field"><?php echo $this->Form->input('COMMENT', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>ID</label>
							<span class="field"><?php echo $this->Form->input('ID', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>STATUS</label>
							<span class="field"><?php echo $this->Form->input('STATUS', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>REG DATE</label>
							<span class="field"><input id="datepicker" type="text" name="date" class="input-xlarge"/></span>
						</p>
					</div>

					<div class="span6"> 					
						<p>
							<label>LAST DATE</label>
							<span class="field"><input id="date" type="text" name="date" class="input-xlarge"/></span>
						</p>
						
						<p>
							<label>LEVERAGE</label>
							<span class="field"><?php echo $this->Form->input('LEVERAGE', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>AGENT ACCOUNT</label>
							<span class="field"><?php echo $this->Form->input('AGENT_ACCOUNT', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>TIMESTAMP</label>
							<span class="field"><?php echo $this->Form->input('TIMESTAMP', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>BALANCE</label>
							<span class="field"><?php echo $this->Form->input('BALANCE', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>PREV MONTH BALANCE</label>
							<span class="field"><?php  echo $this->Form->input('PREVMONTHBALANCE', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>PREV BALANCE</label>
							<span class="field"><?php  echo $this->Form->input('PREVBALANCE', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>CREDIT</label>
							<span class="field"><?php echo $this->Form->input('CREDIT', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>INTERESTRATE</label>
							<span class="field"><?php echo $this->Form->input('INTERESTRATE', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>TAXES</label>
							<span class="field"><?php echo $this->Form->input('TAXES', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>SEND REPORTS</label>
							<span class="field"><?php echo $this->Form->input('SEND_REPORTS', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>USER COLOR</label>
							<span class="field"><?php echo $this->Form->input('USER_COLOR', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>EQUITY</label>
							<span class="field"><?php echo $this->Form->input('EQUITY', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>MARGIN</label>
							<span class="field"><?php echo $this->Form->input('MARGIN', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>MARGIN LEVEL</label>
							<span class="field"><?php echo $this->Form->input('MARGIN_LEVEL', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>MARGIN FREE</label>
							<span class="field"><?php echo $this->Form->input('MARGIN_FREE', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
						
						<p>
							<label>MODIFY TIME</label>
							<span class="field"><input id="picker" type="text" name="date" class="input-xlarge"/></span>
						</p>
						 
						<p>
							<label>API DATA</label>
							<span class="field"><?php echo $this->Form->input('API_DATA', array('label' => false,'div' => false,'class'=>"input-xlarge" )); ?></span>
						</p>
					</div><!--widgetcontent-->
				</div>
		
				<p class="stdformbutton">
					<button class="btn btn-primary">Submit Button</button>
					<button type="reset" class="btn">Reset Button</button>
					<?php echo $this->Form->end(); ?>
				</p>
			</div>
		</div>		
	</div>
</div>

<script>
	jQuery( "#datepicker").datepicker(); 
	jQuery( "#date").datepicker(); 
	jQuery( "#picker").datepicker(); 
	jQuery.now();
</script>