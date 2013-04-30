
	<?php 
		echo $this->Html->script('jquery.dataTables.min.js');
		echo $this->Html->script('jquery-migrate-1.1.1.min.js');
	?>


	<div class="maincontent">
		<div class="contentinner">
				
			<div class="widgettitle nomargin shadowed searchwidget">
				<div class="row">
					<div class="span6">
						<legend>Trade History</legend>
					</div>
					
					<div class="par pull-right">
						<div class="input-append">
							<?php echo $this->Form->create('Mt4Trade', array('controller' => 'Mt4Trades', 'action' => 'search')); ?>
							<input class="search-query" type="text" name="data[Mt4Trade][TICKET]" id="Mt4TradeTICKET" placeholder="Deal #..." />
							<button type="submit" class="btn"><span class="icon-search"></span></button>
							<?php echo $this->Form->end(); ?>
						</div>
					</div>

				</div>
			</div>
			
			<div style="overflow:auto">
				<table class="table table-striped">
					<tr>
						<th class="center"><?php echo $this->Paginator->sort('TICKET', 'Deal #', array('direction' => 'desc')); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('TRADERS ID', 'Acc #'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('SYMBOL', 'Pairs'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('CMD'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('VOLUME'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('OPEN_TIME'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('OPEN_PRICE'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('SL'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('TP'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('CLOSE_TIME'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('COMMISSION'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('COMMISSION_AGENT'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('SWAPS'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('CLOSE_PRICE'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('PROFIT'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('COMMENT', 'Notes'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('MODIFY_TIME'); ?></th>
					</tr> 
					
					<?php foreach ($mt4Trades as $mt4Trade): ?>
					<?php 	
						$value = $mt4Trade['Mt4Trade']['VOLUME']; 
						$profit = $mt4Trade['Mt4Trade']['PROFIT'];

						$CMD = $mt4Trade['Mt4Trade']['CMD'];
						switch($CMD){
							
							case "0":
								$command = "Buy";
								break;
							case "1":
								$command = "Sell";
								break;
							case "6":
								$command = "Balance";
								break;
							case "7":
								$command = "Credit";
								break;
							case "7":
								$command = "Credit";
								break;
							default:
								$command = "";
							break;
						}
					?>
					 
					<tr>
						<td class="center"><?php echo h($mt4Trade['Mt4Trade']['TICKET']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4Trade['Mt4Trade']['LOGIN']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4Trade['Mt4Trade']['SYMBOL']); ?>&nbsp;</td>
						<td class="center"><?php echo h($command); ?>&nbsp;</td>
						<td class="center"><?php echo number_format($value/100, 2); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4Trade['Mt4Trade']['OPEN_TIME']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4Trade['Mt4Trade']['OPEN_PRICE']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4Trade['Mt4Trade']['SL']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4Trade['Mt4Trade']['TP']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4Trade['Mt4Trade']['CLOSE_TIME']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4Trade['Mt4Trade']['COMMISSION']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4Trade['Mt4Trade']['COMMISSION_AGENT']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4Trade['Mt4Trade']['SWAPS']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4Trade['Mt4Trade']['CLOSE_PRICE']); ?>&nbsp;</td>
						<td class="center"><?php echo '$', ' ', number_format($profit, 2); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4Trade['Mt4Trade']['COMMENT']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4Trade['Mt4Trade']['MODIFY_TIME']); ?>&nbsp;</td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
				
			<p align="center" class="alert alert-error">
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>	
			</p>
				
			<div class="pagination pagination-small" align="center">
				<ul>
					<li><?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')); ?></li>
					<li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
					<li><?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); ?></li>
				</ul>
			</div>
			<br>
			
		</div>
	</div>
