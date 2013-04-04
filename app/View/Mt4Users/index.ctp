
<div class="maincontent">
	<div class="contentinner">

		<h2><?php echo __('Mt4 Users'); ?></h2>
			<table class="table table-striped">
				<tr>
					<th><?php echo $this->Paginator->sort('LOGIN'); ?></th>
					<th><?php echo $this->Paginator->sort('GROUP'); ?></th>
					<th><?php echo $this->Paginator->sort('ENABLE'); ?></th>
					<th><?php echo $this->Paginator->sort('ENABLE_CHANGE_PASS'); ?></th>
					<th><?php echo $this->Paginator->sort('ENABLE_READONLY'); ?></th>
					<th><?php echo $this->Paginator->sort('PASSWORD_PHONE'); ?></th>
					<th><?php echo $this->Paginator->sort('NAME'); ?></th>
					<th><?php echo $this->Paginator->sort('COUNTRY'); ?></th>
					<th><?php echo $this->Paginator->sort('CITY'); ?></th>
					<th><?php echo $this->Paginator->sort('STATE'); ?></th>
					<th><?php echo $this->Paginator->sort('ZIPCODE'); ?></th>
					<th><?php echo $this->Paginator->sort('ADDRESS'); ?></th>
					<th><?php echo $this->Paginator->sort('PHONE'); ?></th>
					<th><?php echo $this->Paginator->sort('EMAIL'); ?></th>
					<th><?php echo $this->Paginator->sort('COMMENT'); ?></th>
					<th><?php echo $this->Paginator->sort('ID'); ?></th>
					<th><?php echo $this->Paginator->sort('STATUS'); ?></th>
					<th><?php echo $this->Paginator->sort('REGDATE'); ?></th>
					<th><?php echo $this->Paginator->sort('LASTDATE'); ?></th>
					<th><?php echo $this->Paginator->sort('LEVERAGE'); ?></th>
					<th><?php echo $this->Paginator->sort('AGENT_ACCOUNT'); ?></th>
					<th><?php echo $this->Paginator->sort('TIMESTAMP'); ?></th>
					<th><?php echo $this->Paginator->sort('BALANCE'); ?></th>
					<th><?php echo $this->Paginator->sort('PREVMONTHBALANCE'); ?></th>
					<th><?php echo $this->Paginator->sort('PREVBALANCE'); ?></th>
					<th><?php echo $this->Paginator->sort('CREDIT'); ?></th>
					<th><?php echo $this->Paginator->sort('INTERESTRATE'); ?></th>
					<th><?php echo $this->Paginator->sort('TAXES'); ?></th>
					<th><?php echo $this->Paginator->sort('SEND_REPORTS'); ?></th>
					<th><?php echo $this->Paginator->sort('USER_COLOR'); ?></th>
					<th><?php echo $this->Paginator->sort('EQUITY'); ?></th>
					<th><?php echo $this->Paginator->sort('MARGIN'); ?></th>
					<th><?php echo $this->Paginator->sort('MARGIN_LEVEL'); ?></th>
					<th><?php echo $this->Paginator->sort('MARGIN_FREE'); ?></th>
					<th><?php echo $this->Paginator->sort('MODIFY_TIME'); ?></th>
					<th><?php echo $this->Paginator->sort('API_DATA'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			
				<?php foreach ($mt4Users as $mt4User): ?>
				<tr>
					<td><?php echo h($mt4User['Mt4User']['LOGIN']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['GROUP']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['ENABLE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['ENABLE_CHANGE_PASS']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['ENABLE_READONLY']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['PASSWORD_PHONE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['NAME']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['COUNTRY']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['CITY']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['STATE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['ZIPCODE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['ADDRESS']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['PHONE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['EMAIL']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['COMMENT']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['ID']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['STATUS']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['REGDATE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['LASTDATE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['LEVERAGE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['AGENT_ACCOUNT']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['TIMESTAMP']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['BALANCE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['PREVMONTHBALANCE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['PREVBALANCE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['CREDIT']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['INTERESTRATE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['TAXES']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['SEND_REPORTS']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['USER_COLOR']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['EQUITY']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['MARGIN']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['MARGIN_LEVEL']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['MARGIN_FREE']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['MODIFY_TIME']); ?>&nbsp;</td>
					<td><?php echo h($mt4User['Mt4User']['API_DATA']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $mt4User['Mt4User']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mt4User['Mt4User']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mt4User['Mt4User']['id']), null, __('Are you sure you want to delete # %s?', $mt4User['Mt4User']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	
		<p>
			<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
			?>	
		</p>
		
		<div class="paging">
			<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
		</div>
		
	</div>
</div>