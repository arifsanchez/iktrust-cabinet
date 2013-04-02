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

	foreach ($user as $user):
		$name 	= $user['User']['username'];
		$email 	= $user['User']['email'];
	endforeach; 

	foreach ($acctypes as $acctypes):
		$depo 	= $acctypes['UserAcctypes']['deposit'];
	endforeach; 

	foreach ($bank as $bank):
		$NBank 			= $bank['UserBank']['name'];
		$AccNo 			= $bank['UserBank']['acc_no'];
		$AccName 	= $bank['UserBank']['acc_name'];
		$IBAN 			= $bank['UserBank']['iban_no'];
		$SwNo 			= $bank['UserBank']['swift_no'];
	endforeach; 

	foreach ($ecr as $ecr):
		$EName 		= $ecr['UserEcr']['pro_name'];
		$EAccNo 		= $ecr['UserEcr']['acc_name'];
		$EAccName	= $ecr['UserEcr']['acc_no'];
	endforeach; 

	foreach ($userD as $userD):
		$gent 				= $userD['UserDetail']['gender'];
		$dob 				= $userD['UserDetail']['bday'];
		$ic					= $userD['UserDetail']['ic'];
		$ContactNo	= $userD['UserDetail']['cellphone'];
		$pic				= $userD['UserDetail']['photo'];
	endforeach; 


// create some HTML content
$htmlcontent = <<<EOF
<!DOCTYPE html>
<html>
	<h1>IKTRUST logo</h1>
	<body>
	
		<h2>IK Trust Application Form</h2>
	
		<p>
			<table border="0">
			  <tr>
				<th>
					<p>
						<b>Full Name 				: </b> $name<br>
						<b>Date Of Birth		 	:</b> $dob<br>
						<b>Gender		 			:</b> $gent<br>
						<b>Passport / I.C No 	:</b> $ic	<br>
						<b>Contact Email 		:</b> $email<br>
						<b>Mobile Number	 	:</b> $ContactNo
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
						Individual Account Type			:
					</p>
				
					<p>
						Name of Bank					 		:
					</p>
					
					<p>
						Bank Account Number 			:
					</p>
						
					<p>
						Bank Account Name 				:
					</p>
					
					<p>
						IBAN Number 							:
					</p>
				
					<p>
						SWIFT Number							:
					</p>
					
					<p>
						E-Currency Provider Name 	:
					</p>
					
					<p>
						E-Currency Account Number 	:
					</p>
					
					<p>
						E-Currency Account Name 		:
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
							<input type="text" name="age">
						</p>
						
						<p>
							SIGNATURE SPECIMEN<br>
							<textarea rows="4" cols="50"></textarea>
							-----------------------------------------------<br>
							-----------------------------------------------<br>
							----------<i> field to sign here... </i>----------<br>
							-----------------------------------------------<br>
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