

<div class="maincontent">
	<div class="contentinner">
	
		<div class="row-fluid">
			<div class="span6"> 
				<h4 class="widgettitle nomargin shadowed">Add Mt4 Price</h4>
			
				<div class="widgetcontent bordered shadowed nopadding">
					<?php echo $this->Form->create('Mt4Price', array('class' => "stdform stdform2")); ?>
						<p>
							<label>SYMBOL</label>
							<span class="field"><?php echo $this->Form->input('SYMBOL', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>TIME</label>
							<span class="field"><?php echo $this->Form->input('TIME', array('label' => false,'div' => false,'class'=>"span3" )); ?></span>
						</p>
						
						<p>
							<label>BID</label>
							<span class="field"><?php	echo $this->Form->input('BID', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>ASK</label>
							<span class="field"><?php echo $this->Form->input('ASK', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>LOW</label>
							<span class="field"><?php echo $this->Form->input('LOW', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>HIGH</label>
							<span class="field"><?php echo $this->Form->input('HIGH', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>DIRECTION</label>
							<span class="field"><?php echo $this->Form->input('DIRECTION', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>DIGITS</label>
							<span class="field"><?php  echo $this->Form->input('DIGITS', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>SPREAD</label>
							<span class="field"><?php  echo $this->Form->input('SPREAD', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
						
						<p>
							<label>MODIFY DATE</label>
							<span class="field"><?php echo $this->Form->input('MODIFY_TIME', array('label' => false, 'div' => false,'class'=>"span3" )); ?></span>
						</p>
						
						<p class="stdformbutton">
							<button class="btn btn-primary">Submit Button</button>
							<button type="reset" class="btn">Reset Button</button>
							<?php echo $this->Form->end(); ?>
						</p>
				</div>
			</div>
		</div>	
		
	</div>
</div>

<script>
	jQuery( "#time").datepicker(); 
	jQuery( "#modify_date").datepicker(); 
</script>