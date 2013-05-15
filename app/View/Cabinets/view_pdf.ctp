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

		$id 			= $user['User']['id'];
		$name 			= $user['User']['username'];
		$email 			= $user['User']['email'];
		$create 		= $user['User']['created'];
		$type 			= $acctypes['UserAcctypes']['type'];
		$leverage 			= $acctypes['UserAcctypes']['leverage'];
		$NBank 		= $bank['UserBank']['name'];
		$AccNo 		= $bank['UserBank']['acc_no'];
		$AccName 	= $bank['UserBank']['acc_name'];
		$IBAN 			= $bank['UserBank']['iban_no'];
		$SwNo 		= $bank['UserBank']['swift_no'];
		$EName 		= $ecr['UserEcr']['pro_name'];
		$EAccNo 		= $ecr['UserEcr']['acc_name'];
		$EAccName	= $ecr['UserEcr']['acc_no'];
		$gent 			= $userD['UserDetail']['gender'];
		$dob 			= $userD['UserDetail']['bday'];
		$ic				= $userD['UserDetail']['ic'];
		$ContactNo	= $userD['UserDetail']['cellphone'];
		$pic				= $userD['UserDetail']['photo'];
		
		//digit formate for deposit id
		$num = str_pad($id, 8, '0', STR_PAD_LEFT);


$htmlcontent = <<<EOF
<!DOCTYPE html>
<html>
	<body>
		<table border="0">
			<tr>
				<td><strong><small><em>$create</em></small></strong></td>
				<td align="right"><strong><small><em>RG/IK#$num</em></small></strong></td>
			</tr>
		</table> 
		<br>
			<p align="center"><a href="http://www.iktrust-traders.com/"><img src="http://www.technocash.com/pages/images/IK_Trust_Capital_Market_Corp_Logo.jpg" width="230" height="40" /></a></p>
		<br><br>
		<div><br></div>
		<h2 align="center">TRADER APPLICATION FORM</h2>
		<br>

			<div><hr></div>
			<table border="0">
				 <tr>
					<td>Full Name </td>	
					<td>: $name</td>	
				</tr>
				<tr>
					<td>Date Of Birth	</td>		 	
					<td>: $dob</td>
				</tr>	
				<tr>
					<td>Gender	</td>			
					<td>: $gent	</td>
				</tr>	
				<tr>
					<td>Passport / Ic	</td>			
					<td>: $ic</td>	
				</tr>
				<tr>
					<td>Contact Email	</td>			
					<td>: $email</td>	
				</tr>
				<tr>
					<td>Mobile Number	</td>			
					<td>: $ContactNo</td>	
				</tr>
			</table> 
			<br>
		<hr>
		

			<table border="0">
				<h4>Account Details : </h4>
				<tr>
					<td> Individual Account Type </td>
					<td>:  $type </td>
				</tr>
				<tr>
					<td> Laverage </td>
					<td>:  1:$leverage </td>
				</tr>
				
				<div><br></div>

				<h4>Bank Details : </h4>
				<tr>
					<td> Bank Name </td>
					<td>:  $NBank</td>
				</tr>
				<tr>
					<td> Account Number </td>
					<td>:  $AccNo </td>
				</tr>
				<tr>
					<td> Account Name	</td>
					<td>:  $AccName	</td></tr>
				<tr>
					<td> IBAN Number	</td>
					<td>: $IBAN</td>
				</tr>
				<tr>
					<td> SWIFT	Number	</td>
					<td>: $SwNo</td>
				</tr>
				
				<div><br></div>

				<h4>E-Currency Details : </h4>
				<tr>
					<td>Provider Name	</td>
					<td>: $EName</td>
				</tr>
				<tr>
					<td>Account Number	</td>
					<td>: $EAccNo</td>
				</tr>
				<tr>
					<td>Account Name	</td>
					<td>: $EAccName</td>
				</tr>
			</table>

		<div><br></div>			
		<hr>
		<div><br></div>
		<p>
			<strong>
				I, Hereby offer to open a trading account with IK TRUST on the terms set out in the various official released documents that constitute this Account Opening Application Form.
			</strong>
		</p>
		
		<p>
			<strong>
				I, understand that if IK TRUST accepts my application to use its services, it will confirm acceptance by issuing me with written confirmation either by post, email or other electronic means, using the details contained in the relevant Particulars section of the IK Trust Individual Account Opening Application Form.
			</strong>
		</p>
		
		<div><br></div>
		<div><br></div>
		<div><br></div>
		<div><br></div>
		<div><br></div>
		<div><br></div>
		
		<table border="0">
			<tr>
				<td>Signature : ____________________</td>
				<td align="right">Date : ____________________ </td>
			</tr>
		</table>
		<br>
		<div><hr></div>
		<div align = "center"><small>IK Trust Capital Market Corporation Limited .</small></div>
	</body>
</html>
EOF;
 
// output the HTML content
$tcpdf->writeHTML($htmlcontent, true, 0, true, 0);
$tcpdf->Output('registration.pdf', 'D');

?>