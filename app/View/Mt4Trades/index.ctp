
	<?php 
		echo $this->Html->script('jquery.dataTables.min.js');
		echo $this->Html->script('jquery-migrate-1.1.1.min.js');
	?>


	<div class="maincontent">
		<div class="contentinner">
				
			<div class="widgettitle nomargin shadowed searchwidget">
				<div class="row-fluid">
					<div class="span6">
						<legend>Mt4 Trades</legend>
					</div>
					
					<div class="span6" align="right">
						<?php echo $this->Form->create('Mt4Trade', array('controller' => 'Mt4Trades', 'action' => 'search')); ?>
						<?php echo $this->Form->input('TICKET', array('type' => 'text', 'class' => 'span2 search-query', 'label' => false, 'placeholder' => 'Search Here...')); ?>
						<button type="submit" class="btn"><span class="icon-search"></span></button>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
			
			<div style="overflow:auto">
				<table class="table table-striped">
					<tr>
						<th><?php echo $this->Paginator->sort('TICKET', null, array('direction' => 'desc')); ?></th>
						<th><?php echo $this->Paginator->sort('TRADERS ID'); ?></th>
						<th><?php echo $this->Paginator->sort('SYMBOL'); ?></th>
						<th><?php echo $this->Paginator->sort('DIGITS'); ?></th>
						<th><?php echo $this->Paginator->sort('CMD'); ?></th>
						<th><?php echo $this->Paginator->sort('VOLUME'); ?></th>
						<th><?php echo $this->Paginator->sort('OPEN_TIME'); ?></th>
						<th><?php echo $this->Paginator->sort('OPEN_PRICE'); ?></th>
						<th><?php echo $this->Paginator->sort('SL'); ?></th>
						<th><?php echo $this->Paginator->sort('TP'); ?></th>
						<th><?php echo $this->Paginator->sort('CLOSE_TIME'); ?></th>
						<th><?php echo $this->Paginator->sort('COMMISSION'); ?></th>
						<th><?php echo $this->Paginator->sort('COMMISSION_AGENT'); ?></th>
						<th><?php echo $this->Paginator->sort('SWAPS'); ?></th>
						<th><?php echo $this->Paginator->sort('CLOSE_PRICE'); ?></th>
						<th><?php echo $this->Paginator->sort('PROFIT'); ?></th>
						<th><?php echo $this->Paginator->sort('COMMENT'); ?></th>
						<th><?php echo $this->Paginator->sort('MODIFY_TIME'); ?></th>
					</tr> 
					
					<?php foreach ($mt4Trades as $mt4Trade): ?>
					<?php 	
						$value = $mt4Trade['Mt4Trade']['VOLUME']; 
						$profit = $mt4Trade['Mt4Trade']['PROFIT'];
					?>
					 
					<tr>
						<td><?php echo h($mt4Trade['Mt4Trade']['TICKET']); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['LOGIN']); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['SYMBOL']); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['DIGITS']); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['CMD']); ?>&nbsp;</td>
						<td><?php echo number_format($value/100, 2); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['OPEN_TIME']); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['OPEN_PRICE']); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['SL']); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['TP']); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['CLOSE_TIME']); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['COMMISSION']); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['COMMISSION_AGENT']); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['SWAPS']); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['CLOSE_PRICE']); ?>&nbsp;</td>
						<td><?php echo '$', ' ', number_format($profit, 2); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['COMMENT']); ?>&nbsp;</td>
						<td><?php echo h($mt4Trade['Mt4Trade']['MODIFY_TIME']); ?>&nbsp;</td>
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
				
			<div class="paging" align="center">
			<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
			</div>
			<br>
			
		</div>
	</div>
