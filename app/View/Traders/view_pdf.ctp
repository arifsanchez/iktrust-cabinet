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


// create some HTML content
$htmlcontent = <<<EOF
<!DOCTYPE html>
<html>
	<h1>IKTRUST logo</h1>
	<body>
	
		<h2>TRANSFER INSTRUCTION</h2>
	
		<p>
			<table border="0">
			  <tr>
				<th>
					<p>
						<b>Full Name 				: </b> $name<br>
						<b>Bank Name		 	:</b> $userbank<br>
						<b>Payment Detail		 			:</b> $login <br>
						<b>Amount	:</b> $amount	<br>
						<b>Currency	:</b> $currency<br>
						
					</p>
				</th>
			  </tr>
			</table> 
		</p>
		<hr>
		Note : <small><b>This copy is computer generated and no signature is required.</b></small>
	</body>
</html>
EOF;
 
// output the HTML content
$tcpdf->writeHTML($htmlcontent, true, 0, true, 0);
$tcpdf->Output('invoice.pdf', 'D');

?>