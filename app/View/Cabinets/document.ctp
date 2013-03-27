
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
								
							
							
							
							<h4>PROOF OF IDENTITY</h4>
								<label>National Passport : </label>
								

								<p>
									<label>National Identity Card : </label>
									
								</p>	
								
								<p>
									<label>Driver License : </label>
									
								</p>	
								
								<p>
									<label>Others Government Issued Photo ID : </label>
									
								</p>	

								<p>
									<label>Signed & Notarised Financial Statement : </label>
									
								</p>	
								
								<br>
								<h4>PROOF OF RESIDENCE</h4>
								<label>Utility Bill (not mobile phone / print from internet) : </label>
								
									
								<p>
									<label>Government Issued Letter : </label>
									
								</p>	
							</div>
						</div>
					</div>
				</div>
				<br>
				<p>
				<?php 	echo $this->Html->link('Next', '/cabinets/acknowledge', array('class' => 'btn btn-danger span2'));?>
					
				</p>
		</div><!--contentinner close-->
	</div><!--mainconten closet-->