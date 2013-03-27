App::import('Vendor','tcpdf/tcpdf');

class XTCPDF extends TCPDF

{

var $xheadertext = 'PDF created using CakePHP and TCPDF';

var $xheadercolor = array(0,0,200);

var $xfootertext = 'Copyright © %d XXXXXXXXXXX. All rights reserved.';

var $xfooterfont = PDF_FONT_NAME_MAIN ;

var $xfooterfontsize = 8 ;

/* Change header text and font size as per your requirement in the above variable*******/

function Header()

{

list($r, $b, $g) = $this->xheadercolor;

$this->setY(10); // shouldn't be needed due to page margin, but helas, otherwise it's at the page top
$this->SetFillColor($r, $b, $g);

$this->SetTextColor(0 , 0, 0);

$this->Cell(0,20, '', 0,1,'C', 1);

$this->Text(15,26,$this->xheadertext );

}

function Footer()

{

$year = date('Y');

$footertext = sprintf($this->xfootertext, $year);

$this->SetY(-20);

$this->SetTextColor(0, 0, 0);

$this->SetFont($this->xfooterfont,'',$this->xfooterfontsize);

$this->Cell(0,8, $footertext,'T',1,'C');

}

}

?>