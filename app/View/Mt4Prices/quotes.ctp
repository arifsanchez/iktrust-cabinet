<?php #echo debug($quotes);die(); 

	#echo debug($check['Mt4Price']);
	#echo h($quotes['Mt4Price']['SYMBOL']);

?>


<div class="maincontent">
	<div class="contentinner">
	<?php echo $this->element('newsticker'); ?>
	<abbr class="timeago" title="July 17, 2008"><?php //echo h($quotes['Mt4Price']['TIME']); ?></abbr>
	
	<br>
	
		<div class="row-fluid">
			<div class="span1"></div>
			<div class="span8">
				<h3 class="widgettitle nomargin shadowed">Live Quotes</h3>
				<div style="overflow:auto">
					<table class="table table-striped">
						<tr>
							<th class="center">SYMBOL</th>
							<th class="center">BID</th>
							<th class="center">ASK</th> 
							<th class="center">SPREAD</th>
							<th class="center">TICK TIME (GMT+0)</th>

						</tr>
					
						
						<?php foreach ($quotes as $quote): 
						
							$cal =  $quote['Mt4Price']['ASK'] - $quote['Mt4Price']['BID']; 
							$cal_spread = number_format($cal, 5 , '.' , '');
							if($quote['Mt4Price']['DIRECTION'] == 0){ ?>
							
							<tr class="success">
								<td class="center muted"><?php echo str_replace(" ","%#%", $quote['Mt4Price']['SYMBOL']); ?>&nbsp;</td>
								<td class="center"><?php echo number_format($quote['Mt4Price']['BID'], 5, '.', ''); ?>&nbsp;</td>
								<td class="center"><?php echo number_format($quote['Mt4Price']['ASK'], 5, '.', ''); ?>&nbsp;</td>
								<td class="center"><?php echo h($cal_spread); ?>&nbsp;</td>
								<td class="center"><?php echo h($quote['Mt4Price']['TIME']); ?>&nbsp;</td>
							</tr>
								
						<?php }  else { ?>
						
							<tr class="error">
								<td class="center muted"><?php echo h($quote['Mt4Price']['SYMBOL']); ?>&nbsp;</td>
								<td class="center"><?php echo number_format($quote['Mt4Price']['BID'], 5, '.', ''); ?>&nbsp;</td>
								<td class="center"><?php echo number_format($quote['Mt4Price']['ASK'], 5, '.', ''); ?>&nbsp;</td>
								<td class="center"><?php echo h($cal_spread); ?>&nbsp;</td>
								<td class="center"><?php echo h($quote['Mt4Price']['TIME']); ?>&nbsp;</td>
							</tr>
						<?php } ?>
				
						<?php endforeach; ?>
					</table>
				</div>
			</div>
			<div class="span3"></div>
		</div>
	</div>
</div>
