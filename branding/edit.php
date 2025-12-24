<?php

/*
	branding/edit.php - Branding-Einstellungen bearbeiten

	phpRechnung - is easy-to-use Web-based multilingual accounting software.
	Copyright (C) 2001 - 2025 Edy Corak & Schlüter & Friends

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.
*/

require_once("../include/phprechnung.inc.php");
require_once("../include/smarty.inc.php");

CheckUser();
CheckAdminGroup1();
CheckSession();

// Titel setzen
$smarty->assign("Title", "Branding-Einstellungen bearbeiten");

// Aktuelle Werte aus branding.php lesen
$brandingFile = dirname(__DIR__) . '/branding.php';
$brandingContent = file_get_contents($brandingFile);

// Funktion zum Extrahieren von define-Werten
function getDefineValue($content, $constant) {
    if (preg_match("/define\('$constant',\s*'([^']*)'\)/", $content, $matches)) {
        return $matches[1];
    } elseif (preg_match("/define\('$constant',\s*\"([^\"]*)\"\)/", $content, $matches)) {
        return $matches[1];
    } elseif (preg_match("/define\('$constant',\s*(true|false)\)/i", $content, $matches)) {
        return strtolower($matches[1]) === 'true' ? '1' : '0';
    } elseif (preg_match("/define\('$constant',\s*([0-9]+)\)/", $content, $matches)) {
        return $matches[1];
    }
    return '';
}

// Firmen-Branding
$smarty->assign("D_Company_Name", getDefineValue($brandingContent, 'BRANDING_COMPANY_NAME'));
$smarty->assign("D_App_Name", getDefineValue($brandingContent, 'BRANDING_APP_NAME'));
$smarty->assign("D_Logo_Path", getDefineValue($brandingContent, 'BRANDING_LOGO_PATH'));
$smarty->assign("D_Logo_Max_Height", getDefineValue($brandingContent, 'BRANDING_LOGO_MAX_HEIGHT'));

// Farbschema
$smarty->assign("D_Color_Primary", getDefineValue($brandingContent, 'BRANDING_COLOR_PRIMARY'));
$smarty->assign("D_Color_Primary_Hover", getDefineValue($brandingContent, 'BRANDING_COLOR_PRIMARY_HOVER'));
$smarty->assign("D_Color_Secondary", getDefineValue($brandingContent, 'BRANDING_COLOR_SECONDARY'));

// UI-Farben
$smarty->assign("D_Color_Text_Dark", getDefineValue($brandingContent, 'BRANDING_COLOR_TEXT_DARK'));
$smarty->assign("D_Color_Background", getDefineValue($brandingContent, 'BRANDING_COLOR_BACKGROUND'));
$smarty->assign("D_Color_Success", getDefineValue($brandingContent, 'BRANDING_COLOR_SUCCESS'));
$smarty->assign("D_Color_Error", getDefineValue($brandingContent, 'BRANDING_COLOR_ERROR'));

// Layout
$smarty->assign("D_Menubar_Width", getDefineValue($brandingContent, 'BRANDING_MENUBAR_WIDTH'));
$smarty->assign("D_Footer_Text", getDefineValue($brandingContent, 'BRANDING_FOOTER_TEXT'));
$smarty->assign("D_Version", getDefineValue($brandingContent, 'BRANDING_VERSION'));

// System-Pfade
$smarty->assign("D_Web_URL", getDefineValue($brandingContent, 'SYSTEM_WEB_URL'));

// PDF-Einstellungen
$smarty->assign("D_PDF_Template_Enabled", getDefineValue($brandingContent, 'PDF_TEMPLATE_ENABLED'));
$smarty->assign("D_PDF_Show_Achieved_Date", getDefineValue($brandingContent, 'PDF_SHOW_ACHIEVED_DATE'));
$smarty->assign("D_PDF_Show_Payment_Date", getDefineValue($brandingContent, 'PDF_SHOW_PAYMENT_DATE'));
$smarty->assign("D_PDF_Filename_Prefix", getDefineValue($brandingContent, 'PDF_FILENAME_PREFIX'));

// Rechnungsnummer-Kürzel
$smarty->assign("D_Invoice_Initials", getDefineValue($brandingContent, 'INVOICE_INITIALS'));
$smarty->assign("D_Delivery_Note_Initials", getDefineValue($brandingContent, 'DELIVERY_NOTE_INITIALS'));
$smarty->assign("D_Offer_Initials", getDefineValue($brandingContent, 'OFFER_INITIALS'));
$smarty->assign("D_Order_Initials", getDefineValue($brandingContent, 'ORDER_INITIALS'));

// Labels
$smarty->assign("Company_Name", "Firmenname");
$smarty->assign("App_Name", "Anwendungsname");
$smarty->assign("Logo_Path", "Logo-Pfad");
$smarty->assign("Logo_Max_Height", "Logo Max. Höhe");
$smarty->assign("Color_Primary", "Hauptfarbe");
$smarty->assign("Color_Primary_Hover", "Hauptfarbe (Hover)");
$smarty->assign("Color_Secondary", "Sekundärfarbe");
$smarty->assign("Color_Text_Dark", "Textfarbe (Dunkel)");
$smarty->assign("Color_Background", "Hintergrundfarbe");
$smarty->assign("Color_Success", "Erfolgsfarbe");
$smarty->assign("Color_Error", "Fehlerfarbe");
$smarty->assign("Menubar_Width", "Menüleisten-Breite");
$smarty->assign("Footer_Text", "Footer-Text");
$smarty->assign("Version", "Version");
$smarty->assign("Web_URL", "Web-URL");
$smarty->assign("PDF_Template_Enabled", "PDF-Template aktiviert");
$smarty->assign("PDF_Show_Achieved_Date", "Leistungsdatum anzeigen");
$smarty->assign("PDF_Show_Payment_Date", "Zahlungsfrist anzeigen");
$smarty->assign("PDF_Filename_Prefix", "PDF-Dateiname Präfix");
$smarty->assign("Invoice_Initials", "Rechnungs-Kürzel");
$smarty->assign("Delivery_Note_Initials", "Lieferschein-Kürzel");
$smarty->assign("Offer_Initials", "Angebots-Kürzel");
$smarty->assign("Order_Initials", "Bestell-Kürzel");

// Ja/Nein Auswahl
$smarty->assign("choice_yes_no", array(
    array("0", "Nein"),
    array("1", "Ja")
));

$smarty->display('branding/edit.tpl');

?>
