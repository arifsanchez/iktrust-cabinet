	
	
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
					
					<?php	foreach ($pro as $pro): ?>
                    <tbody>
                        <tr class="gradeX">
                            <td class="center">
								IK<?php echo str_pad($pro['User']['id'], 7, '0', STR_PAD_LEFT); ?>
							</td>
                            <td class="center">
								<?php echo $pro['User']['first_name']; ?>
							</td>
                            <td class="center">
								<?php echo $pro['User']['email']; ?>
							</td>
							<td class="center">
								<?php 
								if ($pro['User']['email_verified'] == 0){
									echo "not verified";
								}else{
									echo "not verified";
								}
								?>
							</td>
                            <td class="center">
								<?php echo $pro['User']['created']; ?>
							</td>
							
							<?php $mail = base64_encode($pro['User']['email']); ?>
							<td class="center">
								<span class="  icon-tasks"></span>
								<?php echo $this->Html->link(__('View '), array('action' => 'admin_pro', $mail)); ?>&nbsp;|&nbsp;
								<!--span class="icon-edit"></span-->
								
								<span class=" icon-exclamation-sign"></span>
								<?php echo $this->Form->postLink(__('Delete'), array('action' => '#', $mail), null, __('Are you sure you want to delete # %s?', $pro['User']['email'])); ?>
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