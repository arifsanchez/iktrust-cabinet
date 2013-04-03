<?php
	$url = 'http://netdna.bootstrapcdn.com/';

	// generate password according to MT4 security rules
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$pass = $chars{rand(0, 25)}.strtolower($chars{rand(0, 25)});
		$mpassword = $pass.substr(md5($_SERVER['REQUEST_TIME']),0,8);
		$ipassword = $pass.substr(md5($_SERVER['REQUEST_TIME']),12,8);

	// getting user IP
		if (strpos($_SERVER['REMOTE_ADDR'],',')) {
			$ip = explode(',',$_SERVER['REMOTE_ADDR']);
			$ip = trim($ip[0]);
		} else {
		  $ip = $_SERVER['REMOTE_ADDR'];
		}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<title>IK Trust - Account Registration Form</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="<?php echo $url; ?>bootswatch/2.3.1/united/bootstrap.min.css" rel="stylesheet">

		<script src="<?php echo $url; ?>twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    </head>
	<body class="container">
		<div class="row-fluid">
    		<div class="span12">
    			<form action="" method="post">

				<fieldset>
					<legend>MINI Trading Account Registration</legend>
					
					<input type="hidden" name="action" value="register">
					<input type="hidden" name="ip" value="<?php echo $ip; ?>">
					<input type="hidden" name="ibagent" value="1">
					<input type="hidden" name="country" value="Malaysia">
					<input type="hidden" name="state" value="Selangor">
					<input type="hidden" name="city" value="PJ">
					<input type="hidden" name="address" value="Seksyen 17">
					<input type="hidden" name="send_reports" value="1">
					<input type="hidden" name="readonly" value="1">
					<input type="hidden" name="comment" value="<?php echo $ip; ?>,<?php echo $mpassword; ?>">

					<label>Account Type</label>
					<label class="radio inline">
				    <input type="radio" name="acctype" id="mflns" value="1"> Mini (5 Decimals With Swap)
				    </label>
				    <label class="radio inline">
				    <input type="radio" name="acctype" id="mfls" value="2"> Mini (5 Decimals)
				    </label>
				    <label class="radio inline">
				    <input type="radio" name="acctype" id="mfis" value="3"> Mini (4 Decimals With Swap)
				    </label>
				    <label class="radio inline">
				    <input type="radio" name="acctype" id="mfins" value="4"> Mini (4 Decimals)
				    </label>

					<label>Full Name</label>
					<input type="text" name="name" value="IKWEBTEST">

					<label>Email</label>
					<input type="text" name="email" value="arifsanchez@gmail.com">

					<label>Master Password</label>
					<input type="text" name="password" value="<?php echo $mpassword;?>">

					<label>Investor Password</label>
					<input type="text" name="investor" value="<?php echo $ipassword;?>">
					
					<label>Leverage</label>
					<select name="leverage">
						<option value="1">1:1</option>
						<option value="88">1:88</option>
						<option value="888">1:888</option>
						<option value="1000">1:1000</option>
						<option value="1888">1:1888</option>
						<option value="2000">1:2000</option>
					</select>
					
					<label>Introducing Broker / Affiliate ID</label>
					<input type="text" name="agent" value="888808">

				</fieldset>
				<button type="submit" class="btn btn-large btn-primary">Submit</button>
				</form>
    		</div>
    	</div>
	</body>
</html>