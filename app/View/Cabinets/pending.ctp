
	<div class="maincontent">
		<div class="contentinner">
		
		
		
		<!-- UPLOAD DOCUMENTS PANE-->
			<div class="container">
				<h3 class="widgettitle nomargin">Pending Verification</h3>
				<div class="widgetcontent bordered">
				
					<div class="row-fluid">
						<div class="span12 alert alert-error" align="center">
							<p>
								<h3 style="color: #F26F6F;">ANTI MONEY LAUNDERING & DATA PROTECTION ACT</h3>
								<p style="color: #D36767;">
								<small>
									In order to comply with worldwide financial regulations for the avoidance of money laundering and terrorist financing , we will require you to provide such additional information and documentary proof of identity as we deem necessary.
								</small>
								</p>
								
								<p style="color: #D36767;">
								<small>
									We will process your personal data in accordance with our obligations under the Data Protection Act 1998 and other applicable data protection legislation. In providing you with our services it may be necessary for us to disclose your personal details to registered by law third parties. Full details disclosures are contained in our Terms and Conditions.
								</small>
								</p>
							</p>
						</div>
					</div>
					
					<hr class="invisible">
					
					<div class="row-fluid">
						<div class="span1">
						</div>
						
						<div class="span6">
							<?php #echo $this->Form->create('UserDoc', array('type' => 'file', 'id'=>'img_valid' , 'class' => 'stdform')); ?>
							<h3>PROOF OF IDENTITY</h3>
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
								<input type="file" class="text-input span2"  id="UserDocDoc1" name="data[UserDoc][doc1]"/>
							</div>
						</div>
						
						<div class="span5">
							<h3>PROOF OF IDENTITY</h3>
							<br>
							<ul class="list-nostyle">
								<li>
									<ul>
									  <li><span class="icon-check"></span> &nbsp;Utility Bill</li>
									  <li><span class="icon-check"></span> &nbsp;Government Issued Letter</li>
									  <li><br></li>
									  <li><br></li>
									  <li><br></li>
									</ul>
								</li>
							</ul>
							<br>
							<strong>Select File : </strong> 
							<div>
								<i class=" iconsweets-paperclip"></i> &nbsp;  
								<input type="file" class="text-input span2"  id="UserDocDoc2" name="data[UserDoc][doc2]"/>
							</div>
						</div>
					</div>
					<br>
					<div class="row-fluid">
						<div class="span1">
						</div>
						<div class="span10">
						<p>
							<?php echo $this->Form->Submit(__('Submit'), array('class'=>'btn btn-danger span2'));?>
							<?php echo $this->Form->end(); ?>	
						</p>
						</div>
					</div>
					
					<hr>
					
					<div class="row-fluid">
						<div class="span1">
						</div>
						
						<div class="span10">
							<h3 class="widgettitle">Upload history</h3>
							<table class="table table-striped">
								<colgroup>
									<col class="con0" />
									<col class="con1" />
									<col class="con0" />
									<col class="con1" />
									<col class="con0" />
								</colgroup>
								<thead>
									<tr>
										<th>Rendering engine</th>
										<th>Browser</th>
										<th>Platform(s)</th>
										<th>Engine version</th>
										<th>CSS grade</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Trident</td>
										<td>Internet Explorer 4.0</td>
										<td>Win 95+</td>
										<td class="center">4</td>
										<td class="center">X</td>
									</tr>
									
									<tr>
										<td>Trident</td>
										<td>Internet Explorer 4.0</td>
										<td>Win 95+</td>
										<td class="center">4</td>
										<td class="center">X</td>
									</tr>
								</tbody>
							</table>
							<hr class="invisible">
						</div>
					</div>
			
				</div>
			</div>
		
		
		
		</div>
	</div>