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
<div id="dashboard">
	<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("Dashboard"),"/dashboard") ?></div>
	<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("Contact Us"),"/contactUs") ?></div>
<?php
	if($this->UserAuth->isLogged()){
		if ($this->UserAuth->isAdmin()) { ?>
			<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("Add User"),"/addUser") ?></div>
			<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("All Users"),"/allUsers") ?></div>
			<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("Add Group"),"/addGroup") ?></div>
			<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("All Groups"),"/allGroups") ?></div>
			<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("Permissions"),"/permissions") ?></div>
			<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("All Settings"),"/allSettings") ?></div>
			<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("Online Users"),"/usersOnline") ?></div>
			<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("Delete Cache"),"/deleteCache") ?></div>
			<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("Send Mails"),"/sendMails") ?></div>
			<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("All Contact Enquiries"),"/allContacts") ?></div>
			<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("All Pages"),"/allPages") ?></div>
<?php  } 
		if (ALLOW_DELETE_ACCOUNT) {
			echo "<div style='float:left;padding-right:10px'>".$this->Form->postLink(__('Delete Account'), array('action' => 'deleteAccount', $this->UserAuth->getUserId()), array('escape' => false, 'confirm' => __('Are you sure you want to delete your account?')))."</div>";
		} ?>
		<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("Profile"),"/myprofile") ?></div>
		<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("Edit Profile"),"/editProfile") ?></div>
		<div style="float:left;padding-right:10px"><?php echo $this->Html->link(__("Change Password"),"/changePassword") ?></div>
		<div style="float:right;padding-right:10px"><?php echo $this->Html->link(__("Sign Out"),"/logout") ?></div>
<?php } else { ?>
			<div style="float:right;padding-right:10px"><?php echo $this->Html->link(__("Sign In"),"/login") ?></div>
<?php } ?>
	<div style="clear:both"></div>
</div>