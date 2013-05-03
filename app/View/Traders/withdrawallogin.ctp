		
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
									<legend> <h3> Account Info </h3></legend>
									<hr>
									<p>
										<h3 align = 'center'>Your Balance  </h3>

										<h3 align = 'center'><?php echo "$" ; echo $mt4user['Mt4User']['BALANCE']; ?></h3>
									</p>
									<p>
											<h3 align = 'center'>Available to withdraw </h3>
										
											<h3 align = 'center'>
											<?php 
														$a = ( $mt4user['Mt4User']['BALANCE'] * 0.9); 
														echo "$" ; echo $a;
											
											?>
											</h3>
									</p>
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
								<?php echo $this->Form->create('Withdrawal', array('type' => '', 'id'=>'' , 'class' => 'stdform')); ?>
								<fieldset>
									<legend> <h3> My Bank Info </h3></legend>
									<hr>
									<table>
									<div class="form-inline">
										<p>
										
											<label>Beneficiary Bank : </label>
											<?php echo  $userbank['UserBank']['name']; ?>
										
										</p>
										<p>
											<label>Beneficiary Account Number : </label>
											<?php echo  $userbank['UserBank']['acc_no']; ?>
										</p>
										<p>
											<label>Beneficiary Account Name : </label>
											<?php echo  $userbank['UserBank']['acc_name']; ?>
										</p>
										<p>
											<label>IBAN Number : </label>
											<?php echo  $userbank['UserBank']['iban_no']; ?>
										</p>
										<p>
											<label>SWIFT Number : </label>
											<?php echo  $userbank['UserBank']['swift_no']; ?>
										</p>
										<hr>
										<p>
											<label>Withdrawal  Amount : </label>
											<?php echo $this->Form->input('amount' ,array('label' => false, 'div' => false)); ?>
										</p>
									
									</div>
									</table>
									</fieldset>
								
										<?php echo $this->Form->input('name' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $mt4user['Mt4User']['NAME'])); ?>
										<?php echo $this->Form->input('user_bank_id' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' =>  $userbank['UserBank']['id'])); ?>
										<?php echo $this->Form->input('email' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $mt4user['Mt4User']['EMAIL'])); ?>
										<?php echo $this->Form->input('user_id' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $user_id)); ?>
										<?php echo $this->Form->input('mt4_user_LOGIN' ,array( 'type' => 'hidden' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' , 'value' => $mt4user['Mt4User']['LOGIN'])); ?>
								<div align = 'right' >	<?php echo $this->Form->Submit(__('Submit'), array('class'=>'btn btn-danger span2'));?></div>
							</div>
						</div>
						</p>
					</div>
				</div>
					<?php echo $this->Form->end(); ?>
			</div><!--contentinner close-->
		</div><!--mainconten closet-->