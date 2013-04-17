
	<div class="maincontent">
		<div class="contentinner">
		
			<h3 class="widgettitle">Summary Account Balance</h3>
            	<table class="table table-bordered table-hover" id="dyntable">
					<thead>
                        <tr>
                            <th class="center">Login Id</th>
                            <th class="center">Balance</th>
							<th class="center">PrevMonthBalance</th>
							<th class="center">Free Margin</th>
                            <th class="center">Group</th>
                            <th class="center">More Acion</th>
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
								<? echo $mt4user['Mt4User']['MARGIN_FREE']; ?>
							</td>
							<td class="center">
								<? echo $mt4user['Mt4User']['GROUP']; ?>
							</td>
                          
						  <? $login = base64_encode($mt4user['Mt4User']['LOGIN']); ?>
						  
								<td class="center"><span class="icon-edit"></span>
								<?php echo $this->Html->link(__('Deposit'), array('action' => 'depositlogin', $login )); ?>
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