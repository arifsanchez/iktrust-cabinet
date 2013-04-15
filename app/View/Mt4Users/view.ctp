
	<div  class="maincontainer">
		<div class="contentinner">
			
			<div class="mt4Users view">
				<form class="stdform stdform2">
					<div class="row-fluid">				
						<div class="widgettitle nomargin shadowed searchwidget"><h4>Mt4 Users</h4></div>
						<br>
						<div class="row-fluid">				
							<div class="span6 well">	
								<label>LOGIN</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['LOGIN']); ?></span>
								
								<label>GROUP</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['GROUP']); ?></span>
								
								<label>ENABLE</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['ENABLE']); ?></span>
								
								<label>ENABLE_CHANGE_PASS</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['ENABLE_CHANGE_PASS']); ?></span>
								
								<label>ENABLE_READONLY</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['ENABLE_READONLY']); ?></span>
								
								<label>PASSWORD_PHONE</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['PASSWORD_PHONE']); ?></span>
								
								<label>NAME</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['NAME']); ?></span>
								
								<label>COUNTRY</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['COUNTRY']); ?></span>
								
								<label>CITY</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['CITY']); ?></span>
								
								<label>STATE</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['STATE']); ?></span>
								
								<label>ZIPCODE</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['ZIPCODE']); ?></span>
								
								<label>ADDRESS</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['ADDRESS']); ?></span>
								
								<label>PHONE</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['PHONE']); ?></span>
								
								<label>EMAIL</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['EMAIL']); ?></span>
								
								<label>COMMENT</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['COMMENT']); ?></span>
								
								<label>ID</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['ID']); ?></span>
								
								<label>STATUS</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['STATUS']); ?></span>
								
								<label>REGDATE</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['REGDATE']); ?></span>
							</div>
							
							
							<div class="span6 well">
								<label>LASTDATE</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['LASTDATE']); ?></span>
								
								<label>AGENT ACCOUNT</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['AGENT_ACCOUNT']); ?></span>
								
								<label>TIMESTAMP</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['TIMESTAMP']); ?></span>
								
								<label>BALANCE</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['BALANCE']); ?></span>
								
								<label>PREVMONTHBALANCE</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['PREVMONTHBALANCE']); ?></span>
								
								<label>PREVBALANCE</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['PREVBALANCE']); ?></span>
								
								<label>CREDIT</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['CREDIT']); ?></span>
								
								<label>INTERESTRATE</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['INTERESTRATE']); ?></span>
								
								<label>TAXES</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['TAXES']); ?></span>
								
								<label>SEND REPORTS</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['SEND_REPORTS']); ?></span>
								
								<label>USER COLOR</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['USER_COLOR']); ?></span>
								
								<label>EQUITY</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['EQUITY']); ?></span>
								
								<label>MARGIN</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['MARGIN']); ?></span>
								
								<label>MARGIN LEVEL</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['MARGIN_LEVEL']); ?></span>
								
								<label>MARGIN FREE</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['MARGIN_FREE']); ?></span>
								
								<label>MODIFY TIME</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['MODIFY_TIME']); ?></span>
								
								<label>API DATA</label>
								<span class="field"><?php echo h($mt4User['Mt4User']['API_DATA']); ?></span>
							</div>
						</div>
					</div>
				</form>
				<div align="right">
					<?php 
						echo $this->Form->create();
						echo $this->Form->submit('List MT 4 Users', array('class' => 'btn btn-rounded btn-danger'));
						echo $this->Form->end(); 
					?>					
				</div>
			</div>
			
		</div>
	</div>