<script src="../js//jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#img_valid").validationEngine();
		});
	</script> 
	
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
							<h3>Please drop your APLLICATION FORM, PROOF OF IDENTITY, and  PROOF OF RESIDENCE here :</h3>
								<br><br>
									<?php echo $this->Form->create('UserDoc', array('type' => 'file', 'id'=>'img_valid' , 'class' => 'stdform')); ?>
									
									<h4>APPLICATION FORM</h4>
									<ul>
										<strong>Select File : </strong>
										<div><i class="iconsweets-book-large"> &nbsp;</i> <input type="file" class="validate[required] text-input span2"  id="UserDocForm" name="data[UserDoc][form]"/></div>
									</ul>
									
									<hr>
									
									<h4>PROOF OF IDENTITY</h4>
									<ul>
										<li><strong>National Passport</strong></li> 
										<li><strong>National Identity Card</strong></li> 
										<li><strong>Driver License</strong></li> 
										<li><strong>Others Government Issued Photo ID</strong></li> 
										<li><strong>Signed &amp; Notarised Financial Statement</strong></li><br>
										<strong>Select File : </strong> 
										<div><i class=" iconsweets-paperclip"> &nbsp;</i> <input type="file" class="validate[required] text-input span2"  id="UserDocDoc1" name="data[UserDoc][doc1]"/></div>
									</ul>

									<br>

									<h4>PROOF OF RESIDENCE</h4>
									<ul>
										<li><strong>Utility Bill</strong><small> (not mobile phone/print from internet)</small></li> 
										<li><strong>Government Issued Letter</strong></li><br>
										<strong>Select File : </strong>
										<div><i class=" iconsweets-paperclip"> &nbsp;</i> <input type="file" class="validate[required] text-input span2"  id="UserDocDoc2" name="data[UserDoc][doc2]"/></div>
										<br>
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