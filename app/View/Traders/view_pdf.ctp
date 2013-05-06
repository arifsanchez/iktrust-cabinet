<?php

App::import('Vendor','tcpdf/tcpdf');
$tcpdf = new TCPDF();
$textfont = 'helvetica';
 
$tcpdf->SetAuthor("Julia Holland");
$tcpdf->SetAutoPageBreak(true);
 
$tcpdf->setPrintHeader(false);
$tcpdf->setPrintFooter(false);
 
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont,'',11);
 
$tcpdf->AddPage();

	//var
	$id = $deposit['Deposit']['id'];
	$name = $deposit['Deposit']['name'];
	$userbank = $deposit['Deposit']['userbank'];
	$login = $deposit['Deposit']['mt4_user_LOGIN'];
	$amount = $deposit['Deposit']['amount'];
	$currency = $deposit['Ecurr']['name'];
	$date = $deposit['Deposit']['created'];
	$bankname = $deposit['Ikbank']['bankname'];
	$address = $deposit['Ikbank']['address'];
	$acountname = $deposit['Ikbank']['name'];
	$iban = $deposit['Ikbank']['iban'];
	$accountno = $deposit['Ikbank']['no_account'];
	$swift = $deposit['Ikbank']['swift'];
	$sortcode = $deposit['Ikbank']['sortcode'];
	$currency = $deposit['Ikbank']['currency'];
	//digit formate for deposit id
	$num = str_pad($id, 8, '0', STR_PAD_LEFT);

// create some HTML content
$htmlcontent = <<<EOF
<!DOCTYPE html>
<html>
	<body>
		<p align="center"><a href="http://www.iktrust-traders.com/"><img src="http://www.iktrust-traders.com/img/inner/logo.png" width="240" height="39" border="0"></a></p>
		<br>
		 <h1 align="center">Depositor's Account Details</h1>
		 <div><br></div>
		 <table border="0">
			<tr>
				<td>Trader Account No : $login</td>
				<td align="right">DP/IK# $num</td>
			</tr>
		</table> 
		<p>
		<div><hr></div>
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
		<b>Note : </b><small>If client's account name is different that the Beneficiary name above ,then deposits will be made available to trading accounts only in case of approved & authorized documents. </small>
		
		<div><br></div>
		 <h2 align="center">IKTrust - Electronic Wire Fund Transfer Details</h2>
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
					<td>:  $acountname </td>
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
					<td>: $swift</td>
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
		<b>***</b><small> Please print out this form if necessary to assist in the transfer of funds to your IK Trust trading account through your preferred bank transfer method.</small>
		
		</br><br/><br/><br/><br/></br><br/><br/><br/><br/>
		<div align="right"> Date : $date </div>
		<div><hr></div>
		<div align = "center"><small>IK Trust Capital Market Corporation Limited . Secured & Trusted Regulated Broker .New Zealand Company Reg. No. 3851316  </small></div>
	</body>
</html>
EOF;
 
// output the HTML content
$tcpdf->writeHTML($htmlcontent, true, 0, true, 0);
$tcpdf->Output('invoice.pdf', 'D');

?>