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
	<div class="maincontent"><!--maincontent open--> 
		<div class="contentinner"><!--contentinner open-->	
		
		<h4 class="widgettitle nomargin shadowed">Traders Application Form</h4>
		<div class="widgetcontent bordered shadowed nopadding">
			<form class="stdform stdform2" >
			
				<?php echo $this->Form->create('Local', array('type' => '', 'id'=>'adminview' , 'class' => 'editprofileform')); ?>
				

					<p>
						<label>Full Name</label>
						<span class="field"><? echo $a['User']['first_name']; ?></span>
					</p>
					
					<p>
						<label>Date Of Birth</label>
						<span class="field"><? echo $a['UserDetail']['bday']; ?></span>
					</p>
					
					<p>
						<label>Gender</label>
						<span class="field"><? echo $a['UserDetail']['gender']; ?></span>
					</p>
					
					<p>
						<label>Passport/I.C No</label>
						<span class="field"><? echo $a['UserDetail']['ic']; ?></span>
					</p>
					
					<p>
						<label>Email Address</label>
						<span class="field"><? echo $a['User']['email']; ?></span>
					</p>
					
					<p>
						<label>Mobile Number</label>
						<span class="field"><? echo $a['UserDetail']['cellphone']; ?></span>
					</p>
				</form>
			</div>
			
			
			<div class="row-fluid">
				<div class="widgetcontent bordered shadowed nopadding span6">
					<h4 class="widgettitle nomargin shadowed">Bank Details</h4>
					<form class="stdform stdform2" method="post" action="forms.html">
						<p>
							<label>Name of Bank</label>
							<span class="field"><? echo $a['UserBank']['name']; ?></span>
						</p>
						
						<p>
							<label>Bank Account Number</label>
							<span class="field"><? echo $a['UserBank']['acc_no']; ?></span>
						</p>
						
						<p>
							<label>Bank Account Name</label>
							<span class="field"><? echo $a['UserBank']['acc_name']; ?></span>
						</p>
						
						<p>
							<label>IBAN Number</label>
							<span class="field"><? echo $a['UserBank']['iban_no']; ?></span>
						</p>
						
						<p>
							<label>SWIFT Number</label>
							<span class="field"><? echo $a['UserBank']['swift_no']; ?></span>
						</p>
					</form>
				</div>
				
				<div class="widgetcontent bordered shadowed nopadding span6">
					<h4 class="widgettitle nomargin shadowed">E-Currency Details</h4>
					<form class="stdform stdform2" method="post" action="forms.html">
						<p>
							<label>E-Currency Provider Name</label>
							<span class="field"><? echo $a['UserEcr']['pro_name']; ?></span>
						</p>
						
						<p>
							<label>E-Currency Account Number</label>
							<span class="field"><? echo $a['UserEcr']['acc_no']; ?></span>
						</p>
						
						<p>
							<label>E-Currency Account Name</label>
							<span class="field"><? echo $a['UserEcr']['acc_name']; ?></span>
						</p>
					</form>
				</div>
			</div>
					
			<div class="widgetcontent bordered shadowed nopadding">
				<h4 class="widgettitle nomargin shadowed">Document Attachment</h4>
				<form class="stdform stdform2" method="post" action="forms.html">	
					
					<div class="row-fluid">
						<div class="span12">
							
							<div class="row-fluid">
								<div class="span6 well">
									<h4>PROOF OF IDENTITY :</h4>
									<span class="field"><a href="<?php echo $this->webroot; ?>img/uploads/<?echo $a['UserDoc']['doc1']?>">Proof of identity</a></span>
								</div>

								<div class="span6 well">
									<h4>PROOF OF RESIDENCE :</h4>
									<span class="field"><a href="<?php echo $this->webroot; ?>img/uploads/<?echo $a['UserDoc']['doc2']?>">Proof of residence</a></span>
									
								</div>
							</div>
							
						</div>
					</div>

					<div>
						<label>Application Status</label>
						<span class="field"><?php echo $this->Form->input('local_status_id',array('label' => "",'empty'=>'Select' ,'div' => false, ));?></span>
					</div>
						<?php 
							// data to save in mt4 and generated trader id
							
							echo $this->Form->input('ibagent', array('type' => 'hidden', 'value' => '1' ));
							echo $this->Form->input('country', array('type' => 'hidden', 'value' => $a['User']['country']));
							echo $this->Form->input('state', array('type' => 'hidden', 'value' => $a['UserDetail']['state']));
							echo $this->Form->input('city', array('type' => 'hidden', 'value' => $a['UserDetail']['city']));
							echo $this->Form->input('address', array('type' => 'hidden', 'value' => $a['UserDetail']['address']));
							echo $this->Form->input('send_reports', array('type' => 'hidden', 'value' => '1'));
							echo $this->Form->input('readonly', array('type' => 'hidden', 'value' => '1'));
							echo $this->Form->input('comment', array('type' => 'hidden', 'value' => 'jjj' ));
							echo $this->Form->input('acctype', array('type' => 'hidden', 'value' => '4' ));
							echo $this->Form->input('name', array('type' => 'hidden', 'value' => $a['User']['first_name']));
							echo $this->Form->input('email', array('type' => 'hidden', 'value' => $a['User']['email']));
							echo $this->Form->input('key', array('type' => 'hidden', 'value' => $mpassword ));
							echo $this->Form->input('investor', array('type' => 'hidden', 'value' => $ipassword ));
							echo $this->Form->input('leverage', array('type' => 'hidden', 'value' => '2' ));
							echo $this->Form->input('agent', array('type' => 'hidden', 'value' =>'888808'));
							
							
						?>
						
						
						
						
					<p class="stdformbutton">
						
						<?php echo $this->Form->Submit(__('Submit'), array('class'=>'btn btn-primary'));?>
					</p>
				
					<?php echo $this->Form->end(); ?>
				</form>
			</div><!--widgetcontent-->
			

			
		</div>
	</div>