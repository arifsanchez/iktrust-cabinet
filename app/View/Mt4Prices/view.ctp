<div class="mt4Prices view">
<h2><?php  echo __('Mt4 Price'); ?></h2>
	<dl>
		<dt><?php echo __('SYMBOL'); ?></dt>
		<dd>
			<?php echo h($mt4Price['Mt4Price']['SYMBOL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TIME'); ?></dt>
		<dd>
			<?php echo h($mt4Price['Mt4Price']['TIME']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BID'); ?></dt>
		<dd>
			<?php echo h($mt4Price['Mt4Price']['BID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ASK'); ?></dt>
		<dd>
			<?php echo h($mt4Price['Mt4Price']['ASK']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LOW'); ?></dt>
		<dd>
			<?php echo h($mt4Price['Mt4Price']['LOW']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HIGH'); ?></dt>
		<dd>
			<?php echo h($mt4Price['Mt4Price']['HIGH']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DIRECTION'); ?></dt>
		<dd>
			<?php echo h($mt4Price['Mt4Price']['DIRECTION']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DIGITS'); ?></dt>
		<dd>
			<?php echo h($mt4Price['Mt4Price']['DIGITS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SPREAD'); ?></dt>
		<dd>
			<?php echo h($mt4Price['Mt4Price']['SPREAD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MODIFY TIME'); ?></dt>
		<dd>
			<?php echo h($mt4Price['Mt4Price']['MODIFY_TIME']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mt4 Price'), array('action' => 'edit', $mt4Price['Mt4Price']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mt4 Price'), array('action' => 'delete', $mt4Price['Mt4Price']['id']), null, __('Are you sure you want to delete # %s?', $mt4Price['Mt4Price']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mt4 Prices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mt4 Price'), array('action' => 'add')); ?> </li>
	</ul>
</div>
