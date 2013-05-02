
		
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
			<?php echo $this->element('newsticker'); ?>
				<!--FIRST TTLE/HEADER-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h2>Deposit Fund</h2>
					</div>
				</div>
				
				<!--TABLE DOWNLOAD PLATFORM-->				
				<br>
				<br>
				<div class="tabbable"> <!-- Only required for left/right tabs -->
					<div class="row-fluid"> 
						<div class="span8">
						
							<ul class="nav nav-tabs">
							<!--TAB TITLE ONLY-->
								<li class="active">
									<a href="#tab1" data-toggle="tab">Bank Transfer</a>
								</li>
								
								<li>
									<a href="#tab2" data-toggle="tab">Master Card</a>
								</li>
								
								<li>
									<a href="#tab3" data-toggle="tab">Visa</a>
								</li>
								
								<li>
									<a href="#tab4" data-toggle="tab">Paypal</a>
								</li>
								
								<li>
									<a href="#tab5" data-toggle="tab">Account Transfer</a>
								</li>
								
							</ul>
							
		<!-----------------TAB SEPERATER ------------------ TAB SEPERATER -----------------TAB SEPERATER -------------------->
							
							<div class="tab-content">
								<!--TAB CONTENT ONLY-->
								<div class="tab-pane active" id="tab1">
									<div class="row-fluid" align="horizontal">
										<div class="span12">
											<div class="media"><!-- Header Align -->
												<!-- Avatar Icon-->
												<!-- Bank Transfer-->
												<div>
														<?php 
															echo $this->Html->image('deposit_img/img3.png', array('class'=>'' , 'alt'=>'photo'));?>
															<p>This is a transfer direct from your bank account to ours. Bank Transfer allows you to deposit in your local currency, the funds will be converted by the beneficiary bank to the currency that you have chosen upon making your deposit.<br>
															<? echo $this->HTML->link('Deposit bank Transfer' ,array ('controller' => 'traders', 'action' => 'bankwired_deposit' )); ?> 
															<p>
												</div>
											</div>
											</div>
										</div>
									</div>					
								<!-- Master card-->
								<div class="tab-pane" id="tab2">
									<div class="row-fluid">
										<div class="span8">
											<?php 
												echo $this->Html->image('deposit_img/img2.png', array('class'=>'' , 'alt'=>'photo'));
											?>
											<p>Payment by credit/debit card is a simple and secure way to make a deposit to your trading account.<br>
												<a href="http://www.w3schools.com/">Withdraw Debit/Credit Cards</a> 
											<p>			
										</div>
									</div>
								</div>
								<!-- Visa -->
										<div class="tab-pane" id="tab3">
									<div class="row-fluid">
										<div class="span8">
											<?php  echo $this->Html->image('deposit_img/img1.png', array('class'=>'' , 'alt'=>'photo'));?>
												<p>Payment by credit/debit card is a simple and secure way to make a deposit to your trading account.<br>
														<a href="http://www.w3schools.com/">Withdraw Debit/Credit Cards</a> 
												</p>
											<p>			
										</div>
									</div>
								</div>
								
								
								<!-- Paypal-->
								<div class="tab-pane" id="tab4">
									<div class="row-fluid">
										<div class="span8">
											<?php 
													echo $this->Html->image('deposit_img/img5.png', array('class'=>'' , 'alt'=>'photo'));
											?>
											<p>Deposits are usually credited to the account within 1 hour. Please ensure that the Paypal account that you use is registered under your own name and that your Paypal email address has been added to your trading account records.<br>
												<a href="http://www.w3schools.com/">Withdraw PayPal</a> 
											</p>
										</div>
									</div>
								</div>
								
								<!-- Account Transfer-->
								<div class="tab-pane" id="tab5">
									<div class="row-fluid">
										<div class="span8">
											<?php 
												echo $this->Html->image('deposit_img/img10.png', array('class'=>'' , 'alt'=>'photo'));
											?>
											<p>You can transfer funds between your IKTrust real accounts using internal transfers.<br>
												<a href="http://www.w3schools.com/">Withdraw Internal Transfers</a> 
											</p>
										</div>
									</div>
								</div>
								<!-- Trust XE-->
								<div class="tab-pane" id="tab5">
									<div class="row-fluid">
										<div class="span8">
											<?php 
												echo $this->Html->image('deposit_img/img11.png', array('class'=>'' , 'alt'=>'photo'));
											?>
											<p>You can transfer funds between your IKTrust real accounts using TrustXE.<br>
												<a href="http://www.w3schools.com/">Withdraw Internal Transfers</a> 
											</p>
										</div>
									</div>
								</div>
							</div> <!--Close Tab Content-->
						</div><!--Footer Span10-->
						<div class="span4">
						<h2> Element Deposit Fund</h2>
					</div>
					</div><!--Close ROW-FLUID-->						
				</div>

			</div><!--contentinner close-->
		</div><!--mainconten closet-->