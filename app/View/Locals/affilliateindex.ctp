	
	
	<div class="maincontent">
		<div class="contentinner">
			
			<h3 class="widgettitle">IKTRUST Affilliates Details</h3>
            	<table class="table table-bordered table-hover" id="dyntable">
					<div align = 'right' >	
						<?php 
							echo $this->Html->link(__("All Traders",true),"affilliateindex",array('class' => "btn btn-primary btn")); 
							echo $this->Html->link(__("Pending",true ),"affilliateindex/s:1",array('class' => "btn btn-primary btn")); 
							echo $this->Html->link(__("Approved",true ),"affilliateindex/s:2",array('class' => "btn btn-primary btn"));
							echo $this->Html->link(__("Rejected",true),"affilliateindex/s:3",array('class' => "btn btn-primary btn"));
						?>
					</div>
					<hr>
					
					<thead>
                        <tr class = "warning" >
                            <th class="center">Register ID</th>
                            <th class="center">Name</th>
							<th class="center">Email</th>
                            <th class="center">Status</th>
							<th class="center">Reg Date</th>
                            <th class="center">More Action</th>
                        </tr>
                    </thead>
					
					<?php	foreach ($locals as $locals): ?>
                    <tbody>
                        <tr class="gradeX">
                            <td class="center">
								IK<?php echo str_pad($locals['Affilliate']['id'], 8, '0', STR_PAD_LEFT); ?>
							</td>
                            <td class="center">
								<?php echo $locals['Affilliate']['name']; ?>
							</td>
                            <td class="center">
								<?php echo $locals['Affilliate']['email']; ?>
							</td>
							<td class="center">
								<?php  echo $locals['LocalStatus']['name']; ?>
							</td>
                            <td class="center">
								<?php echo $locals['Affilliate']['created']; ?>
							</td>
							
							<?php $id = base64_encode($locals['Affilliate']['id']); ?>
							<td class="center">
								<span class="  icon-tasks"></span>
								<?php echo $this->Html->link(__('View '), array('action' => 'affilliateview', $id)); ?>&nbsp;|&nbsp;
								<!--span class="icon-edit"></span-->
								<?php #echo $this->Html->link(__('Edit'), array('action' => 'adminedit', $id)); ?>
								<span class=" icon-exclamation-sign"></span>
								<?php echo $this->Form->postLink(__('Delete'), array('action' => 'affilliatedelete', $id), null, __('Are you sure you want to delete # %s?', $locals['Affilliate']['id'])); ?>
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