	
	<?php 
		//debug($a);die();
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
	
	<div class="maincontent"> 
		<div class="contentinner">	
			
			<div class = "row-fluid">
				<div class="span8">
					<h3 class="widgettitle nomargin shadowed">Affilliate Application Details : &nbsp;IK<?php  echo str_pad($locals['Affilliate']['id'], 8, '0', STR_PAD_LEFT); ?> </h3>
					<div class="widgetcontent bordered shadowed nopadding">
						<?php echo $this->Form->create('User', array('type' => '', 'class' => 'stdform stdform2')); ?>
							<p>
								<label>Status</label>
								<strong><span class="field"><?php echo $locals['Affilliate']['status']; ?></span></strong>
							</p>
							
							<p>
								<label>Name</label>
								<strong><span class="field"><?php echo $locals['Affilliate']['name']; ?></span></strong>
							</p>
							
							<p>
								<label>Phone</label>
								<strong><span class="field"><?php echo $locals['Affilliate']['phone']; ?></span></strong>
							</p>
							
							<p>
								<label>Address</label>
								<strong><span class="field"><?php echo $locals['Affilliate']['address']; ?></span></strong>
							</p>
							
							<p>
								<label>Country</label>
								<strong><span class="field"><?php echo $locals['Affilliate']['country']; ?></span></strong>
							</p>
							
							<p>
								<label>Email</label>
								<strong><span class="field"><?php echo $locals['Affilliate']['email']; ?></span></strong>
							</p>
							
							<p>
								<label>Project Name</label>
								<strong><span class="field"><?php echo $locals['Affilliate']['project_name']; ?></span></strong>
							</p>
							
							<p>
								<label>Year Of Creation</label>
								<strong><span class="field"><?php echo $locals['Affilliate']['year_creation']; ?></span></strong>
							</p>
							
							<p>
								<label>Website</label>
								<strong><span class="field"><?php echo $locals['Affilliate']['website']; ?></span></strong>
							</p>

							<p>
								<label>Affiliate Code</label>
								<strong><span class="field"><?php echo $locals['Affilliate']['affilliate_code']; ?></span></strong>
							</p>
							
							<p>
								<label>Comment</label>
								<strong><span class="field"><?php echo $locals['Affilliate']['comment']; ?></span></strong>
							</p>
							
							<p>
								<label>Application status</label>
								<?php $status = $locals['Affilliate']['local_status_id']; ?>
									
								<?php if($status == 1) { ?>
										<input class="radio" type="radio" name="data[Affilliate][local_status_id]" id="AffilliateLocalStatusId" value="2"/>&nbsp;Verified &nbsp;
										<input class="radio" type="radio" name="data[Affilliate][local_status_id]" id="AffilliateLocalStatusId" value="3"/>&nbsp;Reject &nbsp; 
								<?php } if($status == 2) { ?>
										<input class="radio" type="radio" name="data[Affilliate][local_status_id]" id="AffilliateLocalStatusId" value="1" />&nbsp;Pending &nbsp;
										<input class="radio" type="radio" name="data[Affilliate][local_status_id]" id="AffilliateLocalStatusId" value="3"/>&nbsp;Reject &nbsp; 
								<?php } if($status == 3) { ?>
										<input class="radio" type="radio" name="data[Affilliate][local_status_id]" id="AffilliateLocalStatusId" value="1" />&nbsp;Pending &nbsp;
										<input class="radio" type="radio" name="data[Affilliate][local_status_id]" id="AffilliateLocalStatusId" value="2"/>&nbsp;Verified &nbsp;
								<?php }?>
							</p>
							
							<?php  echo $this->Form->input('status', array('type' => 'hidden', 'value' =>$locals['Affilliate']['status'])); ?>
							<?php  echo $this->Form->input('name', array('type' => 'hidden', 'value' =>$locals['Affilliate']['name'])); ?>
							<?php  echo $this->Form->input('country', array('type' => 'hidden', 'value' =>$locals['Affilliate']['country'])); ?>
							<?php  echo $this->Form->input('email', array('type' => 'hidden', 'value' =>$locals['Affilliate']['email'])); ?>
							<?php  echo $this->Form->input('key', array('type' => 'hidden', 'value' =>$locals['Affilliate']['key'])); ?>
							<?php  echo $this->Form->input('user_group_id', array('type' => 'hidden', 'value' => 3)); ?>
							<p class="stdformbutton">
                                <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
                            </p>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>

		</div>
	</div>