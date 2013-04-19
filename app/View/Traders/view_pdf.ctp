<?php

App::import('Vendor','tcpdf/tcpdf');
$tcpdf = new TCPDF();
$textfont = 'helvetica';
 
$tcpdf->SetAuthor("Julia Holland");
$tcpdf->SetAutoPageBreak(true);
 
$tcpdf->setPrintHeader(false);
$tcpdf->setPrintFooter(false);
 
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont,'',9);
 
$tcpdf->AddPage();

	//var
	$name = $deposit['Deposit']['name'];
	$userbank = $deposit['Deposit']['userbank'];
	$login = $deposit['Deposit']['mt4_user_LOGIN'];
	$amount = $deposit['Deposit']['amount'];
	$currency = $deposit['Ecurr']['name'];
	
	$bankname = $deposit['Ikbank']['bankname'];
	$address = $deposit['Ikbank']['address'];
	$acountname = $deposit['Ikbank']['name'];
	$iban = $deposit['Ikbank']['iban'];
	$accountno = $deposit['Ikbank']['no_account'];
	$swift = $deposit['Ikbank']['swift'];
	$sortcode = $deposit['Ikbank']['sortcode'];
	$currency = $deposit['Ikbank']['currency'];


// create some HTML content
$htmlcontent = <<<EOF
<!DOCTYPE html>
<html>
	
	<body>
	
		<center><h1>TRANSFER INSTRUCTION</h1></center>
		<center><h2>Depositor's Account Details</h2></center>
		<p>
			<table border="0">
			  <tr>
				<th>
					
						<td><b>FULL NAME  </td>				<td>:  $name</td>	
						<td><b>BANK NAME	</td>		 	<td>: $userbank</td>	
						<td><b>PAYMENT DETAILS		</td>	 			<td>: $login </td>	
						<td><b>AMOUNT	</td>			<td>: $amount	</td>	
						<td><b>CURRENCY </td>			<td>: $currency</td>	
						
					
				</th>
			  </tr>
			</table> 
		</p>
		<hr>
		<b>Note : </b>If client's account name is different that the Beneficiary name above ,then deposits will be made avaiable to trading accounts only in case of approved & authorized documents. 
		
		<center><h2>IKTrust - ELECTRONIC WIRE FUND TRANSFER DETAILS</h2></center>
	
		<p>
			<table border="0">
			  <tr>
				<th>
					<p>
						<b>BENEFICIARY BANK NAME			: </b> $bankname<br>
						<b>BANK ADDRESS		 	:</b> $address<br>
						<b>BENEFICIARY ACCOUNT NAME		 			:</b> $name <br>
						<b>IBAN	:</b> $iban	<br>
						<b>ACCOUNT NUMBER	:</b> $accountno<br>
						<b>SWIFT	:</b> $swift<br>
						<b>SORT CODE	:</b> $sortcode<br>
						<b>CURRENCY	:</b> $currency<br>
						
					</p>
				</th>
			  </tr>
			</table> 
		</p>
		<b>*** </b> Please print out this form if necessary to assist in the transfer of funds to your IKtrust trading account through your preferred bank transfer method.
		
		<br><br>
		
		<hr>
		<center> IKTrust Financial Service Ltd "http://www.iktrust.com" is authorised and regulated </center>
	</body>
</html>
EOF;
 
// output the HTML content
$tcpdf->writeHTML($htmlcontent, true, 0, true, 0);
$tcpdf->Output('invoice.pdf', 'D');

?>