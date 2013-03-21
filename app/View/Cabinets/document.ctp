
<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">Required Account Supporting Document</h3>	
					</div>
				</div>

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
										<input type="radio" name="gender" id="genderM" value="male" checked>
										National Passport
									</label>
								</div>

								<div class="span10">
									<label class="radio">
										<input type="radio" name="gender" id="genderF" value="female">
										National Identity Card
									</label>
								</div>
								
								<div class="span10">
									<label class="radio">
										<input type="radio" name="gender" id="genderF" value="female">
										Drivers License
									</label>
								</div>
								
								<div class="span10">
									<label class="radio">
										<input type="radio" name="gender" id="genderF" value="female">
										Others Government Issued Photo ID
									</label>
								</div>
								
								<div class="span10">
									<label class="radio">
										<input type="radio" name="gender" id="genderF" value="female">
										Signed & Notarised Financial Statement
									</label>
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
											<input type="radio" name="POR" id="#" value="#" checked>
											Utility Bill (not mobile phone / print from internet)
										</label>
									</div>

									<div class="span10">
										<label class="radio">
											<input type="radio" name="POR" id="#" value="#">
											Government Issued Letter
										</label>
									</div>
								</p>
							
							<?php echo $this->Form->end(); ?>
							</div>
						</div></p>
						
							<p>
								<?php echo $this->Form->Submit(__('Next'), array('class'=>'btn btn-primary span2'));?>
							</p>
				</div>
			</div>
			
		</div><!--contentinner close-->
	</div><!--mainconten closet-->