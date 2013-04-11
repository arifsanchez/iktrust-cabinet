
	<div  class="maincontainer">
		<div class="contentinner">
			
			<?php echo $this->Form->create('Mt4Trade', array('id'=>'editMt4Trade' , 'class' => 'stdform stdform2')); ?>
			
			<div class="row-fluid">
				<h3 class="widgettitle nomargin shadowed">Mt4 Trades</h3>
				
				<div class="row-fluid">
					<div class="span6">
						<label>TICKET</label>
						<span class="field"><?php echo $this->Form->input('TICKET', array('label' => false, 'div' => false, 'class'=>'span9', 'type' => '')); ?></span>
						
						<label>LOGIN</label>
						<span class="field"><?php echo $this->Form->input('LOGIN', array('label' => false, 'div' => false, 'class'=>'span9', 'type' => '')); ?></span>
						
						<label>SYMBOL</label>
						<span class="field"><?php echo $this->Form->input('SYMBOL', array('label' => false, 'div' => false, 'class'=>'span9', 'type' => '')); ?></span>
						
						<label>DIGITS</label>
						<span class="field"><?php echo $this->Form->input('DIGITS', array('label' => false, 'div' => false, 'class'=>'span9', 'type' => '')); ?></span>
						
						<label>CMD</label>
						<span class="field"><?php echo $this->Form->input('CMD', array('label' => false, 'div' => false, 'class'=>'span9', 'type' => '')); ?></span>
						
						<label>VOLUME</label>
						<span class="field"><?php echo $this->Form->input('VOLUME', array('label' => false, 'div' => false, 'class'=>'span9', 'type' => '')); ?></span>
						
						<label>OPEN_TIME</label>
						<span class="field"><?php echo $this->Form->input('OPEN_TIME', array('label' => false, 'div' => false, 'class'=>'span9', 'type' => '')); ?></span>
						
						<label>OPEN_PRICE</label>
						<span class="field"><?php echo $this->Form->input('OPEN_PRICE', array('label' => false, 'div' => false, 'class'=>'span9', 'type' => '')); ?></span>
						
						<label>SL</label>
						<span class="field"><?php echo $this->Form->input('SL', array('label' => false, 'div' => false, 'class'=>'span9', 'type' => '')); ?></span>
						
						<label>TP</label>
						<span class="field"><?php echo $this->Form->input('TP', array('label' => false, 'div' => false, 'class'=>'span9', 'type' => '')); ?></span>
						
						<label>CLOSE_TIME</label>
						<span class="field"><?php echo $this->Form->input('CLOSE_TIME', array('label' => false, 'div' => false, 'class'=>'span3', 'type' => '')); ?></span>
						
						<label>EXPIRATION</label>
						<span class="field"><?php echo $this->Form->input('EXPIRATION', array('label' => false, 'div' => false, 'class'=>'span3', 'type' => '')); ?></span>
						
						<label>CONV_RATE1</label>
						<span class="field"><?php echo $this->Form->input('CONV_RATE1', array('label' => false, 'div' => false, 'class'=>'span9', 'type' => '')); ?></span>
						
						<label>CONV_RATE2</label>
						<span class="field"><?php echo $this->Form->input('CONV_RATE2', array('label' => false, 'div' => false, 'class'=>'span9', 'type' => '')); ?></span>
					</div>
					
					<div class="span6">
						<h1>right span</h1>
					</div>
				</div>
			</div>
			
			<br>
			<br>
			<br>
			
						<?php
							echo $this->Form->input('TICKET');
							echo $this->Form->input('LOGIN');
							echo $this->Form->input('SYMBOL');
							echo $this->Form->input('DIGITS');
							echo $this->Form->input('CMD');
							echo $this->Form->input('VOLUME');
							echo $this->Form->input('OPEN_TIME');
							echo $this->Form->input('OPEN_PRICE');
							echo $this->Form->input('SL');
							echo $this->Form->input('TP');
							echo $this->Form->input('CLOSE_TIME');
							echo $this->Form->input('EXPIRATION');
							echo $this->Form->input('CONV_RATE1');
							echo $this->Form->input('CONV_RATE2');
							echo $this->Form->input('COMMISSION');
							echo $this->Form->input('COMMISSION_AGENT');
							echo $this->Form->input('SWAPS');
							echo $this->Form->input('CLOSE_PRICE');
							echo $this->Form->input('PROFIT');
							echo $this->Form->input('TAXES');
							echo $this->Form->input('COMMENT');
							echo $this->Form->input('INTERNAL_ID');
							echo $this->Form->input('MARGIN_RATE');
							echo $this->Form->input('TIMESTAMP');
							echo $this->Form->input('MODIFY_TIME');
						?>
			
			<div>
				<?php echo $this->Form->submit ('Submit', array('class' => 'btn btn-success btn-rounded')); ?>
				
				
				<?php echo $this->Form->end();?>
			</div>
			
		</div>
		
		</div>
	