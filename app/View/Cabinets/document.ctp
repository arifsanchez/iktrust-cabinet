
<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">Account Supporting Document</h3>	
						
						<div class="row-fluid">
							<div class="span6">
								<?php echo $this->Form->create('User', array('type' => '#', 'id'=>'#' , 'class' => '#')); ?>
								<?php echo $this->Form->input('User.id',array('type' => 'hidden', 'label' => false,'div' => false)); ?>
								<?php echo $this->Form->input('UserDetail.id',array('type' => 'hidden', 'label' => false,'div' => false)); ?>
									
									<p><strong>
										For each individual account registration, you must provide at least one PROOF OF IDENTITY and PROOF OF RESIDENCE :
									</strong></p>
									
									<h4>PROOF OF IDENTITY</h4>

									<div class="row-fluid">	
										<div class="span10">
											
	

										<p>											
											<div class="span10">
												<label class="radio">	
													<input type="radio" name="POI" id="pass" value="pass">
													National Passport
												</label>
												<div>
													<?php 
														echo $this->Form->input('#' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ));
													?>
												</div>
											</div>

											<div class="span10">
												<label class="radio">
													<input type="radio" name="POI" id="ic" value="ic">
													National Identity Card
												</label>
												<div>
													<?php 
														echo $this->Form->input('#' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ));
													?>
												</div>
											</div>

											<div class="span10">
												<label class="radio">
													<input type="radio" name="POI" id="license" value="license">
													Drivers License
												</label>
												<div>
													<?php 
														echo $this->Form->input('#' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ));
													?>
												</div>
											</div>

											<div class="span10">
												<label class="radio">
													<input type="radio" name="POI" id="id" value="id">
													Others Government Issued Photo ID
												</label>
												<div>
													<?php 
														echo $this->Form->input('#' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ));
													?>
												</div>
											</div>
											
											<div class="span10">
												<label class="radio">
													<input type="radio" name="POI" id="financial" value="financial">
													Signed & Notarised Financial Statement
												</label>
												<div>
													<?php 
														echo $this->Form->input('#' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ));
													?>
												</div>
											</div>
										</p>
										</div>
									</div>

									
									<p><h4>PROOF OF RESIDENCE</h4>
									<div class="row-fluid">	
										<div class="span10">
											<p>								
												<div class="span10">
													<label class="radio">	
														<input type="radio" name="POR" id="bill" value="bill">
														Utility Bill (not mobile phone / print from internet)
													</label>
													<div>
													<?php 
														echo $this->Form->input('#' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ));
													?>
												</div>
												</div>

												<div class="span10">
													<label class="radio">
														<input type="radio" name="POR" id="letter" value="letter">
														Government Issued Letter
													</label>
													<div>
													<?php 
														echo $this->Form->input('#' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ));
													?>
												</div>
												</div>
											</p>
										</div>
									</div></p>

							</div>
						</div>
						
					</div>
				</div>
				<p>
					<?php echo $this->Form->Submit(__('Next'), array('class'=>'btn btn-danger span2'));?>
					<?php echo $this->Form->end(); ?>
				</p>
		</div><!--contentinner close-->
	</div><!--mainconten closet-->