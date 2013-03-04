

<?php  
	echo $this->Html->css('register/register');
	echo $this->Html->css('register/accountry/jquery.autocomplete');
?>
<!--[if IE]>
<script src="scripts/enable-html5.js"></script>
<![endif]-->
	<div id="vee-sketch"></div>
<section id="wrapper">
	<header>
		<div id="sash-container">
			<!--<div class="hide-sash-top"></div>
			<div class="hide-sash-left"></div>
			<div class="hide-sash-shadow-top"></div>-->
			<div class="sash-shadow-top"></div>
			<div class="sash-shadow-left"></div>
			<div class="hide-sash-shadow-left"></div>
			<div id="sash">
				<p>Sign Up Now<strong></strong></p>
			</div>
		</div>
    	<section>
    		<h1>Sign Up</h1>
			<div id="progress"><!-- "Progress" element is not yet recognized by Webkit browsers, div used. -->
				<div id="progress-indicator-container">
					<div id="progress-indicator">
						<div id="progress-canvas"></div>
					</div>
				</div>
				<p class="expletive">Start filling out the form</p>
			</div>
    	</section>
	</header>
	
	<section id="form-container">
	<?php echo $this->Form->create('Register', array('class' => 'register-form', 'action' =>'','url' => '/cabinets/myaccount' , 'method' => 'post')); ?> 
			<fieldset>
				<table>
					<tr>
						<th>
							<label for="form-field-name">Full Name</label>
						</th>
						<td>
							<?php echo $this->Form->input('fullname', array('label' =>"",'type'=>'text', 'class'=>'field', 'name'=> 'name' , 'value' =>'' , 'id' =>'form-field-name'));?>
						</td>
						<td class="form-alert">
							<div class="vee-container form-success">
								<div id="circle-1"></div>
							</div>
							<div class="form-error form-error-blank">
								<p>Please Insert your fullname</p>
							</div>
						</td>
					</tr>
					
					<tr>
						<th>
							<label for="form-field-email">Email</label>
						</th>
						<td>
							<?php echo $this->Form->input('user_email', array('label' =>"",'type'=>'email', 'class'=>'field', 'name'=> 'email' , 'value' =>'' , 'id' =>'form-field-email'));?>
						</td>
						<td class="form-alert">
							<div class="vee-container form-success">
								<div id="circle-2"></div>
							</div>
							<div class="form-error form-error-email">
								<p>Please insert your email</p>
							</div>
						</td>
					</tr>
					
					<tr>
						<th>
							<label for="form-field-password">Password</label>
						</th>
						<td>
							<?php echo $this->Form->input('user_password', array('label' =>"",'type'=>'password', 'class'=>'field', 'name'=> 'password' , 'value' =>'' , 'id' =>'form-field-password'));?>
						</td>
						<td class="form-alert">
							<div class="vee-container form-success">
								<div id="circle-3"></div>
							</div>
							<div class="form-error form-error-password">
								<p>Must be more than 6 characters long</p>
							</div>
						</td>
					</tr>
					
					<tr id="location-wrapper">
						<th>
							<span>Location</span>
						</th>
						<td colspan="2">
							<input type="hidden" name="location" value="" id="form-field-location" />
							
							<!-- In case Geolocation worked, display question -->
							<section id="geolocation-worked">
								<p id="location-detection">We detected you are from  <span class="location-name" id="location-name"></span>, is that right?</p>
								<div id="location-answers-switch">
									<div class="switch">
										<a href="#" title="" class="left-switch" id="switch-yes">Yes</a>
										<a href="#" title="" class="right-switch" id="switch-no">No</a>
									</div>
								</div>
							</section>
							
							<section id="geolocation-fix">
								<!-- In case Geolocation didn't work -->
								<label class="location-type-correction"  for="country-type" id="no-geolocation">We could not detect your location.</label>
							
								<!-- In case the user clicked No and in case Geolocation didn't work -->
								<label class="location-type-correction" for="country-type" id="other-location">Do you mind typing in your country’s name?</label>
								
								<?php echo $this->Form->input('country', array('label' =>"",'type'=>'text', 'class'=>'field', 'name'=> 'country' , 'value' =>'' , 'id' =>'country-type'));?>
								<p id="geolocation-fix-approval"></p>
							</section>
															
							<script>
								var geolocation_fix_height = $("#geolocation-fix").height();
								$("#location-wrapper").css('display', 'none');
							</script>
						</td>
					</tr>
					
					<tr id="submit-wrapper">
						<td colspan="3">
							<script>
								$("#submit-wrapper").hide();
							</script>
							<p id="submit-form-expletive">Thanks for filling out the form!</p>
							<?php echo $this->Form->Submit(__('Submit'), array('class'=>'btn btn-primary '));?>
							<?php echo $this->Form->end(); ?>
							
						</td>
					</tr>
					
				</table>
			</fieldset>
		</form>
	</section>

</section>

<!-- Scripts -->

<?php	 echo $this->Html->script('register/register');?>
<?php	 echo $this->Html->script('register/jquery-color');?>
<?php	 echo $this->Html->script('register/accountry/jquery.autocomplete');?>
<?php	 echo $this->Html->script('register/accountry/countries.en');?>
<?php	echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=false');?>


						