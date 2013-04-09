
<div class="umtop">
	<?php //echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Edit Setting');   ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home"),"/") ?></span>
				<?php $page= (isset($this->request->params['named']['page'])) ? $this->request->params['named']['page'] : 1; ?>
				<span style="float:right;padding-right:10px"><?php echo "<a href='".$this->Html->url(array('action'=>'index', 'page'=>$page))."'>".__('Back')."</a>"; ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="addsetting">
				<?php echo $this->Form->create('UserSetting'); ?>
				<?php echo $this->Form->hidden('id')?>
				<div>
					<div class="umstyle3" ><?php echo $this->data['UserSetting']['name_public']?></div>
					<div class="umstyle4" >
					<?php   if($this->data['UserSetting']['type']=='checkbox') {
								echo $this->Form->input("value" ,array("type"=>"checkbox", 'label' => false,'div' => false,'class'=>"umstyle5" ));
							} else {
								echo $this->Form->input("value" ,array('label' => false,'div' => false,'class'=>"umstyle8" ));
							}
					?>
					</div>
					<div class="umstyle7"><?php echo $this->Form->Submit(__('Update Setting'));?></div>
					<div style="clear:both"></div>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>