		<?php //var
		$name = $withdrawal['Withdrawal']['name'];
		$ic = $ic['UserDetail']['ic'];
		//$userbank = $withdrawal['Withdrawal']['userbank'];
		$login = $withdrawal['Withdrawal']['mt4_user_LOGIN'];
		$amount = $withdrawal['Withdrawal']['amount'];
		//$currency = $withdrawal['Ecurr']['name'];
		$id = $withdrawal['Withdrawal']['id'];	
		$date = $withdrawal['Withdrawal']['created'];
		$bankname = $withdrawal['UserBank']['name'];
		//$address = $withdrawal['Ikbank']['address'];
		$acountname = $withdrawal['UserBank']['acc_name'];
		$iban = $withdrawal['UserBank']['iban_no'];
		$accountno = $withdrawal['UserBank']['acc_no'];
		$swift = $withdrawal['UserBank']['swift_no'];
		$phone= $withdrawal['Mt4User']['PHONE'];
		//$sortcode = $withdrawal['UserBank']['sortcode'];
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
											<center><h4>Client's Account Details</h4></center>
											
											<span>Trader Account No : <?echo $login ; ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		<span align="right"> WD/IK# <? echo$num; ?></span> 
											<div><hr></div>
												<table border="0">
													 <tr>
														<td>FULL NAME  </td>	&nbsp;&nbsp;&nbsp;&nbsp;
														<td>: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $name ;?></td>	
													</tr>
													<tr>
														<td>AMOUNT</td>&nbsp;&nbsp;&nbsp;&nbsp;			
														<td>: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $amount	; ?></td>
													</tr>	
													<tr>
														<td>PASSPORT/ NATIONAL ID</td>&nbsp;&nbsp;&nbsp;&nbsp;			
														<td>: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ic ;?> </td>	
													</tr>
													<tr>
														<td>CONTACT NUMBER	</td>&nbsp;&nbsp;&nbsp;&nbsp;		 	
														<td>: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $phone ;?></td>
													</tr>	
												</table>
												<hr>												
												<b>Note : </b><small>I hereby confirms that all position opened have been closed upon submission of this forms. </small>
												<br><br><br>
											<center><h4>IKTrust Client's- Electronic Wire Fund Transfer Details</h4></center>
											<div><hr></div>
											
												<table border="0">
													<tr>
														<td> BENEFICIARY BANK NAME </td>&nbsp;&nbsp;&nbsp;&nbsp;
														<td>: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $bankname ;?> </td>
													</tr>
													<tr>
														<td> BENEFICIARY ACCOUNT NAME </td>&nbsp;&nbsp;&nbsp;&nbsp;
														<td>: &nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $acountname ; ?></td>
													</tr>
													
													<tr>
														<td> ACCOUNT NUMBER	</td>&nbsp;&nbsp;&nbsp;&nbsp;
														<td>: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $accountno;  ?></td>
													</tr>
													<tr>
														<td> IBAN	</td>&nbsp;&nbsp;&nbsp;&nbsp;
														<td>: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $iban;	?></td>
													</tr>
													<tr>
														<td> SWIFT	</td>&nbsp;&nbsp;&nbsp;&nbsp;
														<td> : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $swift  ;?></td>
													</tr>
													<tr>
														<td> CURRENCY	</td>&nbsp;&nbsp;&nbsp;&nbsp;
														<td>:  &nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$" ; ?></td>
													</tr>
												</table> 
											</p>
											<div><hr></div>
											<b>***</b><small> I hereby agreed and understand that all the information in these form are correct and admisable by the court of law.</small>
											<p><b>***</b><small> I agreed that withdrawal are subject to Terms & Conditions published on IK Trust official website (http://www.iktrust.com) and approval by IK Trust finance department.</small>
											</p>
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
		
		