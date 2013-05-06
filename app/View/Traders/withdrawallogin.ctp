		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span6">
						<h3 class="widgettitle nomargin">Withdrawal Info</h3>
						<p>
						<div class="row-fluid">
							<div class="span12 well">
								<?php echo $this->Form->create('Withdrawal', array('type' => '', 'id'=>'' , 'class' => 'stdform')); ?>
								<fieldset>
									<legend> <h3 > Account Info </h3></legend>
									<hr>
									<p>
										<div class="amountdue">
										<span  style=" text-align:center ; font-size: 17px; font-weight:bolder;">Your Balance :</span>
											<h1>
											<?php echo "$" ; echo $mt4user['Mt4User']['BALANCE']; ?>
											</h1>
											<br>
											</div>
									</p>
									<p>
										<div class="amountdue">
										<span  style=" text-align:center ; font-size: 17px; font-weight:bolder;">Available to withdraw :</span>
											<h1>
											<?php 
														$a = ( $mt4user['Mt4User']['BALANCE'] * 0.9); 
														echo "$" ; echo $a;
											
											?>
											</h1>
											<br>
											</div>
									</p>
									<div class ="divider30"></div>
										<tbody>
											<tr>
												<td class="msg-invoice">
												<h4>Message:</h4>
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia </p>
												</td>
											</tr>
										</tbody>
									</fieldset>
							</div>
						</div>
						</p>
					</div>
					
					<div class="span6">
						<h3 class="widgettitle nomargin">Withdrawal Form</h3>
						<p>
						<div class="row-fluid">
							<div class="span12 well">
								
								<fieldset>
									<legend> <h3 > My Bank Info </h3></legend>
									<hr>
									<table class="table table-bordered table-invoice">
										<tbody>
											<tr>
												<td class="width30">Beneficiary Bank : </td>
												<td class="width70">
												<strong><?php echo  $userbank['UserBank']['name']; ?></strong>
												</td>
											</tr>
											<tr>
												<td>Beneficiary Account Number :</td>
												<td>
												<strong><?php echo  $userbank['UserBank']['acc_no']; ?></strong>
												</td>
											</tr>
											<tr>
												<td>Beneficiary Account Name :</td>
												<td>
												<strong><?php echo  $userbank['UserBank']['acc_name']; ?></strong>
												</td>
											</tr>
												<td>IBAN Number : </td>
												<td>
												<strong><?php echo  $userbank['UserBank']['iban_no']; ?></strong>
												</td>
											</tr>
												<td>SWIFT Number :</td>
												<td>
												<strong><?php echo  $userbank['UserBank']['swift_no']; ?></strong>
												</td>
											</tr>
										</tbody>
									</table>
									
									<hr>
									<?php echo $this->Form->create('Withdrawal', array('type' => '', 'id'=>'' , 'class' => 'stdform')); ?>
									<div class="par">
										<label>Withdrawal Amount</label>
										<div class="input-prepend input-append">
										  <span class="add-on">$</span>
										  <span class="7"><?php echo $this->Form->input('amount' ,array('label' => false, 'div' => false)); ?></span>
										  <span class="add-on">.00</span>
										</div>
									</div>
										<?php echo $this->Form->input('name' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $mt4user['Mt4User']['NAME'])); ?>
										<?php echo $this->Form->input('user_bank_id' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' =>  $userbank['UserBank']['id'])); ?>
										<?php echo $this->Form->input('email' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $mt4user['Mt4User']['EMAIL'])); ?>
										<?php echo $this->Form->input('user_id' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $user_id)); ?>
										<?php echo $this->Form->input('mt4_user_LOGIN' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $mt4user['Mt4User']['LOGIN'])); ?>
								<div align = 'right' >	<?php echo $this->Form->Submit(__('Submit'), array('class'=>'btn btn-danger span2'));?></div>
								</fieldset>
							</div>
						</div>
					</div>
				</div>
					<?php echo $this->Form->end(); ?>
			</div><!--contentinner close-->
		</div><!--mainconten closet-->