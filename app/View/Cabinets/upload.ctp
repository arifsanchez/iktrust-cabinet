	
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
									
										<h4>APPLICATION FORM</h4>
										<ul>
											Submit Form : Here.. &nbsp;<i class="iconfa-hand-down"></i>
											<div><?php echo $this->Form->input('form' ,array('type'=>'file' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' ))?></div>
										</ul>
									
									<hr>
									
										<h4>PROOF OF IDENTITY</h4>
										<ul>
											<li><strong>National Passport</strong></li> 
											<li><strong>National Identity Card</strong></li> 
											<li><strong>Driver License</strong></li> 
											<li><strong>Others Government Issued Photo ID</strong></li> 
											<li><strong>Signed &amp; Notarised Financial Statement</strong></li><br>
											<?php echo $this->Form->input('doc1' ,array('type'=>'file' ,'label' => false, 'div' => false, 'class'=>'input-xlarge' ))?>
										</ul>
										
									<br>
										
										<h4>PROOF OF RESIDENCE</h4>
										<ul>
											<li><strong>Utility Bill</strong><small> (not mobile phone/print from internet)</small></li> 
											<li><strong>Government Issued Letter</strong></li><br>
											<?php echo $this->Form->input('doc2', array('type'=>'file' ,'label' => false, 'div' => false, )); ?>
									   </ul>
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