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

	


// create some HTML content
$htmlcontent = <<<EOF
<!DOCTYPE html>
<html>
	<h1>IKTRUST logo</h1>
	<body>
	<table border="0">
		<center><h1>TRANSFER INSTRUCTIONS</h1></center>
		<center><h3>Depositor's Account Details</h3></center>
			  <tr>
				<th>	
					<p>
						FULL  NAME		:
					</p>
					
				
					<p>
						BANK NAME				 		:
					</p>
					
					<p>
						PAYMENT DETAILS			: 
					</p>
						
					<p>
						AMOUNT 				:
					</p>
					
					<p>
						CURRENCY 							:
					</p>
				
					
				</th>
			
			
				<th>
					<p>
						<strong>name</strong>
					</p>
					
					<p>
						<strong>bankname </strong>
					</p>
					
					<p>
						<strong> PLATFORM ACCOUNT (LOGIN) NUMBER : loginid</strong>
					</p>

					<p>
						<strong>amount</strong>
					</p>
					
					<p>
						<strong>currency</strong>
					</p>
					
					
				</th>
			  </tr>
			<p>
			</table>
		

		<br><br>

		 <b>Note :</b> If client's account name is different than the Beneficiary name above ,<div>then deposits will be made available to trading accounts only in case of approved & authorized documents.</div></b>
		 
			<center><h2>IKTrust - ELECTRONIC  WIRE FUND TRANSFER DETAILS</h2></center>
	
	
		<table>
		<p>
			
			  <tr>
				<th>	
					<p>
						BENEFICIARY BANK 		:
					</p>
				
					<p>
						BANK NAME				 		:
					</p>
					
					<p>
						PAYMENT DETAILS			: 
					</p>
						
					<p>
						AMOUNT 				:
					</p>
					
					<p>
						CURRENCY 							:
					</p>
				
					
				</th>
			
			
				<th>
					<p>
						<strong>name</strong>
					</p>
					
					<p>
						<strong>bankname </strong>
					</p>
					
					<p>
						<strong> PLATFORM ACCOUNT (LOGIN) NUMBER : loginid</strong>
					</p>

					<p>
						<strong>amount</strong>
					</p>
					
					<p>
						<strong>currency</strong>
					</p>
					
					
				</th>
			  </tr>
			</table> 
		</p>
	</body>
</html>
EOF;
 
// output the HTML content
$tcpdf->writeHTML($htmlcontent, true, 0, true, 0);
$tcpdf->Output('filename.pdf', 'D');

?>