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
<?php echo $this->Search->searchForm('UserContact', array('legend' => 'Search', "updateDivId" => "updateContactIndex")); ?>
<?php echo $this->element('paginator', array("useAjax" => true, "updateDivId" => "updateContactIndex")); ?>
<div class="tableContainer">
	<table cellspacing="0" cellpadding="0" width="100%" border="0" class="umtable colored">
		<thead>
			<tr>
				<th><?php echo __('SL');?></th>
				<th><?php echo $this->Paginator->sort('UserContact.name', __('Name')); ?></th>
				<th><?php echo $this->Paginator->sort('UserContact.email', __('Email')); ?></th>
				<th><?php echo $this->Paginator->sort('UserContact.phone', __('Contact No')); ?></th>
				<th><?php echo __('Requirement');?></th>
				<th><?php echo __('Reply Message');?></th>
				<th><?php echo $this->Paginator->sort('UserContact.created', __('Date')); ?></th>
				<th><?php echo __('Action');?></th>
			</tr>
		</thead>
		<tbody>
<?php       if (!empty($userContacts)) {
				$page = $this->request->params['paging']['UserContact']['page'];
				$limit = $this->request->params['paging']['UserContact']['limit'];
				$i=($page-1) * $limit;
				foreach ($userContacts as $row) {
					$i++;
					echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".h($row['UserContact']['name'])."</td>";
					echo "<td>".h($row['UserContact']['email'])."</td>";
					echo "<td>".h($row['UserContact']['phone'])."</td>";
					echo "<td>".nl2br($row['UserContact']['requirement'])."</td>";
					echo "<td>".$row['UserContact']['reply_message']."</td>";
					echo "<td>".date('d-M-Y',strtotime($row['UserContact']['created']))."</td>";
					echo "<td class='action'>";
						echo "<a href='".$this->Html->url('/sendMails/'.$row['UserContact']['id'].'/contact')."'><img src='".SITE_URL."usermgmt/img/mail-reply.png' border='0' alt='".__('Send Reply')."' title='".__('Send Reply')."'></a>";
					echo "</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan=7><br/><br/>".__('No Data')."</td></tr>";
			} ?>
		</tbody>
	</table>
</div>
<?php if(!empty($userContacts)) { echo $this->element('pagination', array("totolText" => __('Number of Enquiries'))); } ?>