<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Introducing Register5!</title>
<link rel="stylesheet" href="../styles/register.css" />
<link rel="stylesheet" href="../accountry/jquery.autocomplete.css" />
<script src="../scripts/jquery.js"></script>
<!--[if IE]>
<script src="scripts/enable-html5.js"></script>
<![endif]-->
</head>
<body>
	
	<div id="vee-sketch"></div>
	
<section id="wrapper">
	
	<header>
		<div id="sash-container">
			<div class="hide-sash-top"></div>
			<div class="hide-sash-left"></div>
			<div class="sash-shadow-top"></div>
			<div class="sash-shadow-left"></div>
			<div class="hide-sash-shadow-top"></div>
			<div class="hide-sash-shadow-left"></div>
			<div id="sash">
				<p>100% HTML<strong>5</strong></p>
			</div>
		</div>
    	<section>
    		<h1>Register5!</h1>
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
		<form action="process/process.html" method="post" id="register-form">
			<fieldset>
				<table>
					<tr>
						<th>
							<label for="form-field-name">Name</label>
						</th>
						<td>
							<input type="text" class="field" name="name" value="" id="form-field-name" />
						</td>
						<td class="form-alert">
							<div class="vee-container form-success">
								<div id="circle-1"></div>
							</div>
							<div class="form-error form-error-blank">
								<p>Most people have a name. Do you?</p>
							</div>
						</td>
					</tr>
					
					<tr>
						<th>
							<label for="form-field-email">Email</label>
						</th>
						<td>
							<input type="email" class="field" name="email" value="" id="form-field-email" />
						</td>
						<td class="form-alert">
							<div class="vee-container form-success">
								<div id="circle-2"></div>
							</div>
							<div class="form-error form-error-email">
								<p>Hmm... are you sure that's a valid email?</p>
							</div>
						</td>
					</tr>
					
					<tr>
						<th>
							<label for="form-field-password">Password</label>
						</th>
						<td>
							<input type="password" class="field" name="password" value="" id="form-field-password" />
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
								<p id="location-detection">We detected you’re from sunny <span class="location-name" id="location-name"></span>, is that right?</p>
								<div id="location-answers-switch">
									<div class="switch">
										<a href="#" title="" class="left-switch" id="switch-yes">Yes</a>
										<a href="#" title="" class="right-switch" id="switch-no">No</a>
									</div>
								</div>
							</section>
							
							<section id="geolocation-fix">
								<!-- In case Geolocation didn't work -->
								<label class="location-type-correction"  for="country-type" id="no-geolocation">We couldn't detect your location.</label>
							
								<!-- In case the user clicked No and in case Geolocation didn't work -->
								<label class="location-type-correction" for="country-type" id="other-location">Do you mind typing in your country’s name?</label>
							
								<input type="text" id='country-type' class="field" name='country' value='' />
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
							<div id="submit-form"><input type="submit" value="Register5!" /></div>
						</td>
					</tr>
					
				</table>
			</fieldset>
		</form>
	</section>

</section>

<!-- Scripts -->
<script src="../scripts/register.js"></script>
<script src="../scripts/jquery-color.js"></script>
<script src="../scripts/raphael.js"></script>
<script src="../accountry/jquery.autocomplete.js"></script>
<script src="../accountry/countries.en.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
</body>
</html>

						