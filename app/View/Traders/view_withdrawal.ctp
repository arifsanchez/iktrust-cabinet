		<?php //var
		$name = $withdrawal['Withdrawal']['name'];
		//$userbank = $withdrawal['Withdrawal']['userbank'];
		$login = $withdrawal['Withdrawal']['mt4_user_LOGIN'];
		$amount = $withdrawal['Withdrawal']['amount'];
		//$currency = $withdrawal['Ecurr']['name'];
		$id = $withdrawal['Withdrawal']['id'];	
		$date = $withdrawal['Withdrawal']['created'];
		$bankname = $withdrawal['UserBank']['name'];
		//$address = $withdrawal['Ikbank']['address'];
		$acountname = $withdrawal['UserBank']['acc_name'];
		$iban = $withdrawal['UserBank']['iban'];
		$accountno = $withdrawal['UserBank']['acc_no'];
		$swift = $withdrawal['UserBank']['swift'];
		$sortcode = $withdrawal['UserBank']['sortcode'];
		//$currency = $withdrawal['Ikbank']['currency'];
		$num = str_pad($id, 8, '0', STR_PAD_LEFT);
		?>
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span8">
						<h3 class="widgettitle nomargin">Withdrawal Transaction Details</h3>	
						<p>
						<div class="row-fluid">
							<div class="span12 well">
								<?php echo $this->Form->create('Withdrawal', array('type' => '', 'id'=>'' , 'class' => 'stdform')); ?>
										<body>
											<center><h4>Depositor's Account Details</h4></center>
											
											Trader Account No : <?echo $login ; ?>&nbsp;&nbsp;&nbsp;	<div align="right"> DP/IK# <? echo$num; ?></div> 
											<div><hr></div>
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
														<td>AMOUNT</td>			
														<td>: <?php echo $amount	; ?></td>
													</tr>	
													<tr>
														<td>CURRENCY </td>			
														<td>: <?php echo $currency ;?></td>	
													</tr>
												</table>
												<hr>												
												<b>Note : </b><small>If client's account name is different that the Beneficiary name above ,then deposits will be made available to trading accounts only in case of approved & authorized documents. </small>
											<center><h4>IKTrust - ELECTRONIC WIRE FUND TRANSFER DETAILS</h4></center>
											<div><hr></div>
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
														<td> : <?php echo $swift  ;?></td>
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
											<b>*** </b><small> Please print out this form if necessary to assist in the transfer of funds to your IK Trust trading account through your preferred bank transfer method.</small>
							
									<br><br>
									<label><?php echo $this->Form->Submit(__('Submit'), array('name'=>'submit','class'=>'btn btn-danger primary '));?></label>
									<label><?php echo $this->Form->Submit(__('Print Invoice'), array('name' => 'print' ,'class'=>'btn btn-danger primary '));?></label>
									<?php echo $this->Form->end(); ?>
							</div>
						</div>
						</p>
					</div>
					<div class="span4">
						<h3 class="widgettitle nomargin">Element Withdrawal</h3>
					</div>
				</div>
			</div><!--contentinner close-->
		</div><!--mainconten closet-->
		
		