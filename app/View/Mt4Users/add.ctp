<div class="mt4Users form">
<?php echo $this->Form->create('Mt4User'); ?>
	<fieldset>
		<legend><?php echo __('Add Mt4 User'); ?></legend>
	<?php
		echo $this->Form->input('LOGIN');
		echo $this->Form->input('GROUP');
		echo $this->Form->input('ENABLE');
		echo $this->Form->input('ENABLE_CHANGE_PASS');
		echo $this->Form->input('ENABLE_READONLY');
		echo $this->Form->input('PASSWORD_PHONE');
		echo $this->Form->input('NAME');
		echo $this->Form->input('COUNTRY');
		echo $this->Form->input('CITY');
		echo $this->Form->input('STATE');
		echo $this->Form->input('ZIPCODE');
		echo $this->Form->input('ADDRESS');
		echo $this->Form->input('PHONE');
		echo $this->Form->input('EMAIL');
		echo $this->Form->input('COMMENT');
		echo $this->Form->input('ID');
		echo $this->Form->input('STATUS');
		echo $this->Form->input('REGDATE');
		echo $this->Form->input('LASTDATE');
		echo $this->Form->input('LEVERAGE');
		echo $this->Form->input('AGENT_ACCOUNT');
		echo $this->Form->input('TIMESTAMP');
		echo $this->Form->input('BALANCE');
		echo $this->Form->input('PREVMONTHBALANCE');
		echo $this->Form->input('PREVBALANCE');
		echo $this->Form->input('CREDIT');
		echo $this->Form->input('INTERESTRATE');
		echo $this->Form->input('TAXES');
		echo $this->Form->input('SEND_REPORTS');
		echo $this->Form->input('USER_COLOR');
		echo $this->Form->input('EQUITY');
		echo $this->Form->input('MARGIN');
		echo $this->Form->input('MARGIN_LEVEL');
		echo $this->Form->input('MARGIN_FREE');
		echo $this->Form->input('MODIFY_TIME');
		echo $this->Form->input('API_DATA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mt4 Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
