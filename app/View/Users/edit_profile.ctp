<?php
/*

Cakephp 2.x User Management Premium Version (a product of Ekta Softwares)
Ekta Softwares is a division of Ektanjali Softwares Pvt Ltd
Website- http://EktaSoftwares.com
Plugin Demo- http://umpremium.ektasoftwares.com
Author- Chetan Varshney (The Director of Ektanjali Softwares Pvt Ltd)
Plugin Copyright No- 11498/2012-CO/L

UMPremium is a copyrighted work of authorship. Chetan Varshney retains ownership of the product and any copies of it, regardless of the form in which the copies may exist. This license is not a sale of the original product or any copies.

By installing and using UMPremium on your server, you agree to the following terms and conditions. Such agreement is either on your own behalf or on behalf of any corporate entity which employs you or which you represent ('Corporate Licensee'). In this Agreement, 'you' includes both the reader and any Corporate Licensee and Chetan Varshney.

The Product is licensed only to you. You may not rent, lease, sublicense, sell, assign, pledge, transfer or otherwise dispose of the Product in any form, on
a temporary or permanent basis, without the prior written consent of Chetan Varshney.

The Product source code may be altered (at your risk)

All Product copyright notices within the scripts must remain unchanged (and visible).

If any of the terms of this Agreement are violated, Chetan Varshney reserves the right to action against you.

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Product.

THE PRODUCT IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE PRODUCT OR THE USE OR OTHER DEALINGS IN THE PRODUCT.

*/

?>
<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
<?php echo $this->element('ajax_validation', array("formId" => "editProfileForm", "submitButtonId" => "editProfileSubmitBtn")); ?>
<div class="umtop">
	<?php echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Edit Profile'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home"),"/") ?></span>
				<span style="float:right;padding-right:10px"><?php echo "<a href='".$this->Html->url(array('action'=>'myprofile'))."'>".__('Back')."</a>"; ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="register">
				<?php echo $this->Form->create('User', array('type' => 'file', 'id'=>'editProfileForm')); ?>
				<?php echo $this->Form->input("id" ,array('type' => 'hidden', 'label' => false,'div' => false))?>
				<?php echo $this->Form->input("UserDetail.id" ,array('type' => 'hidden', 'label' => false,'div' => false))?>
				<?php $changeUserName = (ALLOW_CHANGE_USERNAME) ? false : true; ?>
				<div>
					<div class="umstyle3 required"><?php echo $this->Form->label(__('Username'));?></div>
					<div class="umstyle4" ><?php echo $this->Form->input("username" ,array('label' => false,'div' => false,'class'=>"umstyle5", 'readonly'=>$changeUserName))?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3 required"><?php echo $this->Form->label(__('First Name'));?></div>
					<div class="umstyle4" ><?php echo $this->Form->input("first_name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3 required"><?php echo $this->Form->label(__('Last Name'));?></div>
					<div class="umstyle4" ><?php echo $this->Form->input("last_name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3 required"><?php echo $this->Form->label(__('Email'));?></div>
					<div class="umstyle4" ><?php echo $this->Form->input("email" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div class="umstyle7"><?php echo __('If you change it, we will verify the new email address.');?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3 required"><?php echo $this->Form->label(__('Gender'));?></div>
					<div class="umstyle4"><?php echo $this->Form->input("UserDetail.gender" , array('label' => false, 'div' => false, 'type' => 'select', 'class'=>"umstyle12", 'options'=>$gender))?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3 required"><?php echo $this->Form->label(__('Marital Status'));?></div>
					<div class="umstyle4"><?php echo $this->Form->input("UserDetail.marital_status" , array('label' => false, 'div' => false, 'type' => 'select', 'class'=>"umstyle12", 'options'=>$marital))?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3"><?php echo $this->Form->label(__('Birthday'));?></div>
					<div class="umstyle4" ><?php echo $this->Form->input("UserDetail.bday" ,array('label' => false,'div' => false, 'dateFormat' => 'DMY', 'minYear' => date('Y') - 100, 'maxYear' => date('Y') - 13))?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3"><?php echo $this->Form->label(__('Cellphone'));?></div>
					<div class="umstyle4" ><?php echo $this->Form->input("UserDetail.cellphone" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3"><?php echo $this->Form->label(__('Location'));?></div>
					<div class="umstyle4" ><?php echo $this->Form->input("UserDetail.location" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3"><?php echo $this->Form->label(__('Photo'));?></div>
					<div class="umstyle4"><?php echo $this->Form->input("UserDetail.photo", array('label' => false, 'type' => 'file', 'class'=>"umstyle12"))?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3"><?php echo $this->Form->label(__('Web Page'));?></div>
					<div class="umstyle4" ><?php echo $this->Form->input("UserDetail.web_page" ,array('label' => false,'div' => false,'type' => 'text','class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>
				<div>
					<div class="umstyle3"></div>
					<div class="umstyle4"><?php echo $this->Form->Submit(__('Update Profile'), array('id'=>'editProfileSubmitBtn'));?></div>
					<div style="clear:both"></div>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>