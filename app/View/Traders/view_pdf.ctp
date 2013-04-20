<?php

App::import('Vendor','tcpdf/tcpdf');
$tcpdf = new TCPDF();
$textfont = 'helvetica';
 
$tcpdf->SetAuthor("Julia Holland");
$tcpdf->SetAutoPageBreak(true);
 
$tcpdf->setPrintHeader(false);
$tcpdf->setPrintFooter(false);
 
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont,'',12);
 
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
		<div><hr></div>
		<br/><br/>
		
			<table border="0">
				 <tr>
					<td>FULL NAME  </td>	
					<td>: $name</td>	
				</tr>
				<tr>
					<td>BANK NAME	</td>		 	
					<td>: $userbank</td>
				</tr>	
				<tr>
					<td>PAYMENT DETAILS</td>	 			
					<td>: $login </td>
				</tr>	
				<tr>
					<td>AMOUNT</td>			
					<td>: $amount	</td>
				</tr>	
				<tr>
					<td>CURRENCY </td>			
					<td>: $currency</td>	
				</tr>
			</table> 
		</p>
		<hr>
		<br/><br/>
		<b>Note : </b>If client's account name is different that the Beneficiary name above ,then deposits will be made avaiable to trading accounts only in case of approved & authorized documents. 
		
		<center><h2>IKTrust - ELECTRONIC WIRE FUND TRANSFER DETAILS</h2></center>
		<div><hr></div>
		<br/><br/>
		<p>
			<table border="0">
				<tr>
					<td> BENEFICIARY BANK NAME </td>
					<td>:  $bankname </td>
				</tr>
				<tr>
					<td> BANK ADDRESS </td>
					<td>:  $address</td>
				</tr>
				<tr>
					<td> BENEFICIARY ACCOUNT NAME </td>
					<td>:  $name </td>
				</tr>
				<tr>
					<td> IBAN	</td>
					<td>:  $iban	</td></tr>
				<tr>
					<td> ACCOUNT NUMBER	</td>
					<td>: $accountno</td>
				</tr>
				<tr>
					<td> SWIFT	</td>
					<td> $swift</td>
				</tr>
				<tr>
					<td> SORT CODE	</td>
					<td>: $sortcode</td>
				</tr>
				<tr>
					<td> CURRENCY	</td>
					<td>: $currency</td>
				</tr>
						
					
			</table> 
		</p>
		<div><hr></div>
		<br/><br/>
		<b>*** </b> Please print out this form if necessary to assist in the transfer of funds to your IK Trust trading account through your preferred bank transfer method.
		
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		
		<div><hr></div>
		<center>IK Trust Capital Market Corporation Limited . Secured & Trusted Regulated Broker .New Zealand Company Reg. No. 3851316  </center>
	</body>
</html>
EOF;
 
// output the HTML content
$tcpdf->writeHTML($htmlcontent, true, 0, true, 0);
$tcpdf->Output('invoice.pdf', 'D');

?>