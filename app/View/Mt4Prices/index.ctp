
<div class="maincontent">
	<div class="contentinner">
	
	<h3 class="widgettitle nomargin shadowed">Mt4 Prices</h3>
		<div style="overflow:auto">
			<table class="table table-striped">
				<tr>
						<th><?php echo $this->Paginator->sort('SYMBOL'); ?></th>
						<th><?php echo $this->Paginator->sort('TIME'); ?></th>
						<th><?php echo $this->Paginator->sort('BID'); ?></th>
						<th><?php echo $this->Paginator->sort('ASK'); ?></th>
						<th><?php echo $this->Paginator->sort('LOW'); ?></th>
						<th><?php echo $this->Paginator->sort('HIGH'); ?></th>
						<th><?php echo $this->Paginator->sort('DIRECTION'); ?></th>
						<th><?php echo $this->Paginator->sort('DIGITS'); ?></th>
						<th><?php echo $this->Paginator->sort('SPREAD'); ?></th>
						<th><?php echo $this->Paginator->sort('MODIFY_TIME'); ?></th>
						<!--th class="actions"><?php echo __('Actions'); ?></th-->
				</tr>
				<?php foreach ($mt4Prices as $mt4Price): ?>
				<tr>
					<td><?php echo h($mt4Price['Mt4Price']['SYMBOL']); ?>&nbsp;</td>
					<td><?php echo h($mt4Price['Mt4Price']['TIME']); ?>&nbsp;</td>
					<td><?php echo h($mt4Price['Mt4Price']['BID']); ?>&nbsp;</td>
					<td><?php echo h($mt4Price['Mt4Price']['ASK']); ?>&nbsp;</td>
					<td><?php echo h($mt4Price['Mt4Price']['LOW']); ?>&nbsp;</td>
					<td><?php echo h($mt4Price['Mt4Price']['HIGH']); ?>&nbsp;</td>
					<td><?php echo h($mt4Price['Mt4Price']['DIRECTION']); ?>&nbsp;</td>
					<td><?php echo h($mt4Price['Mt4Price']['DIGITS']); ?>&nbsp;</td>
					<td><?php echo h($mt4Price['Mt4Price']['SPREAD']); ?>&nbsp;</td>
					<td><?php echo h($mt4Price['Mt4Price']['MODIFY_TIME']); ?>&nbsp;</td>
					<td class="actions">
						<?php #echo $this->Html->link(__('View'), array('action' => 'view', $mt4Price['Mt4Price']['LOGIN'])); ?>
						<?php #echo $this->Html->link(__('Edit'), array('action' => 'edit', $mt4Price['Mt4Price']['LOGIN'])); ?>
						<?php #echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mt4Price['Mt4Price']['LOGIN']), null, __('Are you sure you want to delete # %s?', $mt4Price['Mt4Price']['LOGIN'])); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
		
		<p align="center">
		<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
		?>	
		</p>
		
		<div class="paging"align="center">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>	
	</div>
</div>
