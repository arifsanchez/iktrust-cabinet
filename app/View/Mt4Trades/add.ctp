<div class="mt4Trades form">
<?php echo $this->Form->create('Mt4Trade'); ?>
	<fieldset>
		<legend><?php echo __('Add Mt4 Trade'); ?></legend>
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
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mt4 Trades'), array('action' => 'index')); ?></li>
	</ul>
</div>
