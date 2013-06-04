
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
						<td align="center">
							<?php
								switch ($data['Mt4User']['COUNTRY']) {
									case "Malaysia":
										echo '<img width="22" height="16" title="Malaysia (MY)" alt="" src="../img/flags/my.gif">';
										break;
									case "United States":
										echo '<img width="22" height="16" title="United States (US)" alt="" src="../img/flags/us.gif">';
										break;
									case "U.A.E.":
										echo '<img width="22" height="16" title="U.A.E (AE)" alt="" src="../img/flags/ae.gif">';
										break;
									case "United Kingdom":
										echo '<img width="22" height="16" title="United Kingdom (UK)" alt="" src="../img/flags/gb.gif">';
										break;
									case "Bangladesh":
										echo '<img width="22" height="16" title="Bangladesh (BD)" alt="" src="../img/flags/bd.gif">';
										break;
									case "Malta":
										echo '<img width="22" height="16" title="Malta (MT)" alt="" src="../img/flags/mt.gif">';
										break;
								}								
							?>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
				<br>
			</div>
			
		</div>
	</div>