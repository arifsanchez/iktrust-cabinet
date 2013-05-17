
	<div class="maincontent">
		<div class="contentinner">
			<h3 class="widgettitle">Summary Deposit Transaction</h3>
            	<table class="table table-bordered table-hover" id="dyntable">
				<div align = 'right' >	
					<?php 
				
						echo $this->Html->link(__("All  Deposit",true),"transaction_deposit",array('class' => "btn btn-primary btn")); 
						echo $this->Html->link(__("Pending",true ),"transaction_deposit/s:1",array('class' => "btn btn-primary btn")); 
						echo $this->Html->link(__("Approved",true ),"transaction_deposit/s:2",array('class' => "btn btn-primary btn"));
						echo $this->Html->link(__("Rejected",true),"transaction_deposit/s:3",array('class' => "btn btn-primary btn")); 
					?>
				</div>
				<hr>
					<tbody>
                        <tr class = "warning" >
                            <th class="center">Deposit Id</th>
                            <th class="center">Login Id</th>
							<th class="center">Transaction Type</th>
							<th class="center">Amount</th>
							<th class="center">Balance</th>
							<th class="center">Free Margin</th>
                            <th class="center">PrevMonthBalance</th>
							  <th class="center">Status</th>
                            <th class="center">More Action</th>
                        </tr>
                   
					<?php	foreach ($deposit as $deposit): ?>
                   
                        <tr class="gradeX">
                            <td class="center">
								<?php echo str_pad( $deposit['Deposit']['id'], 8, '0', STR_PAD_LEFT); ?>
							</td>
							<td class="center">
								<?php echo $deposit['Mt4User']['LOGIN']; ?>
							</td>
							<td class="center">
								 Bank Transfer
							</td>
							 <td class="center">
								<?php echo $deposit['Deposit']['amount']; ?>
							</td>
                            <td class="center">
								<?php echo $deposit['Mt4User']['BALANCE']; ?>
							</td>
                            
							<td class="center">
								<?php echo $deposit['Mt4User']['MARGIN_FREE']; ?>
							</td>
							<td class="center">
								<?php echo $deposit['Mt4User']['PREVMONTHBALANCE']; ?>
							</td>
							<td class="center">
								<?php echo $deposit['LocalStatus']['name']; ?>
							</td>
							<? $id = base64_encode($deposit['Deposit']['id']); ?>
							<td class="center"><span class="icon-edit"></span>
								<?php echo $this->Html->link(__('view'), array('action' => 'edit_deposit', $id )); ?>
							</td>
                        </tr>
                    </tbody>
					<?php endforeach; ?>
                </table>
				<p>
					<?php
						echo $this->Paginator->counter(array(
						'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
						));
					?>
				</p>
				<div class="pagination">
				<p>
					<ul>
						<li ><?php  echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));?> </li>
						<li ><?php  echo $this->Paginator->numbers(array('separator' => ''));?></li>
						<li ><?php  echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));?></li>
					</ul>
				</p>
				<br><br>
				</div>
		</div><!--contentinner-->
	</div><!--maincontent-->