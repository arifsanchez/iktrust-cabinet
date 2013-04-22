		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">Deposit Transaction Details</h3>	
						<p>
						<div class="row-fluid">
							<div class="span12 well">
								<?php echo $this->Form->create('Deposit', array('type' => '', 'id'=>'' , 'class' => 'stdform')); ?>
									<p>
										<label>Deposit ID : </label>
										<?php echo $deposit['Deposit']['id'] ; ?>
									</p>
									<p>
										<label>Login ID : </label>
										<?php echo $deposit['Deposit']['mt4_user_LOGIN'] ; ?>
									</p>
									<p>
										<label>Name : </label>
										<?php echo $deposit['Deposit']['name'] ; ?>
									</p>
									<p>
										<label>Currency : </label>
										<?php echo $deposit['Ecurr']['name'] ; ?>
									</p>
									<p>
										<label>Deposit Amount : </label>
											<?php echo $deposit['Deposit']['amount'] ; ?>
									</p>
									<p>
										<label>Bank Name  : </label>
											<?php echo $deposit['Deposit']['userbank'] ; ?>
									</p>
									<p>
										<label>Transaction date : </label>
										<?php echo $deposit['Deposit']['created'] ; ?>
									</p>
									<br><br>
									<label><?php echo $this->Form->Submit(__('Submit'), array('name'=>'submit','class'=>'btn btn-danger primary '));?></label>
									<label><?php echo $this->Form->Submit(__('Print Invoice'), array('name' => 'print' ,'class'=>'btn btn-danger primary '));?></label>
									<?php echo $this->Form->end(); ?>
							</div>
						</div>
						</p>
					</div>
				</div>
			</div><!--contentinner close-->
		</div><!--mainconten closet-->