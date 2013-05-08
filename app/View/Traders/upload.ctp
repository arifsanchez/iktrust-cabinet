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
							<h3>Please drop your WITHDRAWAL REQUEST FORM here :</h3>
								<br><br>
									<?php echo $this->Form->create('UserDoc', array('type' => 'file', 'id'=>'img_valid' , 'class' => 'stdform')); ?>
									
									<hr>
									<h4>WITHDRAWAL REQUEST FORM</h4>
									<ul>
										<strong>Select File : </strong>
										<div><i class="iconsweets-book-large"> &nbsp;</i> <input type="file" class="validate[required] text-input span2"  id="UserDocForm" name="data[UserDoc][form]"/></div>
									</ul>
									
									<hr>
									
									
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