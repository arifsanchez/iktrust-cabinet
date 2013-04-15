
	<div class="maincontent">
		<div class="contentinner">
		
			<div class="widgettitle nomargin shadowed searchwidget">
				<div class="row-fluid">
					<div class="span6">
						<legend>Mt4 Users</legend>
					</div>
					
					<div class="span6" align="right">
						<?php echo $this->Form->create('Mt4User', array('controller' => 'Mt4Users', 'action' => 'search')); ?>
						<?php echo $this->Form->input('LOGIN', array('type' => 'text', 'class' => 'span2 search-query', 'label' => false, 'placeholder' => 'Search Here...')); ?>
						<button type="submit" class="btn"><span class="icon-search"></span></button>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
			
			<table class="table table-striped">
				<tr>
					<th><?php echo $this->Paginator->sort('TRADERS ID', null, array('direction' => 'desc')); ?></th>
					<th><?php echo $this->Paginator->sort('GROUP'); ?></th>
					<th><?php echo $this->Paginator->sort('NAME'); ?></th>
					<th><?php echo $this->Paginator->sort('COUNTRY'); ?></th>
					<th><?php echo $this->Paginator->sort('CITY'); ?></th>
					<th><?php echo $this->Paginator->sort('PHONE'); ?></th>
					<th><?php echo $this->Paginator->sort('EMAIL'); ?></th>
					<th><?php echo $this->Paginator->sort('COMMENT'); ?></th>
					<th><?php echo $this->Paginator->sort('REGDATE'); ?></th>
					<th><?php echo $this->Paginator->sort('LASTDATE'); ?></th>
					<th><?php echo $this->Paginator->sort('LEVERAGE'); ?></th>
					<th><?php echo $this->Paginator->sort('AGENT_ACCOUNT'); ?></th>
					<th><?php echo $this->Paginator->sort('BALANCE'); ?></th>
					<th><?php echo $this->Paginator->sort('CREDIT'); ?></th>
					<th><?php echo $this->Paginator->sort('EQUITY'); ?></th>
					<th><?php echo $this->Paginator->sort('MARGIN'); ?></th>
					<th><?php echo $this->Paginator->sort('MARGIN_LEVEL'); ?></th>
					<th><?php echo $this->Paginator->sort('MARGIN_FREE'); ?></th>
				</tr>
			
				<?php foreach ($mt4Users as $mt4User): ?>
					
				<tr>
					<td><?php echo h($mt4User['Mt4User']['LOGIN']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['GROUP']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['NAME']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['COUNTRY']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['CITY']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['PHONE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['EMAIL']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['COMMENT']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['REGDATE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['LASTDATE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['LEVERAGE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['AGENT_ACCOUNT']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['BALANCE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['CREDIT']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['EQUITY']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['MARGIN']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['MARGIN_LEVEL']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['MARGIN_FREE']); ?>&nbsp;</td>
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


