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
		$name = $withdrawal['Withdrawal']['name'];
		$a = $ic['UserDetail']['ic'];
		//$userbank = $withdrawal['Withdrawal']['userbank'];
		$login = $withdrawal['Withdrawal']['mt4_user_LOGIN'];
		$amount = $withdrawal['Withdrawal']['amount'];
		//$currency = $withdrawal['Ecurr']['name'];
		$id = $withdrawal['Withdrawal']['id'];	
		$date = $withdrawal['Withdrawal']['created'];
		$bankname = $withdrawal['UserBank']['name'];
		//$address = $withdrawal['Ikbank']['address'];
		$acountname = $withdrawal['UserBank']['acc_name'];
		$iban = $withdrawal['UserBank']['iban_no'];
		$accountno = $withdrawal['UserBank']['acc_no'];
		$swift = $withdrawal['UserBank']['swift_no'];
		$phone= $withdrawal['Mt4User']['PHONE'];
		//$sortcode = $withdrawal['UserBank']['sortcode'];
		//$currency = $withdrawal['Ikbank']['currency'];
		$num = str_pad($id, 8, '0', STR_PAD_LEFT);

// create some HTML content
$htmlcontent = <<<EOF
<!DOCTYPE html>
<html>
	<body>
		<p align="center"><a href="http://www.iktrust-traders.com/"><img src="http://www.technocash.com/pages/images/IK_Trust_Capital_Market_Corp_Logo.jpg" width="230" height="40" /></a></p>
		 <h1 align="center">Client's Account Details</h1>
		 <table border="0">
			<tr>
				<td>Trader Account No : $login</td>
				<td align="right">WD/IK# $num</td>
			</tr>
		</table>
		<p>
		<hr>
		</p>
		</br>
			<table border="0">
				 <tr>
					<td>FULL NAME  </td>	
					<td>: $name </td>	
				</tr>
				<tr>
					<td>AMOUNT</td>			
					<td>:  $  $amount </td>
				</tr>	
				<tr>
					<td>PASSPORT/ NATIONAL ID</td>			
					<td>: $a </td>	
				</tr>
				<tr>
					<td>CONTACT NUMBER	</td>		 	
					<td>:  $phone  </td>
				</tr>	
			</table> 
			</p>
		<hr>
		<b>*** </b><small>I hereby confirms that all position opened have been closed upon submission of this forms. </small>
		<p><h2 align="center">IKTrust Client's- Wire Fund Transfer Details</h2></p>
		<hr>
		</br>
		<p>
			<table border="0">
				<tr>
					<td> BENEFICIARY BANK NAME </td>
					<td>:  $bankname </td>
				</tr>
				<tr>
					<td> BENEFICIARY ACCOUNT NAME </td>
					<td>:  $acountname </td>
				</tr>
				<tr>
					<td> ACCOUNT NUMBER	</td>
					<td>: $accountno</td>
				</tr>
				<tr>
					<td> IBAN	</td>
					<td>:  $iban	</td>
				</tr>
				<tr>
					<td> SWIFT	</td>
					<td>: $swift</td>
				</tr>
				<tr>
					<td> CURRENCY	</td>
					<td>: Currency </td>
				</tr>
			</table> 
			</p>
			<hr>
		<b>***</b><small> I hereby agreed and understand that all the information in these form are correct and admisable by the court of law.</small>
		<p><b>***</b><small> I agreed that withdrawal are subject to Terms & Conditions published on IK Trust official website (http://www.iktrust.com) and approval by IK Trust finance department.</small>
		
		</br><br/><br/><br/><br/></br><br/><br/><br/><br/><br/>
		<table border="0">
			<tr>
				<td>Signature</td>
				<td align="right">Request Date : $date</td>
			</tr>
		</table> 
		</br><br/><br/><br/>
		.....................................
		</br><br/><br/><br/>
		<hr>
		<div align = "center"><small>IK Trust Capital Market Corporation Limited .   </small></div>
	</body>
</html>
EOF;
 
// output the HTML content
$tcpdf->writeHTML($htmlcontent, true, 0, true, 0);
$tcpdf->Output('withdrawal.pdf', 'D');

?>