
	<div class="maincontent">
		<div class="contentinner">
		
			<div class="widgettitle nomargin shadowed searchwidget">
				<div class="row-fluid">
					<div class="span4">
						<legend>Mt4 Users</legend>
					</div>
					
					<div class="media-body span8" align="right">
						<?php echo $this->Form->create('Mt4User', array('controller' => 'Mt4Users', 'action' => 'search')); ?>
						<?php echo $this->Form->input('LOGIN', array('type' => 'text', 'class' => 'span2 search-query', 'label' => false, 'placeholder' => 'Search Here...')); ?>
						<button type="submit" class="btn"><span class="icon-search"></span></button>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
			
			<div style="overflow:auto">
				<table class="table table-striped">
					<tr>
						<th class="center"><?php echo $this->Paginator->sort('TRADERS ID', null, array('direction' => 'desc')); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('GROUP'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('NAME'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('COUNTRY'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('CITY'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('PHONE'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('EMAIL'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('COMMENT'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('REGDATE'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('LASTDATE'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('LEVERAGE'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('AGENT_ACCOUNT'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('BALANCE'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('CREDIT'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('EQUITY'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('MARGIN'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('MARGIN_LEVEL'); ?></th>
						<th class="center"><?php echo $this->Paginator->sort('MARGIN_FREE'); ?></th>
					</tr>
				
					<?php foreach ($mt4Users as $mt4User): ?>
						
					<tr>
						<td class="center"><?php echo h($mt4User['Mt4User']['LOGIN']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['GROUP']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['NAME']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['COUNTRY']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['CITY']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['PHONE']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['EMAIL']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['COMMENT']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['REGDATE']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['LASTDATE']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['LEVERAGE']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['AGENT_ACCOUNT']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['BALANCE']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['CREDIT']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['EQUITY']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['MARGIN']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['MARGIN_LEVEL']); ?>&nbsp;</td>
						<td class="center"><?php echo h($mt4User['Mt4User']['MARGIN_FREE']); ?>&nbsp;</td>
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


