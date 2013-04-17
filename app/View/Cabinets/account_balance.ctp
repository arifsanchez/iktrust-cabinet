<?php #echo debug($check['Mt4User']);?> 

	<div class="maincontent"><!--maincontent open--> 
		<div class="contentinner"><!--contentinner open-->	
		<?php echo $this->element('newsticker'); ?>
			
		<!--FIRST TTLE/HEADER-->
		<br>

		<div class="row-fluid">
			<div class="widgetcontent bordered shadowed nopadding span6">
				<h3 class="widgettitle nomargin">Account Number : <? echo ($check['Mt4User']['LOGIN']);?></h3>
				<form class="stdform stdform2" method="post" action="forms.html">
					<p>
						<label>Current Balance</label>
						<span class="field"><strong class="text-error">$ <?php echo  number_format($check['Mt4User']['BALANCE'], 2 , '.' , '');?></strong></span>
					</p>
					
					<p>
						<label>Free Margin</label>
						<span class="field"><?php echo ($check['Mt4User']['MARGIN_FREE']);?></span>
					</p>
					
					<p>
						<label>Record Last Update</label>
						<span class="field"><?php echo  ($check['Mt4User']['MODIFY_TIME']);?></span>
					</p>
				</form>
			</div><!--widgetcontent-->
		</div>

		</div><!--contentinner close-->
	</div><!--mainconten closet-->