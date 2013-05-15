	
	
	<div class="maincontent">
		<div class="contentinner">
			
			<h3 class="widgettitle">IKTRUST Trader Details</h3>
            	<table class="table table-bordered table-hover" id="dyntable">
				<div align = 'right' >	
					<?php 
				
						echo $this->Html->link(__("All Traders",true),"tradersindex",array('class' => "btn btn-primary btn")); 
						echo $this->Html->link(__("Pending",true ),"tradersindex/s:1",array('class' => "btn btn-primary btn")); 
						echo $this->Html->link(__("Approved",true ),"tradersindex/s:2",array('class' => "btn btn-primary btn"));
						echo $this->Html->link(__("Rejected",true),"tradersindex/s:3",array('class' => "btn btn-primary btn")); 
					?>
				</div>
				<hr>
					<thead>
                        <tr class = "warning" >
                            <th class="center">Register ID</th>
                            <th class="center">Name</th>
							<th class="center">Email</th>
                            <th class="center">Status</th>
							  <th class="center">Signup Date</th>
                            <th class="center">More Action</th>
                        </tr>
                    </thead>
					<?php	foreach ($locals as $locals): ?>
                    <tbody>
                        <tr class="gradeX">
                            <td class="center">
								IK<? echo str_pad($locals['User']['id'], 8, '0', STR_PAD_LEFT); ?>
							</td>
                            <td class="center">
								<? echo $locals['User']['first_name'].' '.$locals['User']['last_name']; ?>
							</td>
                            <td class="center">
								<? echo $locals['User']['email']; ?>
							</td>
							<td class="center">
								<? echo $locals['LocalStatus']['name']; ?>
							</td>
                            <td class="center">
								<? echo $locals['Local']['created']; ?>
							</td>
							
							<?php $id = base64_encode($locals['Local']['id']); ?>
							<td class="center">
								<span class="  icon-tasks"></span>
								<?php echo $this->Html->link(__('View'), array('action' => 'adminview', $id)); ?>&nbsp;|&nbsp;
								<span class=" icon-exclamation-sign"></span>
								<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $id), null, __('Are you sure you want to delete # %s?', $locals['Local']['id'])); ?>
							</td>
								
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
	
		</div><!--contentinnerm-->
	</div><!--maincontent-->