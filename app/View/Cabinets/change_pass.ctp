
	<div class="maincontent"><!--maincontent open--> 
		<div class="contentinner"><!--contentinner open-->	
		<?php echo $this->element('newsticker'); ?>
			<!--FIRST TTLE/HEADER-->
			<br>
			<div class="row-fluid">
				<div class="span12">
					<h2>My Profile</h2>
				</div>
			</div>
			
			<!--TABLE DOWNLOAD PLATFORM-->				
			<br>
			<br>
			<div class="tabbable"> <!-- Only required for left/right tabs -->
				<div class="row-fluid"> 
					<div class="span10">
						<ul class="nav nav-tabs">
						<!--TAB TITLE ONLY-->
							<li>
								<a href="myprofile">Edit Profile</a>
							</li>
							
							<li class="active">
								<a href="change_pass">Change Password</a>
							</li>
							
							<li>
								<a href="pending">Pending Verification</a>
							</li>								
						</ul>
						
						<div class="tab-content">
							<div class="tab-pane active" id="tab2">
								<div class="row-fluid">
									<div class="span1">
									</div>

									<div class="span6">
										<br>
										<h3 class="widgettitle nomargin">Change Password</h3>
										<div class="widgetcontent bordered">
											<form class="form-horizontal">
												<div class="control-group">
													<label class="control-label" for="#">*Enter Current Password</label>
													<div class="controls">
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'password',
														'placeholder' => 'Current Password',
														'label' => "")); 
													?>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">*New Password</label>
													<div class="controls">
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'password',
														'placeholder' => 'New Password',
														'label' => "")); 
													?>
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label" for="#">*Re-Enter New Password</label>
													<div class="controls">
													<?php echo $this->Form->input('P.edit', array(
														'type' => 'password',
														'placeholder' => 'Re-Enter New Password',
														'label' => ""));  
													?>
													</div>
												</div>
												
												<div class="control-group">
													<div class="controls">
														<button type="submit" class="btn">Submit</button>
													</div>
												</div>
											</form>
										</div>
									</div>

									<div class="span5">
										<br>
										<blockquote>
											<p>Important Notes</p>
											<small>To reset your Account Password, please enter a new password</small>
										</blockquote>
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
			</div>

		</div><!--contentinner close-->
	</div><!--mainconten closet-->