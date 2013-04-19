
	<div class="maincontent">
		<div class="contentinner">
		
			<h3 class="widgettitle">Summary Account Balance</h3>
            	<table class="table table-bordered table-hover" id="dyntable">
					<thead>
                        <tr>
                            <th class="center">Deposit Id</th>
                            <th class="center">Login Id</th>
							<th class="center">Transaction Type</th>
							<th class="center">Amount</th>
							<th class="center">Balance</th>
							<th class="center">Free Margin</th>
                            <th class="center">PrevMonthBalance</th>
                            <th class="center">More Action</th>
                        </tr>
                    </thead>
					<?php	foreach ($deposit as $deposit): ?>
                    <tbody>
                        <tr class="gradeX">
                            <td class="center">
								<? echo $deposit['Deposit']['id']; ?>
							</td>
							<td class="center">
								<? echo $deposit['Mt4User']['LOGIN']; ?>
							</td>
							<td class="center">
								 Bank Transfer
							</td>
							 <td class="center">
								<? echo $deposit['Deposit']['amount']; ?>
							</td>
                            <td class="center">
								<? echo $deposit['Mt4User']['BALANCE']; ?>
							</td>
                            
							<td class="center">
								<? echo $deposit['Mt4User']['MARGIN_FREE']; ?>
							</td>
							<td class="center">
								<? echo $deposit['Mt4User']['PREVMONTHBALANCE']; ?>
							</td>
                          
						 
						  
								<td class="center"><span class="icon-edit"></span>
								<?php echo $this->Html->link(__('view'), array('action' => 'view_deposit', $deposit['Deposit']['id'] )); ?>
								</td
								
                        </tr>
                    </tbody>
					<?php endforeach; ?>
                </table>	
				
				<div class="pagination pagination-small" align="right">
					<ul>
						<li class="disabled"><a href="#">&laquo;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li class="active"><a href="#">2</a></li>
						<li class="active"><a href="#">3</a></li>
					</ul>
				</div>
	
		</div><!--contentinner-->
	</div><!--maincontent-->