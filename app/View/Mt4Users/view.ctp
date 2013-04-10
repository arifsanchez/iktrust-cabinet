<div class="mt4Users view">
<h2><?php  echo __('Mt4 User'); ?></h2>
	<dl>
		<dt><?php echo __('LOGIN'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['LOGIN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GROUP'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['GROUP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ENABLE'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['ENABLE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ENABLE CHANGE PASS'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['ENABLE_CHANGE_PASS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ENABLE READONLY'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['ENABLE_READONLY']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PASSWORD PHONE'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['PASSWORD_PHONE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NAME'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['NAME']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('COUNTRY'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['COUNTRY']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CITY'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['CITY']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('STATE'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['STATE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ZIPCODE'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['ZIPCODE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ADDRESS'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['ADDRESS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PHONE'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['PHONE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EMAIL'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['EMAIL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('COMMENT'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['COMMENT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('STATUS'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['STATUS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('REGDATE'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['REGDATE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LASTDATE'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['LASTDATE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LEVERAGE'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['LEVERAGE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AGENT ACCOUNT'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['AGENT_ACCOUNT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TIMESTAMP'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['TIMESTAMP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BALANCE'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['BALANCE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PREVMONTHBALANCE'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['PREVMONTHBALANCE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PREVBALANCE'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['PREVBALANCE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CREDIT'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['CREDIT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('INTERESTRATE'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['INTERESTRATE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TAXES'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['TAXES']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SEND REPORTS'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['SEND_REPORTS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('USER COLOR'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['USER_COLOR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EQUITY'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['EQUITY']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MARGIN'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['MARGIN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MARGIN LEVEL'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['MARGIN_LEVEL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MARGIN FREE'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['MARGIN_FREE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MODIFY TIME'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['MODIFY_TIME']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('API DATA'); ?></dt>
		<dd>
			<?php echo h($mt4User['Mt4User']['API_DATA']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mt4 User'), array('action' => 'edit', $mt4User['Mt4User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mt4 User'), array('action' => 'delete', $mt4User['Mt4User']['id']), null, __('Are you sure you want to delete # %s?', $mt4User['Mt4User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mt4 Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mt4 User'), array('action' => 'add')); ?> </li>
		
	</ul>
</div>
