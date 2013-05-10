		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				<!--FIRST TTLE/HEADER nn-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin"> Deposit  Details</h3>
						
						<div class="row-fluid">
							<div class="span12  widgetcontent bordered">
								<div class="span6 well ">
								<fieldset>
								<legend>Client's Details</legend>	
								<hr>
								<div class="form-inline">
									<p>
										<label>Deposit Id : </label>
										<?php echo $deposit['Deposit']['id'];   ?>
									</p>
								</div>
								<div class="form-inline">
									<p>
										<label>Login Id : </label>
										<?php echo $deposit['Deposit']['mt4_user_LOGIN'];   ?>
									</p>
								<div class="form-inline">
									<p>
										<label>Name : </label>
										<?php echo $deposit['Deposit']['name'];   ?>
									</p>
								</div>
									<p>
										<label>email  : </label>
										<?php echo $deposit['Deposit']['email'];   ?>
									</p>
								</fieldset>
								</div>
								<div class = "span6 well" >
									<fieldset>
										<legend>Client's Bank Details</legend>
										<hr>
										<div class="form-inline">
										<p>
											<label>Deposit Amount : </label>
											<?php echo $deposit['Ecurr']['name']; ?><?php echo $deposit['Deposit']['amount'];   ?>
										</p>
										</div>
										
										<p>
										<div class="form-inline">
											<label>From Client  Bank Name  : </label>
											<?php echo $deposit['Deposit']['userbank'];   ?>
										</p>
										</div>
										<p>
										<div class="form-inline">
											<label>To IK Trust Bank : </label>
											<?php echo $deposit['Ikbank']['name'] ; ?> <?php echo $deposit['Ikbank']['bankname'];  ?>
										</p>
										</div>
									</fieldset>
								</div>	
										
							</div>
							</div>
						
						</div>
						<div class="row-fluid">
							<div class="span12">
								<h3 class="widgettitle nomargin"> Edit Deposit  Details</h3>
									<div class="row-fluid">
										<div class="span12  widgetcontent bordered">
											<div class="span6 ">
												<?php echo $this->Form->create('DepositComment', array('type' => '', 'id'=>'' , 'class' => 'stdform')); ?>
												<div class="form-inline">
													<p>
														<label>Deposit Amount : </label>
														<?php echo $this->Form->input( 'amount' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
													</p>
													<p>
														<label>Comment : </label>
														<?php echo $this->Form->input( 'comment' ,array('type' => 'textarea','label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
													</p>
												</div>
											</div>
											<div class="span6 ">
												 <label>Client Deposit Status</label>
												   <span class="field">
													<input class="radio" type="radio" name="data[Deposit][status]" id="UserDetailGenderMale" value="1" />&nbsp; Pending <br>
													<input class="radio" type="radio" name="data[Deposit][status]" id="UserDetailGenderFemale" value="2"/>&nbsp; Verified <br>
													<input class="radio" type="radio" name="data[Deposit][status]" id="UserDetailGenderFemale" value="3"/>&nbsp; Reject <br>
												   </span>
											
											<hr>
											<?php echo $this->Form->input('user_id' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $user_id)); ?>
											<?php echo $this->Form->input('mt4_user_LOGIN' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $deposit['Deposit']['mt4_user_LOGIN'])); ?>
											<?php echo $this->Form->input('deposit_id' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $deposit['Deposit']['id'])); ?>
											<?php echo $this->Form->input('ikbank_id' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $deposit['Ikbank']['id'])); ?>
											<?php echo $this->Form->Submit(__('Submit'), array('class'=>'btn btn-danger span3'));?>
											<?php echo $this->Form->end(); ?>
											</div>
										</div>
									</div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<h3 class="widgettitle nomargin"> Login Id Deposit  Details</h3>
									<div class="row-fluid">
										<div class="span12  widgetcontent bordered">
											
											<table class="table table-bordered table-hover" id="dyntable">
												<th>
													<tr>
														<th class="center">Deposit Id</th>
														<th class="center">Amount</th>
														<th class="center">From</th>
														<th class="center">To</th>
														<th class="center">Date Request</th>
														<th class="center">Amount Send</th>
														<th class="center">Date Proses</th>
														<th class="center">Comment</th>
														 <th class="center">Status</th>
														<th class="center">More Action</th>
													</tr>
												</th>
												<?php	foreach ($dc as $dc): ?>
												<tbody>
													<tr class="gradeX">
														<td class="center">
															<? echo str_pad( $dc['Deposit']['id'], 8, '0', STR_PAD_LEFT); ?>
														</td>
														<td class="center">
															<? echo $dc['Deposit']['amount']; ?>
														</td>
														<td class="center">
															<? echo $dc['Deposit']['userbank']; ?>
														</td>
														 <td class="center">
															<? echo $dc['Deposit']['fullname']; ?>
														</td>
														<td class="center">
															<? echo $dc['Deposit']['created']; ?>
														</td>
														
														<td class="center">
															<? echo $dc['DepositComment']['amount']; ?>
														</td>
														<td class="center">
															<? echo $dc['DepositComment']['created']; ?>
														</td>
														<td class="center">
															<? echo $dc['DepositComment']['comment']; ?>
														</td>
														<td class="center">
															<? 
																if ($dc['Deposit']['local_status_id'] == 1){
																	echo 'Pending';
																}
																if ($dc['Deposit']['local_status_id'] == 2){
																	echo 'Verified';
																}
																if ($dc['Deposit']['local_status_id'] == 3){
																	echo 'Rejected';
																}
															?>
														</td>
														<td class="center"><span class="icon-edit"></span>
															<?php echo $this->Html->link(__('view'), array('action' => 'edit_deposit', $dc['Deposit']['id'] )); ?>
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
																	</div>
																</div>
														</div>
													</div>
						
					
			</div><!--contentinner close-->
		</div><!--mainconten closet-->