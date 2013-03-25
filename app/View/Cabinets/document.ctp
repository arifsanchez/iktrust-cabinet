
<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">Account Supporting Document</h3>	
						
						<br>
						<div class="row-fluid">
							<div class="span12">
								<strong>
									For each individual account registration, you must provide at least one PROOF OF IDENTITY and PROOF OF RESIDENCE :
								</strong>
							</div>
						</div>


					<div class="row-fluid">	
						<div class="span12">
								
							<?php echo $this->Form->create('#', array('type' => '', 'id'=>'' , 'class' => 'stdform')); ?>
							<?php echo $this->Form->input('User.id',array('type' => 'hidden', 'label' => false,'div' => false)); ?>
							<?php echo $this->Form->input('UserDetail.id',array('type' => 'hidden', 'label' => false,'div' => false)); ?>
							
							<h4>PROOF OF IDENTITY</h4>
								<label>National Passport : </label>
								<?php 
									echo $this->Form->input('Docs.doc1' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ));
								?>

								<p>
									<label>National Identity Card : </label>
									<?php 
										echo $this->Form->input('Docs.doc2' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ));
									?>
								</p>	
								
								<p>
									<label>Driver License : </label>
									<?php 
										echo $this->Form->input('Docs.doc3' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ));
									?>
								</p>	
								
								<p>
									<label>Others Government Issued Photo ID : </label>
									<?php 
										echo $this->Form->input('Docs.doc4' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ));
									?>
								</p>	

								<p>
									<label>Signed & Notarised Financial Statement : </label>
									<?php 
										echo $this->Form->input('Docs.doc5' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ));
									?>
								</p>	
								
								<br>
								<h4>PROOF OF RESIDENCE</h4>
								<label>Utility Bill (not mobile phone / print from internet) : </label>
								<?php 
									echo $this->Form->input('Docs.doc6' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ));
								?>
									
								<p>
									<label>Government Issued Letter : </label>
									<?php 
										echo $this->Form->input('Docs.doc7' ,array('type' => 'file' ,'label' => false,'div' => false,'class'=>'fileupload fileupload-new' ));
									?>
								</p>	
							</div>
						</div>
					</div>
				</div>
				<br>
				<p>
					<?php echo $this->Form->Submit(__('Next'), array('class'=>'btn btn-danger span2'));?>
					<?php echo $this->Form->end(); ?>
				</p>
		</div><!--contentinner close-->
	</div><!--mainconten closet-->