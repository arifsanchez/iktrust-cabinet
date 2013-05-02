		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span8">
						<h3 class="widgettitle nomargin">Withdrawal Form</h3>
						<p>
						<div class="row-fluid">
							<div class="span12 well">
								<?php echo $this->Form->create('Withdrawal', array('type' => '', 'id'=>'' , 'class' => 'stdform')); ?>
									<p>
										<label>Login Id : </label>
										<?php echo  $mt4user['Mt4User']['LOGIN']; ?>
									</p>
										<p>
										<label>Name : </label>
										<?php echo  $mt4user['Mt4User']['NAME']; ?>
									</p>
									<p>
										<label>email  : </label>
										<?php echo  $mt4user['Mt4User']['EMAIL']; ?>
									</p>
									<p>
										<label>Withdrawal  Amount : </label>
										<?php echo $this->Form->input('amount' ,array('label' => false, 'div' => false, 'class'=>'input-xlarge' )); ?>
									</p>
										<p>
										<label>Beneficiary Bank : </label>
										<?php echo  $userbank['UserBank']['name']; ?>
									</p>
									<p>
										<label>Beneficiary Account No# : </label>
										<?php echo  $userbank['UserBank']['acc_no']; ?>
									</p>
										<p>
										<label>Beneficiary Account Name : </label>
										<?php echo  $userbank['UserBank']['acc_name']; ?>
									</p>
									
									
								
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
					
					<div class="span4">
						<h3 class="widgettitle nomargin">Element Withdrawal</h3>
					</div>
				</div>
					<?php echo $this->Form->end(); ?>
			</div><!--contentinner close-->
		</div><!--mainconten closet-->