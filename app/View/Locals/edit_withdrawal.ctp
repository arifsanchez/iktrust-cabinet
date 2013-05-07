		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				<!--FIRST TTLE/HEADER nn-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin"> Withdrawal Details</h3>
						
						<div class="row-fluid">
							<div class="span12  widgetcontent bordered">
								<div class="span6 well ">
								<fieldset>
								<legend>Client's Details</legend>	
								<hr>
								<div class="form-inline">
									<p>
										<label>Withdrawal Id : </label>
										<?php echo $withdrawal['Withdrawal']['id'];   ?>
									</p>
								</div>
								<div class="form-inline">
									<p>
										<label>Login Id : </label>
										<?php echo $withdrawal['Withdrawal']['mt4_user_LOGIN'];   ?>
									</p>
								<div class="form-inline">
									<p>
										<label>Name : </label>
										<?php echo $withdrawal['Withdrawal']['name'];   ?>
									</p>
								</div>
									<p>
										<label>email  : </label>
										<?php echo $withdrawal['Withdrawal']['email'];   ?>
									</p>
								</fieldset>
								</div>
								<div class = "span6 well" >
									<fieldset>
										<legend>Client's Bank Details</legend>
										<hr>
										<div class="form-inline">
										<p>
											<label>Withdrawal Amount : </label>
											<?php echo "$" ; ?><?php echo $withdrawal['Withdrawal']['amount'];   ?>
										</p>
										</div>
										
										<p>
										<div class="form-inline">
											<label>Beneficiary Bank Name   : </label>
											<?php echo $withdrawal['UserBank']['name'];   ?>
										</p>
										</div>
										<p>
										<div class="form-inline">
											<label>Beneficiary Account Name : </label>
											<?php echo $withdrawal['UserBank']['acc_name'];   ?>
										</p>
										</div>
										<p>
										<div class="form-inline">
											<label>Beneficiary Account Nunmber   : </label>
											<?php echo $withdrawal['UserBank']['acc_no'];   ?>
										</p>
										</div>
										<p>
										<div class="form-inline">
											<label>IBAN Number   : </label>
											<?php echo $withdrawal['UserBank']['iban_no'];   ?>
										</p>
										</div>
										<p>
										<div class="form-inline">
											<label>SWIFT Number  : </label>
											<?php echo $withdrawal['UserBank']['swift_no'];   ?>
										</p>
										</div>
									</fieldset>
								</div>	
										
							</div>
							</div>
						
						</div>
						<div class="row-fluid">
							<div class="span12">
								<h3 class="widgettitle nomargin"> Edit Withdrawal  Details</h3>
									<div class="row-fluid">
										<div class="span12  widgetcontent bordered">
											<div class="span6 ">
												<?php echo $this->Form->create('WdComment', array('type' => '', 'id'=>'' , 'class' => 'stdform')); ?>
												<div class="form-inline">
													<p>
														<label>Withdrawal Amount : </label>
														<?php echo $this->Form->input( 'amount' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
													</p>
													<p>
														<label>Comment : </label>
														<?php echo $this->Form->input( 'comment' ,array('type' => 'textarea','label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
													</p>
												</div>
											</div>
											<div class="span6 ">
												 <label>Client Withdrawal Status</label>
												   <span class="field">
													<input class="radio" type="radio" name="data[Withdrawal][status]" id="User" value="1" />&nbsp; Pending <br>
													<input class="radio" type="radio" name="data[Withdrawal][status]" id="User" value="2"/>&nbsp; Verified <br>
													<input class="radio" type="radio" name="data[Withdrawal][status]" id="User" value="3"/>&nbsp; Reject <br>
												   </span>
											
											<hr>
											<?php echo $this->Form->input('user_id' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $user_id)); ?>
											<?php echo $this->Form->input('mt4_user_LOGIN' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $withdrawal['Withdrawal']['mt4_user_LOGIN'])); ?>
											<?php echo $this->Form->input('withdrawal_id' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $withdrawal['Withdrawal']['id'])); ?>
											<?php echo $this->Form->input('user_bank_id' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $withdrawal['UserBank']['id'])); ?>
											<?php echo $this->Form->Submit(__('Submit'), array('class'=>'btn btn-danger span3'));?>
											<?php echo $this->Form->end(); ?>
											</div>
										</div>
									</div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<h3 class="widgettitle nomargin"> Login Id Withdrawal  Details</h3>
									<div class="row-fluid">
										<div class="span12  widgetcontent bordered">
											
											<table class="table table-bordered table-hover" id="dyntable">
												<th>
													<tr>
														<th class="center">Withdrawal Id</th>
														<th class="center">Amount</th>
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
															<? echo $dc['Withdrawal']['id']; ?>
														</td>
														<td class="center">
															<? echo $dc['Withdrawal']['amount']; ?>
														</td>
														<td class="center">
															<? echo $dc['UserBank']['name']; ?>
														</td>
														 <td class="center">
															<? echo $dc['Withdrawal']['name']; ?>
														</td>
														<td class="center">
															<? echo $dc['Withdrawal']['created']; ?>
														</td>
														
														<td class="center">
															<? echo $dc['WithdrawalComment']['amount']; ?>
														</td>
														<td class="center">
															<? echo $dc['WithdrawalComment']['created']; ?>
														</td>
														<td class="center">
															<? echo $dc['WithdrawalComment']['comment']; ?>
														</td>
														<td class="center">
															<? echo $dc['Withdrawal']['local_status_id']; ?>
														</td>
														<td class="center"><span class="icon-edit"></span>
															<?php echo $this->Html->link(__('view'), array('action' => 'edit_withdrawal', $dc['Withdrawal']['id'] )); ?>
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