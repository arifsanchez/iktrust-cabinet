

	<div class="contentinner"> 
		<div class="row-fluid">
			<div class="span7">
				<h4 class="widgettitle nomargin">Upload Document</h4>
				<div class="widgetcontent bordered">	
					
					<div class="row-fluid">
						<div class="span1">
						</div>
						<?php echo $this->Form->create('ProDoc', array('type' => 'file', 'id'=>'img_valid' , 'class' => 'stdform')); ?>
						<div class="span6">	
							<h5>PROOF OF IDENTITY</h5>
							<br>
							<ul class="list-nostyle">
								<li>
									<ul>
									  <li><span class="icon-check"></span> &nbsp;National Passport</li>
									  <li><span class="icon-check"></span> &nbsp;National Identity Card</li>
									  <li><span class="icon-check"></span> &nbsp;Driver License</li>
									  <li><span class="icon-check"></span> &nbsp;Others Government Issued Photo ID</li>
									  <li><span class="icon-check"></span> &nbsp;Signed &amp; Notarised Financial Statement</li>
									</ul>
								</li>
							</ul>
							<br>
							<strong>Select File : </strong> 
							<div>
								<i class=" iconsweets-paperclip"></i> &nbsp;  
								<input type="file" class="validate[required] text-input span2"  id="ProDocDoc1" name="data[ProDoc][doc1]"/>
							</div>
						</div>
						
						<div class="span5">									
							<h5>PROOF OF RESIDENCE</h5>
							<br>
							<ul class="list-nostyle">
								<li>
									<ul>
									  <li><span class="icon-check"></span> &nbsp;Utility Bill</li>
									  <li><span class="icon-check"></span> &nbsp;Government Issued Letter</li>
									  <li><p> </p></li>
									  <li><p> </p></li>
									  <li><p> </p></li>
									</ul>
								</li>
							</ul>
							<br>
							<strong>Select File : </strong> 
							<div>
								<i class=" iconsweets-paperclip"></i> &nbsp;  
								<input type="file" class="text-input span2"  id="ProDocDoc2" name="data[ProDoc][doc2]" />
							</div>
						</div>	
					</div>
					<br>
					<div class="row-fluid">
						<div class="span1">
						</div>
						
						
						<div class="span10">
							<?php echo $this->Form->Submit(__('Submit'), array('class'=>'btn btn-danger span2'));?>
							<?php echo $this->Form->end(); ?>	
						</div>
					</div>			
				</div>
			</div>
		
			<div class="span5">
				<div class="widgetcontent">
					<h2><span style="color:red;">ANTI MONEY LAUNDERING&nbsp;</span>&amp; DATA PROTECTION ACT</h2>
					<div class="divider30"></div>	             
					<ul class="list-unordered list-checked">
							<li>
								In order to comply with worldwide financial regulations for the avoidance of money laundering and terrorist financing , we will require you to provide such additional information and documentary proof of identity as we deem necessary.
							</li>
							
							<div class="divider15"></div>	 
							<li>
								We will process your personal data in accordance with our obligations under the Data Protection Act 1998 and other applicable data protection legislation.
							</li>
							
							<div class="divider15"></div>	 
							<li>
								In providing you with our services it may be necessary for us to disclose your personal details to registered by law third parties.
							</li>
							
							<div class="divider15"></div>	 
							<li>
								Full details disclosures are contained in our <strong>Terms</strong> and <strong>Conditions</strong>.	
							</li>
						</ul>              
				</div>
			</div>
		</div>
	   <hr class="invisible">
	   <hr class="invisible">
	   <hr class="invisible">
	</div>	