
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

	<div class="maincontent">
		<div class="contentinner">

			<div class="row-fluid">
				<div class="span12">
					<h4 class="widgettitle nomargin shadowed">Mt4 Trades</h3>
				</div>
				
				<!--div class="widgettitle nomargin shadowed searchwidget span6" align="right">
					<form action="results.html" method="post">
						<input type="text" class="span2 search-query" placeholder="Search here...">
						<button type="submit" class="btn"><span class="icon-search"></span></button>
					</form>
				</div-->
			</div>
				
			<table class="table table-striped">
				<tr>
					<th><?php echo $this->Paginator->sort('TICKET', null, array('direction' => 'desc')); ?></th>
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
					<th><?php echo $this->Paginator->sort('COMMISSION'); ?></th>
					<th><?php echo $this->Paginator->sort('COMMISSION_AGENT'); ?></th>
					<th><?php echo $this->Paginator->sort('SWAPS'); ?></th>
					<th><?php echo $this->Paginator->sort('CLOSE_PRICE'); ?></th>
					<th><?php echo $this->Paginator->sort('PROFIT'); ?></th>
					<th><?php echo $this->Paginator->sort('COMMENT'); ?></th>
					<th><?php echo $this->Paginator->sort('MODIFY_TIME'); ?></th>
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
					<td><?php echo h($mt4Trade['Mt4Trade']['COMMISSION']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['COMMISSION_AGENT']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['SWAPS']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['CLOSE_PRICE']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['PROFIT']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['COMMENT']); ?>&nbsp;</td>
					<td><?php echo h($mt4Trade['Mt4Trade']['MODIFY_TIME']); ?>&nbsp;</td>
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
			<br>
			
		</div>
	</div>
