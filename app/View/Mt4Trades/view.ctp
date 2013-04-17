
	<div  class="maincontainer">
		<div class="contentinner">
			
			<div class="mt4Trades view">
				<form class="stdform stdform2">
					<div class="row-fluid">				
						<div class="widgettitle nomargin shadowed searchwidget"><h4>Mt4 Trades</h4></div>
						<br>
						<div class="row-fluid">				
							<div class="span6 well">	
								<label>TICKET</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['TICKET']); ?></span>
								
								<label>TRADER ID</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['LOGIN']); ?></span>
								
								<label>SYMBOL</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['SYMBOL']); ?></span>
								
								<label>DIGITS</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['DIGITS']); ?></span>
								
								<label>CMD</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['CMD']); ?></span>
								
								<label>VOLUME</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['VOLUME']); ?></span>
								
								<label>OPEN TIME</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['OPEN_TIME']); ?></span>
								
								<label>OPEN PRICE</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['OPEN_PRICE']); ?></span>
								
								<label>SL</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['SL']); ?></span>
								
								<label>TP</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['TP']); ?></span>
								
								<label>CLOSE TIME</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['CLOSE_TIME']); ?></span>
								
								<label>EXPIRATION</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['EXPIRATION']); ?></span>
								
								<label>CONV RATE 1</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['CONV_RATE1']); ?></span>
							</div>
							
							
							<div class="span6 well">
								<label>CONV RATE 2</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['CONV_RATE2']); ?></span>
								
								<label>COMMISSION</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['COMMISSION']); ?></span>
								
								<label>COMMISSION AGENT</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['COMMISSION_AGENT']); ?></span>
								
								<label>SWAPS</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['SWAPS']); ?></span>
								
								<label>CLOSE PRICE</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['CLOSE_PRICE']); ?></span>
								
								<label>PROFIT</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['PROFIT']); ?></span>
								
								<label>TAXES</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['TAXES']); ?></span>
								
								<label>COMMENT</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['COMMENT']); ?></span>
								
								<label>INTERNAL ID</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['INTERNAL_ID']); ?></span>
								
								<label>MARGIN RATE</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['MARGIN_RATE']); ?></span>
								
								<label>TIMESTAMP</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['TIMESTAMP']); ?></span>
								
								<label>MODIFY TIME</label>
								<span class="field"><?php echo h($mt4Trade['Mt4Trade']['MODIFY_TIME']); ?></span>
							</div>
						</div>
					</div>
				</form>
				<div align="right">
					<?php 
						echo $this->Form->create();
						echo $this->Form->submit('List MT 4 Trades', array('class' => 'btn btn-rounded btn-danger'));
						echo $this->Form->end(); 
					?>					
				</div>
			</div>
			
		</div>
	</div>