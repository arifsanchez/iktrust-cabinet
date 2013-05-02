<div class="contentinner">  
	<div class="row-fluid">
		<div class="span7">
		<h3 class="widgettitle nomargin">Forgot Password</h3>
      
                <div class="widgetcontent bordered ">
				
					<?php echo $this->Form->create('User', array('id' => 'forgot_password')); ?>
					<div>
						<div align ='center'><label align = 'center' >Enter Email / Username</label></div>
						<br>
						<div align ='center'><?php echo $this->Form->input("email" ,array('label' => false,'div' => false,))?></div>
					</div>
					<div align = 'right'>
						<div class="umstyle4"><?php echo $this->Form->Submit(__('Send Email'), array('class'=>'btn btn-danger span2'));?></div>
					</div>
					<?php echo $this->Form->end(); ?>
				</div>
				</div>
		</div>
	</div>
</div>