{*
	header.tpl

	phpRechnung - is easy-to-use Web-based multilingual accounting software.
	Copyright (C) 2001 - 2010 Edy Corak < edy at loenshotel dot de >

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
*}
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="expires" content="Sat, 01 Mar 2003 00:00:00 GMT" />
<meta http-equiv="last-modified" content="{$smarty.now|date_format:"%a, %d %b %Y %H:%M:%S GMT"}" />
<meta http-equiv="cache-control" content="no-store, no-cache, must-revalidate" />
<meta http-equiv="cache-control" content="post-check=0, pre-check=0" />
<meta http-equiv="pragma" content="no-cache" />
<meta name="author" content="Edy Corak" />
<title>S&F - {$Title}</title>
<link rel="stylesheet" type="text/css" href="{$Web}/include/phprechnung.css" title="phpRechnung Modern Style" media="print,screen" />
<link rel="icon" href="{$Web}/images/favicon.png" type="image/png" />
<!-- jQuery und jQuery UI für Datepicker -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
{literal}
<script>
$(document).ready(function() {
	// Datepicker für alle Datumsfelder
	// Identifiziere Datumsfelder anhand ihrer Namen
	var dateFieldNames = [
		'DateFrom', 'DateTill', 'DateFrom1', 'DateTill1',
		'Date_From1', 'Date_Till1', 'DateFrom_1', 'DateTill_1',
		'InvoiceDate', 'OfferDate', 'PaymentDate', 'AchievedDate',
		'MethodOfPaymentDate', 'Birthday', 'cashbookdate'
	];
	
	// Füge Datepicker zu allen Feldern mit den genannten Namen hinzu
	dateFieldNames.forEach(function(fieldName) {
		$('input[name="' + fieldName + '"]').datepicker({
			dateFormat: 'dd.mm.yy',
			changeMonth: true,
			changeYear: true,
			yearRange: '1900:2100',
			showButtonPanel: true,
			showOtherMonths: true,
			selectOtherMonths: true,
			dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
			monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 
			             'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
			monthNamesShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 
			                  'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
			firstDay: 1, // Woche beginnt am Montag
			showWeek: true,
			weekHeader: 'KW'
		});
	});
	
	// Zusätzlich: Alle input[type="text"] mit "date" oder "datum" im title/placeholder
	$('input[type="text"]').each(function() {
		var title = $(this).attr('title') || '';
		var placeholder = $(this).attr('placeholder') || '';
		var name = $(this).attr('name') || '';
		
		if ((title.toLowerCase().indexOf('datum') >= 0 || 
		     title.toLowerCase().indexOf('date') >= 0 ||
		     placeholder.toLowerCase().indexOf('datum') >= 0 || 
		     placeholder.toLowerCase().indexOf('date') >= 0 ||
		     name.toLowerCase().indexOf('date') >= 0 ||
		     name.toLowerCase().indexOf('datum') >= 0) &&
		    !$(this).hasClass('hasDatepicker')) {
			$(this).datepicker({
				dateFormat: 'dd.mm.yy',
				changeMonth: true,
				changeYear: true,
				yearRange: '1900:2100',
				showButtonPanel: true,
				showOtherMonths: true,
				selectOtherMonths: true,
				dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
				monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 
				             'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
				monthNamesShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 
				                  'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
				firstDay: 1,
				showWeek: true,
				weekHeader: 'KW'
			});
		}
	});
});
</script>
{/literal}
</head>
