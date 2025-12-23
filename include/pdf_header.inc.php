<?php

/*
	pdf_header.inc.php

	phpRechnung - is easy-to-use Web-based multilingual accounting software.
	Copyright (C) 2001 - 2011 Edy Corak < edy at loenshotel dot de >

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

	global $a, $Type, $PrintCompanyData, $PrintPositionName, $Date, $CompanyLogo, $CompanyName,
		$CompanyAddress, $CompanyPostal, $CompanyCity, $CompanyCountry,
		$BankBIC, $BankIBAN, $BusinessTaxnr, $CompanyTaxnr, $PDFCompanyLogoHeight, $TaxFree,
		$PDFCompanyLogoWidth, $PDFFont, $PDFFontsize1, $PDFFontsize2, $PDFTypeHeight,
		$Print_Company_Name, $MYID, $TITLE, $PREFIX, $FIRSTNAME, $LASTNAME, $COMPANY,
		$ADDRESS, $POSTALCODE, $CITY, $COUNTRY, $METHOD_OF_PAY, $METHOD_OF_PAY_DATE,
		$status, $OFFER_STATUS, $PrintD, $invoiceID, $offerID, $creditID, $tmpOfferID, $tmpInvoiceID, $web, $AchievedDate;
		
  
  	// PDF-Template laden (aus branding.php Konfiguration)
  	if (PDF_TEMPLATE_ENABLED) {
  		$this->Image($web . PDF_TEMPLATE_IMAGE, PDF_TEMPLATE_X, PDF_TEMPLATE_Y, PDF_TEMPLATE_SCALE);
  	}
		
	$this->SetFont($PDFFont,'U',8);
	$this->SetY(51);
	
	
	$this->SetFont($PDFFont,'',$PDFFontsize2);
	if (!empty($COMPANY))
	{
		$this->Cell(9);
		$this->Cell(100,4,$COMPANY,0,1,'L');
	}
	if($Print_Company_Name == "1")
	{
		$this->Cell(9);
		$this->Cell(100,4,$PREFIX.' '.$TITLE.' '.$FIRSTNAME.' '.$LASTNAME,0,1,'L');
		
	}
	
	$this->Cell(9);
	$this->Cell(100,4,$ADDRESS,0,1,'L');
	$this->Cell(100,2,'',0,1,'L');
	$this->Cell(9);
	$this->Cell(100,4,$POSTALCODE.' '.$CITY,0,1,'L');

	if($CompanyCountry != $COUNTRY)
	{
		$this->Cell(9);
		$this->Cell(100,4,$COUNTRY,0,1,'L');
	}
	$this->SetFont($PDFFont,'',16);
	$this->SetY(90);
	$this->Cell(9);
	
	$this->Cell(100,4,$a['invoice'],0,1,'L');
	$this->SetFont($PDFFont,'',$PDFFontsize2);
	$this->SetY(85); 
		$this->Cell(115);
		
			// Verwende INVOICE_INITIALS aus branding.php wenn definiert, sonst Sprachdatei
			$invoiceInitials = defined('INVOICE_INITIALS') ? INVOICE_INITIALS : $a['invoice_initials'];
			$this->Cell(70,5,$a['invoice_number'].': '.$invoiceInitials.'-'.$PrintD.'-'.$invoiceID,0,0,'R');
		
	$this->SetY(90);
  $this->Cell(115);
	$this->Cell(70,5,$a['date_text'].': '.$Date,0,1,'R');
	
	// Leistungsdatum - konfigurierbar über branding.php
	if (PDF_SHOW_ACHIEVED_DATE) {
		$this->SetY(95);
		$this->Cell(115);
		$this->Cell(70,5,'Leistungsdatum: '.$AchievedDate,0,1,'R');
	}
	
	// Zahlungsfrist - konfigurierbar über branding.php
	if (PDF_SHOW_PAYMENT_DATE && !empty($METHOD_OF_PAY_DATE))
	{
		$this->SetY(100);
		$this->Cell(115);
		$this->Cell(70,5,$a['payment'].' '.$a['date_till'].' '.$METHOD_OF_PAY_DATE,0,1,'R');
	}
	$this->Ln(10);
	$this->SetFont($PDFFont,'B',$PDFFontsize2);
  $this->SetY(125);
	if ($Type == 'DeliveryNote')
	{
		if($PrintPositionName == "1")
		{
			$this->Cell(25,5,$a['position'],0,0,'L');
			$this->Cell(140,5,$a['pos_text'],0,0,'L');
			$this->Cell(30,5,$a['pos_quantity'],0,0,'R');
		}
		else
		{
			$this->Cell(165,5,$a['pos_text'],0,0,'L');
			$this->Cell(30,5,$a['pos_quantity'],0,0,'R');
		}
	}
	else
	{
		 $this->Cell(9);
		if($PrintPositionName == "1")
		{
			$this->Cell(30,5,$a['position'],0,0,'L');
			$this->Cell(71,5,$a['pos_text'],0,0,'L');
		}
		else
		{
			$this->Cell(110,5,$a['pos_text'],0,0,'L');
		}
		$this->Cell(20,5,$a['pos_quantity'],0,0,'R');
		$this->Cell(20,5,$a['pos_price'],0,0,'R');
		if($TaxFree == "1")
		{
			$this->Cell(35,5,$a['pos_amount'],0,0,'R');
		}
		else
		{
			//$this->Cell(15,5,$a['tax_short'],0,0,'C');
			$this->Cell(35,5,$a['pos_amount'],0,0,'R');
		}
	}
	$this->SetDrawColor(25,25,25);
  $this->Line(20, 130, 194, 130);
	$this->Ln();
?>
