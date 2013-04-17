<?php echo debug($check['Mt4User']);?> 

<div class="maincontent"><!--maincontent open--> 
		<div class="contentinner"><!--contentinner open-->	
		<?php echo $this->element('newsticker'); ?>
			
		<!--FIRST TTLE/HEADER-->
		<br>
		<div class="row-fluid">
			<div class="span12">
				<h3 class="widgettitle nomargin">Account Number : Account Balance</h3>	
				
				
				<div class="row-fluid"> 
					<div class="span12 well">
						<h4>Current Balance $ <? echo  number_format($check['Mt4User']['BALANCE'], 2 , '.' , '');?></h4>
						<p>FREE Margin :</p>
					</div>
				</div>
				
				
			</div>
		</div>
	</div><!--contentinner close-->
</div><!--mainconten closet-->