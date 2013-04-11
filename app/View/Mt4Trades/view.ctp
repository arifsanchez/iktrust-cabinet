
	<div  class="maincontainer">
		<div class="contentinner">
			
			<div class="mt4Trades view">
				<form class="stdform stdform2">
					<h2><?php  echo __('Mt4 Trade'); ?></h2>
						<dl>
							<dt><?php echo __('TICKET'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['TICKET']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('LOGIN'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['LOGIN']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('SYMBOL'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['SYMBOL']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('DIGITS'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['DIGITS']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('CMD'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['CMD']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('VOLUME'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['VOLUME']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('OPEN TIME'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['OPEN_TIME']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('OPEN PRICE'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['OPEN_PRICE']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('SL'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['SL']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('TP'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['TP']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('CLOSE TIME'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['CLOSE_TIME']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('EXPIRATION'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['EXPIRATION']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('CONV RATE1'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['CONV_RATE1']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('CONV RATE2'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['CONV_RATE2']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('COMMISSION'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['COMMISSION']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('COMMISSION AGENT'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['COMMISSION_AGENT']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('SWAPS'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['SWAPS']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('CLOSE PRICE'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['CLOSE_PRICE']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('PROFIT'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['PROFIT']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('TAXES'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['TAXES']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('COMMENT'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['COMMENT']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('INTERNAL ID'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['INTERNAL_ID']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('MARGIN RATE'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['MARGIN_RATE']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('TIMESTAMP'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['TIMESTAMP']); ?>
								&nbsp;
							</dd>
							<dt><?php echo __('MODIFY TIME'); ?></dt>
							<dd>
								<?php echo h($mt4Trade['Mt4Trade']['MODIFY_TIME']); ?>
								&nbsp;
							</dd>
						</dl>
				</form>
			</div>
		
		</div>
	</div>
	
		<!--div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Mt4 Trade'), array('action' => 'edit', $mt4Trade['Mt4Trade']['TICKET'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Mt4 Trade'), array('action' => 'delete', $mt4Trade['Mt4Trade']['TICKET']), null, __('Are you sure you want to delete # %s?', $mt4Trade['Mt4Trade']['TICKET'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Mt4 Trades'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Mt4 Trade'), array('action' => 'add')); ?> </li>
			</ul>
		</div-->
