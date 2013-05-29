
<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
				<?php echo $this->element('newsticker'); ?>
				
				
				
				
				<h4 class="widgettitle nomargin">Vertical Wizard</h4>
                <div class="widgetcontent bordered">
                
				<!-- START OF VERTICAL WIZARD -->
				<form class="stdform" method="post" action="wizards.html">
				<div id="wizard3" class="wizard verwizard">
					
					<ul class="verticalmenu">
						<li>
							<a href="#wiz1step3_1">
								<span class="label">Step 1: Basic Information</span>
							</a>
						</li>
						<li>
							<a href="#wiz1step3_2">
								<span class="label">Step 2: Account Information</span>
							</a>
						</li>
						<li>
							<a href="#wiz1step3_3">
								<span class="label">Step 3: Terms of Agreement</span>
							</a>
						</li>
					</ul>

					<div id="wiz1step3_1" class="formwiz">
						<h4>Step 1: Basic Information</h4> 
						
							<p>
								<label>First Name</label>
								<span class="field"><input type="text" name="firstname" class="input-xlarge" /></span>
							</p>
							
							<p>
								<label>Last Name</label>
								<span class="field"><input type="text" name="lastname" class="input-xlarge" /></span>
							</p>

							<p>
								<label>Gender</label>
								<span class="field"><select name="selection" class="uniformselect">
									<option value="">Choose One</option>
									<option value="1">Female</option>
									<option value="2">Male</option>
								</select></span>
							</p>
							
						
						
					</div><!--#wiz1step3_1-->
					
					<div id="wiz1step3_2" class="formwiz">
						<h4>Step 2: Account Information</h4> 
						
							<p>
								<label>Account No</label>
								<span class="field"><input type="text" name="lastname" class="input-xlarge" /></span>
							</p>
							<p>
								<label>Address</label>
								<span class="field"><textarea cols="80" rows="5" name="location" class="span4"></textarea></span>
							</p>
																						   
					</div><!--#wiz1step3_2-->
					
					<div id="wiz1step3_3">
						<h4>Step 3: Terms of Agreement</h4>
						<div class="par terms">
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
							<p><input type="checkbox"  /> I agree with the terms and agreement...</p>
						</div>
					</div><!--#wiz1step3_3-->
					
				</div><!--#wizard-->
				</form>
				
			</div>
		</div>