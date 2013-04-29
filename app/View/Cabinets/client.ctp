
<script src="../js//jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#form1").validationEngine();
		});
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
								<?php echo $this->Form->create('User', array('type' => '', 'id'=>'form1' , 'class' => 'stdform',)); ?>
								<?php echo $this->Form->input('User.id',array('type' => 'hidden', 'label' => false,'div' => false, 'value' => $user));?>
								<?php echo $this->Form->input('UserDetail.id',array('type' => 'hidden', 'label' => false,'div' => false, 'value' =>$detail));?>
									
								<p>
									<label>Full Name</label>
									<span class="field"><input class="validate[required] text-input span6" type="text" name="data[User][first_name]" id="UserFirstName" /></span>
								</p>
								
								<p>
									<label>Date Of Birth <br><small>(Ex. 20/02/1970)</small></label>
									<span class="field"><input type="text" class="validate[required] text-input span6" id="UserDetailBdayMonth" name="data[UserDetail][bday]"/></span>
								</p>
								
								<p>
									<label>Passport / Identity Card Number</label>
									<span class="field"><input type="text" class="validate[required] text-input span6" id="UserDetailIc" name="data[UserDetail][ic]"/></span>
								</p>
								
								<p>
									<!--Transfer data from php/cakephp to database-->
									<label>Gender</label>
									<span class="field">
										<input class="validate[required] radio" type="radio" name="data[UserDetail][gender]" id="UserDetailGenderMale" value="male" />&nbsp; Male <br>
										<input class="validate[required] radio" type="radio" name="data[UserDetail][gender]" id="UserDetailGenderFemale" value="female"/>&nbsp; Female
									</span>
								</p>
								
								<p>
									<label>Occupation / Career</label>
									<span class="field"><input type="text" class="validate[required] text-input span6" id="UserDetailOccupation" name="data[UserDetail][occupation]"/></span>
								</p>

								<p>
									<label>Address</label>
									<span class="field"><input type="text" class="validate[required] text-input span6" id="UserDetailAddress" name="data[UserDetail][address]"/></span>
								</p>
								
								<p>
									<label>Town / City</label>
									<span class="field"><input type="text" class="validate[required] text-input span6" id="UserDetailCity" name="data[UserDetail][city]"/></span>
								</p>
								
								<p>
									<label>State / Country</label>
									<span class="field"><input type="text" class="validate[required] text-input span6" id="UserDetailState" name="data[UserDetail][state]"/></span>
								</p>
								
								<p>
									<label>Postalcode / Zip</label>
									<span class="field"><input type="text" class="validate[required] text-input span6" id="UserDetailPostal" name="data[UserDetail][postal]"/></span>
								</p>
								 
								<p>
									<label>Authorized Mobile Number</label>
									<span class="field"><input type="text" class="validate[required] text-input span6" id="UserDetailCellphone" name="data[UserDetail][cellphone]"/></span>
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