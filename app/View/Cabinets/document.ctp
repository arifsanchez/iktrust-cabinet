
<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3 class="widgettitle nomargin">STEP 5 : Account Supporting Document</h3>	
						
						<br>
						<div class="row-fluid">	
							<div class="well well-large span7">
								<button type="button" class="close" data-dismiss="alert"></button>
								<strong>For each individual account registration, you must provide at least one PROOF OF IDENTITY and PROOF OF RESIDENCE :</strong>
								<hr class="invisible">
								
								<dl>
								  <dt><h3>PROOF OF IDENTITY</h3></dt>
								  <br>
								  <dd><li>National Passport</li></dd>
								  <dd><li>National Identity Card</li></dd>
								  <dd><li>Driver License</li></dd>
								  <dd><li>Others Government Issued Photo ID</li></dd>
								  <dd><li>Signed &nbsp; Notarised Financial Statement</li></dd>
								</dl>
							</div>
						</div>
						
						<div class="row-fluid">
							<div class="well well-large span7">
								<button type="button" class="close" data-dismiss="alert"></button>
							  
								<dl>
								  <dt><h3>PROOF OF RESIDENCE</h3></dt>
								  <br>
								  <dd><li>Utility Bill <br><strong><small>(not mobile phone / print from internet)<small></strong></li></dd>
								  <dd><li>Government Issued Letter</li></dd>
								</dl>
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