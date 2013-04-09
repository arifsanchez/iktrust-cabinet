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
<?php echo $this->Search->searchForm('UserSetting', array('legend' => 'Search', "updateDivId" => "updatePermissionIndex")); ?>
<?php echo $this->element('paginator', array("useAjax" => true, "updateDivId" => "updatePermissionIndex")); ?>
<div class="tableContainer">
	<table cellspacing="0" cellpadding="0" width="100%" border="0" class="umtable colored">
		<thead>
			<tr>
				<th><?php echo __('Sr. No.');?></th>
				<th><?php echo __('Setting Name');?></th>
				<th><?php echo __('Setting Value');?></th>
				<th style="width:75px;"><?php echo __('Action');?></th>
			</tr>
		</thead>
		<tbody>
	<?php   if(!empty($userSettings))   {
				$page = $this->request->params['paging']['UserSetting']['page'];
				$limit = $this->request->params['paging']['UserSetting']['limit'];
				$i=($page-1) * $limit;
				foreach ($userSettings as   $row) {
					$i++;
					echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".h($row['UserSetting']['name_public'])."</td>";
					echo "<td>";
					if ($row['UserSetting']['type']=='input') {
						echo h($row['UserSetting']['value']);
					} elseif($row['UserSetting']['type']=='checkbox') {
						if(!empty($row['UserSetting']['value'])) {
							echo __('Yes');
						} else {
							echo __('No');
						}
					}
					echo"</td>";
					echo "<td>";
						echo "<span class='icon'><a href='".$this->Html->url('/editSetting/'.$row['UserSetting']['id'].'/page:'.$page)."'><img src='".SITE_URL."usermgmt/img/edit.png' border='0' alt='".__('Edit')."' title='".__('Edit')."'></a></span>";
					echo "</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan=4><br/><br/>".__('No Data')."</td></tr>";
			} ?>
		</tbody>
	</table>
</div>
<?php if(!empty($userSettings)) { echo $this->element('pagination', array("totolText" => __('Number of Settings'))); } ?>