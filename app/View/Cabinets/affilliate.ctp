
	
	<div class="maincontent">
			<div class="contentinner">
				<?php echo $this->element('newsticker'); ?>
				<br>

				<div class="row-fluid">
					<div class="widgetcontent bordered shadowed nopadding span7">
						<?php echo $this->Form->create('Affilliate', array('id'=>'registerAffilliates', 'class' => "stdform stdform2")); ?>
						
							<h3 class="widgettitle nomargin shadowed">Personal Data </h3>
								<p>
									<label>Status</label> 
									<span class="field"><select id="AffilliateStatus" class="uniformselect span5" name="data[Affilliate][status]">
										<option value="-----">-----</option>
										<option value="Individual">Individual</option>
										<option value="Company">Company</option>
									</select></span>
								</p>
								
								<p>
									<label>Full Name</label>
									<span class="field"><?php echo $this->Form->input("name", array('type' => "text" , 'label' => false, 'div' => false, 'class'=>"span5" ))?></span>
								</p>
								
								<p>
									<label>Phone Number</label>
									<span class="field"><?php echo $this->Form->input("phone", array('type' => "text" , 'label' => false, 'div' => false, 'class'=>"span5" ))?></span>
								</p>
								
								<p>
									<label>Address</label>
									<span class="field"><?php echo $this->Form->input("address", array('type' => "text" , 'label' => false, 'div' => false, 'class'=>"span5" ))?></span>
								</p>
								
								<p>
									<label>Country</label>
									<span class="field"><select name="data[Affilliate][country]" id="AffilliateCountry" class="uniformselect span5">
										<option value="-----">-----</option>
										<option value="Malaysia">Malaysia</option>
										<option value="America">America</option>
									</select></span>
								</p>
								
								<p>
									<label>Email</label>
									<span class="field"><?php echo $this->Form->input("email", array('type' => "email" , 'label' => false, 'div' => false, 'class'=>"span5" ))?></span>
								</p>
								
								<p>
									<label>Project Name</label>
									<span class="field"><?php echo $this->Form->input("project_name", array('type' => "text" , 'label' => false, 'div' => false, 'class'=>"span5" ))?></span>
								</p>
								
								<p>
									<label>Year Of Creation</label>
									<span class="field"><?php echo $this->Form->input("year_creation", array('type' => "text" , 'label' => false, 'div' => false, 'class'=>"span5" ))?></span>
								</p>
								
								<p>
									<label>Website</label>
									<span class="field"><?php echo $this->Form->input("website", array('type' => "text" , 'label' => false, 'div' => false, 'class'=>"span5" ))?></span>
								</p>
							<br>
							<h3 class="widgettitle nomargin shadowed">Optional</h3>							
								<p>
									<label>Affilliate Code</label>
									<ul class="tooltipsample">
										<span class="field">
											<a data-placement="right" data-rel="tooltip" data-original-title="The field is optional. in this field you may enter the affiliate code of a partner who referred you to the company." >
												<input type="text"  id="AffilliateAffilliateCode" class="span5" name="data[Affilliate][affilliate_code]">
											</a>
										</span>
									</ul>
								</p>
								
								<p>
									<label>Comment</label>
									<ul class="tooltipsample">
										<span class="field">
											<a data-placement="right" data-rel="tooltip" data-original-title="The field is optional. in this field you may enter the details of your project." >
												<textarea cols="30"  rows="3" id="AffilliateComment" class="span5" name="data[Affilliate][comment]"></textarea>
											</a>
										</span>
									</ul>
								</p>
								
								<p>
									<label>Term &amp; Conditions</label>
									<span class="field">
										<?php echo $this->Form->input('term', array('label' => false, 'div' => false, 'type' => 'checkbox', 'value' => '1')); ?> I agree with the  <a href="#">Partnership Agreement Conditions</a>
									</span>
								</p>
								
								<p class="stdformbutton">
									<?php echo $this->Form->Button(__('Register'), array('class'=>'btn btn-danger')); ?>
									<?php echo $this->Form->Button(__('Reset'), array('class'=>'btn', 'type' => 'reset')); ?>
									<br>
								</p>
						<?php echo $this->Form->end(); ?>
					</div>
					
					<div class="span5">
						<div class="widgetcontent">
							<h2><span style="color:red;">IK Trust</span>&nbsp; Affilliate</h2>
						
							<div class="divider30"></div>	             
								<ul class="list-unordered list-checked">
									<li>In order to register for the Affiliate Program, please fill out the form below.</li>
										
									<div class="divider15"></div>	
										<li>In the "Comments" field, fully describe your suggested work system.</li>

									<div class="divider15"></div>	 
										<li>Once the application form has been filled out, it will be assessed by the Customer Relations Department, which will take a small amount of time. </li>

									<div class="divider15"></div>	
										<li> You shall be notified by e-mail of the result.</li>				
								</ul>              
						</div>
					</div>
				</div>
				
				
	<script type="text/javascript">
		jQuery(document).ready(function(){
										
			//Replaces data-rel attribute to rel.
			//We use data-rel because of w3c validation issue
			jQuery('a[data-rel]').each(function() {
				jQuery(this).attr('rel', jQuery(this).data('rel'));
			});
		});
    </script>      
			
			</div>
		</div>