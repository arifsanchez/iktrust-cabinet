		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">STEP 6 : Acknowledgement </h3>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span12">
						<br>
						<p>
							<h5>By signing this Individual Account Opening Application Form, you agree and understand the following acknowledgement :	</h5>
						</p>
						
						<div class="well well-small span8">
							<dd><li><strong>confirmed that you have read, understood and agree to be bound by the provisions of this Account Opening Application Form;</strong></li></dd>
						</div>
						
						<div class="well well-small span8">
							<dd><li><strong>confirmed that you have read, understood and agree to be bound by the IK TRUST Terms & Conditions which have been provided to you;</strong></li></dd>
						</div>
						
						<div class="well well-small span8">
							<dd><li><strong>
								confirmed that the information you have provided in this Account Opening Application Form is complete and accurate and you accept that your failure to provide <br>accurate information may affect adversely IK Trust's ability to assess the suitability of your chosen mandate against your personal and financial circumstances;
							</strong></li></dd>
						</div>
						
						<div class="well well-small span8">
							<dd><li><strong>authorise IK TRUST to rely on the instructions set out in the Account Opening Application Form;</strong></li></dd>
						</div>
						
						<div class="well well-small span8">
							<dd><li><strong>a consent to IK TRUST's order execution policy;</strong></li></dd>
						</div>
						
						<div class="well well-small span8">
							<dd><li><strong>a consent to receipt of statements and other communications from IK TRUST by email;</strong></li></dd>
						</div>
						
						<div class="well well-small span8">
							<dd><li><strong>understand that if my account has been introduced by an introducing broker (IB), the IB may receive a commission / rebate from IK TRUST;</strong></li></dd>
						</div>
						
						<div class="well well-small span8">
							<dd><li><strong>
								understand that by properly completing and signing the Account Opening Application Form, account opening are subject for IK TRUST management approval;
							</strong></li></dd>
						</div>
						
						<div class="well well-small span8">
							<dd><li><strong>
								understand the financial risks associated with leveraged foreign exchange and bullion trading, including the risk that you can lose more money than you deposit;
							</strong></li></dd>
						</div>
					</div>
				</div>
						
				<h6>
					Your use of the services will be treated as your informed acknowledgement that you have carefully read and are prepared to accept the provisions of this Account Opening Application Form and the Terms and Conditions regardless <br>of whether or not you have returned a signed copy to us.
				</h6>
				<hr class="invisible">	
				
				<?php 
					/*echo $this->Form->create('Local', array('type' => '', 'id'=>'' , 'class' => '')); 	
					// data to save in local
					echo $this->Form->input('user_detail_id', array('type' => 'hidden', 'value' => $userD['UserDetail']['id']));
					echo $this->Form->input('user_bank_id', array('type' => 'hidden', 'value' => $bank['UserBank']['id']));
					echo $this->Form->input('user_acctype_id', array('type' => 'hidden', 'value' => $acctypes['UserAcctypes']['id']));
					echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $user['User']['id']));
					echo $this->Form->input('user_ecr_id', array('type' => 'hidden', 'value' => $ecr['UserEcr']['id']));*/
				?>
				<p>
					<?php echo $this->Form->Submit(__('Finish'), array('class'=>'btn btn-primary'));?>
					<?php echo $this->Form->end(); ?>
				</p>
				
			</div><!--contentinner close-->
		</div><!--mainconten closet-->