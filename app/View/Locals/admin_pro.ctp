
	<div class="maincontent"> 
		<div class="contentinner">	
			<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin"><span class= "iconsweets-admin2"></span>&nbsp; Pro Account Registeration</h3>
						<div class="row-fluid">
							<div class="span12  widgetcontent bordered">
								<div class="span6">
									<h4 class="widgettitle nomargin"><span class=" iconsweets-usercomment"></span>&nbsp; Client's  Details</h4>
									<div class="widgetcontent bordered">
										<fieldset>
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
								</div>
								
								<div class="span6">
								<h4 class="widgettitle nomargin"><span class=" iconsweets-word"></span>&nbsp; Document  Details</h4>
									<div class="widgetcontent bordered">
										<div class=" well">
											<h4>PROOF OF IDENTITY :</h4>
											<br>
											<div align="center">
												<i class=" iconsweets-paperclip"></i> &nbsp;
												<a href="<?php echo $this->webroot; ?>img/uploads/<?echo $b['UserDoc']['doc1']?>">Proof Of Identity</a>
											</div>
										</div>
										<div class=" well">
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
									<h4 class="widgettitle nomargin"><span class=" iconsweets-dropbox"></span>&nbsp; Application Status</h4>
											
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
					
					</div>
			</div>
		</div>
	</div>