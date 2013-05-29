	
	<div class="maincontent">
		<div class="contentinner">
		
			<?php echo $this->element('newsticker'); ?>
			<br>
			
			<div class="span10">
				<table class="table table-striped table-bordered">
					<h3 class="widgettitle">Top Traders</h3>
					<tr>
						<td class="center">Traders ID</td>				
						<td class="center">Percentage Gain (%)</td>
						<td class="center">Leverage (1: )</td>
						<td class="center">Country</td>
					</tr>			

					
					<?php foreach ($data as $data): 
						$gain = $data['Mt4User']['BALANCE'] - $data['Mt4User']['PREVMONTHBALANCE'] / $data['Mt4User']['BALANCE'] * 100; 
						$percentage = number_format($gain, 2 , '.' , '');
						
						$var = $data['Mt4User']['LOGIN'];
					?>
					<tr>
						<td class="center muted"><?php echo substr_replace($var, 'XXX', 1, 3); ?>&nbsp;</td>
						<td class="center"><?php echo $percentage, "%"; ?>&nbsp;</td>
						<td class="center"><?php echo "1:", ($data['Mt4User']['LEVERAGE']); ?>&nbsp;</td>
						<td class="center"><?php echo h($data['Mt4User']['COUNTRY']); ?>&nbsp;</td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
			
		</div>
	</div>