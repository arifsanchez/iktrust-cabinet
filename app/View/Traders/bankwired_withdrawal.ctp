
	<div class="maincontent">
		<div class="contentinner">
			<h3 class="widgettitle">Summary Account Balance</h3>
            	<table class="table table-bordered table-hover" id="dyntable">
					<thead>
                        <tr >
                            <th class="center">Login Id</th>
                            <th class="center">Balance</th>
							<th class="center">PrevMonthBalance</th>
							<th class="center">Credit</th>
							<th class="center">Free Margin</th>
                            <th class="center">Group</th>
                            <th class="center">Withdrawal Method</th>
                        </tr>
                    </thead>
					<?php	foreach ($mt4user as $mt4user): ?>
                    <tbody>
                        <tr class="gradeX">
                            <td class="center">
								<? echo $mt4user['Mt4User']['LOGIN']; ?>
							</td>
                            <td class="center">
								<? echo $mt4user['Mt4User']['BALANCE']; ?>
							</td>
                            <td class="center">
								<? echo $mt4user['Mt4User']['PREVMONTHBALANCE']; ?>
							</td>
							 <td class="center">
								<? echo $mt4user['Mt4User']['CREDIT']; ?>
							</td>
							<td class="center">
								<? echo $mt4user['Mt4User']['MARGIN_FREE']; ?>
							</td>
							<td class="center">
								<? echo $mt4user['Mt4User']['GROUP']; ?>
							</td>
							<? $login = base64_encode($mt4user['Mt4User']['LOGIN']); ?>
							<td class="center">
								<?php if($mt4user['Mt4User']['BALANCE'] < 200){ 
									echo "Balance is not enough";
								}  else { ?>
									<span class="icon-edit"><?php echo $this->Html->link(__(''), array('action' => 'withdrawallogin', $login )); ?></span>
								<span class=" icon-tint"><?php echo $this->Html->link(__(''), array('action' => 'withdrawallogin', $login )); ?></span>
								<?php  }  ?>
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