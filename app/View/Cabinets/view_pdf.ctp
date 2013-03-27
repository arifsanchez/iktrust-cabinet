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
$htmlcontent = 
					'<!DOCTYPE html>
					 <html lang = "en">
						
						<head>
							<meta charset="utf-8">
							<style>
								h2{ color: red; }
							</style>
						</head>
							
						<body>	
						
							<hr>
								<h1 align=center>IKTrust New Account Form</h1>
							<hr>

							<br>
							<br>
							<h2>Account Details</h2>
								<div><strong>Account Type	: </strong>'.$acc_type.'</div>
								<div>
									<strong>Notes : </strong>
									I hereby <strong>'.$chk1.'</strong> to be exempt from swaps on my account(s).
									I confirm that my only reason for requesting an Islamic swap free accounts
									is religiously motivated and not for speculation purposes.
								</div>

							<br>
							<h2>Client Details</h2>
								<div><strong>Full Name										:</strong>'.$name.'</div>
								<div><strong>Date of Birth (Ex. 20/02/1970)		:</strong>'.$dob.'</div>
								<div><strong>Passport / Identity Card Number	:</strong>'.$pic.'</div>
								<div><strong>Gender 											:</strong>'.$gender.'</div>
								<div><strong>Occupation / Carrer						:</strong>'.$occ.'</div>
								<div><strong>Mailing Address 								:</strong>'.$address.'</div>
								<div><strong>Authorized Contact Email 				:</strong>'.$Ace.'</div>
								<div><strong>Authorized Mobile Number 			:</strong>'.$Amn.'</div>

							<br>
							<h2>Bank Details</h2>
								<div><strong>Name Of Bank				:</strong>'.$NBank.'</div>
								<div><strong>Bank Account Number	:</strong>'.$AccNo.'</div>
								<div><strong>Bank Account Name 		:</strong>'.$AccName.'</div>
								<div><strong>* IBAN Number 				:</strong>'.$IBAN.'</div>
								<div><strong>* Swift Number 			:</strong>'.$SwNo.'</div>
								<div>
									<strong>Notes :</strong>										
									I hereby <strong>'.$chk2.'</strong> to allow only bank account
									registered above for funds withdrawal purposes.
								</div>
									
							<br>
							<h2>E-CURRENCY DETAILS *OPTIONAL</h2>
								<div><strong>E-Currency Provider Name 	:</strong>'.$EName.'</div>
								<div><strong>E-Currency Account Number 	:</strong>'.$EAccNo.'</div>
								<div><strong>E-Currency Account Name 	:</strong>'.$EAccName.'</div>
								<div>
									<strong>Notes :</strong>								
									I hereby <strong>'.$chk3.'</strong> to allow only bank account
									registeredabove for funds withdrawal purposes.
								</div>

							<br>
							<h2>REQUIRED ACCOUNT SUPPORTING DOCUMENTS</h2>
								<p>For each individual account registration, you must provide one item from list A and another item from list B below :</p>
								<div><strong>Proof Of Identity		:</strong>'.$sup_poi.'</div>
								<div><strong>Proof Of Residence 	:</strong>'.$sup_por.'</div>

							<br>
							<br>
							<hr>
							<h2>ACKNOWLEDGEMENTS</h2>
								<p>
									By signing this Individual Account Opening Application	Form, you agree and understand the following<br>acknowledgement :
								</p>
								<p><strong>|></strong>
									confirmed that you have read, understood and
									agree to be bound by the provisions of this Account
									Opening Application Form;
								</p>
								
								<p><strong>|></strong>
									confirmed that you have read, understood and agree
									to be bound by the IK TRUST Terms & Conditions
									which have been provided to you;
								</p>
								
								<p><strong>|></strong>
									confirmed that the information you have provided in
									this Account Opening Application Form is complete
									and accurate and you accept that your failure to
									provide accurate information may affect adversely
									IK Trust’s ability to access the <br>suitability of your
									chosen mandate against your personal and financial
									circumstances;
								</p>
								
								<p><strong>|></strong>
									authorise IK TRUST to rely on the instructions set
									out in the Account Opening Application Form;
								</p>
								
								<p><strong>|></strong>
									consent to IK TRUST’s order execution policy;
								</p>
								
								<p><strong>|></strong>
									consent to receipt of statements and other
									communications from IK TRUST by email;
								</p>
								
								<p><strong>|></strong>
									understand that if my account has been introduced
									by an introducing broker (IB), the IB may receive a
									commission / rebate from IK TRUST
								</p>
								
								<p><strong>|></strong>
									understand that by properly completing and signing
									the Account Opening Application Form, account
									opening are subject for IK TRUST management
									approval;
								</p>
								
								<p><strong>|></strong>
									understand the financial risks associated with
									leveraged foreign exchange and bullion trading,
									including the risk that you can lose more money than
									you deposit;
								</p>
								
								<p>
									<strong>
									Your use of the services will be treated as your informed
									acknowledgement that you have carefully read and
									are prepared to accept the provisions of this Account
									Opening Application Form and the Terms and Conditions
									regardless of whether or not you have returned a signed
									copy to us.
									</strong>
								</p>

								<br>
								<h2>AUTHORIZED SIGNATURE</h2>
								<div><strong>Main Account Holder Name 					:</strong>'.$AHName.'</div>
								<div><strong>Account Holder Passport / I.D Number	:</strong>'.$AHPass.'</div>
								<div><strong>Date Of Signature 									:</strong>'.$dos.'</div>
								<div><strong>SIGNATURE SPECIMEN</strong></div>
								<p>
									<div>......................................................</div>

									I, Hereby offer to open a trading account with IK TRUST on the terms set out in the various official released documents that constitute this Account 
									Opening Application Form.
								</p>
								
								<p>
									I, understand that if IK TRUST accepts my application to use its services, it will confirm acceptance by issuing me with written confirmation either by post, 
									email or other electronic means, using the details contained in the relevant Particulars section of the IK Trust Individual Account Opening Application Form.
								</p>
							
							<br>
							<hr>
								<p><strong>FOR IK TRUST OFFICE USAGE ONLY:</strong></p>
									<div>New Trading Account Number :</div>
									<div> Account Type :</div>
									<div>Master Password :</div>
							<hr>
						</body>
					 </html>';
 
// output the HTML content
$tcpdf->writeHTML($htmlcontent, true, 0, true, 0);
$tcpdf->Output('filename.pdf', 'D');

?>