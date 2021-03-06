	
	<?php 
		//debug($a);die();
		// generate password according to MT4 security rules
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$pass = $chars{rand(0, 25)}.strtolower($chars{rand(0, 25)});
		$mpassword = $pass.substr(md5($_SERVER['REQUEST_TIME']),0,8);
		$ipassword = $pass.substr(md5($_SERVER['REQUEST_TIME']),12,8);

		// getting user IP
		if (strpos($_SERVER['REMOTE_ADDR'],',')) {
			$ip = explode(',',$_SERVER['REMOTE_ADDR']);
			$ip = trim($ip[0]);
		} else {
		  $ip = $_SERVER['REMOTE_ADDR']; 
		}
	?>
	
	<div class="maincontent"> 
		<div class="contentinner">	
			<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin"><span class= "iconsweets-admin2"></span>&nbsp; Traders Application Details</h3>
						
						<div class="row-fluid">
							<div class="span12  widgetcontent bordered">
								<div class="span6 well well-small">
									<fieldset>
										<h4 style="color : #333333">Client's Details &nbsp; <span class=" iconsweets-usercomment pull-right"></span></h4>
										 <hr>
											<div class="form-inline">
											<p>
												<label>Full Name :</label>
												<strong><span class="field"><? echo $a['User']['first_name']; ?></span></strong>
											</p>
											<p>
												<label>Date Of Birth :</label>
												<strong><span class="field"><? echo $a['UserDetail']['bday']; ?></span></strong>
											</p>
											<p>
												<label>Gender :</label>
												<strong><span class="field"><? echo $a['UserDetail']['gender']; ?></span></strong>
											</p>
											<p>
												<label>Passport/I.C No :</label>
												<strong><span class="field"><? echo $a['UserDetail']['ic']; ?></span></strong>
											</p>
											<p>
												<label>Email Address :</label>
												<strong><span class="field"><? echo $a['User']['email']; ?></span></strong>
											</p>
											<p>
												<label>Mobile Number :</label>
												<strong><span class="field"><? echo $a['UserDetail']['cellphone']; ?></span></strong>
											</p>
											</div>
									</fieldset>
								</div>
								
								
								<div class="span6 well well-small ">
									<fieldset>
											<h4 style="color : #333333">Bank Details &nbsp; <span class=" iconsweets-suitcase pull-right"></span></h4>
											<hr>
											<div class="form-inline">
												<p>
													<label>Name of Bank :</label>
													<strong><span class="field"><? echo $a['UserBank']['name']; ?></span></strong>
												</p>
												<p>
													<label>Bank Account Number :</label>
													<strong><span class="field"><? echo $a['UserBank']['acc_no']; ?></span></strong>
												</p>
												<p>
													<label>Bank Account Name :</label>
													<strong><span class="field"><? echo $a['UserBank']['acc_name']; ?></span></strong>
												</p>
												<p>
													<label>IBAN Number :</label>
													<strong><span class="field"><? echo $a['UserBank']['iban_no']; ?></span></strong>
												</p>
												<p>
													<label>SWIFT Number :</label>
													<strong><span class="field"><? echo $a['UserBank']['swift_no']; ?></span></strong>
												</p>
											</div>
									</fieldset>
								</div>
							
								<div class="row-fluid">
									<div class="span12 ">
										<div class="span6 well well-small ">
											<fieldset>
												<h4 style="color : #333333">E-Currency Details &nbsp; <span class="  iconsweets-pricetags pull-right"></span></h4>
												<hr>
												<div class="form-inline">
													<p>
														<label>E-Currency Provider Name  :</label>
														<strong><span class="field"><? echo $a['UserEcr']['pro_name']; ?></span></strong>
													</p>
													
													<p>
														<label>E-Currency Account Number :</label>
														<strong><span class="field"><? echo $a['UserEcr']['acc_no']; ?></span></strong>
													</p>
													
													<p>
														<label>E-Currency Account Name  :</label>
														<strong><span class="field"><? echo $a['UserEcr']['acc_name']; ?></span></strong>
													</p>
												</div>
											</fieldset>
										</div>
										
										
										<div class="span6 well well-small ">
											<fieldset>
													<h4 style="color : #333333">Account Type Details &nbsp; <span class=" iconsweets-cart3 pull-right"></span></h4>
													<hr>
													<div class="form-inline">
														<p>
															<label>Account Type :</label>
															<strong><span class="field"><? echo $a['UserAcctype']['type']; ?></span></strong>
														</p>
														<p>
															<label>Leverage :</label>
															<strong><span class="field"><? echo $a['UserAcctype']['leverage']; ?></span></strong>
														</p>
														<p>
															<label>Islamic :</label>
															<strong><span class="field">
																<? if ( $a['UserAcctype']['islamic'] == 1) {
																		echo "yes";
																	}else{
																		echo "no";
																	}
																?>
															</span></strong>
														</p>
														<p>
															<label>Bonus :</label>
															<strong><span class="field">
																<? if ( $a['UserAcctype']['bonus'] == 1) {
																		echo "yes";
																	}else{
																		echo "no";
																	}
																?>
															</span></strong>
														</p>
													
													</div>
											</fieldset>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row-fluid">
							<div class="span12">
								<h3 class="widgettitle nomargin"><span class=" iconsweets-word"></span>&nbsp; Document  Details</h3>
									<div class="row-fluid">
										<div class="span12  widgetcontent bordered">
											<div class="span4 well">
												<h4>APPLICATION FORM :</h4>
												<br>
												<div align="center">
													<i class=" iconsweets-book-large"></i> &nbsp;
													<a href="<?php echo $this->webroot; ?>img/uploads/<?echo $b['UserDoc']['form']?>">Traders Application Form</a>
												</div>
											</div>
											<div class="span4 well">
												<h4>PROOF OF IDENTITY :</h4>
												<br>
												<div align="center">
													<i class=" iconsweets-paperclip"></i> &nbsp;
													<a href="<?php echo $this->webroot; ?>img/uploads/<?echo $b['UserDoc']['doc1']?>">Proof Of Identity</a>
												</div>
											</div>
											<div class="span4 well">
												<h4>PROOF OF RESIDENCE :</h4>
												<br>
												<div align="center">
													<i class=" iconsweets-document"></i> &nbsp;
													<a href="<?php echo $this->webroot; ?>img/uploads/<?echo $b['UserDoc']['doc2']?>">Proof Of Residence</a>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
				
				<?php echo $this->Form->create('Local', array('type' => ' ', 'class' => ' ')); ?>
				<div class="row-fluid">
					<div class="span12">
							<h3 class="widgettitle nomargin"><span class=" iconsweets-dropbox"></span>&nbsp; Application Status</h3>
									
							<div class="row-fluid">
								<div class="span12  widgetcontent bordered">
									<div class="span4 ">
										<fieldset>
											
										</fieldset>
									</div>
								
									<div class="span8 ">										 
										 <p>
											<label><strong>Application status</strong></label>
											<?php $status = $a['Local']['local_status_id']; ?>
												
											<?php if($status == 1) { ?>
												<input class="radio" type="radio" name="data[Local][local_status_id]" id="status" value="2"/>&nbsp; Verified <br>
												<input class="radio" type="radio" name="data[Local][local_status_id]" id="status" value="3"/>&nbsp; Reject <br>
											<?php } if($status == 2) { ?>
												<input class="radio" type="radio" name="data[Local][local_status_id]" id="status" value="1" />&nbsp; Pending <br>
												<input class="radio" type="radio" name="data[Local][local_status_id]" id="status" value="3"/>&nbsp; Reject <br>
											<?php } if($status == 3) { ?>
												<input class="radio" type="radio" name="data[Local][local_status_id]" id="status" value="1" />&nbsp; Pending <br>
												<input class="radio" type="radio" name="data[Local][local_status_id]" id="status" value="2"/>&nbsp; Verified <br>
											<?php }?>
										</p>
										<hr>
									
										<?php 
											// data to save in mt4 and generated trader idbbb
											echo $this->Form->input('ibagent', array('type' => 'hidden', 'value' => '1' ));
											echo $this->Form->input('country', array('type' => 'hidden', 'value' => $a['User']['country']));
											echo $this->Form->input('state', array('type' => 'hidden', 'value' => $a['UserDetail']['state']));
											echo $this->Form->input('city', array('type' => 'hidden', 'value' => $a['UserDetail']['city']));
											echo $this->Form->input('address', array('type' => 'hidden', 'value' => $a['UserDetail']['address']));
											echo $this->Form->input('phone', array('type' => 'hidden', 'value' => $a['UserDetail']['cellphone']));
											echo $this->Form->input('comment', array('type' => 'hidden', 'value' => 'jjj' ));
											echo $this->Form->input('acctype', array('type' => 'hidden', 'value' =>  $a['UserAcctype']['type'] ));
											echo $this->Form->input('name', array('type' => 'hidden', 'value' => $a['User']['first_name']));
											echo $this->Form->input('email', array('type' => 'hidden', 'value' => $a['User']['email']));
											echo $this->Form->input('key', array('type' => 'hidden', 'value' => $mpassword ));
											echo $this->Form->input('investor', array('type' => 'hidden', 'value' => $ipassword ));
											echo $this->Form->input('leverage', array('type' => 'hidden', 'value' =>$a['UserAcctype']['leverage']  ));
											echo $this->Form->input('agent', array('type' => 'hidden', 'value' =>'888808'));
										?>

										<p class="stdformbutton" align="right">
											<?php echo $this->Form->Submit(__('Submit'), array('class'=>'btn btn-primary span2'));?>
											<br>
										</p>
										<?php echo $this->Form->end(); ?>
									</div>
								</div>
							</div>
					</div>
				</div>
		