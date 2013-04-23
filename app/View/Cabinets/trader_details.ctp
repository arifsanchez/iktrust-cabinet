
	<script>
		jQuery(document).ready(function(){
			jQuery("#time").timeago();
		});
	
		jQuery.timeago.settings.allowFuture = true;
	</script>

	<div  class="maincontainer">
		<div class="contentinner">
			
			<?php echo $this->element('newsticker'); ?>
			<hr class="invisible">
			 
			<h2>Account Traders Details</h2>
			<br>
			
			<div class="row-fluid">
				<h4 class="widgettitle nomargin span5">Account Number : <?php echo h($b['Mt4User']['LOGIN']); ?></h4>
			</div>
				
				
				<div class="row-fluid">
					<div class="widgetcontent bordered span5">
						<div class="span12 well">
							<?php echo $this->Form->create('Mt4User', array('type' => 'file', 'id' => '', 'class'=>'stdform')); ?>
							<p>
								<label>ACCOUNT TYPE : </label>
								<span class="field"><strong><em><?php echo h($b['Mt4User']['GROUP']); ?></em></strong></span>
							</p>
							
							<p>
								<label>LEVERAGE : </label>
								<span class="field"><strong><em><?php echo "1:", h($b['Mt4User']['LEVERAGE']); ?></em></strong></span>
							</p>
							
							<p>
								<label>REGISTERATION DATE : </label>
								<span class="field"><strong><em><?php echo h($b['Mt4User']['REGDATE']); ?></em></strong></span>
							</p>
							
							<p>
								<label>ACCOUNT ACTIVE SINCE : </label>
								<!-- Jquery timeago code-->
								<span class="field"><strong><em id="time" title="<?php echo h($b['Mt4User']['REGDATE']); ?>"></em></strong></span>
							</p>
						
							<div class="btn-group pull-right">
								<button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class=" iconfa-paper-clip"></i> &nbsp; Action <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><?php echo $this->Html->link('<span class=" iconfa-external-link"></span> Upgrade My Account',array('controller' => '', 'action' => '#'),array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link('<span class="iconfa-edit"></span> Change My Laverage',array('controller' => '', 'action' => '#'),array('escape' => false)); ?></li>   
									<li><?php echo $this->Html->link('<span class="iconfa-sitemap"></span> Change Trading Password',array('controller' => '', 'action' => '#'),array('escape' => false)); ?></li>   
									<li><?php echo $this->Html->link('<span class="iconfa-retweet"></span> Change Investor Password',array('controller' => '', 'action' => '#'),array('escape' => false)); ?></li>
								</ul>
							</div>
						</div>
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			
		</div>
	</div>
	
