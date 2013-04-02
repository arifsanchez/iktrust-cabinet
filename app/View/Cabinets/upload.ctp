	
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">Upload File</h3>	
						
						
						<div class="row-fluid"> 
							<div class="span12 well">
							<h4>	
								<strong>
									For each individual account registration, you must provide at least one PROOF OF IDENTITY and PROOF OF RESIDENCE :
								</strong>
							</h4>
								<br><br>
								<?php echo $this->Form->create('UserDoc', array('type' => 'file', 'id'=>'' , 'class' => 'stdform')); ?>
								<?php #echo $this->Form->input('user_id', array('type' => 'hidden' ,'value' => $user));?>
									
										<h4>PROOF OF IDENTITY</h4>
										<p>
											<div>National Passport / National Identity Card / Driver License / Others Government Issued Photo ID / </div> 
											<div>Signed & Notarised Financial Statement </div>
											<?php echo $this->Form->input('doc1' ,array('type'=>'file' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
										</p>
										
									<br>
										
										<h4>PROOF OF RESIDENCE</h4>
										<p>
											<div>Utility Bill (not mobile phone / print from internet) / Government Issued Letter  </div>
											<?php echo $this->Form->input('doc2', array('type'=>'file' ,'label' => false, 'div' => false, )); ?>
									   </p>
							</div>
						</div>
						
						
					</div>
				</div>
				<p>
					<?php echo $this->Form->Submit(__('Submit'), array('class'=>'btn btn-danger span2'));?>
					<?php echo $this->Form->end(); ?>
				</p>
		</div><!--contentinner close-->
	</div><!--mainconten closet-->