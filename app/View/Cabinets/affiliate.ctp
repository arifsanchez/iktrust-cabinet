
	<script>
		jQuery(document).ready(function(){
			jQuery("#leverage").chained("#type"); 
		});
	</script>
	
	<div class="maincontent">
			<div class="contentinner">
				<?php echo $this->element('newsticker'); ?>
				<br>
				<div class="well well-small">
					<h2>Affiliate (Trader Partner)</h2>
					<p>
						In order to register for the Affiliate Program, please fill out the form below. In the "Comments" field, fully describe your suggested work system. Once the application form has been filled out, it will be assessed by the Customer Relations Department, which will take a small amount of time. You shall be notified by e-mail of the result.
					</p>
				</div>

                <div class="widgetcontent bordered shadowed nopadding span11">
						<?php echo $this->Form->create('#', array('id'=>'registerAffilliates' ,'class' => "stdform stdform2")); ?>
						
							<h3 class="widgettitle nomargin shadowed">Personal Data </h3>
								<p>
									<label>Status</label>
									<span class="field"><select name="selection" id="selection2" class="uniformselect">
										<option value="Individual">Individual</option>
										<option value="Company">Company</option>
									</select></span>
								</p>
								
								<p>
									<label>Full Name</label>
									<span class="field"><?php echo $this->Form->input("#" ,array('type' => "text" , 'label' => false, 'div' => false, 'class'=>"span4" ))?></span>
								</p>
								
								<p>
									<label>Phone Number</label>
									<span class="field"><?php echo $this->Form->input("#" ,array('type' => "text" , 'label' => false, 'div' => false, 'class'=>"span4" ))?></span>
								</p>
								
								<p>
									<label>Address</label>
									<span class="field"><?php echo $this->Form->input("#" ,array('type' => "text" , 'label' => false, 'div' => false, 'class'=>"span4" ))?></span>
								</p>
								
								<p>
									<label>Country</label>
									<span class="field"><select name="selection" id="selection2" class="uniformselect">
										<option value="Individual">Malaysia</option>
										<option value="Company">Company</option>
									</select></span>
								</p>
								
								<p>
									<label>Email</label>
									<span class="field"><?php echo $this->Form->input("#" ,array('type' => "email" , 'label' => false, 'div' => false, 'class'=>"span4" ))?></span>
								</p>
							<br>
							<h3 class="widgettitle nomargin shadowed">Optional</h3>							
								<p>
									<label>Affiliate Code<small>The field is optional. in this field you may enter the affiliate code of a partner who referred you to the company.</small></label>
									<span class="field"><?php echo $this->Form->input("#" ,array('type' => "text" , 'label' => false, 'div' => false, 'class'=>"span4" ))?></span>
								</p>
								
								<p>
									<label>Comment<small>The field is optional. in this field you may enter the details of your project.</small></label>
									 <span class="field"><?php echo $this->Form->input("#" ,array('type' => "textarea" , 'label' => false, 'div' => false, 'class'=>"span3", ' rows'=>"3"))?></span>
								</p>
								
								<p>
									<label>Domain Type</label>
									<span class="field"><select name="selection" id="selection2" class="uniformselect">
										<option value="Individual">-----</option>
										<option value="Company">My Domain Name</option>
										<option value="Individual">***.ifxworld.com</option>
										<option value="Company">***.insta-affiliate.com</option>
									</select></span>
								</p>
								
								<p>
									<label>Domain Name<small>You need to enter the domain name for your affiliate website, using the simple <strong>instruction</strong> for purchasing a domain name.</small></label>
									<span class="field"><?php echo $this->Form->input("#" ,array('type' => "text" , 'label' => false, 'div' => false, 'class'=>"span4" ))?></span>
								</p>
								
								<p>
									<label>Term &amp; Conditions</label>
									<span class="formwrapper">
										<?php echo $this->Form->input('#', array('label' => false, 'div' => false, 'type' => 'checkbox')); ?> I agree with the  <a href="#">Partnership agreement conditions</a>
									</span>
								</p>
								
								<p class="stdformbutton pull-right">
									<button class="btn btn-danger">Sign Up</button>
									<button type="reset" class="btn">Reset Button</button>
								</p>
						<?php echo $this->Form->end(); ?>
				</div>
			</div>
		</div>