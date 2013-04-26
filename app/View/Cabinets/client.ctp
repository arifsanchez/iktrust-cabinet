
	<?php 
	//	echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); 
	//	echo $this->Html->script('/usermgmt/js/ajaxValidation');
	?>
	
	<script type="text/javascript">
	<!--
		function validate(){
		   if( document.myForm.first_name.value == "" ){
			 alert( "Please provide your name.." );
			 document.myForm.first_name.focus() ;
			 return false;
		   }
		   
		   if( document.myForm.bday.value == "" ){
			 alert( "Please provide your date of birth.." );
			 document.myForm.data[UserDetail][bday][month].focus() ;
			 return false;
		   }
		   
		   if( document.myForm.ic.value == "" ){
			 alert( "Please provide your ic/passport.." );
			 document.myForm.ic.focus() ;
			 return false;
		   }
		   
		   /*if( document.myForm.gender.value == "" ){
			 alert( "Please provide your ic/passport.." );
			 document.myForm.gender.focus() ;
			 return false;
		   }*/
		   
		   if( document.myForm.occupation.value == "" ){
			 alert( "Please provide your occupation.." );
			 document.myForm.occupation.focus() ;
			 return false;
		   }
		   
		   if( document.myForm.address.value == "" ){
			 alert( "Please provide your address.." );
			 document.myForm.address.focus() ;
			 return false;
		   }
		   
		   if( document.myForm.city.value == "" ){
			 alert( "Please provide your city.." );
			 document.myForm.city.focus() ;
			 return false;
		   }
		   
		   if( document.myForm.state.value == "" ){
			 alert( "Please provide your state.." );
			 document.myForm.state.focus() ;
			 return false;
		   }
		   
		   if( document.myForm.postal.value == "" ){
			 alert( "Please provide your postal.." );
			 document.myForm.postal.focus() ;
			 return false;
		   }
		   
		   if( document.myForm.cellphone.value == "" ){
			 alert( "Please provide your cellphone.." );
			 document.myForm.cellphone.focus() ;
			 return false;
		   }
		   return( true );
		}
	//-->
	</script>

	<script>
		jQuery(document).ready(function(){
			jQuery( "#UserDetailBdayMonth" ).datepicker();
		});
	</script>
	
	<div class="maincontent">
		<div class="contentinner">
		<?php echo $this->element('newsticker'); ?>

			<br>
			<div class="row-fluid">
				<div class="span12">
					<h3 class="widgettitle nomargin">STEP 2 : Client Details</h3>		
						
						<div class="row-fluid">
							<div class="span6">
							
								<?php echo $this->Form->create('User', array('type' => '', 'id'=>'form1' , 'class' => 'stdform', 'name' => 'myForm', 'onsubmit' => 'return(validate())')); ?>
								<?php echo $this->Form->input('User.id',array('type' => 'hidden', 'label' => false,'div' => false, 'value' => $user));?>
								<?php echo $this->Form->input('UserDetail.id',array('type' => 'hidden', 'label' => false,'div' => false, 'value' =>$detail));?>
									
								<p>
									<label>Full Name</label>
									<span class="field"><?php echo $this->Form->input('User.first_name' ,array('label' => false,'div' => false,'class'=>'span6', 'type'=>'text', 'name'=>'first_name')); ?></span>
								</p>
								
								<p>
									<label>Date Of Birth <br><small>(Ex. 20/02/1970)</small></label>
									<!--span class="field"><?php #echo $this->Form->input('UserDetail.bday' ,array('label' => false,'div' => false,'class'=>'span2'));?></span-->
									 <span class="field"><input type="text" class="span6" id="UserDetailBdayMonth" name="bday"/></span>
								</p>
								
								<p>
									<label>Passport / Identity Card Number</label>
									<span class="field"><?php echo $this->Form->input('UserDetail.ic' ,array('label' => false,'div' => false,'class'=>'span6', 'type'=>'text', 'name'=>'ic' )); ?></span>
								</p>
								
								<p>
									<!--Transfer data from php/cakephp to database-->
									<label>Gender</label>
									<span class="field">
										<input class="radio" type="radio" name="gender" id="UserDetailGenderMale" value="male" />&nbsp; Male <br>
										<input class="radio" type="radio" name="gender" id="UserDetailGenderFemale" value="female"/>&nbsp; Female
									</span>
								</p>
								
								<p>
									<label>Occupation / Career</label>
									<span class="field"><?php echo $this->Form->input('UserDetail.occupation' ,array('label' => false,'div' => false,'class'=>'span6', 'type'=>'text', 'name'=>'occupation' )); ?></span>
								</p>

								<p>
									<label>Address</label>
									<span class="field"><?php echo $this->Form->input('UserDetail.address' ,array('label' => false, 'div' => false, 'class'=>'span6', 'type'=>'text', 'name'=>'address' ));?></span>
								</p>
								
								<p>
									<label>Town / City</label>
									<span class="field"><?php echo $this->Form->input('UserDetail.city' ,array('label' => false, 'div' => false, 'class'=>'span6', 'type'=>'text', 'name'=>'city' ));?></span>
								</p>
								
								<p>
									<label>State / Country</label>
									<span class="field"><?php echo $this->Form->input('UserDetail.state' ,array('label' => false, 'div' => false, 'class'=>'span6', 'type'=>'text', 'name'=>'state' ));?></span>
								</p>
								
								<p>
									<label>Postalcode / Zip</label>
									<span class="field"><?php echo $this->Form->input('UserDetail.postal' ,array('label' => false, 'div' => false, 'class'=>'span6', 'type'=>'text', 'name'=>'postal' ));?></span>
								</p>
								 
								<p>
									<label>Authorized Mobile Number</label>
									<span class="field"><?php echo $this->Form->input('UserDetail.cellphone' ,array('label' => false, 'div' => false, 'class'=>'span6', 'type'=>'text', 'name'=>'cellphone' ));?></span>
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
		</div>
	</div>