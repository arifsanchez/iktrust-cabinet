
<div class="maincontent">
	<div class="contentinner">
	
	<h3 class="widgettitle nomargin shadowed">Mt4 Prices</h3>
		<div style="overflow:auto">
			<table class="table table-striped">
				<tr>
					<th class="center"><?php echo $this->Paginator->sort('SYMBOL'); ?></th>
					<th class="center"><?php echo $this->Paginator->sort('TIME'); ?></th>
					<th class="center"><?php echo $this->Paginator->sort('BID'); ?></th>
					<th class="center"><?php echo $this->Paginator->sort('ASK'); ?></th>
					<th class="center"><?php echo $this->Paginator->sort('LOW'); ?></th>
					<th class="center"><?php echo $this->Paginator->sort('HIGH'); ?></th>
					<th class="center"><?php echo $this->Paginator->sort('DIRECTION'); ?></th>
					<th class="center"><?php echo $this->Paginator->sort('DIGITS'); ?></th>
					<th class="center"><?php echo $this->Paginator->sort('SPREAD'); ?></th>
					<th class="center"><?php echo $this->Paginator->sort('MODIFY_TIME'); ?></th>
				</tr>
				<?php foreach ($mt4Prices as $mt4Price): ?>
				<tr>
					<td class="center"><?php echo h($mt4Price['Mt4Price']['SYMBOL']); ?>&nbsp;</td>
					<td class="center"><?php echo h($mt4Price['Mt4Price']['TIME']); ?>&nbsp;</td>
					<td class="center"><?php echo number_format($mt4Price['Mt4Price']['BID'], 5, '.', ''); ?>&nbsp;</td>
					<td class="center"><?php echo number_format($mt4Price['Mt4Price']['ASK'], 5, '.', ''); ?>&nbsp;</td>
					<td class="center"><?php echo number_format($mt4Price['Mt4Price']['LOW'], 5, '.', ''); ?>&nbsp;</td>
					<td class="center"><?php echo number_format($mt4Price['Mt4Price']['HIGH'], 5, '.', '');?>&nbsp;</td>
					<td class="center"><?php echo h($mt4Price['Mt4Price']['DIRECTION']); ?>&nbsp;</td>
					<td class="center"><?php echo h($mt4Price['Mt4Price']['DIGITS']); ?>&nbsp;</td>
					<td class="center"><?php echo h($mt4Price['Mt4Price']['SPREAD']); ?>&nbsp;</td>
					<td class="center"><?php echo h($mt4Price['Mt4Price']['MODIFY_TIME']); ?>&nbsp;</td>
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
