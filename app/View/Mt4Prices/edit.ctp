<div class="mt4Prices form">
<?php echo $this->Form->create('Mt4Price'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mt4 Price'); ?></legend>
	<?php
		echo $this->Form->input('SYMBOL');
		echo $this->Form->input('TIME');
		echo $this->Form->input('BID');
		echo $this->Form->input('ASK');
		echo $this->Form->input('LOW');
		echo $this->Form->input('HIGH');
		echo $this->Form->input('DIRECTION');
		echo $this->Form->input('DIGITS');
		echo $this->Form->input('SPREAD');
		echo $this->Form->input('MODIFY_TIME');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mt4Price.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Mt4Price.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mt4 Prices'), array('action' => 'index')); ?></li>
	</ul>
</div>
