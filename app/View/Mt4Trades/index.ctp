
	<div class="maincontent">
		<div class="contentinner">
		
		<h2><?php echo __('Mt4 Trades'); ?></h2>
			<table class="table table-striped">
				<tr>
					<th><?php echo $this->Paginator->sort('TICKET'); ?></th>
					<th><?php echo $this->Paginator->sort('LOGIN'); ?></th>
					<th><?php echo $this->Paginator->sort('SYMBOL'); ?></th>
					<th><?php echo $this->Paginator->sort('DIGITS'); ?></th>
					<th><?php echo $this->Paginator->sort('CMD'); ?></th>
					<th><?php echo $this->Paginator->sort('VOLUME'); ?></th>
					<th><?php echo $this->Paginator->sort('OPEN_TIME'); ?></th>
					<th><?php echo $this->Paginator->sort('OPEN_PRICE'); ?></th>
					<th><?php echo $this->Paginator->sort('SL'); ?></th>
					<th><?php echo $this->Paginator->sort('TP'); ?></th>
					<th><?php echo $this->Paginator->sort('CLOSE_TIME'); ?></th>
					<th><?php echo $this->Paginator->sort('EXPIRATION'); ?></th>
					<th><?php echo $this->Paginator->sort('CONV_RATE1'); ?></th>
					<th><?php echo $this->Paginator->sort('CONV_RATE2'); ?></th>
					<th><?php echo $this->Paginator->sort('COMMISSION'); ?></th>
					<th><?php echo $this->Paginator->sort('COMMISSION_AGENT'); ?></th>
					<th><?php echo $this->Paginator->sort('SWAPS'); ?></th>
					<th><?php echo $this->Paginator->sort('CLOSE_PRICE'); ?></th>
					<th><?php echo $this->Paginator->sort('PROFIT'); ?></th>
					<th><?php echo $this->Paginator->sort('TAXES'); ?></th>
					<th><?php echo $this->Paginator->sort('COMMENT'); ?></th>
					<th><?php echo $this->Paginator->sort('INTERNAL_ID'); ?></th>
					<th><?php echo $this->Paginator->sort('MARGIN_RATE'); ?></th>
					<th><?php echo $this->Paginator->sort('TIMESTAMP'); ?></th>
					<th><?php echo $this->Paginator->sort('MODIFY_TIME'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				
				<?php foreach ($mt4Trades as $mt4Trade): ?>
				
				<tr>
					<td><?php echo h($mt4Trade['Mt4Trade']['TICKET']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['LOGIN']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['SYMBOL']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['DIGITS']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['CMD']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['VOLUME']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['OPEN_TIME']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['OPEN_PRICE']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['SL']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['TP']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['CLOSE_TIME']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['EXPIRATION']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['CONV_RATE1']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['CONV_RATE2']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['COMMISSION']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['COMMISSION_AGENT']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['SWAPS']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['CLOSE_PRICE']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['PROFIT']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['TAXES']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['COMMENT']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['INTERNAL_ID']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['MARGIN_RATE']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['TIMESTAMP']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['MODIFY_TIME']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $mt4Trade['Mt4Trade']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mt4Trade['Mt4Trade']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mt4Trade['Mt4Trade']['id']), null, __('Are you sure you want to delete # %s?', $mt4Trade['Mt4Trade']['id'])); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			
			<p align="center">
			<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
			?>	
			</p>
			
			<div class="paging" align="center">
			<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
			</div>
			
			<div class="actions">
				<h3><?php echo __('Actions'); ?></h3>
				<ul>
					<li><?php echo $this->Html->link(__('New Mt4 Trade'), array('action' => 'add')); ?></li>
				</ul>
			</div>

		</div>
	</div>
