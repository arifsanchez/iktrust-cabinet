        
		<div class="maincontent"><!--maincontent open--> 
			<div class="contentinner"><!--contentinner open-->	
		
				<!--FIRST TTLE/HEADER-->
				<br>
				<br>
				<div class="row-fluid">
					<div class="span6">
						<h2>My Accounts</h2>
					</div>
					
					<div class="span6" align="right">
						<p>
							<button type="button" class="btn btn-large btn-success enable span6">
								Open Trading Account
							</button>
							<button type="button" class="btn btn-large btn-primary disable span6">
								Open Demo Account
							</button>
						</p>
					</div>
				</div>
				
				
				<!--TABLE OF CONTENT-->
				<br>
				<div class="row-fluid">
					<div class="span12">
						<table class="table table-striped">
						<!--TABLE ROW 1-->
							<tr>
								<td>
									<h5>Account(s)/Actions</h5>
								</td>
								<td>
									<h5>Leverage</h5>
								</td>
								<td>
									<h5>Currency</h5>
								</td>
								<td>
									<h5>Free Margin</h5>
								</td>
								<td>
									<h5>Balance</h5>
								</td>
								<td>
									<h5>Status</h5>
								</td>
								<td>
									<h5>Type</h5>
								</td>
								<td>
									<h5>Server</h5>
								</td>
							</tr>
							
						<!--TABLE ROW 2-->							
							<tr>
								<td> <!-- DROPDOWN BUTTON CODE -->
									<div class="btn-group">
										
										<button class="btn btn-small">
											4102730
										</button>
										<button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
											<span class="caret"></span>
										</button>
									
										<ul class="dropdown-menu">
											Hide Account
										</ul>
										
									</div>
								</td>
								<td>1:500</td>
								<td>USD</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>DISABLED</td>
								<td>DEMO</td>
								<td>MT4</td>
							</tr>
							
						<!--TABLE ROW 3-->
							<tr>
								<td> <!-- DROPDOWN BUTTON CODE -->
									<div class="btn-group">
										
										<button class="btn btn-small">
											0312496
										</button>
										<button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
											<span class="caret"></span>
										</button>
									
										<ul class="dropdown-menu">
											Hide Account
										</ul>
										
									</div>
								</td>
								<td>1:500</td>
								<td>USD</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>READONLY</td>
								<td>REAL</td>
								<td>MT4</td>
							</tr>
						
						<!--TABLE ROW 4-->
							<tr>
								<td>
									<div class="btn-group">
									<!-- DROPDOWN BUTTON CODE -->	
										<button class="btn btn-small">
											0204689
										</button>
										<button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
											<span class="caret"></span>
										</button>
									
										<ul class="dropdown-menu">
											Hide Account
										</ul>
									<!-- ..... -->
									</div>
								</td>
								<td>1:500</td>
								<td>USD</td>
								<td>0.00</td>
								<td>0.00</td>
								<td>DISABLE</td>
								<td>REAL</td>
								<td>MT4</td>
							</tr>	
						</table>
					</div>
				</div>
			
				<!--SHOW/HIDE BUTTON-->	
				<div class="row-fluid">
					<div class="span12" align="right">
						<p>
							<button type="button" class="btn btn-default btn-success enable">
								Show/Hide Filter
							</button>
						</p>
					</div>
				</DIV>
				
				
				<!--DOWNLOAD PLATFORM TITLE-->
				<br>
				<br>
				<div class="row-fluid">
					<div class="span12">
						<h3>Download Platforms</h3>
					</div>
				</div>
				
				
				<!--TABLE DOWNLOAD PLATFORM-->
				<div class="row-fluid"> 
					<div class="span4">
						<br>
 						<h5>cTrader</h5>
						<!-- Icon 1-->	
						<div class="span12">
							<div class="media"><!-- Header Align -->
								<!-- Icon 1-->
								<br>
								<div class="media-body">
									<div>
										<a class="pull-left" href="#">
										<!--img src="img/icon/icon1.png" alt="Visa.img" height="" width=""-->
										<?php 
											echo $this->Html->image('icon/icon1.png', array('class'=>'', 'alt'=>'photo'));
										?>
										</a>
										<p>
											<a href="#">FxPro cTrader</a>
											<br>ECN Platform
										</p>
									</div>
								</div>
								
								<!-- Icon 2-->	
								<div class="media-body">
									<div>
										<a class="pull-left" href="#">
											<!--img src="img/icon/calgo_icon.png" alt="" height="" width=""-->
											<?php
												echo $this->Html->image('icon/calgo_icon.png', array('class'=>'', 'alt'=>'photo'));
											?>
										</a>
											<p>
												<a href="#">FxPro cAlgo</a>
												<br>Algorithmic ECN Trading
											</p>
									</div>
								</div>
								
								<!-- Icon 4-->	
								<div class="media-body">
									<div>
										<a class="pull-left" href="#">
											<!--img src="img/icon/icon2.png" alt="" height="" width=""-->
											<?php
												echo $this->Html->image('icon/icon2.png', array('class'=>'', 'alt'=>'photo'));
											?>
										</a>
											<p>
												<a href="#">FxPro cTrader Web</a>
												<br>ECN Online
											</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<br>
					<h5>MetaTrader 4</h5>
					<div class="span8">
						<div class="span6">
							<div class="media"><!-- Header Align -->
								<!-- Icon 1-->
								<br>
								<div class="media-body">
									<div>
										<a class="pull-left" href="#">
											<!--img src="img/icon/icon1.png" alt="" height="" width=""-->
											<?php
												echo $this->Html->image('icon/icon1.png', array('class'=>'', 'alt'=>'photo'));
											?>
										</a>
											<p>
												<a href="#">FxPro Client Terminal</a>
												<br>MT4 Platform
											</p>
									</div>
								</div>
								
								<!-- Icon 2-->	
								<div class="media-body">
									<div>
										<a class="pull-left" href="#">
											<!--img src="img/icon/icon3.png" alt="" height="" width=""-->
											<?php
												echo $this->Html->image('icon/icon3.png', array('clas'=>'', 'alt'=>'photo'));
											?>
										</a>
											<p>
												<a href="#">FxPro MultiTerminal</a>
												<br>Multi - MT4
											</p>
									</div>
								</div>
								
								<!-- Icon 4-->	
								<div class="media-body">
									<div>
										<a class="pull-left" href="#">
											<!--img src="img/icon/icon4.png" alt="" height="" width=""-->
											<?php
												echo $this->Html->image('icon/icon4.png', array('class'=>'', 'alt'=>'photo'));
											?>
										</a>
											<p>
												<a href="#">FxPro WebTrader</a>
												<br>MT4 Online
											</p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="span6">
							<div class="media"><!-- Header Align -->
								<!-- Icon 3-->
								<br>								
								<div class="media-body">
									<div>
										<a class="pull-left" href="#">
											<!--img src="img/icon/iphone_icon.png" alt="" height="" width=""-->
											<?php
												echo $this->Html->image('icon/iphone_icon.png', array('class'=>'', 'alt'=>'photo'));
											?>
										</a>
											<p>
												<a href="#">FxPro iPhone</a>
												<br>Trader
											</p>
									</div>
								</div>
								
								<!-- Icon 4-->	
								<div class="media-body">
									<div>
										<a class="pull-left" href="#">
											<!--img src="img/icon/ipad_icon.png" alt="" height="" width=""-->
											<?php
												echo $this->Html->image('icon/ipad_icon.png', array('class'=>'', 'alt'=>'photo'));
											?>
										</a>
											<p>
												<a href="#">FxPro iPad</a>
												<br>Trader
											</p>
									</div>
								</div>
								
								<!-- Icon 5-->	
								<div class="media-body">
									<div>
										<a class="pull-left" href="#">
											<!--img src="img/icon/android_icon.png" alt="" height="" width=""-->
											<?php
												echo $this->Html->image('icon/android_icon.png', array('class'=>'', 'alt'=>'photo'));
											?>
										</a>
											<p>
												<a href="#">FxPro Android</a>
												<br>Transfer
											</p>
									</div>
								</div>
							</div>
						</div>
					</div><!--End DIV Metrader-->
				</div><!--End Row-Fluid-->

			</div><!--contentinner close-->
		</div>	