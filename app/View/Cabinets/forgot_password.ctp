<div class="contentinner">  
	<div class="row-fluid">
		<div class="span7">
		<h3 class="widgettitle nomargin">Forgot Password</h3>
                <div class="widgetcontent bordered shadowed">
				
					<?php echo $this->Form->create('User', array('id' => 'forgot_password')); ?>
					
						<label align = 'center' >Enter Email / Username</label>
						
						<?php echo $this->Form->input("email" ,array('label' => false,'div' => false,))?>
						<div class="divider30"></div>
						<p>Need help? Please contact <?php echo $this->Html->link('IK Trust Support', 'http://support.iktrust.com/', array('target' => '_blank')); ?>. </p>
					</div>
					<div align = 'right'>
						<?php echo $this->Form->Submit(__('Send Email'), array('class'=>'btn btn-danger'));?>
					</div>
					<?php echo $this->Form->end(); ?>
					
		</div>
		<div class="span5">
			<div class="well well-small">
<h1>h1. Heading 1</h1>
<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
<h2>h2. Heading 2</h2>
<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
<h3>h3. Heading 3</h3>
<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
<h4>h4. Heading 4</h4>
<h5>h5. Heading 5</h5>
<h6>h6. Heading 6</h6>
</div>
		</div>
	</div>
</div>
	
