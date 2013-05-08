
 <?php  $num = str_pad($deposit['Deposit']['id'], 8, '0', STR_PAD_LEFT); ?>

<h3>Deposit Transfer instructions</h3>

<p>Dear <?php echo $deposit['Deposit']['name']; ?>

<p>You will find link  transfer instruction sheet below , that contains all the information that require to make the payment to IKTrust.</p><p><?php echo $this->Html->link(__('Payment Instruction'), array('action' => 'view_deposit', $enid )); ?></p><p> Please print this out and send it to your bank for processing. </p>

<p>Please find below details of your transaction.</p>
 
 <table>
	<tr>
		<td>DEPOSIT ID</td> 
		<td>: DP/IK# <? echo $num; ?></td>
	</tr>
	<tr>
		<td>TRANSACTION TYPE</td> 
		<td>:	deposit					</td>
	</tr>
	<tr>
		<td>PAYMENT METHOD</td>
		<td>:	Bank Transfer</td>
	</tr>
	<tr>
		<td>USER NUMBER (LOGIN)</td>
		<td>:	 <?php echo $deposit['Deposit']['mt4_user_LOGIN']; ?></td>
	</tr>
	<tr>
		<td>CLIENT'S NAME</td>
		<td>:	  <?php echo $deposit['Deposit']['name']; ?></td>
	</tr>
	<tr>
		<td>TRANSACTION DATE</td>
		<td>:	 <?php echo $deposit['Deposit']['created']; ?></td>
	</tr>
	
	<tr>
		<td>AMOUNT CREDITED</td>
		<td>:	 <?php echo $deposit['Deposit']['amount']; ?></td>
	</tr>
	<tr>
		<td>CURRENCY</td>
		<td>:	 <?php echo $deposit['Ecurr']['name'] ; ?></td>
	</tr>
	
	
</table>

<p>If you require any clarification, please do not hesitate to contact us at support@iktrust.com </p>

<p>Kind Regards,</p>

<p>IKTrust Customer Service </p>
