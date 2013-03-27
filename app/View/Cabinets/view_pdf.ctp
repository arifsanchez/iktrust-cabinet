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
	
	<p>
		<h2 align="center">IK Trust Application Form</h2>
	</p>
		
	<p>
		<table border="0">
		  <tr>
			<th>
				<p>
					<b>Full Name 			:</b> kak INtan senget<br>
					<b>Date Of Birth		 :</b> tahun gajah<br>
					<b>Passport / I.C No :</b> bukan warganegara malaysia<br>
					<b>Contact Email 	:</b> explicit_chunky@kakintan.bangladesh<br>
					<b>Mobile Number	 :</b> nak no mintak sendiri!
				</p>
			</th>
			
			<th align="right">	
				<p>
					photo owner<br>
					photo owner<br>
					photo owner<br>
				</p>
			</th>
		  </tr>
		</table> 
	</p>

	<hr>

	<p>
		<table border="0">
		  <tr>
			<th align="right">	
				<p>
					Individual Account Type :
				</p>
			
				<p>
					Name of Bank :
				</p>
				
				<p>
					Bank Account Number :
				</p>
					
				<p>
					Bank Account Name :
				</p>
				
				<p>
					E-Currency Provider Name :
				</p>
				
				<p>
					E-Currency Account Number :
				</p>
				
				<p>
					E-Currency Account Name :
				</p>
			</th>
			
			
			<th align="center">
				<p>
					<strong>VALUE</strong>
				</p>
				
				<p>
					<strong>VALUE</strong>
				</p>
				
				<p>
					<strong>VALUE</strong>
				</p>

				<p>
					<strong>VALUE</strong>
				</p>
				
				<p>
					<strong>VALUE</strong>
				</p>
				
				<p>
					<strong>VALUE</strong>
				</p>
				
				<p>
					<strong>VALUE</strong>
				</p>
			</th>
			
			<th align="left">
				<p>
					<strong>VALUE</strong>
				</p>
				
				<p>
					<strong>VALUE</strong>
				</p>
				
				<p>
					<strong>VALUE</strong>
				</p>

				<p>
					<strong>VALUE</strong>
				</p>
				
				<p>
					<strong>VALUE</strong>
				</p>
				
				<p>
					<strong>VALUE</strong>
				</p>
				
				<p>
					<strong>VALUE</strong>
				</p>
			</th>
		  </tr>
		</table> 
	</p>
	
	<hr>

	
	<p>
		<table border="0">
			<tr>
				<th align="left">	
					<p>
						Account Holder Name :<br>
						<strong>VALUE</strong>
					</p>
				
					<p>
						Passport/IC Number<br>
						<strong>VALUE</strong>
					</p>
					
					<p>
						Date Of Signature<br>
						<strong>Enter By User</strong>
					</p>
						
					<p>
						SIGNATURE SPECIMEN<br>
						----- field to sign here... -----
					</p>

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
				</th>
			</tr>
		</table>
	</p>

	Note : <b>This copy is computer generated and no signature is required.</b>   
	
</body>
</html>
EOF;
 
// output the HTML content
$tcpdf->writeHTML($htmlcontent, true, 0, true, 0);
$tcpdf->Output('filename.pdf', 'D');

?>