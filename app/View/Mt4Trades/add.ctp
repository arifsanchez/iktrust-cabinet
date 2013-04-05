
<div class="maincontent">
	<div class="contentinner">
	
		<div class="row-fluid ">
			<h4 class="widgettitle nomargin shadowed">Add Mt4 Trades</h4>
			
			<div class="widgetcontent bordered shadowed nopadding">
				<?php echo $this->Form->create('Mt4Trade', array('class' => "stdform stdform2")); ?>

				<div class="row-fluid ">
					<div class="span6"> 
						<p>
							<label>TICKET</label>
							<span class="field"><?php echo $this->Form->input('TICKET', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>LOGIN</label>
							<span class="field"><?php	echo $this->Form->input('LOGIN', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>SYMBOL</label>
							<span class="field"><?php echo $this->Form->input('SYMBOL', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>DIGITS</label>
							<span class="field"><?php echo $this->Form->input('DIGITS', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>CMD</label>
							<span class="field"><?php echo $this->Form->input('CMD', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>VOLUME</label>
							<span class="field"><?php echo $this->Form->input('VOLUME', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>OPEN TIME</label>
							<span class="field"><?php echo $this->Form->input('OPEN_TIME', array('label' => false,'div' => false,'class'=>"span3" )); ?></span>
						</p>
						
						<p>
							<label>OPEN PRICE</label>
							<span class="field"><?php  echo $this->Form->input('OPEN_PRICE', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>SL</label>
							<span class="field"><?php  echo $this->Form->input('SL', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>TP</label>
							<span class="field"><?php  echo $this->Form->input('TP', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>CLOSE TIME</label>
							<span class="field"><?php echo $this->Form->input('CLOSE_TIME', array('label' => false,'div' => false,'class'=>"span3" )); ?></span>
						</p>
						
						<p>
							<label>EXPIRATION</label>
							<span class="field"><?php echo $this->Form->input('EXPIRATION', array('label' => false,'div' => false,'class'=>"span3" )); ?></span>
						</p>
					</div>	
					
					<div class="span6"> 
						<p>
							<label>CONV RATE 1</label>
							<span class="field"><?php  echo $this->Form->input('CONV_RATE1', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>CONV RATE 2</label>
							<span class="field"><?php  echo $this->Form->input('CONV_RATE2', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>COMMISSION</label>
							<span class="field"><?php  echo $this->Form->input('COMMISSION', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>COMMISSION AGENT</label>
							<span class="field"><?php  echo $this->Form->input('COMMISSION_AGENT', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>SWAPS</label>
							<span class="field"><?php  echo $this->Form->input('SWAPS', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>CLOSE PRICE</label>
							<span class="field"><?php  echo $this->Form->input('CLOSE_PRICE', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>PROFIT</label>
							<span class="field"><?php  echo $this->Form->input('PROFIT', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>TAXES</label>
							<span class="field"><?php  echo $this->Form->input('TAXES', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>COMMENT</label>
							<span class="field"><?php  echo $this->Form->input('COMMENT', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>INTERNAL ID</label>
							<span class="field"><?php  echo $this->Form->input('INTERNAL_ID', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>MARGIN RATE</label>
							<span class="field"><?php  echo $this->Form->input('MARGIN_RATE', array('label' => false,'div' => false,'class'=>"span9" )); ?></span>
						</p>
						
						<p>
							<label>TIMESTAMP</label>
							<span class="field"><?php  echo $this->Form->input('TIMESTAMP', array('label' => false,'div' => false,'class'=>"span9")); ?></span>
						</p>
						
						<p>
							<label>MODIFY TIME</label>
							<span class="field"><?php echo $this->Form->input('MODIFY_TIME', array('label' => false,'div' => false,'class'=>"span3" )); ?></span>
						</p>
					</div>
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