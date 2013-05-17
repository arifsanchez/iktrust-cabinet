
	<div class="maincontent">
		<div class="contentinner">
			<h3 class="widgettitle">Summary Withdrawal Transaction</h3>
            	<table class="table table-bordered table-hover" id="dyntable">
				<div align = 'right' >	
					<?php 
				
						echo $this->Html->link(__("All Withdrawal",true),"transaction_withdrawal",array('class' => "btn btn-primary btn")); 
						echo $this->Html->link(__("Pending",true ),"transaction_withdrawal/s:1",array('class' => "btn btn-primary btn")); 
						echo $this->Html->link(__("Approved",true ),"transaction_withdrawal/s:2",array('class' => "btn btn-primary btn"));
						echo $this->Html->link(__("Rejected",true),"transaction_withdrawal/s:3",array('class' => "btn btn-primary btn")); 
					?>
				</div>
				<hr>
					<thead>
                        <tr class = "warning" >
                            <th class="center">Withdrawal Id</th>
                            <th class="center">Login Id</th>
							<th class="center">Transaction Type</th>
							<th class="center">Amount</th>
							<th class="center">Balance</th>
							<th class="center">Free Margin</th>
                            <th class="center">PrevMonthBalance</th>
							<th class="center">File Upload</th>
							<th class="center">Status</th>
                            <th class="center">More Action</th>
                        </tr>
                    </thead>
					<?php	foreach ($withdrawal as $withdrawal): ?>
                    <tbody>
                        <tr class="gradeX">
                            <td class="center">
								<?php	 echo str_pad($withdrawal['Withdrawal']['id'], 8, '0', STR_PAD_LEFT); ?>
							</td>
							<td class="center">
								<?php  echo $withdrawal['Mt4User']['LOGIN']; ?>
							</td>
							<td class="center">
								 Bank Transfer
							</td>
							 <td class="center">
								<?php echo $withdrawal['Withdrawal']['amount']; ?>
							</td>
                            <td class="center">
								<?php echo $withdrawal['Mt4User']['BALANCE']; ?>
							</td>
                            
							<td class="center">
								<?php echo $withdrawal['Mt4User']['MARGIN_FREE']; ?>
							</td>
							<td class="center">
								<?php echo $withdrawal['Mt4User']['PREVMONTHBALANCE']; ?>
							</td>
							<td class="center">
								<?php  if (empty ($withdrawal['Withdrawal']['upload'])){
										echo 'Please upload' ;
									}else{
										echo 'Done';
								}?>
							</td>
							<td class="center">
								<?php echo $withdrawal['LocalStatus']['name']; ?>
							</td>
							<?php $id = base64_encode($withdrawal['Withdrawal']['id']); ?>
							<td class="center"><span class="icon-edit"></span>
								<?php echo $this->Html->link(__('view'), array('action' => 'edit_withdrawal', $id )); ?>
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