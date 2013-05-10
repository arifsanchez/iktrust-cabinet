
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
				<?php echo $this->element('newsticker'); ?>
				<!--FIRST TTLE/HEADER-->
				<br>
				<br>
				<div class="row-fluid">
					<div class="span8">
						<h2>My Accounts</h2>
					</div>
					<div class="span4">
					<?php  
					if(!empty ($status) ){
					
						if ($status['Local']['local_status_id'] == 2){
							
							echo $this->Html->link('<span class=" iconfa-folder-open"></span>&nbsp; Add Account', '/cabinets/acc_type', array('class' => 'btn btn-rounded btn-success enable span6 ', 'target' => '_blank', 'escape' => false));
							echo $this->Html->link('<span class=" iconfa-tags"></span>&nbsp; Demo Account', '/pages/home', array('class' => 'btn btn-rounded btn-warning enable span6 ', 'target' => '_blank', 'escape' => false));
						}
						
					}else{
						
							if($user['User']['email_verified'] == 1){
							
								echo $this->Html->link('<span class=" iconfa-folder-open"></span>&nbsp; Live Account', '/cabinets/acc_type', array('class' => 'btn btn-rounded btn-success enable span6 ', 'target' => '_blank', 'escape' => false));
								echo $this->Html->link('<span class=" iconfa-tags"></span>&nbsp; Demo Account', '/pages/home', array('class' => 'btn btn-rounded btn-warning enable span6 ', 'target' => '_blank', 'escape' => false));
								
							}else{
									echo "<div class=\"alert alert-info\"><button class=\"close\" type=\"button\" data-dismiss=\"alert\">X</button>
										<strong>Heads up!</strong> This alert needs your attention, but it's not super important.</div>";
							}
						
						}
					?>
					</div>
				</div>
				<!--TABLE OF CONTENT-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<table class="table table-condensed table-bordered">
						<!--TABLE ROW 1-->
							<tr>
								<td class="center">
									<h5>Account(s)</h5>
								</td>
								
								<td class="center">
									<h5>Balance</h5>
								</td>
								
								<td class="center">
									<h5>Leverage</h5>
								</td>
								
								<td class="center">
									<h5>Currency</h5>
								</td>
								
								<td class="center">
									<h5>Free Margin</h5>
								</td>
								
								<td class="center">
									<h5>Status</h5>
								</td>
								
								<td class="center">
									<h5>Type</h5>
								</td>
								
								<td class="center">
									<h5>Action</h5>
								</td>
							</tr>
							
						<!--TABLE ROW 2-->	
							<?php foreach ($a as $a): ?>
							<tr class="">
								<td class="center"><?php echo  $a['Mt4User']['LOGIN']; ?></td>
								
								<td class="center" ><?php echo  $a['Mt4User']['BALANCE']; ?></td>
								
								<td class="center"><?php echo  "1:", $a['Mt4User']['LEVERAGE']; ?></td>
								
								<td class="center">USD</td>
								
								<td class="center">
									<?php 
										$b =  $a['Mt4User']['MARGIN_FREE']; 
										$c = number_format($b, 2, '.', '');
					
										echo h($c); 
									?></td>
								
								<td class="center">
									<?php 
										$status = $a['Mt4User']['ENABLE'];
										
										if($status == 0){
											echo "DISABLE";
										}else{
											echo "ENABLE";
										}
									?>
								</td>
								
								<td class="center">
									<?php 
										
										$group = $a['Mt4User']['GROUP'];
										
										switch ($group){
											case "IK-iMini-Flex":
												echo "i-MINI FLEX";
												break;
											case "IK-iMini-Fix":
												echo "i-MINI FIX";
												break;
														
											case "IK-Mini-Flex":
												echo "MINI FLEX";
												break;	
											case "IK-Mini-FIx":
												echo "MINI FIX";
												break;	
												
											case "IK-iStd-Flex":
												echo "i-STANDARD FLEX";
												break;
											case "IK-Std-Flex":
												echo "STANDARD FLEX";
												break;
												
											case "IK-iVIP-Flex":
												echo "i-PREMIUM FLEX";
												break;
											case "IK-VIP-Flex":
												echo "PREMIUM FLEX";
												break;
										}
										
									?>
								</td>
								
								<td class="center">
									<span class=" iconsweets-link2"></span>&nbsp;
									<?php 
										$login = $a['Mt4User']['LOGIN'];
										echo $this->Html->link('Details', array('action' => 'trader_details', $login)); 
									?>
								</td>
							</tr>
							<?php endforeach; ?>	
						</table>
					</div>
				</div>
				
				
				<div class="row-fluid">
					<div class="span6">
						<p>
							<?php
								echo $this->Paginator->counter(array(
									'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
								));
							?>	
						</p>
					</div>
					
					<div class="pagination pagination-small span6" align="right">
						<ul>
							<li><?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')); ?></li>
							<li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
							<li><?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); ?></li>
						</ul>
					</div>
				</div>
			
			
			</div><!--contentinner close-->
		</div>		