<h3>Deposit Transfer instructions</h3>

<p>Dear <?php echo $deposit['Deposit']['name']; ?>

<p>You will find attached , a transfer instruction sheet that contains all the information of your bank require to make the payment to IKTrust.</p><p> Please print this out and send it to your bank for processing. </p>

<p>Please find below details of your transaction.</p>
 
 <table>
	<tr>
		<td>Deposit ID</td> 
		<td>: <?php echo $deposit['Deposit']['id']; ?></td>
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
		<td>:	  <?php echo $deposit['Deposit']['name']; ?> ?></td>
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
	<tr>
		<td>BENEFICIARY NAME</td>
		<td>:	</td>
	</tr>
	
</table>

<p>If you require any clarification, please do not hesitate to contact us at support@iktrust.com </p>

<p>Kind Regards,</p>

<p>IKTrust Customer Service </p>
