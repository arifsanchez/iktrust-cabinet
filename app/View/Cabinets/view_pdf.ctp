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


		$name 	= $user['User']['username'];
		$email 	= $user['User']['email'];

		$depo 	= $acctypes['UserAcctypes']['type'];

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


// create some HTML content
$htmlcontent = <<<EOF
<!DOCTYPE html>
<html>
		
	<body>
	
		<h2>IK Trust Application Form</h2>
	
		<p>
			<table border="0">
			  <tr>
				<th width="50%"><a href="http://www.iktrust-traders.com/"><img src="http://www.iktrust-traders.com/img/inner/logo.png" width="150" height="50" border="0"></a></th>
				
				<th width="20%">
					<p>
						<b>Full Name 		 		</b><br>
						<b>Date Of Birth			</b><br>
						<b>Gender					</b><br>
						<b>Passport / I.C No 	</b> <br>
						<b>Contact Email 		</b><br>
						<b>Mobile Number 		</b> 
					</p>
				</th>
				
				<th width="2%">
					<p>
						<b>: </b><br>
						<b>: </b><br>
						<b>: </b><br>
						<b>: </b><br>
						<b>: </b><br>
						<b>: </b>
					</p>
				</th>
				
				<th>
					<p>
						$name<br>
						$dob<br>
						$gent<br>
						$ic	<br>
						$email<br>
						$ContactNo
					</p>
				</th>
			  </tr>
			</table> 
		</p>

		<hr>

		<p>
			<table border="0">
			  <tr>
				<th width="25%">	
					<p align="right">
						Individual Account Type			:
					</p>
				
					<p align="right">
						Name of Bank					 	:
					</p>
					
					<p align="right">
						Bank Account Number 			:
					</p>
						
					<p align="right">
						Bank Account Name 				:
					</p>
					
					<p align="right">
						IBAN Number 						:
					</p>
				
					<p align="right">
						SWIFT Number						:
					</p>
					
					<p align="right">
						E-Currency Provider Name 	:
					</p>
					
					<p align="right">
						E-Currency Account Number 	:
					</p>
					
					<p align="right">
						E-Currency Account Name 	:
					</p>
				</th>
			
			
				<th>
					<p>
						<strong>$depo</strong>
					</p>
					
					<p>
						<strong>$NBank </strong>
					</p>
					
					<p>
						<strong>$AccNo</strong>
					</p>

					<p>
						<strong>$AccName</strong>
					</p>
					
					<p>
						<strong>$IBAN</strong>
					</p>
					
					<p>
						<strong>$SwNo</strong>
					</p>
				
					<p>
						<strong>$EName </strong>
					</p>
					
					<p>
						<strong>$EAccNo</strong>
					</p>
					
					<p>
						<strong>$EAccName</strong>
					</p>
				</th>
			  </tr>
			</table> 
		</p>
		
		<hr>

		<p>
			<table border="0">
				<tr>
					<th>	
						<p>
							Account Holder Name<br>
							<strong>$name</strong>
						</p>
					
						<p>
							Passport/IC Number<br>
							<strong>$ic</strong>
						</p>
						
						<p>
							Date Of Signature<br>
							<br>
							<br>
							------------------------------------------------
						</p>
						
						<br>
						<p>
							( SIGNATURE SPECIMEN ) <br>
							<br>
							<br>
							<br>
							<br>
							-----------------------------------------------
						</p>

						<p>
							<strong>
								<I> I, Hereby offer to open a trading account with IK TRUST on the terms set out in the various official released documents that constitute this Account Opening Application Form.</I>
							</strong>
						</p>
						
						<p>
							<strong>
								<I>I, understand that if IK TRUST accepts my application to use its services, it will confirm acceptance by issuing me with written confirmation either by post, email or other electronic means, using the details contained in the relevant Particulars section of the IK Trust Individual Account Opening Application Form.</i>
							</strong>
						</p>
					</th>
				</tr>
			</table>
		</p>

		Note : <small><b>This copy is computer generated and no signature is required.</b></small>
	
	</body>
</html>
EOF;
 
// output the HTML content
$tcpdf->writeHTML($htmlcontent, true, 0, true, 0);
$tcpdf->Output('filename.pdf', 'D');

?>