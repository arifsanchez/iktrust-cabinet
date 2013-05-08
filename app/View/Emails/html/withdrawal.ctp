
 <?php  
	$num = str_pad($withdrawal['Withdrawal']['id'], 8, '0', STR_PAD_LEFT); 
	$pid  = base64_encode($withdrawal['Withdrawal']['id']);
	$link = Router::url("/traders/withdrawal_pdf/$pid",true);
	$link2 = Router::url("/traders/upload/$pid",true);
?>

<h3>Withdrawal Transfer instructions</h3>

<p>Dear <?php echo $withdrawal['Withdrawal']['name']; ?>

<p>You will find link  withdrawal details below , that contains all the information about withdrawal from IKTrust.</p><p><?php echo $link ; ?></p><p> Please print this out and certified , then upload to  <?php echo $link2 ; ?> </p>

<p>Please find below details of your transaction.</p>
 
 <table>
	<tr>
		<td>WITHDRAWAL ID</td> 
		<td>: WD/IK# <? echo $num; ?></td>
	</tr>
	<tr>
		<td>TRANSACTION TYPE</td> 
		<td>:	Withdrawal					</td>
	</tr>
	<tr>
		<td>PAYMENT METHOD</td>
		<td>:	Bank Transfer</td>
	</tr>
	<tr>
		<td>USER NUMBER (LOGIN)</td>
		<td>:	 <?php echo $withdrawal['Withdrawal']['mt4_user_LOGIN']; ?></td>
	</tr>
	<tr>
		<td>CLIENT'S NAME</td>
		<td>:	  <?php echo $withdrawal['Withdrawal']['name']; ?></td>
	</tr>
	<tr>
		<td>TRANSACTION DATE</td>
		<td>:	 <?php echo $withdrawal['Withdrawal']['created']; ?></td>
	</tr>
	
	<tr>
		<td>AMOUNT CREDITED</td>
		<td>:	 <?php echo $withdrawal['Withdrawal']['amount']; ?></td>
	</tr>
	<tr>
		<td>CURRENCY</td>
		<td>:	$ </td>
	</tr>
	
	
</table>

<p>If you require any clarification, please do not hesitate to contact us at support@iktrust.com </p>

<p>Kind Regards,</p>

<p>IKTrust Customer Service </p>
