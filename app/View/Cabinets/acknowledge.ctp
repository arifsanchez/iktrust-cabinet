		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">Acknowledgement</h3>
						
						<p>
						<div class="row-fluid">
							<div class="span8">
								<p>
									<strong>
										By signing this Individual Account Opening Application Form, you agree and understand the following acknowledgement :
									</strong>
								</p>
								
								<p>
									<div class="well">
										<i class="icon-chevron-right"></i>
										confirmed that you have read, understood and agree to be bound by the provisions of this Account Opening Application Form;
									</div>

									<div class="well">
										<i class="icon-chevron-right"></i>
										confirmed that you have read, understood and agree to be bound by the IK TRUST Terms & Conditions which have been provided to you;
									</div>

									<div class="well">
										<i class="icon-chevron-right"></i>
										confirmed that the information you have provided in this Account Opening Application Form is complete and accurate and you accept that your failure to provide accurate information may affect adversely IK Trust's ability to assess the suitability of your chosen mandate against your personal and financial circumstances;
									</div>

									<div class="well">
										<i class="icon-chevron-right"></i>
										authorise IK TRUST to rely on the instructions set out in the Account Opening Application Form;
									</div>

									<div class="well">
										<i class="icon-chevron-right"></i>
										consent to IK TRUST's order execution policy;
									</div>
			
									<div class="well">
										<i class="icon-chevron-right"></i>
										aconsent to receipt of statements and other communications from IK TRUST by email;
									</div>

									<div class="well">
										<i class="icon-chevron-right"></i>
										understand that if my account has been introduced by an introducing broker (IB), the IB may receive a commission / rebate from IK TRUST
									</div>
			
									<div class="well">
										<i class="icon-chevron-right"></i>
										understand that by properly completing and signing the Account Opening Application Form, account opening are subject for IK TRUST management approval;
									</div>
			
									<div class="well">
										<i class="icon-chevron-right"></i>
										understand the financial risks associated with leveraged foreign exchange and bullion trading, including the risk that you can lose more money than you deposit;
									</div>
								</p> 
							</div>
						</div>

						<strong>
							<div>
								Your use of the services will be treated as your informed acknowledgement that you have carefully read and are prepared to accept the provisions of this Account Opening Application Form and the Terms and Conditions regardless of whether or not you have returned a signed copy to us.
							</div>
						</strong>  
						</p>
					</div>
				</div>
				<?php 
						echo $this->Form->create('Local', array('type' => '', 'id'=>'' , 'class' => '')); 	
							// data to save in local
							echo $this->Form->input('user_detail_id', array('type' => 'hidden', 'value' => $userD['UserDetail']['id']));
							echo $this->Form->input('user_bank_id', array('type' => 'hidden', 'value' => $bank['UserBank']['id']));
							echo $this->Form->input('user_acctype_id', array('type' => 'hidden', 'value' => $acctypes['UserAcctypes']['id']));
							echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $user['User']['id']));
							echo $this->Form->input('user_ecr_id', array('type' => 'hidden', 'value' => $ecr['UserEcr']['id']));
						?>
				<p>
					
					<?php echo $this->Form->Submit(__('Finish'), array('class'=>'btn btn-primary'));?>
					<?php echo $this->Form->end(); ?>
				</p>
			</div><!--contentinner close-->
		</div><!--mainconten closet-->