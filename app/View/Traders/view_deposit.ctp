		<?php //var
		$name = $deposit['Deposit']['name'];
		$userbank = $deposit['Deposit']['userbank'];
		$login = $deposit['Deposit']['mt4_user_LOGIN'];
		$amount = $deposit['Deposit']['amount'];
		$currency = $deposit['Ecurr']['name'];
										
		$bankname = $deposit['Ikbank']['bankname'];
		$address = $deposit['Ikbank']['address'];
		$acountname = $deposit['Ikbank']['name'];
		$iban = $deposit['Ikbank']['iban'];
		$accountno = $deposit['Ikbank']['no_account'];
		$swift = $deposit['Ikbank']['swift'];
		$sortcode = $deposit['Ikbank']['sortcode'];
		$currency = $deposit['Ikbank']['currency'];

		?>
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span8">
						<h3 class="widgettitle nomargin">Deposit Transaction Details</h3>	
						<p>
						<div class="row-fluid">
							<div class="span12 well">
								<?php echo $this->Form->create('Deposit', array('type' => '', 'id'=>'' , 'class' => 'stdform')); ?>
								
									
									
										
										<body>
										
											
											<center><h4>Depositor's Account Details</h4></center>
											<p>
											<div><hr></div>
											<br/><br/>
											
												<table border="0">
													 <tr>
														<td>FULL NAME  </td>	
														<td>: <?php echo $name ;?></td>	
													</tr>
													<tr>
														<td>BANK NAME	</td>		 	
														<td>: <?php echo $userbank ;?></td>
													</tr>	
													<tr>
														<td>PAYMENT DETAILS</td>	 			
														<td>: <?php echo  $login ;?></td>
													</tr>	
													<tr>
														<td>AMOUNT</td>			
														<td>: <?php echo $amount	; ?></td>
													</tr>	
													<tr>
														<td>CURRENCY </td>			
														<td>: <?php echo $currency ;?></td>	
													</tr>
												</table> 
											</p>
											<hr>
											<br/><br/>
											<b>Note : </b>If client's account name is different that the Beneficiary name above ,then deposits will be made avaiable to trading accounts only in case of approved & authorized documents. 
											
											<center><h4>IKTrust - ELECTRONIC WIRE FUND TRANSFER DETAILS</h4></center>
											<div><hr></div>
											<br/><br/>
											<p>
												<table border="0">
													<tr>
														<td> BENEFICIARY BANK NAME </td>
														<td>:  <?php echo $bankname ;?> </td>
													</tr>
													<tr>
														<td> BANK ADDRESS </td>
														<td>: <?php  echo $address ; ?></td>
													</tr>
													<tr>
														<td> BENEFICIARY ACCOUNT NAME </td>
														<td>: <?php  echo $acountname ; ?></td>
													</tr>
													<tr>
														<td> IBAN	</td>
														<td>: <?php echo  $iban;	?></td></tr>
													<tr>
														<td> ACCOUNT NUMBER	</td>
														<td>: <?php echo $accountno;  ?></td>
													</tr>
													<tr>
														<td> SWIFT	</td>
														<td> <?php echo $swift  ;?></td>
													</tr>
													<tr>
														<td> SORT CODE	</td>
														<td>: <?php echo $sortcode;  ?></td>
													</tr>
													<tr>
														<td> CURRENCY	</td>
														<td>: <?php echo $currency ; ?></td>
													</tr>
															
														
												</table> 
											</p>
											<div><hr></div>
											<br/><br/>
											<b>*** </b> Please print out this form if necessary to assist in the transfer of funds to your IK Trust trading account through your preferred bank transfer method.
											
											<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
											
											<div><hr></div>
											<center>IK Trust Capital Market Corporation Limited . Secured & Trusted Regulated Broker .New Zealand Company Reg. No. 3851316  </center>
							
									<br><br>
									<label><?php echo $this->Form->Submit(__('Submit'), array('name'=>'submit','class'=>'btn btn-danger primary '));?></label>
									<label><?php echo $this->Form->Submit(__('Print Invoice'), array('name' => 'print' ,'class'=>'btn btn-danger primary '));?></label>
									<?php echo $this->Form->end(); ?>
							</div>
						</div>
						</p>
					</div>
					<div class="span4">
						<h3 class="widgettitle nomargin">Element Deposit</h3>
					</div>
				</div>
			</div><!--contentinner close-->
		</div><!--mainconten closet-->
		
		